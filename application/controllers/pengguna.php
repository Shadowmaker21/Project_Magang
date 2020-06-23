<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pengguna extends CI_Controller {
 
    function __construct() 
    {
        parent::__construct();
 		
		// To load the CI benchmark and memory usage profiler - set 1==1.
		if (1==2) 
		{
			$sections = array(
				'benchmarks' => TRUE, 'memory_usage' => TRUE, 
				'config' => FALSE, 'controller_info' => FALSE, 'get' => FALSE, 'post' => FALSE, 'queries' => FALSE, 
				'uri_string' => FALSE, 'http_headers' => FALSE, 'session_data' => FALSE
			); 
			$this->output->set_profiler_sections($sections);
			$this->output->enable_profiler(TRUE);
		}
		
		$this->load->database();
		$this->load->library('session');
 		$this->load->helper('url');
 		$this->load->helper('text');
 		$this->load->helper('form');

		$this->auth = new stdClass;

		$this->load->library('flexi_auth');	

		if (! $this->flexi_auth->is_logged_in_via_password()) 
		{
			// $this->flexi_auth->set_error_message('You must login as an pengguna to access this area.', TRUE);
			// $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			redirect('authenticate');
		}

		$this->data = null;		
		$this->data['menu'] = 'pengguna';
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
	}

	function change_password(){
		$this->load->view('pengguna/other/change_password_view', $this->data);
	}

	function update_new_password(){
		$identity = $this->input->post('id');
		$password = $this->input->post('news');
		$salt = $this->input->post('salt');
		$this->load->model('m_pengguna');
		$responses = $this->m_pengguna->reset_pass($identity,$password,$salt);
		if($responses==1){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Password berhasil diperbarui.'
			);	
		} else {
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Password gagal diperbarui.'
			);
		}
		echo json_encode($pesan);
	}

	function reset_pass(){
		$identity = $this->input->post('id');
		$default = 'polke';
		$salt = $this->input->post('salt');
		$this->load->model('m_pengguna');
		$responses = $this->m_pengguna->reset_pass($identity,$default,$salt);
		$messages = $this->flexi_auth->get_messages_array();
		if($messages['type'] == 'error'){
			$final['jenis'] = 'error';
			$final['title'] = 'Tindakan Gagal Dilakukan';
			$final['message'] = $messages['errors'];
		} else {
			$final['jenis'] = 'success';
			$final['title'] = 'Tindakan Berhasil Dilakukan';
			$final['message'] = $messages['status'];
		}
		echo json_encode($final);
	}
 	/**
 	 * dashboard (pengguna)
 	 * The public account dashboard page that acts as the landing page for newly logged in public users.
 	 * The dashboard provides links to some examples of the features available from the flexi auth library.  
 	 */

	function update_account()
	{
		// If 'Update Account' form has been submitted, update the user account details.
		$this->data['page'] = '';
		if ($this->input->post('update_account')) 
		{
			// $this->load->model('demo_auth_model');
			// $this->demo_auth_model->update_account();
			$this->load->model('m_pengguna');
			$this->m_pengguna->update_account();
		}
		
		// Get users current data.
		// This example does so via 'get_user_by_identity()', however, 'get_users()' using any other unqiue identifying column and value could also be used.
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();

		// Set any returned status/error messages.
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		
		$this->data['title'] = 'Perbarui Akun';
		$this->load->view('pengguna/other/account_update_view', $this->data);
	}
	// FIX
 	public function users(){
		$this->load->model('m_pengguna');
		$this->load->view('pengguna/akunpengguna/user_accounts_view', $this->data);		
    }
 	
 	// FIX
 	public function show_useraccounts(){
 		$username = $this->input->post('username');
 		$jum = $this->input->post('jum');
		$table = 'dtuser';
		$like = array('uacc_username'=> $username);
		$order = 'ugrp_id desc';
		$url = 'pengguna/akunpengguna/show_useraccounts';
		$this->paginate($table,$like,$order,'pengguna','show_useraccounts',$jum,$url);
 	}

 	// FIX
 	public function databeberapaakun(){
		$a = $this->input->post('data');
		$this->load->model('m_pengguna','ma');
		$this->data['hasil'] = $this->ma->databeberapaakun($a);
		$this->data['hapus'] = @implode(',',$a);
		$this->data['jenis'] = $this->input->post('jenis');
		$this->load->view('pengguna/akunpengguna/beberapaakun',$this->data);
	}

	// FIX
	public function hapusselecteduser(){
		$da = $this->input->post('data');
		$a = explode(',',$da);
		$this->load->model('m_pengguna','ma');
		$nodel=0;
		$jum=0;
		foreach($a as $data){
			$this->ma->hapusselecteduser($data);
		}
		$pesan = array(
			'jenis' => 'success',
			'title' => 'Tindakan berhasil Dilakukan',
			'message' => 'Data berhasil dihapus.'
		);	
		echo json_encode($pesan);
	}

	public function hapusselectedgrup(){
		$da = $this->input->post('data');
		$a = explode(',',$da);
		$this->load->model('m_pengguna','ma');
		$nodel=0;
		$jum=0;
		foreach($a as $data){
			$jum++;
			$b = $this->ma->checkisuser($data);
			if($b == 0){
				$this->ma->hapusselectedgrup($data);
			} else {
				$nodel++;
			}
		}
		if($nodel==0){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil dihapus.'
			);	
		} else {
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Belum Berhasil',
				'message' => $nodel.' dari '.$jum.' Data gagal dihapus karena masih memiliki user.'
			);	
		}
		echo json_encode($pesan);
	}

	public function databeberapagrup(){
		$a = $this->input->post('data');
		$this->load->model('m_pengguna','ma');
		$this->data['hasil'] = $this->ma->databeberapagrup($a);
		$this->data['hapus'] = @implode(',',$a);
		$this->load->view('pengguna/gruppengguna/beberapagrup',$this->data);
	}

	public function blockakunbyid(){
		$a = $this->input->post('data');
		$da = explode(',',$a);
		$this->load->model('m_pengguna','ma');
		foreach($da as $data){
			$stat = $this->ma->user_account_byid($data);
			$this->ma->blockakun($data,$stat);
		}
		$pesan = array(
			'jenis' => 'success',
			'title' => 'Tindakan Berhasil Dilakukan',
			'message' => 'Tindakan berhasil dilakukan.'
		);	
		echo json_encode($pesan);
	}

	public function deleteakunbyid(){
		$a = $this->input->post('a');
		$this->load->model('m_pengguna','ma');
		foreach($a as $data){
			$this->ma->deleteakun($data);
		}
		return 1;
	}

	public function deletegrupbyid(){
		$a = $this->input->post('a');
		$this->load->model('m_pengguna','ma');
		foreach($a as $data){
			$this->ma->deletegrup($data);
		}
		return 1;
	}

	public function edit_account(){
		$user_id = $this->input->post('id');
		$this->load->model('m_pengguna','ma');
		$this->data['user'] = $this->ma->databeberapaakunrow($user_id);
		$this->load->view('pengguna/akunpengguna/user_account_update_view', $this->data);
	}

	public function edit_grup(){
		$group_id = $this->input->post('id');
		$sql_where = array($this->flexi_auth->db_column('user_group', 'id') => $group_id);
		$this->data['group'] = $this->flexi_auth->get_groups_row_array(FALSE, $sql_where);
		$this->load->view('pengguna/gruppengguna/grup_update_view', $this->data);
	}

	public function perbaruiakun(){
		$id = $this->input->post('id');
		$this->load->model('m_pengguna');
		$hasil = $this->m_pengguna->perbaruiakun($id);
		echo json_encode($hasil);
	}

	public function perbaruigrup(){
		$id = $this->input->post('id');
		$this->load->model('m_pengguna');
		$hasil = $this->m_pengguna->perbaruigrup($id);
		echo json_encode($hasil);
	}

	public function groups()
    {
		$this->load->model('m_pengguna');

		$this->load->view('pengguna/gruppengguna/grup_view', $this->data);		
    }

    public function show_usergroups(){
    	$grup = $this->input->post('grup');
 		$jum = $this->input->post('jum');
		$table = 'user_groups';
		$like = array('ugrp_name'=> $grup);
		$order = 'ugrp_id desc';
		$url = 'pengguna/gruppengguna/show_user_groups';
		$this->paginate($table,$like,$order,'pengguna','show_usergroups',$jum,$url);
 	}

 	public function simpangrup(){
 		$this->load->model('m_pengguna');
		$hasil = $this->m_pengguna->simpangrup();
		echo json_encode($hasil);
 	}

	public function informasipengguna(){
		$this->load->view('pengguna/informasipengguna/index', $this->data);
	}

 	public function list_user_status(){
		$status = $this->input->post('a');
		$username = $this->input->post('username');
 		$jum = $this->input->post('jum');
		$table = 'dtuser';
		$like = array('uacc_username'=> $username, 'uacc_active' => $status);
		$order = 'uacc_id desc';
		$this->data['status'] = $status;
		$url = 'pengguna/informasipengguna/users_view';
		$this->paginate($table,$like,$order,'pengguna','list_user_status',$jum,$url);
	}

	public function new_delete_unactivated_users()
	{
		// Check user has privileges to view user accounts, else display a message to notify the user they do not have valid privileges.
		if (! $this->flexi_auth->is_privileged('View Users'))
		{
			$this->session->set_flashdata('message', '<p class="error_mag">You do not have privileges to view user accounts.</p>');
			redirect('pengguna');		
		}

		// Filter accounts old than set number of days.
		$inactive_days = 28;
	
		// If 'Delete Unactivated Users' form has been submitted and user has privileges to delete users.
		if ($this->input->post('delete_unactivated') && $this->flexi_auth->is_privileged('Delete Users'))
		{
			$this->load->model('m_pengguna');
			$this->m_pengguna->delete_users($inactive_days);
		}

		// Get an array of all user accounts that have not been activated within the defined limit ($inactive_days), using the sql select and where statements defined below.
		// Note: The columns defined using the 'db_column()' functions are native table columns to the auth library. 
		// Read more on 'db_column()' functions in the quick help section near the top of this controller. 
		$sql_select = array(
			$this->flexi_auth->db_column('user_acc', 'id'),
			$this->flexi_auth->db_column('user_acc', 'email'),
			$this->flexi_auth->db_column('user_acc', 'active'),
			$this->flexi_auth->db_column('user_group', 'name'),
			// The following columns are located in the demo example 'demo_user_profiles' table, which is not required by the library.
			'upro_first_name',
			'upro_last_name'
		);
		$this->data['users'] = $this->flexi_auth->get_unactivated_users_array($inactive_days, $sql_select);
				
		$this->load->view('pengguna/other/list_unactivated', $this->data);
	}

 	public function paginate($table,$like,$order,$folder,$file,$jum,$url){
		$this->load->model('m_pengguna','ma');
		if($jum){
			$limit=$jum;
		} else {
			$limit = 12;
		}
		$offset = $this->uri->segment(3);
		if(!$offset){
			$offset = 0;
		}
		$this->data[$folder] = $this->ma->paginate_result($table,$like,$order,$offset,$limit);
		$total = $this->ma->paginate_numrows($table,$like);
		$this->load->library('pagination');
		$config['base_url'] = base_url().$folder.'/'.$file;
		$config['total_rows'] = $total;
		$config['per_page'] = $limit;
		$config['full_tag_open'] = '<p class="pagination">';
		$config['full_tag_close'] = '</p>';
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='javascript:void''>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config); 
		$this->data['per_page'] = $limit; 
		$this->data['offset'] = $offset; 
		$this->data['pagination']['links'] = $this->pagination->create_links();
		$this->data['pagination']['total_users'] = $total;
		$this->load->view($url,$this->data);
	}

	// ===

	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	// Privileges
	###++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++###	
	
 	/**
 	 * manage_privileges
 	 * View and manage a table of all user privileges.
 	 * This example allows user privileges to be deleted via checkoxes within the page.
 	 */
 	// PETERNAKAN
    function manage_privileges()
    {
		// Check user has privileges to view user privileges, else display a message to notify the user they do not have valid privileges.
		if (! $this->flexi_auth->is_privileged('View Privileges'))
		{
			$this->session->set_flashdata('message', '<p class="error_mag">You do not have access privileges to view user privileges.</p>');
			redirect('pengguna');		
		}
		
		// If 'Manage Privilege' form has been submitted and the user has privileges to delete privileges.
		if ($this->input->post('delete_privilege') && $this->flexi_auth->is_privileged('Delete Privileges')) 
		{
			$this->load->model('m_pengguna');
			$this->m_pengguna->manage_privileges();
		}

		// Define the privilege data columns to use on the view page. 
		// Note: The columns defined using the 'db_column()' functions are native table columns to the auth library. 
		// Read more on 'db_column()' functions in the quick help section near the top of this controller. 
		$sql_select = array(
			$this->flexi_auth->db_column('user_privileges', 'id'),
			$this->flexi_auth->db_column('user_privileges', 'name'),
			$this->flexi_auth->db_column('user_privileges', 'description')
		);
		$this->data['privileges'] = $this->flexi_auth->get_privileges_array($sql_select);
				
		// Set any returned status/error messages.
		$this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->load->view('pengguna/privileges_view', $this->data);
	}
	
 	/**
 	 * insert_privilege
 	 * Insert a new user privilege.
 	 */
	function insert_privilege()
	{
		// Check user has privileges to insert user privileges, else display a message to notify the user they do not have valid privileges.
		if (! $this->flexi_auth->is_privileged('Insert Privileges'))
		{
			$this->session->set_flashdata('message', '<p class="error_mag">You do not have access privileges to insert new user privileges.</p>');
			redirect('pengguna/manage_privileges');		
		}

		// If 'Add Privilege' form has been submitted, insert the new privilege.
		if ($this->input->post('insert_privilege')) 
		{
			$this->load->model('m_pengguna');
			$this->m_pengguna->insert_privilege();
		}
		
		// Set any returned status/error messages.
		$this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->load->view('pengguna/privilege_insert_view', $this->data);
	}
	
 	/**
 	 * update_privilege
 	 * Update the details of a specific user privilege.
 	 */
	function update_privilege($privilege_id)
	{
		// Check user has privileges to update user privileges, else display a message to notify the user they do not have valid privileges.
		if (! $this->flexi_auth->is_privileged('Update Privileges'))
		{
			$this->session->set_flashdata('message', '<p class="error_mag">You do not have access privileges to update user privileges.</p>');
			redirect('pengguna/manage_privileges');		
		}

		// If 'Update Privilege' form has been submitted, update the privilege details.
		if ($this->input->post('update_privilege')) 
		{
			$this->load->model('m_pengguna');
			$this->m_pengguna->update_privilege($privilege_id);
		}
		
		// Get privileges current data.
		$sql_where = array($this->flexi_auth->db_column('user_privileges', 'id') => $privilege_id);
		$this->data['privilege'] = $this->flexi_auth->get_privileges_row_array(FALSE, $sql_where);
		
		// Set any returned status/error messages.
		$this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

		$this->load->view('pengguna/privilege_update_view', $this->data);
	}
	
 	/**
 	 * update_user_privileges
 	 * Update the access privileges of a specific user.
 	 */
 	// PETERNAKAN
    function update_user_privileges($user_id)
    {
		// Check user has privileges to update user privileges, else display a message to notify the user they do not have valid privileges.
		if (! $this->flexi_auth->is_privileged('Update Privileges'))
		{
			$this->session->set_flashdata('message', '<p class="error_mag">You do not have access privileges to update user privileges.</p>');
			redirect('pengguna/manage_user_accounts');		
		}

		// If 'Update User Privilege' form has been submitted, update the user privileges.
		if ($this->input->post('update_user_privilege')) 
		{
			$this->load->model('m_pengguna');
			$this->m_pengguna->update_user_privileges($user_id);
		}

		// Get users profile data.
		$sql_select = array(
			'upro_uacc_fk', 
			'upro_first_name', 
			'upro_last_name',
			$this->flexi_auth->db_column('user_acc', 'group_id'),
			$this->flexi_auth->db_column('user_group', 'name')
        );
		$sql_where = array($this->flexi_auth->db_column('user_acc', 'id') => $user_id);
		$this->data['user'] = $this->flexi_auth->get_users_row_array($sql_select, $sql_where);		

		// Get all privilege data. 
		$sql_select = array(
			$this->flexi_auth->db_column('user_privileges', 'id'),
			$this->flexi_auth->db_column('user_privileges', 'name'),
			$this->flexi_auth->db_column('user_privileges', 'description')
		);
		$this->data['privileges'] = $this->flexi_auth->get_privileges_array($sql_select);
		
		// Get user groups current privilege data.
		$sql_select = array($this->flexi_auth->db_column('user_privilege_groups', 'privilege_id'));
		$sql_where = array($this->flexi_auth->db_column('user_privilege_groups', 'group_id') => $this->data['user'][$this->flexi_auth->db_column('user_acc', 'group_id')]);
		$group_privileges = $this->flexi_auth->get_user_group_privileges_array($sql_select, $sql_where);
                
        $this->data['group_privileges'] = array();
        foreach($group_privileges as $privilege)
        {
            $this->data['group_privileges'][] = $privilege[$this->flexi_auth->db_column('user_privilege_groups', 'privilege_id')];
        }
                
		// Get users current privilege data.
		$sql_select = array($this->flexi_auth->db_column('user_privilege_users', 'privilege_id'));
		$sql_where = array($this->flexi_auth->db_column('user_privilege_users', 'user_id') => $user_id);
		$user_privileges = $this->flexi_auth->get_user_privileges_array($sql_select, $sql_where);
	
		// For the purposes of the example demo view, create an array of ids for all the users assigned privileges.
		// The array can then be used within the view to check whether the user has a specific privilege, this data allows us to then format form input values accordingly. 
		$this->data['user_privileges'] = array();
		foreach($user_privileges as $privilege)
		{
			$this->data['user_privileges'][] = $privilege[$this->flexi_auth->db_column('user_privilege_users', 'privilege_id')];
		}
	
		// Set any returned status/error messages.
		$this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

        // For demo purposes of demonstrate whether the current defined user privilege source is getting privilege data from either individual user 
        // privileges or user group privileges, load the pengguna array containing the current privilege sources. 
		$this->data['privilege_sources'] = $this->auth->auth_pengguna['privilege_sources'];
                
		$this->load->view('pengguna/user_privileges_update_view', $this->data);		
    }
    
 	/**
 	 * update_group_privileges 
 	 * Update the access privileges of a specific user group.
 	 */
    function update_group_privileges($group_id)
    {
		// Check user has privileges to update group privileges, else display a message to notify the user they do not have valid privileges.
		if (! $this->flexi_auth->is_privileged('Update Privileges'))
		{
			$this->session->set_flashdata('message', '<p class="error_mag">You do not have access privileges to update group privileges.</p>');
			redirect('pengguna/manage_user_accounts');		
		}

		// If 'Update Group Privilege' form has been submitted, update the privileges of the user group.
		if ($this->input->post('update_group_privilege')) 
		{
			$this->load->model('m_pengguna');
			$this->m_pengguna->update_group_privileges($group_id);
		}
		
		// Get data for the current user group.
		$sql_where = array($this->flexi_auth->db_column('user_group', 'id') => $group_id);
		$this->data['group'] = $this->flexi_auth->get_groups_row_array(FALSE, $sql_where);
                
		// Get all privilege data. 
		$sql_select = array(
			$this->flexi_auth->db_column('user_privileges', 'id'),
			$this->flexi_auth->db_column('user_privileges', 'name'),
			$this->flexi_auth->db_column('user_privileges', 'description')
		);
		$this->data['privileges'] = $this->flexi_auth->get_privileges_array($sql_select);
		
		// Get data for the current privilege group.
		$sql_select = array($this->flexi_auth->db_column('user_privilege_groups', 'privilege_id'));
		$sql_where = array($this->flexi_auth->db_column('user_privilege_groups', 'group_id') => $group_id);
		$group_privileges = $this->flexi_auth->get_user_group_privileges_array($sql_select, $sql_where);
                
		// For the purposes of the example demo view, create an array of ids for all the privileges that have been assigned to a privilege group.
		// The array can then be used within the view to check whether the group has a specific privilege, this data allows us to then format form input values accordingly. 
		$this->data['group_privileges'] = array();
		foreach($group_privileges as $privilege)
		{
			$this->data['group_privileges'][] = $privilege[$this->flexi_auth->db_column('user_privilege_groups', 'privilege_id')];
		}
	
		// Set any returned status/error messages.
		$this->data['message'] = (!isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];		

        // For demo purposes of demonstrate whether the current defined user privilege source is getting privilege data from either individual user 
        // privileges or user group privileges, load the pengguna array containing the current privilege sources. 
        $this->data['privilege_sources'] = $this->auth->auth_pengguna['privilege_sources'];
                
		$this->load->view('pengguna/user_group_privileges_update_view', $this->data);		
    }
	
 	/**
 	 * failed_login_users
 	 * Display a list of all user accounts that have too many failed login attempts since the users last successful login. 
	 * The purpose of this example is to highlight user accounts that have either struggled to login, or that may be the subject of a brute force hacking attempt.
 	 */
	public function failed_login_users()
	{
		$status = 'failed_login';
		$username = $this->input->post('username');
 		$jum = $this->input->post('jum');
		$table = 'dtuser';
		$like = array('uacc_username'=> $username);
		$order = 'uacc_id desc';
		$url = 'pengguna/informasipengguna/users_view';
		$this->data['status'] = $status;
		$this->paginate($table,$like,$order,'pengguna','failed_login_users',$jum,$url);
	}

	public function add_user(){
		$this->load->model('m_pengguna','ma');
		$this->ma->get_groups_result();
		$this->ma->get_sotk_result();
		$this->load->view('pengguna/akunpengguna/new_account',$this->data);	
	}

	public function is_username(){
		$this->load->model('m_pengguna','ma');
		$this->ma->is_username();
	}

	public function store_new_account(){
		$this->load->model('m_pengguna','ma');
		$this->ma->store_new_account();
	}
	// =====================================
	// AKUN PENGGUNA/GRUP PENGGUNA
	public function new_grup(){
		$this->load->model('m_pengguna','ma');
		$this->ma->get_privilege();
		$this->load->view('pengguna/gruppengguna/new_grup',$this->data);	
	}

	public function store_new_grup(){
		$this->load->model('m_pengguna','ma');
		$this->ma->store_new_grup();
	}

	public function is_grup(){
		$this->load->model('m_pengguna','ma');
		$this->ma->is_grup();
	}

	public function user_hakakses_grup(){
		$this->load->model('m_pengguna','ma');
		$this->ma->g_groupprivilege();
		$this->ma->get_groups();
		$this->load->view('pengguna/gruppengguna/edit_group',$this->data);	
	}

	public function save_user_hakakses_grup(){
		$this->load->model('m_pengguna','ma');
		$this->ma->save_user_hakakses_grup();
	}

	public function roles(){
		$this->load->view('pengguna/rolepengguna/kha_index',$this->data);
	}

	public function kha_view(){
		$username = $this->input->post('username');
 		$jum = $this->input->post('jum');
		$table = 'user_privileges';
		$like = array('upriv_name'=> $username);
		$order = 'upriv_id desc';
		$url = 'pengguna/rolepengguna/kha';
		$this->paginate($table,$like,$order,'pengguna','kha_view',$jum,$url);	
	}

	public function new_role(){
		$this->load->model('m_pengguna','ma');
		$this->load->view('pengguna/rolepengguna/new_role',$this->data);	
	}

	public function is_role(){
		$this->load->model('m_pengguna','ma');
		$this->ma->is_role();
	}

	public function store_new_role(){
		$this->load->model('m_pengguna','ma');
		$this->ma->store_new_role();
	}

	public function databeberaparole(){
		$a = $this->input->post('data');
		$this->load->model('m_pengguna','ma');
		$this->data['hasil'] = $this->ma->databeberaparole($a);
		$this->data['hapus'] = @implode(',',$a);
		$this->load->view('pengguna/rolepengguna/beberaparole',$this->data);
	}

	public function user_role(){
		$this->load->model('m_pengguna','ma');
		$this->ma->get_roles();
		$this->load->view('pengguna/rolepengguna/g_role',$this->data);	
	}

	public function update_role(){
		$this->load->model('m_pengguna','ma');
		$this->ma->update_role();
	}	

	public function hapusselectedrole(){
		$da = $this->input->post('data');
		$a = explode(',',$da);
		$this->load->model('m_pengguna','ma');
		$jum=0;
		foreach($a as $data){
			$this->ma->hapusselectedrole($data);
		}
		$pesan = array(
			'jenis' => 'success',
			'title' => 'Tindakan Berhasil Dilakukan',
			'message' => 'Data berhasil dihapus.'
		);	
		echo json_encode($pesan);
	}

}

/* End of file auth_pengguna.php */
/* Location: ./application/controllers/auth_pengguna.php */