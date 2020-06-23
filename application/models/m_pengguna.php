<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pengguna extends CI_Model {
	
	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}


	/**==============================================================================================
	 * UPDATE USER ACCOUNT
	 * The function loops through all POST data checking the 'Suspend' and 'Delete' checkboxes that have been checked, and updates/deletes the user accounts accordingly.
	**/

	public function update_account(){
		$this->load->library('form_validation');

		// Set validation rules.
		// The custom rule 'identity_available' can be found in '../libaries/MY_Form_validation.php'.
		$validation_rules = array(
			array('field' => 'update_first_name', 'label' => 'First Name', 'rules' => 'required'),
			array('field' => 'update_last_name', 'label' => 'Last Name', 'rules' => 'required'),
			array('field' => 'update_phone_number', 'label' => 'Phone Number', 'rules' => 'required'),
			array('field' => 'update_newsletter', 'label' => 'Newsletter', 'rules' => 'integer'),
			array('field' => 'update_email', 'label' => 'Email', 'rules' => 'required|valid_email|identity_available'),
			array('field' => 'update_username', 'label' => 'Username', 'rules' => 'min_length[4]|identity_available')
		);
		
		$this->form_validation->set_rules($validation_rules);
		
		// Run the validation.
		if ($this->form_validation->run())
		{
			// Note: This example requires that the user updates their email address via a separate page for verification purposes.

			// Get user id from session to use in the update function as a primary key.
			$user_id = $this->flexi_auth->get_user_id();
			
			// Get user profile data from input.
			// IMPORTANT NOTE: As we are updating multiple tables (The main user account and user profile tables), it is very important to pass the
			// primary key column and value in the $profile_data for any custom user tables being updated, otherwise, the function will not
			// be able to identify the correct custom data row.
			// In this example, the primary key column and value is 'upro_uacc_fk' => $user_id.
			$profile_data = array(
				'upro_uacc_fk' => $user_id,
				'upro_first_name' => $this->input->post('update_first_name'),
				'upro_last_name' => $this->input->post('update_last_name'),
				'upro_phone' => $this->input->post('update_phone_number'),
				'upro_newsletter' => $this->input->post('update_newsletter'),
				$this->flexi_auth->db_column('user_acc', 'email') => $this->input->post('update_email'),
				$this->flexi_auth->db_column('user_acc', 'username') => $this->input->post('update_username')
			);
			
			// If we were only updating profile data (i.e. no email or username included), we could use the 'update_custom_user_data()' function instead.
			$response = $this->flexi_auth->update_user($user_id, $profile_data);
			
			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());

			// Redirect user.
			($response) ? redirect('admin/dashboard') : redirect('admin/update_account');
		}
		else
		{		
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}

	function change_password()
	{
		$this->load->library('form_validation');

		// Set validation rules.
		// The custom rule 'validate_password' can be found in '../libaries/MY_Form_validation.php'.
		$validation_rules = array(
			array('field' => 'current_password', 'label' => 'Current Password', 'rules' => 'required'),
			array('field' => 'new_password', 'label' => 'New Password', 'rules' => 'required|validate_password|matches[confirm_new_password]'),
			array('field' => 'confirm_new_password', 'label' => 'Confirm Password', 'rules' => 'required')
		);
		
		$this->form_validation->set_rules($validation_rules);

		// Run the validation.
		if ($this->form_validation->run())
		{
			// Get password data from input.
			$identity = $this->flexi_auth->get_user_identity();
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password');			
			
			// Note: Changing a password will delete all 'Remember me' database sessions for the user, except their current session.
			$response = $this->flexi_auth->change_password($identity, $current_password, $new_password);
			
			// Save any public status or error messages (Whilst suppressing any admin messages) to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());

			// Redirect user.
			// Note: As an added layer of security, you may wish to email the user that their password has been updated.
			($response) ? redirect('admin/dashboard') : redirect('admin/change_password');
		}
		else
		{		
			// Set validation errors.
			$this->data['message'] = validation_errors('<p class="error_msg">', '</p>');
			
			return FALSE;
		}
	}

	public function reset_pass($identity,$default,$salt){
		// $identity = $this->input->post('identity');
		// $default = "polke";
		// $salt = $this->input->post('salt');
		$response = $this->flexi_auth->reset_pass($identity, $default, $salt);
		return $response;
	}

	public function update_user_accounts()
    {
		// If user has privileges, delete users.
		if ($this->flexi_auth->is_privileged('Delete Users')) 
		{
			if ($delete_users = $this->input->post('delete_user'))
			{
				foreach($delete_users as $user_id => $delete)
				{
					// Note: As the 'delete_user' input is a checkbox, it will only be present in the $_POST data if it has been checked,
					// therefore we don't need to check the submitted value.
					$this->flexi_auth->delete_user($user_id);
				}
			}
		}
			
		// Update User Suspension Status.
		// Suspending a user prevents them from logging into their account.
		if ($user_status = $this->input->post('suspend_status'))
		{
			// Get current statuses to check if submitted status has changed.
			$current_status = $this->input->post('current_status');
			
			foreach($user_status as $user_id => $status)
			{
				if ($current_status[$user_id] != $status)
				{
					if ($status == 1)
					{
						$this->flexi_auth->update_user($user_id, array($this->flexi_auth->db_column('user_acc', 'suspend') => 1));
					}
					else
					{
						$this->flexi_auth->update_user($user_id, array($this->flexi_auth->db_column('user_acc', 'suspend') => 0));
					}
				}
			}
		}
		// Save any public or admin status or error messages to CI's flash session data.
		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
		// Redirect user.
		redirect('admin/manage_user_accounts');	
	}

	// NEW AJAX 
	public function user_account(){
		$this->db->join('user_groups','user_groups.ugrp_id=user_accounts.uacc_group_fk');
		$this->db->order_by('user_groups.ugrp_id','desc');
		$query = $this->db->get('user_accounts');
		return $query->result();
	}

	public function user_account_byid($id){
		$this->db->where('uacc_id',$id);
		$query = $this->db->get('user_accounts');
		$hasil = $query->row();
		return $hasil->uacc_suspend;
	}
	public function databeberapaakunrow($a){
		$this->db->from('dtuser');
		$this->db->where('uacc_id',$a);
		$query = $this->db->get();
		return $query->row();
	}

	// FIX
	public function databeberapaakun($a){
		$this->db->from('dtuser');
		$this->db->where_in('uacc_id',$a);
		$this->db->order_by('ugrp_id','desc');
		$query = $this->db->get();
		return $query->result();
	}
	// FIX
	public function hapusselecteduser($id){
		$this->db->delete('user_accounts', array('uacc_id' => $id)); 
		$this->db->delete('demo_user_profiles', array('upro_uacc_fk' => $id)); 
	}

	public function databeberapagrup($a){
		$this->db->from('user_groups');
		$this->db->where_in('ugrp_id',$a);
		$query = $this->db->get();
		return $query->result();
	}

	public function blockakun($id,$stat){
		if ($stat == 0){
			$this->flexi_auth->update_user($id, array($this->flexi_auth->db_column('user_acc', 'suspend') => 1));
		} else {
			$this->flexi_auth->update_user($id, array($this->flexi_auth->db_column('user_acc', 'suspend') => 0));
		}
	}

	public function deletegrup($id){
		$this->flexi_auth->delete_group($id);
	}

	public function perbaruiakun($user_id){
		$profile_data = array(
			'upro_first_name' => $this->input->post('first'),
			'upro_last_name' => $this->input->post('last'),
			'upro_phone' => $this->input->post('no')
		);
		$this->db->where('upro_uacc_fk',$user_id);
		$this->db->update('demo_user_profiles',$profile_data);
		$this->perbaruiprofile($user_id,$this->input->post('email'),$this->input->post('username'));
		return 1;
	}

	public function perbaruigrup($user_id){
		$profile_data = array(
			'ugrp_name' => $this->input->post('nama'),
			'ugrp_desc' => $this->input->post('desc'),
			'ugrp_admin' => $this->input->post('check')
		);
		$this->db->where('ugrp_id',$user_id);
		if($this->db->update('user_groups',$profile_data)){
			return 1;
		} else {
			return 0;
		}
	}

	public function perbaruiprofile($id,$mail,$username){
		$data = array(
			'uacc_email' => $mail,
			'uacc_username' => $username
		);
		$this->db->where('uacc_id',$id);
		$this->db->update('user_accounts',$data);
	}

	public function simpangrup(){
		$profile_data = array(
			'ugrp_name' => $this->input->post('nama'),
			'ugrp_desc' => $this->input->post('deskripsi'),
			'ugrp_admin' => $this->input->post('check')
		);
		if($this->db->insert('user_groups',$profile_data)){
			return 1;
		} else {
			return 0;
		}
	}

	/** ===========================================================================================
	 * GET USER ACCOUNT
	 * Gets a paginated list of users that can be filtered via the user search form, filtering by the users email and first and last names.
	**/
	function get_user_accounts()
	{
		// Select user data to be displayed.
		$sql_select = array(
			$this->flexi_auth->db_column('user_acc', 'id'),
			$this->flexi_auth->db_column('user_acc', 'username'),
			$this->flexi_auth->db_column('user_acc', 'suspend'),
			$this->flexi_auth->db_column('user_group', 'name'),
			'upro_first_name',
			'upro_last_name',
		);
		$this->flexi_auth->sql_select($sql_select);

		// For this example, prevent any 'Master Admin' users (User group id of 3) being listed to non 'Master Admin' users.
		if (! $this->flexi_auth->in_group('Master Admin'))
		{
			$sql_where[$this->flexi_auth->db_column('user_group', 'id').' !='] = 3;
			$this->flexi_auth->sql_where($sql_where);
		}	

		// Get url for any search query or pagination position.
		$uri = $this->uri->uri_to_assoc(3);

		// Set pagination limit, get current position and get total users.
		$limit = 10;
		$offset = (isset($uri['page'])) ? $uri['page'] : FALSE;		
		
		// Set SQL WHERE condition depending on whether a user search was submitted.
		if (array_key_exists('search', $uri))
		{
			// Set pagination url to include search query.
			$pagination_url = 'admin/manage_user_accounts/search/'.$uri['search'].'/';
			$config['uri_segment'] = 6; // Changing to 6 will select the 6th segment, example 'controller/function/search/query/page/10'.

			// Convert uri '-' back to ' ' spacing.
			$search_query = str_replace('-',' ',$uri['search']);
								
			// Get users and total row count for pagination.
			// Custom SQL SELECT, WHERE and LIMIT statements have been set above using the sql_select(), sql_where(), sql_limit() functions.
			// Using these functions means we only have to set them once for them to be used in future function calls.
			$total_users = $this->flexi_auth->search_users_query($search_query)->num_rows();			
			
			$this->flexi_auth->sql_limit($limit, $offset);
			$this->data['users'] = $this->flexi_auth->search_users_array($search_query);
		}
		else
		{
			// Set some defaults.
			$pagination_url = 'admin/manage_user_accounts/';
			$search_query = FALSE;
			$config['uri_segment'] = 4; // Changing to 4 will select the 4th segment, example 'controller/function/page/10'.
			
			// Get users and total row count for pagination.
			// Custom SQL SELECT and WHERE statements have been set above using the sql_select() and sql_where() functions.
			// Using these functions means we only have to set them once for them to be used in future function calls.
			$total_users = $this->flexi_auth->get_users_query()->num_rows();

			$this->flexi_auth->sql_limit($limit, $offset);
			$this->data['users'] = $this->flexi_auth->get_users_array();
		}
		
		// Create user record pagination.
		$this->load->library('pagination');	
		$config['base_url'] = base_url().$pagination_url.'page/';
		$config['total_rows'] = $total_users;
		$config['per_page'] = $limit; 
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config); 
		
		// Make search query and pagination data available to view.
		$this->data['search_query'] = $search_query; // Populates search input field in view.
		$this->data['pagination']['links'] = $this->pagination->create_links();
		$this->data['pagination']['total_users'] = $total_users;
	}

	function insert_user_group()
	{
		$this->load->library('form_validation');

		// Set validation rules.
		$validation_rules = array(
			array('field' => 'insert_group_name', 'label' => 'Group Name', 'rules' => 'required'),
			array('field' => 'insert_group_admin', 'label' => 'Admin Status', 'rules' => 'integer')
		);
		
		$this->form_validation->set_rules($validation_rules);
		
		if ($this->form_validation->run())
		{
			// Get user group data from input.
			$group_name = $this->input->post('insert_group_name');
			$group_desc = $this->input->post('insert_group_description');
			$group_admin = ($this->input->post('insert_group_admin')) ? 1 : 0;

			$this->flexi_auth->insert_group($group_name, $group_desc, $group_admin);
				
			// Save any public or admin status or error messages to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
			// Redirect user.
			redirect('admin/manage_user_groups');			
		}
	}

	/**
	 * update_user_group
	 * Updates a specific user group.
	 */
	function update_user_group($group_id)
	{
		$this->load->library('form_validation');

		// Set validation rules.
		$validation_rules = array(
			array('field' => 'update_group_name', 'label' => 'Group Name', 'rules' => 'required'),
			array('field' => 'update_group_admin', 'label' => 'Admin Status', 'rules' => 'integer')
		);
		
		$this->form_validation->set_rules($validation_rules);
		
		if ($this->form_validation->run())
		{
			// Get user group data from input.
			$data = array(
				$this->flexi_auth->db_column('user_group', 'name') => $this->input->post('update_group_name'),
				$this->flexi_auth->db_column('user_group', 'description') => $this->input->post('update_group_description'),
				$this->flexi_auth->db_column('user_group', 'admin') => $this->input->post('update_group_admin')
			);			

			$this->flexi_auth->update_group($group_id, $data);
				
			// Save any public or admin status or error messages to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
			// Redirect user.
			redirect('admin/manage_user_groups');			
		}
	}

	/**
	 * manage_privileges
	 * The function loops through all POST data checking the 'Delete' checkboxes that have been checked, and deletes the associated privileges.
	 */
    function manage_privileges()
    {
		// Delete privileges.
		if ($delete_privileges = $this->input->post('delete_privilege'))
		{
			foreach($delete_privileges as $privilege_id => $delete)
			{
				// Note: As the 'delete_privilege' input is a checkbox, it will only be present in the $_POST data if it has been checked,
				// therefore we don't need to check the submitted value.
				$this->flexi_auth->delete_privilege($privilege_id);
			}
		}

		// Save any public or admin status or error messages to CI's flash session data.
		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
		
		// Redirect user.
		redirect('admin/manage_privileges');			
	}

	/**
	 * insert_privilege
	 * Inserts a new privilege.
	 */
	function insert_privilege()
	{
		$this->load->library('form_validation');

		// Set validation rules.
		$validation_rules = array(
			array('field' => 'insert_privilege_name', 'label' => 'Privilege Name', 'rules' => 'required')
		);
		
		$this->form_validation->set_rules($validation_rules);
		
		if ($this->form_validation->run())
		{
			// Get privilege data from input.
			$privilege_name = $this->input->post('insert_privilege_name');
			$privilege_desc = $this->input->post('insert_privilege_description');

			$this->flexi_auth->insert_privilege($privilege_name, $privilege_desc);
				
			// Save any public or admin status or error messages to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
			// Redirect user.
			redirect('admin/manage_privileges');			
		}
	}

	/**
	 * update_privilege
	 * Updates a specific privilege.
	 */
	function update_privilege($privilege_id)
	{
		$this->load->library('form_validation');

		// Set validation rules.
		$validation_rules = array(
			array('field' => 'update_privilege_name', 'label' => 'Privilege Name', 'rules' => 'required')
		);
		
		$this->form_validation->set_rules($validation_rules);
		
		if ($this->form_validation->run())
		{
			// Get privilege data from input.
			$data = array(
				$this->flexi_auth->db_column('user_privileges', 'name') => $this->input->post('update_privilege_name'),
				$this->flexi_auth->db_column('user_privileges', 'description') => $this->input->post('update_privilege_description')
			);			

			$this->flexi_auth->update_privilege($privilege_id, $data);
				
			// Save any public or admin status or error messages to CI's flash session data.
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			
			// Redirect user.
			redirect('admin/manage_privileges');			
		}
	}

	/**
	 * update_user_privileges
	 * Updates the privileges for a specific user.
	 */
	function update_user_privileges($user_id)
    {
		// Update privileges.
		foreach($this->input->post('update') as $row)
		{
			if ($row['current_status'] != $row['new_status'])
			{
				// Insert new user privilege.
				if ($row['new_status'] == 1)
				{
					$this->flexi_auth->insert_privilege_user($user_id, $row['id']);	
				}
				// Delete existing user privilege.
				else
				{
					$sql_where = array(
						$this->flexi_auth->db_column('user_privilege_users', 'user_id') => $user_id,
						$this->flexi_auth->db_column('user_privilege_users', 'privilege_id') => $row['id']
					);
					
					$this->flexi_auth->delete_privilege_user($sql_where);
				}
			}
		}

		// Save any public or admin status or error messages to CI's flash session data.
		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
		
		// Redirect user.
		redirect('admin/manage_user_accounts');			
	}

	/**
	 * update_group_privileges
	 * Updates the privileges for a specific user group.
	 */
	function update_group_privileges($group_id)
    {
		// Update privileges.
		foreach($this->input->post('update') as $row)
		{
			if ($row['current_status'] != $row['new_status'])
			{
				// Insert new user privilege.
				if ($row['new_status'] == 1)
				{
					$this->flexi_auth->insert_user_group_privilege($group_id, $row['id']);	
				}
				// Delete existing user privilege.
				else
				{
					$sql_where = array(
						$this->flexi_auth->db_column('user_privilege_groups', 'group_id') => $group_id,
						$this->flexi_auth->db_column('user_privilege_groups', 'privilege_id') => $row['id']
					);
					
					$this->flexi_auth->delete_user_group_privilege($sql_where);
				}
			}
		}

		// Save any public or admin status or error messages to CI's flash session data.
		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
		
		// Redirect user.
		redirect('admin/manage_user_groups');			
    }

    /**
	 * delete_users
	 * Delete all user accounts that have not been activated X days since they were registered.
	 */
	function delete_users($inactive_days)
	{
		// Deleted accounts that have never been activated.
		$this->flexi_auth->delete_unactivated_users($inactive_days);

		// Save any public or admin status or error messages to CI's flash session data.
		$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
		
		// Redirect user.
		redirect('admin/manage_user_accounts');			
	}

	public function is_username(){
		$nama = $this->input->post('nama');
		$this->db->where('uacc_username',$nama);
		$query = $this->db->get('user_accounts');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}	

	public function store_new_account(){
		$group = $this->input->post('grup');
		$instant_activate = 1;
		$bidang = $this->input->post('sotk');
		$password = $this->input->post('password');
		$username = $this->input->post('nama1');
		$email = $username.'@'.'admin.com';
        $profile_data = array(
            'upro_first_name'=>$username
        );
        $response = $this->flexi_auth->insert_user($email, $username, $bidang, $password, $profile_data, $group, $instant_activate);
		
		if($response){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'User berhasil disimpan.'
			);
		} else {
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'User gagal disimpan.'
			);
		}
		echo json_encode($pesan);
	}	
	//===========================

	public function paginate_result($table,$like,$order,$offset,$limit){
		$this->db->order_by($order);
		$this->db->like($like);
		$data = $this->db->get($table,$limit,$offset);
		return $data->result();
	}

	public function paginate_numrows($table,$like){
		$this->db->like($like);
		$query = $this->db->get($table);
		return $query->num_rows();
	}

	// AKUN PENGGUNA/GRUP PENGGUNA
	public function get_lastid_group(){
		$this->db->limit(1);
		$this->db->order_by('ugrp_id','desc');
		$query = $this->db->get('user_groups');
		$id = $query->row();
		return $id->ugrp_id;
	}

	public function get_privilege(){
		$sql_select = array(
			$this->flexi_auth->db_column('user_privileges', 'id'),
			$this->flexi_auth->db_column('user_privileges', 'name'),
			$this->flexi_auth->db_column('user_privileges', 'description'),
			$this->flexi_auth->db_column('user_privileges', 'menu')
		);
		$this->data['privileges'] = $this->flexi_auth->get_privileges_array($sql_select);
	}

	public function store_new_grup(){
		$nama = $this->input->post('nama');
		$desc = $this->input->post('desc');
		$data = array(
			'ugrp_name' => $nama,
			'ugrp_desc' => $desc
		);
		if($this->db->insert('user_groups',$data)){
			$id_grup = $this->get_lastid_group();
			$this->get_privilege();
			foreach($this->data['privileges'] as $dt){
				$id = $this->input->post('isian'.$dt['upriv_id']);
				if($id){
					$dta = array(
						'upriv_groups_ugrp_fk' => $id_grup,
						'upriv_groups_upriv_fk' => $dt['upriv_id']
					);
					$this->db->insert('user_privilege_groups',$dta);
				}
				
			}
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil disimpan.'
			);
		} else {
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal disimpan.'
			);
		}
		echo json_encode($pesan);
	}

	public function is_grup(){
		$nama = $this->input->post('nama');
		$this->db->where('ugrp_name',$nama);
		$query = $this->db->get('user_groups');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}

	public function g_groupprivilege(){
		$id = $this->input->post('id');
		$query = $this->db->get('user_privileges');
		$hasil = $query->result();
		$arr = array();
		foreach($hasil as $data){
			$arr2 = array();
			$arr2['upriv_id'] = $data->upriv_id;
			$arr2['upriv_name'] = $data->upriv_name;
			$priv = $this->g_groupprivilege_byid($id,$data->upriv_id);
			if($priv){
				$arr2['status'] = 1;
			} else {
				$arr2['status'] = 0;
			}
			$arr2['upriv_group_id'] = @$priv->upriv_groups_id;
			$arr[] = (object)$arr2;
		}
		$this->data['privileges'] = $arr;
		$this->data['id'] = $id;
	}

	public function g_groupprivilege_byid($group,$priv){
		$this->db->where('user_privilege_groups.upriv_groups_ugrp_fk',$group);
		$this->db->where('user_privilege_groups.upriv_groups_upriv_fk',$priv);
		$this->db->join('user_privileges','user_privileges.upriv_id=user_privilege_groups.upriv_groups_upriv_fk');
		$query = $this->db->get('user_privilege_groups');
		return $query->row();
	}

	public function get_groups(){
		$id = $this->input->post('id');
		$this->db->where('ugrp_id',$id);
		$query = $this->db->get('user_groups');
		$this->data['group'] = $query->row();
	}

	public function get_groups_result(){
		$query = $this->db->get('user_groups');
		$this->data['grup'] = $query->result();
	}

	public function get_sotk_result(){
		$query = $this->db->get('bidang');
		$this->data['sotk'] = $query->result();
	}

	public function save_user_hakakses_grup(){
		$nama = $this->input->post('nama');
		$desc = $this->input->post('desc');
		$dt = array(
			'ugrp_name' => $nama,
			'ugrp_desc' => $desc
		);
		$id = $this->input->post('id');
		$this->db->where('ugrp_id',$id);
		$this->db->update('user_groups',$dt);
		$query = $this->db->get('user_privileges');
		$hasil = $query->result();
		$this->db->delete('user_privilege_groups',array('upriv_groups_ugrp_fk'=> $id));
		foreach($hasil as $data){
			$privgrup = $this->input->post('isian'.$data->upriv_id);
			if($privgrup){
				$data = array(
					'upriv_groups_ugrp_fk' => $id,
					'upriv_groups_upriv_fk' => $privgrup
				);
				$this->db->insert('user_privilege_groups',$data);
			}
		}
		$pesan = array(
			'jenis' => 'success',
			'title' => 'Tindakan Berhasil Dilakukan',
			'message' => 'Data Berhasil Diperbarui.'
		);
		echo json_encode($pesan);
	}

	public function checkisuser($ugrpid){
		$this->db->where('uacc_group_fk',$ugrpid);
		$query = $this->db->get('dtuser');
		$hsl = $query->num_rows();
		if($hsl >= 1){
			return 1;
		} else {
			return 0;
		}
	}

	public function hapusselectedgrup($id){
		$this->db->delete('user_groups', array('ugrp_id' => $id)); 
		$this->db->delete('user_privilege_groups', array('upriv_groups_ugrp_fk' => $id)); 
	}

	public function get_roles(){
		$id = $this->input->post('id');
		$this->db->where('upriv_id',$id);
		$query = $this->db->get('user_privileges');
		$this->data['role'] = $query->row();
	}

	public function is_role(){
		$nama = $this->input->post('nama');
		$this->db->where('upriv_name',$nama);
		$query = $this->db->get('user_privileges');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}

	public function store_new_role(){
		$nama = $this->input->post('nama');
		$desc = $this->input->post('desc');
		$menu = $this->input->post('menu');
		$data = array(
			'upriv_name' => $nama,
			'upriv_desc' => $desc,
			'is_menu' => $menu
		);
		if($this->db->insert('user_privileges',$data)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil disimpan.'
			);
		} else {
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal disimpan.'
			);
		}
		echo json_encode($pesan);
	}	

	public function update_role(){
		$nama = $this->input->post('nama');
		$desc = $this->input->post('desc');
		$menu = $this->input->post('menu');
		$dt = array(
			'upriv_name' => $nama,
			'upriv_desc' => $desc,
			'is_menu' => $menu
		);
		$id = $this->input->post('id');
		$this->db->where('upriv_id',$id);
		if($this->db->update('user_privileges',$dt)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil diperbarui.'
			);	
		} else {
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal diperbarui.'
			);	
		}
		echo json_encode($pesan);
	}

	public function databeberaparole($a){
		$this->db->from('user_privileges');
		$this->db->where_in('upriv_id',$a);
		$this->db->order_by('upriv_id','desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapusselectedrole($id){
		$this->db->delete('user_privileges', array('upriv_id' => $id)); 
	}
}
?>