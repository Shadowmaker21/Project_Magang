<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tugas_fungsi extends CI_Controller {
 
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
		$this->data['folder'] = 'tugas';
		$this->data['judul'] = 'Tugas dan Fungsi';
	}

	public function index(){
		$this->data['menu'] = 'profil';
		$this->load->model('m_library','ml');
		$order = 'id asc';
		$this->data['tugas'] = $this->ml->get_table_result_order('profil_tugas',$order);
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function tugas_view(){
		$this->load->model('m_library','ml');
		$order = 'id desc';
		$this->data['w'] = $this->ml->get_table_row_order('profil_tugas',$order);
		$this->load->view($this->data['folder'].'/tugas_view',$this->data);
	}

	public function tugas_add(){
		$this->load->model('m_library','ml');
		$this->load->view($this->data['folder'].'/tugas_add',$this->data);
	}

	public function is_tugas(){
		$this->load->model('m_library','ml');
		$this->ml->is_tugas(0);
	}

	public function tugas_store(){
		$this->load->model('m_tugas','ms');
		$this->ms->tugas_store($this->data);
	}

	public function tugas_edit(){
		$this->load->model('m_library','jd');	
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->data['d'] = $this->jd->get_table_row('profil_tugas',$where);
		$this->load->view($this->data['folder'].'/tugas_edit',$this->data);
	}

	public function tugas_update(){
		$this->load->model('m_tugas','ma');
		$this->ma->tugas_update($this->data);
	}
}