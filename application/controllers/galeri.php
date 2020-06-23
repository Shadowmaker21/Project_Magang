<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class galeri extends CI_Controller {
 
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
		$this->data['folder'] = 'galeri';
		$this->data['judul'] = 'Galeri Foto';
		$this->data['icon'] = '<i class="fa fa-image text-navy"></i>';
	}

	public function index(){
		$this->data['menu'] = 'galeri';
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function galeri_view(){
		$this->load->model('m_library','jd');
		$this->data['w'] = $this->jd->get_table_result('dtgaleri');
		$this->load->view($this->data['folder'].'/galeri_view',$this->data);
	}

	public function galeri_edit($id=FALSE){
		$this->load->model('m_galeri','jd');
		$this->data['menu'] = 'galeri';
		$this->data['album'] = $this->jd->get_table_result('galeri_album');
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            $validation_rules = array(
                array('field' => 'judul', 'label' => 'Judul Foto', 'rules' => 'required')
            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            
            // Run the validation.
            if ($this->form_validation->run()) {
				$this->load->model('m_galeri','ma');
				$this->ma->galeri_update($this->data);
            } 
        }
		$this->load->model('m_galeri','jd');
		$where = array('id' => $id);
		$this->data['galeri'] = $this->jd->get_table_row($where,'dtgaleri');
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/galeri_edit',$this->data);	
	}

	public function galeri_add(){
		$this->load->model('m_galeri','jd');
		$this->data['menu'] = 'galeri';
		$this->data['album'] = $this->jd->get_table_result('galeri_album');
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            $validation_rules = array(
            	array('field' => 'album', 'label' => 'Album Foto', 'rules' => 'required'),
                array('field' => 'judul', 'label' => 'Judul Foto', 'rules' => 'required'),
                array('field' => 'deskripsi', 'label' => 'Deskripsi Foto', 'rules' => 'required')
            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            
            // Run the validation.
            if ($this->form_validation->run()) {
				$this->load->model('m_galeri','ma');
				$this->ma->galeri_save($this->data);
            } 
        }
		$this->load->model('m_library','jd');
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/galeri_add',$this->data);	
	}	

	public function confirm_galeri_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view($this->data['folder'].'/confirm_galeri_delete',$this->data);
	}
	
	public function galeri_delete(){
		$this->load->model('m_galeri','ma');
		$this->ma->galeri_delete($this->data);
	}

}