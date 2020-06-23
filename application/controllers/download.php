<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller {
 
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
		$this->data['folder'] = 'download';
		$this->data['judul'] = 'Download';
		$this->data['icon'] = '<i class="fa fa-cloud-upload text-purple"></i>';
	}

	public function index(){
		$this->data['menu'] = 'download';
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function download_view(){
		$this->load->model('m_library','jd');
		$bidang = $this->data['user']['uacc_bidang'];
		if($bidang != 0){
			$this->db->where('id_bidang', $bidang);
		}
		$this->db->order_by('id','desc');
		$query = $this->db->get('dtdownload');
		$this->data['w'] = $query->result();
		$this->load->view('download/download_view',$this->data);
	}

	public function add(){
		$this->data['menu'] = 'download';
		$this->load->model('m_library','jd');
		$this->data['w'] = $this->jd->get_table_result('download_jenis');
		$order = 'bidang asc';
		$this->data['sotk'] = $this->jd->get_table_result_order('bidang',$order);
		$this->load->view('download/add_download',$this->data);		
	}

	public function edit($id=FALSE){
		$this->data['menu'] = 'download';
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            $validation_rules = array(
                array('field' => 'tipe', 'label' => 'Tipe Download', 'rules' => 'required'),
                array('field' => 'macam', 'label' => 'Macam Download', 'rules' => 'required'),
                array('field' => 'nama', 'label' => 'Nama', 'rules' => 'required'),
                array('field' => 'deskripsi', 'label' => 'Deskripsi', 'rules' => 'required')
            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            
            // Run the validation.
            if ($this->form_validation->run()) {
				$this->load->model('m_download','ma');
				$this->ma->download_update($this->data);
            } 
        }
		$this->load->model('m_library','jd');	
		$where = array('id' => $id);
		$this->data['d'] = $this->jd->get_table_row('dtdownload',$where);
		$this->data['w'] = $this->jd->get_table_result('download_jenis');
		$where = array('id_download_macam' => $this->data['d']->download_macam);
		$this->data['m'] = $this->jd->get_table_result_where('download_macam',$where);
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/edit_download',$this->data);	
	}

	public function field_macam(){
		$id = $this->input->post('id');
		$this->load->model('m_download','ma');
		$where = array('id_download_jenis'=> $id);
		$this->data['data'] = $this->ma->get_table_result_where('download_macam',$where);
		$this->load->view('download/field',$this->data);
	}

	public function download_upload(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		// success submit
		$this->load->model('m_download','mas');
		$this->mas->download_upload($this->data);
	}

	public function download_add(){
		$this->load->model('m_library','jd');	
		$this->load->view('download/download_add',$this->data);
	}

	public function is_download(){
		$this->load->model('m_library','ma');
		$this->ma->is_download(0);
	}

	public function is_download1(){
		$this->load->model('m_library','ma');
		$this->ma->is_download(1);
	}

	public function download_store(){
		$this->load->model('m_library','ma');
		$this->ma->download_store($this->data);
	}

	public function confirm_download_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('download/confirm_download_delete',$this->data);
	}
	
	public function download_delete(){
		$this->load->model('m_download','ma');
		$this->ma->download_delete($this->data);
	}

}