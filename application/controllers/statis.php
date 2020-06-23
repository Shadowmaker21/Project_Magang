<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statis extends CI_Controller {
 
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
		$this->data['folder'] = 'statis';
		$this->data['judul'] = 'Statis';
		$this->data['icon'] = '<i class="fa fa-cloud-upload text-purple"></i>';
	}

	public function index(){
		$this->data['menu'] = 'statis';
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function statis_view(){
		$this->load->model('m_library','jd');
		$query = $this->db->get('dtstatis');
		$this->data['a'] = $query->result();	
		$this->load->view('statis/statis_view',$this->data);
	}

	public function add(){
		$this->data['menu'] = 'statis';
		$this->load->model('m_library','jd');
		$this->data['a'] = $this->jd->get_table_result('pencipta_arsip');
		$order = 'judul_riwayat';
		$this->data['c'] = $this->jd->get_table_result_order('riwayat',$order);
		$order = 'nama_masalah';
		$this->data['b'] = $this->jd->get_table_result_order('masalah',$order);
		$order = 'nama_submasalah';
		$this->data['d'] = $this->jd->get_table_result_order('sub_masalah',$order);
		$order = 'nama_naskah';
		$this->data['e'] = $this->jd->get_table_result_order('jenis_naskah',$order);
		$order = 'nama_bahasa asc';
		$this->data['f'] = $this->jd->get_table_result_order('bahasa',$order);
		$order = 'nama_media asc';
		$this->data['g'] = $this->jd->get_table_result_order('media',$order);
		$order = 'nama_tingkatperkembangan asc';
		$this->data['h'] = $this->jd->get_table_result_order('tingkat_perkembangan',$order);
		$this->load->view('statis/add_statis',$this->data);	


	}

	public function edit($id=FALSE){
		$this->data['menu'] = 'statis';
		if($this->input->post('simpan')) {
			$this->load->library('form_validation');
            
            /*$validation_rules = array(
                 array('field' => 'tipe', 'label' => 'Tipe Download', 'rules' => 'required'),
                 array('field' => 'macam', 'label' => 'Macam Download', 'rules' => 'required'),

            );

            $this->form_validation->set_rules($validation_rules);
            $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');*/
            
            // Run the validation.
            //if ($this->form_validation->run()) {
				$this->load->model('m_statis','ma');
				$this->ma->statis_update($this->data);
            //} 
        }
		$this->load->model('m_library','jd');	
		$where = array('id_statis' => $id);
		$this->data['d'] = $this->jd->get_table_row('dtstatis',$where);
		$this->data['a'] = $this->jd->get_table_result('pencipta_arsip');
		$order = 'nama_naskah';
		$this->data['e'] = $this->jd->get_table_result_order('jenis_naskah',$order);
		$order = 'nama_bahasa asc';
		$this->data['f'] = $this->jd->get_table_result_order('bahasa',$order);
		$order = 'nama_media asc';
		$this->data['g'] = $this->jd->get_table_result_order('media',$order);
		$order = 'nama_tingkatperkembangan asc';
		$this->data['h'] = $this->jd->get_table_result_order('tingkat_perkembangan',$order);
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/edit_statis',$this->data);	
	}

	public function field_riwayat(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		$where = array('id_pencipta_arsip'=> $id);
		$this->data['c'] = $this->ma->get_table_result_where('riwayat',$where);
		$this->load->view('statis/field',$this->data);
	}

	public function field_masalah(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		$where = array('id_masalah'=> $id);
		$this->data['b'] = $this->ma->get_table_result_where('masalah',$where);
		$this->load->view('statis/field',$this->data);
	}
	
	public function field_submasalah(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		$where = array('id_submasalah'=> $id);
		$this->data['d'] = $this->ma->get_table_result_where('sub_masalah',$where);
		$this->load->view('statis/field',$this->data);
	}
	
	public function field_jenis_naskah(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		$where = array('id_jenis_naskah'=> $id);
		$this->data['e'] = $this->ma->get_table_result_where('jenis_naskah',$where);
		$this->load->view('statis/field',$this->data);
	}
	
	public function field_bahasa(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		$where = array('id_bahasa'=> $id);
		$this->data['f'] = $this->ma->get_table_result_where('bahasa',$where);
		$this->load->view('statis/field',$this->data);
	}
	
	public function field_media(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		$where = array('id_media'=> $id);
		$this->data['g'] = $this->ma->get_table_result_where('media',$where);
		$this->load->view('statis/field',$this->data);
	}
	
	public function field_tingkat_perkembangan(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		$where = array('id_tingkat_perkembangan'=> $id);
		$this->data['h'] = $this->ma->get_table_result_where('tingkat_perkembangan',$where);
		$this->load->view('statis/field',$this->data);
	}

	public function statis_upload(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		// success submit
		$this->load->model('m_statis','mas');
		$this->mas->statis_upload($this->data);
	}

	public function statis_add(){
		$id = $this->input->post('id');
		$this->load->model('m_statis','ma');
		
		$this->load->model('m_library','jd');	
		$this->load->view('statis/statis_add',$this->data);
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

	public function confirm_statis_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('statis/confirm_statis_delete',$this->data);
	}
	
	public function statis_delete(){
		$this->load->model('m_statis','ma');
		$this->ma->statis_delete($this->data);
	}

}