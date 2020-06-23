<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {
 
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

		if (! $this->flexi_auth->is_logged_in_via_password()) {
			redirect('authenticate');
		}

		$this->data = null;		
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
		$this->data['folder'] = 'berita';
		$this->data['judul'] = 'Berita';
	}

	public function index(){
		$this->data['menu'] = 'berita';
		$this->load->model('m_berita','jd');
		$order = 'nama_berita asc';
		$this->data['berita'] = $this->jd->get_table_result_order('berita_jenis',$order);
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function berita_view(){
		$this->load->model('m_berita','jd');
		$jenis = $this->input->post('jenisberita');
		$bidang = $this->data['user']['uacc_bidang'];
		if($bidang != 0){
			$this->db->where('id_bidang', $bidang);
		}
		if($jenis == 0){
			
		} else {
			$this->db->where('id_berita_jenis', $jenis);
		}
		$query = $this->db->get('dtberita');
		$this->data['w'] = $query->result();
		$this->load->view($this->data['folder'].'/berita_view',$this->data);
	}

	public function berita_add(){
		$this->load->model('m_berita','jd');	
		$order = 'nama_berita asc';
		$this->data['jenisberita'] = $this->jd->get_table_result_order('berita_jenis',$order);
		$order = 'bidang asc';
		$this->data['sotk'] = $this->jd->get_table_result_order('bidang',$order);
		$this->load->view($this->data['folder'].'/berita_add',$this->data);
	}

	public function is_berita(){
		$this->load->model('m_berita','ma');
		$this->ma->is_berita(0);
	}

	public function is_berita1(){
		$this->load->model('m_berita','ma');
		$this->ma->is_berita(1);
	}

	public function berita_store(){
		$this->load->model('m_berita','ma');
		$this->ma->berita_store($this->data);
	}

	public function berita_edit(){
		$this->load->model('m_berita','jd');	
		$id = $this->input->post('id');
		$order = 'nama_berita asc';
		$this->data['jenisberita'] = $this->jd->get_table_result_order('berita_jenis',$order);
		$where = array('id_berita' => $id);
		$this->data['d'] = $this->jd->get_table_row('dtberita',$where);
		$order = 'bidang asc';
		$this->data['sotk'] = $this->jd->get_table_result_order('bidang',$order);
		$this->load->view($this->data['folder'].'/berita_edit',$this->data);
	}

	public function berita_update(){
		$this->load->model('m_berita','ma');
		$this->ma->berita_update($this->data);
	}

	public function berita_upload(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		// success submit
		$this->load->model('m_berita','mas');
		$this->mas->gambar_upload($this->data);
	}

	public function confirm_berita_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view($this->data['folder'].'/confirm_berita_delete',$this->data);
	}
	
	public function berita_delete(){
		$this->load->model('m_berita','ma');
		$this->ma->berita_delete($this->data);
	}

	public function add_gambar($id){
		$this->data['menu'] = 'berita';
		$this->load->model('m_berita','mas');
		$where = array('id_berita' => $id);
		$this->data['d'] = $this->mas->get_table_row('dtberita',$where);
		$where = array('id_berita' => $this->data['d']->id_berita);
		$this->data['gambar'] = $this->mas->get_table_result_where('berita_gambar',$where);
		$this->data['message'] = (! isset($this->data['message'])) ? $this->session->flashdata('message') : $this->data['message'];
		$this->load->view($this->data['folder'].'/gambar_tambah',$this->data);		
	}

	public function gambar_view(){
		$this->load->model('m_berita','jd');
		$where = array('id_berita' => $this->input->post('id'));
		$this->data['gambar'] = $this->jd->get_table_result_where('berita_gambar',$where);
		$this->load->view($this->data['folder'].'/gambar_view',$this->data);
	}

	public function confirm_gambar_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view($this->data['folder'].'/confirm_gambar_delete',$this->data);
	}
	
	public function gambar_delete(){
		$this->load->model('m_berita','ma');
		$this->ma->gambar_delete($this->data);
	}

	public function ubahstatus(){
		$this->load->model('m_berita','ma');
		$this->ma->ubahstatus();
	}

}