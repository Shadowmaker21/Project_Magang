<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Link_terkait extends CI_Controller {
 
    function __construct() 
    {
        parent::__construct();
 		
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
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
		$this->data['folder'] = 'link_terkait';
		$this->data['judul'] = 'Link Terkait';
		$this->data['icon'] = '<i class="fa fa-link text-teal"></i>';
	}

	public function index(){
		$this->data['menu'] = 'link_terkait';
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function link_terkait_view(){
		$this->load->model('m_library','jd');
		$this->data['w'] = $this->jd->get_table_result('dtlink_terkait');
		$this->load->view($this->data['folder'].'/link_terkait_view',$this->data);
	}

	public function link_terkait_edit($id=FALSE){
		$this->data['menu'] = 'link_terkait';
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            $validation_rules = array(
                array('field' => 'judul', 'label' => 'Alamat Link', 'rules' => 'required')
            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            
            // Run the validation.
            if ($this->form_validation->run()) {
				$this->load->model('m_link_terkait','ma');
				$this->ma->link_terkait_update($this->data);
            } 
        }
		$this->load->model('m_link_terkait','jd');
		$where = array('id' => $id);
		$this->data['link_terkait'] = $this->jd->get_table_row($where,'dtlink_terkait');
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/link_terkait_edit',$this->data);	
	}

	public function link_terkait_add(){
		$this->data['menu'] = 'link_terkait';
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            $validation_rules = array(
                array('field' => 'judul', 'label' => 'Alamat link', 'rules' => 'required'),
                array('field' => 'deskripsi', 'label' => 'Deskripsi mengenai link', 'rules' => 'required')
            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            
            // Run the validation.
            if ($this->form_validation->run()) {
				$this->load->model('m_link_terkait','ma');
				$this->ma->link_terkait_save($this->data);
            } 
        }
		$this->load->model('m_library','jd');
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/link_terkait_add',$this->data);	
	}	

	public function confirm_link_terkait_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view($this->data['folder'].'/confirm_link_terkait_delete',$this->data);
	}
	
	public function link_terkait_delete(){
		$this->load->model('m_link_terkait','ma');
		$this->ma->link_terkait_delete($this->data);
	}

}