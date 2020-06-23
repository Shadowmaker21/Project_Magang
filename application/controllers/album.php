<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Album extends CI_Controller {
 
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
		$this->data['menu'] = 'galeri';
		$this->data['menu2'] = 'albumfoto';
		$this->load->view('album/index', $this->data);
	}

	public function album_view(){
		$this->load->model('m_album','jd');
		$this->data['jd'] = $this->jd->get_table_result('galeri_album');
		$this->load->view('album/album_view',$this->data);
	}

	public function album_add(){
		$this->load->model('m_album','jd');	
		$this->load->view('album/album_add',$this->data);
	}

	public function is_album(){
		$this->load->model('m_album','ma');
		$this->ma->is_album();
	}

	public function album_store(){
		$this->load->model('m_album','ma');
		$this->ma->album_store();
	}

	public function album_edit(){
		$this->load->model('m_album','jd');	
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->data['d'] = $this->jd->get_table_row($where,'galeri_album');
		$this->load->view('album/album_edit',$this->data);
	}

	public function album_update(){
		$this->load->model('m_album','ma');
		$this->ma->album_update($this->data);
	}

	public function confirm_album_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('album/confirm_album',$this->data);
	}
	
	public function album_delete(){
		$this->load->model('m_album','ma');
		$this->ma->album_delete($this->data);
	}

}