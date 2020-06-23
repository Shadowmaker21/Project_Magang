<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carousel extends CI_Controller {
 
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
		$this->data['folder'] = 'carousel';
		$this->data['judul'] = 'Banner Depan';
		$this->data['icon'] = '<i class="fa fa-image text-maroon"></i>';
	}

	public function index(){
		$this->data['menu'] = 'halaman_depan';
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function carousel_view(){
		$this->load->model('m_library','jd');
		$this->data['w'] = $this->jd->get_table_result('dtcarousel');
		$this->load->view($this->data['folder'].'/carousel_view',$this->data);
	}

	public function carousel_edit($id=FALSE){
		$this->data['menu'] = 'halaman_depan';
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            $validation_rules = array(
                array('field' => 'judul', 'label' => 'Headline Foto', 'rules' => 'required'),
                array('field' => 'deskripsi', 'label' => 'Deksripsi Foto', 'rules' => 'required')
            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            
            // Run the validation.
            if ($this->form_validation->run()) {
				$this->load->model('m_carousel','ma');
				$this->ma->carousel_update($this->data);
            } 
        }
		$this->load->model('m_carousel','jd');
		$where = array('id' => $id);
		$this->data['carousel'] = $this->jd->get_table_row($where,'dtcarousel');
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/carousel_edit',$this->data);	
	}

	public function carousel_add(){
		$this->data['menu'] = 'halaman_depan';
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            $validation_rules = array(
                array('field' => 'judul', 'label' => 'Headline Foto', 'rules' => 'required'),
                array('field' => 'deskripsi', 'label' => 'Keterangan Headline', 'rules' => 'required')
            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
            
            // Run the validation.
            if ($this->form_validation->run()) {
				$this->load->model('m_carousel','ma');
				$this->ma->carousel_save($this->data);
            } 
        }
		$this->load->model('m_library','jd');
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/carousel_add',$this->data);	
	}	

	public function confirm_carousel_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view($this->data['folder'].'/confirm_carousel',$this->data);
	}
	
	public function carousel_delete(){
		$this->load->model('m_carousel','ma');
		$this->ma->carousel_delete($this->data);
	}

}