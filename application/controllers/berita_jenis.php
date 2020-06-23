<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita_jenis extends CI_Controller {
 
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
		$this->data['menu'] = 'master';		
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
	}

	public function index(){
		$this->data['menu'] = 'berita';
		$this->data['menu2'] = 'berita_jenis';
		$this->load->view('berita_jenis/index', $this->data);
	}

	public function berita_jenis_view(){
		$this->load->model('m_berita_jenis','jd');
		$this->data['jd'] = $this->jd->get_table_result('berita_jenis');
		$this->load->view('berita_jenis/berita_jenis_view',$this->data);
	}

	public function berita_jenis_add(){
		$this->load->model('m_berita_jenis','jd');	
		$this->load->view('berita_jenis/berita_jenis_add',$this->data);
	}

	public function is_berita_jenis(){
		$this->load->model('m_berita_jenis','ma');
		$this->ma->is_berita_jenis();
	}

	public function berita_jenis_store(){
		$this->load->model('m_berita_jenis','ma');
		$this->ma->berita_jenis_store();
	}

	public function berita_jenis_edit(){
		$this->load->model('m_berita_jenis','jd');	
		$id = $this->input->post('id');
		$where = array('id_berita_jenis' => $id);
		$this->data['d'] = $this->jd->get_table_row($where,'berita_jenis');
		$this->load->view('berita_jenis/berita_jenis_edit',$this->data);
	}

	public function berita_jenis_update(){
		$this->load->model('m_berita_jenis','ma');
		$this->ma->berita_jenis_update($this->data);
	}

	public function confirm_berita_jenis_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('berita_jenis/confirm_berita_jenis',$this->data);
	}
	
	public function berita_jenis_delete(){
		$this->load->model('m_berita_jenis','ma');
		$this->ma->berita_jenis_delete($this->data);
	}

}