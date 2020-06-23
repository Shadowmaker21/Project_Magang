<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipe extends CI_Controller {
 
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
		$this->data['menu'] = 'download';
		$this->data['menu2'] = 'tipe';
		$this->load->view('tipe/index', $this->data);
	}

	public function tipe_view(){
		$this->load->model('m_tipe','jd');
		$this->data['jd'] = $this->jd->get_table_result('download_jenis');
		$this->load->view('tipe/tipe_view',$this->data);
	}

	public function tipe_add(){
		$this->load->model('m_tipe','jd');	
		$this->load->view('tipe/tipe_add',$this->data);
	}

	public function is_tipe(){
		$this->load->model('m_tipe','ma');
		$this->ma->is_tipe();
	}

	public function tipe_store(){
		$this->load->model('m_tipe','ma');
		$this->ma->tipe_store();
	}

	public function tipe_edit(){
		$this->load->model('m_tipe','jd');	
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->data['d'] = $this->jd->get_table_row($where,'download_jenis');
		$this->load->view('tipe/tipe_edit',$this->data);
	}

	public function tipe_update(){
		$this->load->model('m_tipe','ma');
		$this->ma->tipe_update($this->data);
	}

	public function confirm_tipe_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('tipe/confirm_tipe',$this->data);
	}
	
	public function tipe_delete(){
		$this->load->model('m_tipe','ma');
		$this->ma->tipe_delete($this->data);
	}

	public function macam_view(){
		$this->load->model('m_tipe','jd');
		$id = $this->input->post('id');
		$where = array('id_download_jenis' => $id);
		$this->data['id'] = $id;
		$this->data['jd'] = $this->jd->get_table_result_where('download_macam',$where);
		$this->load->view('tipe/macam_view',$this->data);
	}

	public function macam_store(){
		$this->load->model('m_tipe','ma');
		$this->ma->macam_store();
	}

	public function macam_add(){
		$this->load->model('m_tipe','jd');	
		$this->data['id'] = $this->input->post('id');
		$this->load->view('tipe/macam_add',$this->data);
	}

	public function is_macam(){
		$this->load->model('m_tipe','ma');
		$this->ma->is_macam();
	}

	public function macam_edit(){
		$this->load->model('m_tipe','jd');	
		$id = $this->input->post('id');
		$where = array('id_download_macam' => $id);
		$this->data['d'] = $this->jd->get_table_row($where,'download_macam');
		$this->load->view('tipe/macam_edit',$this->data);
	}

	public function macam_update(){
		$this->load->model('m_tipe','ma');
		$this->ma->macam_update($this->data);
	}

	public function confirm_macam_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('tipe/confirm_macam',$this->data);
	}
	
	public function macam_delete(){
		$this->load->model('m_tipe','ma');
		$this->ma->macam_delete($this->data);
	}

}