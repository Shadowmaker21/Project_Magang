<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class bidang extends CI_Controller {
 
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
		$this->data['menu'] = 'bidang';		
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
	}

	public function index(){
		$this->load->view('bidang/index', $this->data);
	}

	public function bidang_view(){
		$this->load->model('m_bidang','jd');
		$this->data['jd'] = $this->jd->get_table_result('bidang');
		$this->load->view('bidang/bidang_view',$this->data);
	}

	public function bidang_add(){
		$this->load->model('m_bidang','jd');	
		$this->load->view('bidang/bidang_add',$this->data);
	}

	public function is_bidang(){
		$this->load->model('m_bidang','ma');
		$this->ma->is_bidang();
	}

	public function bidang_store(){
		$this->load->model('m_bidang','ma');
		$this->ma->bidang_store();
	}

	public function bidang_edit(){
		$this->load->model('m_bidang','jd');	
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->data['d'] = $this->jd->get_table_row($where,'bidang');
		$this->load->view('bidang/bidang_edit',$this->data);
	}

	public function bidang_update(){
		$this->load->model('m_bidang','ma');
		$this->ma->bidang_update($this->data);
	}

	public function confirm_bidang_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('bidang/confirm_bidang',$this->data);
	}
	
	public function bidang_delete(){
		$this->load->model('m_bidang','ma');
		$this->ma->bidang_delete($this->data);
	}

}