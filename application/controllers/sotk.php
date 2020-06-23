<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sotk extends CI_Controller {
 
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
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
		$this->data['folder'] = 'sotk';
		$this->data['judul'] = 'Struktur Organisasi';
	}

	public function index(){
		$this->load->model('m_library','ml');
		$order = 'id asc';
		$this->data['menu'] = 'profil';
		$this->data['sotk'] = $this->ml->get_table_result_order('profil_sotk',$order);
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function sotk_view(){
		$this->load->model('m_library','ml');
		$order = 'id desc';
		$this->data['w'] = $this->ml->get_table_row_order('profil_sotk',$order);
		$this->load->view($this->data['folder'].'/sotk_view',$this->data);
	}

	public function sotk_add(){
		$this->load->model('m_library','ml');
		$this->load->view($this->data['folder'].'/sotk_add',$this->data);
	}

	public function is_sotk(){
		$this->load->model('m_library','ml');
		$this->ml->is_sotk(0);
	}

	public function sotk_store(){
		$this->load->model('m_sotk','ms');
		$this->ms->sotk_store($this->data);
	}

	public function sotk_edit(){
		$this->load->model('m_library','jd');	
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->data['d'] = $this->jd->get_table_row('profil_sotk',$where);
		$this->load->view($this->data['folder'].'/sotk_edit',$this->data);
	}

	public function sotk_update(){
		$this->load->model('m_sotk','ma');
		$this->ma->sotk_update($this->data);
	}
}