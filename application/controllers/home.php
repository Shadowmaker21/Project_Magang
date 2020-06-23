<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
 
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
		$this->load->helper('path');
	}
	
	public function index(){
		$this->load->model('m_index','mi');
		$this->data['message'] = $this->session->flashdata('message');
		$where = array();
		$limit = 6;
		$order = 'id desc';
		$this->data['jadwalkegiatan'] = $this->mi->get_table_result_custom('dtjadwal_kegiatan',$where,$limit,$order);
		$berita = $this->mi->get_table_result('berita_jenis');
		foreach($berita as $data){
			$where = array('id_berita_jenis' => $data->id_berita_jenis);
			$order = 'id_berita desc';
			$this->data[''.str_replace(' ', '_', $data->nama_berita).''] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
		}
		$where = array();
		$limit = 6;
		$order = 'id_berita desc';
		$this->data['title'] = 'beranda';
		//$this->data['all'] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
		$this->data['all'] = $this->mi->berita_beranda();
		$this->data['carousel'] = $this->mi->get_table_result('dtcarousel');
		$this->load->view('home/index', $this->data);
	}

	public function sejarah(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_sejarah',$order);
		$this->data['title'] = 'profil';
		$this->data['judul'] = 'Sejarah';
		$this->load->view('home/profil', $this->data);
	}

	public function sotk(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_sotk',$order);
		$this->data['title'] = 'profil';
		$this->data['judul'] = 'Struktur Organisasi';
		$this->load->view('home/profil', $this->data);
	}

	public function visi_misi(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_visimisi',$order);
		$this->data['title'] = 'profil';
		$this->data['judul'] = 'Visi Misi';
		$this->load->view('home/profil', $this->data);
	}

	public function tugas_fungsi(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_tugas',$order);
		$this->data['title'] = 'profil';
		$this->data['judul'] = 'Tugas dan Fungsi';
		$this->load->view('home/profil', $this->data);
	}

	public function berita($show=FALSE){
		$this->load->model('m_index','mi');
		$this->data['title'] = 'berita';
		if($show){
			$like = array('slug' => $show);
			$this->data['detail'] = $this->mi->get_table_like_row('dtberita',$like);
			$where = array('id_berita' => $this->data['detail']->id_berita,'utama' => 1);
			$limit = 1;
			$order = 'id asc';
			$this->data['gambar'] = $this->mi->get_table_row_custom('berita_gambar',$where,$limit,$order);
			$this->mi->counter_berita($this->data['detail']->id_berita);
			$where = array('id_berita' => $this->data['detail']->id_berita);
			$this->data['lainnya'] = $this->mi->get_table_result_where('berita_gambar',$where);
			$this->load->view('home/berita_detail', $this->data);	
		} else {
			$this->data['message'] = $this->session->flashdata('message');
			$this->data['berita'] = $this->mi->berita();
			$this->load->view('home/berita', $this->data);
		}
	}

	public function download(){
		$this->load->model('m_index','mi');
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['download'] = $this->mi->download();
		$this->data['title'] = 'download';
		$this->load->view('home/download', $this->data);	
	}

	public function download_file($id){
		//$id = $this->input->post('id');
		$this->load->helper('download');
		$this->load->model('m_index','mi');
		$where = array('id' => $id);
		$datar = $this->mi->get_table_row('dtdownload',$where);
		$path = $datar->file_path.$datar->file_name;
		$data = file_get_contents($path); // Read the file's contents
		$name = str_replace(' ', '_', $datar->nama).$datar->file_ekstenstion;
		$this->mi->count_download($id);
		force_download($name, $data);

	}
}