<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index2 extends CI_Controller {
 
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

	}
	
	public function index(){
		$this->load->model('m_index','mi');
		$this->data['message'] = $this->session->flashdata('message');
		$where = array();
		$limit = 6;
		$order = 'id desc';
		$this->data['jadwalkegiatan'] = $this->mi->get_table_result_custom('dtjadwal_kegiatan',$where,$limit,$order);
		$berita = $this->mi->get_table_result('berita');
		foreach($berita as $data){
			$where = array('id_berita' => $data->id_berita);
			$order = 'id_list_berita desc';
			$this->data[''.str_replace(' ', '_', $data->nama_berita).''] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
		}
		$where = array();
		$limit = 6;
		$order = 'id_list_berita desc';
		$this->data['all'] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
		$this->load->view('home2/index', $this->data);
	}

	public function berita(){
		$this->load->model('m_index','mi');
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['berita'] = $this->mi->berita();
		$this->load->view('home2/berita', $this->data);
	}

	public function download(){
		$this->load->model('m_index','mi');
		$this->data['message'] = $this->session->flashdata('message');
		$this->data['download'] = $this->mi->download();
		$this->load->view('home2/download', $this->data);	
	}
}