<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jadwal_kegiatan extends CI_Controller {
 
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
		$this->data['folder'] = 'jadwal_kegiatan';
		$this->data['judul'] = 'Jadwal Kegiatan';
	}

	public function index(){
		$this->data['menu'] = 'jadwal_kegiatan';
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function jadwal_kegiatan_view(){
		$this->load->model('m_jadwal_kegiatan','jd');
		$bidang = $this->data['user']['uacc_bidang'];
		if($bidang != 0){
			$this->db->where('id_bidang', $bidang);
		}
		$this->db->order_by('id','desc');
		$query = $this->db->get('dtjadwal_kegiatan');
		$this->data['w'] = $query->result();
		$this->load->view('jadwal_kegiatan/jadwal_kegiatan_view',$this->data);
	}

	public function jadwal_kegiatan_add(){
		$this->load->model('m_berita','jd');	
		$order = 'bidang asc';
		$this->data['sotk'] = $this->jd->get_table_result_order('bidang',$order);
		$this->load->view('jadwal_kegiatan/jadwal_kegiatan_add',$this->data);
	}

	public function is_jadwal_kegiatan(){
		$this->load->model('m_jadwal_kegiatan','ma');
		$this->ma->is_jadwal_kegiatan(0);
	}

	public function is_jadwal_kegiatan1(){
		$this->load->model('m_jadwal_kegiatan','ma');
		$this->ma->is_jadwal_kegiatan(2);
	}

	public function jadwal_kegiatan_store(){
		$this->load->model('m_jadwal_kegiatan','ma');
		$this->ma->jadwal_kegiatan_store($this->data);
	}

	public function jadwal_kegiatan_edit(){
		$this->load->model('m_jadwal_kegiatan','jd');	
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->data['d'] = $this->jd->get_table_row($where,'jadwal_kegiatan');
		$this->load->model('m_berita','b');	
		$order = 'bidang asc';
		$this->data['sotk'] = $this->b->get_table_result_order('bidang',$order);
		$this->load->view('jadwal_kegiatan/jadwal_kegiatan_edit',$this->data);
	}

	public function jadwal_kegiatan_update(){
		$this->load->model('m_jadwal_kegiatan','ma');
		$this->ma->jadwal_kegiatan_update($this->data);
	}

	public function confirm_jadwal_kegiatan_delete(){
		$id = $this->input->post('id');
		$this->data['id'] = $id;
		$this->load->view('jadwal_kegiatan/confirm_jadwal_kegiatan_delete',$this->data);
	}
	
	public function jadwal_kegiatan_delete(){
		$this->load->model('m_jadwal_kegiatan','ma');
		$this->ma->jadwal_kegiatan_delete($this->data);
	}

}