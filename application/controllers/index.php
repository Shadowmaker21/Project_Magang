<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
 
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
		$limit = 3;
		$order = 'id desc';
		$this->data['jadwalkegiatan'] = $this->mi->get_table_result_custom('dtjadwal_kegiatan',$where,$limit,$order);
		$berita = $this->mi->get_table_result('berita');
		foreach($berita as $data){
			$where = array('id_berita' => $data->id_berita);
			$order = 'id_list_berita desc';
			$this->data[''.str_replace(' ', '_', $data->nama_berita).''] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
		}
		$this->load->view('home/index', $this->data);
	}

    public function dashboard()
    {
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->view('index/admin', $this->data);
	}

	public function berita($id=false){
		if($id){
			$this->load->model('m_index','mi');
			$where = array('id_list_berita' => $id);
			$this->data['detail'] = $this->mi->get_table_row('dtberita',$where);
			$this->data['message'] = $this->session->flashdata('message');

			$where = array();
			$limit = 3;
			$order = 'id desc';
			$berita = $this->mi->get_table_result('berita');
			foreach($berita as $data){
				$where = array('id_berita' => $data->id_berita);
				$order = 'id_list_berita desc';
				$this->data[''.str_replace(' ', '_', $data->nama_berita).''] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
			}

			$this->load->view('home/berita', $this->data);
		} else {
			$this->load->view('home/error', $this->data);
		}
	}

	public function detail($id=false){
		if($id){
			$this->load->model('m_index','mi');
			$where = array('id_berita' => $id);
			$this->data['detail'] = $this->mi->get_table_row('berita',$where);
			$where = array();
			$limit = 3;
			$order = 'id desc';
			$berita = $this->mi->get_table_result('berita');
			foreach($berita as $data){
				$where = array('id_berita' => $data->id_berita);
				$order = 'id_list_berita desc';
				$this->data[''.str_replace(' ', '_', $data->nama_berita).''] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
			}
			$this->data['message'] = $this->session->flashdata('message');
			$this->load->view('home/detail', $this->data);
		} else {
			$this->load->view('home/error', $this->data);
		}
	}

	public function detail_view(){
		$judul = $this->input->post('judul');
		$id = $this->input->post('id');
 		$jum = $this->input->post('jum');
		$table = 'dtberita';
		$like = array('judul'=> $judul,'id_berita' =>$id);
		$order = 'id_list_berita desc';
		$url = 'home/detail_jenis';
		$this->paginate($table,$like,$order,'index','detail_view',$jum,$url,$id);
	}

	public function paginate($table,$like,$order,$folder,$file,$jum,$url,$id){
		$this->load->model('m_pengguna','ma');
		if($jum){
			$limit=$jum;
		} else {
			$limit = 6;
		}
		$offset = $this->uri->segment(3);
		if(!$offset){
			$offset = 0;
		}
		$this->data[$folder] = $this->ma->paginate_result($table,$like,$order,$offset,$limit);
		$total = $this->ma->paginate_numrows($table,$like);
		$this->load->library('pagination');
		$config['base_url'] = base_url().$folder.'/'.$file;
		$config['total_rows'] = $total;
		$config['per_page'] = $limit;
		$config['full_tag_open'] = '<p class="pagination">';
		$config['full_tag_close'] = '</p>';
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active blue lighten-2'><a href='javascript:void''>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config); 
		$this->data['per_page'] = $limit; 
		$this->data['offset'] = $offset; 
		$this->data['pagination']['links'] = $this->pagination->create_links();
		$this->data['pagination']['total_users'] = $total;
		$this->load->view($url,$this->data);
	}

	public function jadwal_kegiatan($id=false){
		$this->load->model('m_index','mi');
		$where = array();
		$limit = 3;
		$order = 'id desc';
		$berita = $this->mi->get_table_result('berita');
		foreach($berita as $data){
			$where = array('id_berita' => $data->id_berita);
			$order = 'id_list_berita desc';
			$this->data[''.str_replace(' ', '_', $data->nama_berita).''] = $this->mi->get_table_result_custom('dtberita',$where,$limit,$order);
		}
		$this->load->view('home/jadwal_kegiatan', $this->data);
	}

	public function sejarah(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_sejarah',$order);
		$this->data['judul'] = 'Sejarah';
		$this->load->view('home/profil', $this->data);
	}

	public function sotk(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_sotk',$order);
		$this->data['judul'] = 'Struktur Organisasi';
		$this->load->view('home/profil', $this->data);
	}

	public function visi_misi(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_visimisi',$order);
		$this->data['judul'] = 'Visi Misi';
		$this->load->view('home/profil', $this->data);
	}

	public function tugas_fungsi(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_tugas',$order);
		$this->data['judul'] = 'Tugas dan Fungsi';
		$this->load->view('home/profil', $this->data);
	}

	public function all(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_tugas',$order);
		$this->data['judul'] = 'Semua Berita';
		$this->load->view('home/all', $this->data);
	}

	public function kegiatan(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_tugas',$order);
		$this->data['judul'] = 'Kegiatan';
		$this->load->view('home/all', $this->data);
	}

	public function peraturan(){
		$this->load->model('m_library','mi');
		$order = 'id desc';
		$this->data['data'] = $this->mi->get_table_row_order('profil_tugas',$order);
		$this->data['judul'] = 'Peraturan';
		$this->load->view('home/peraturan', $this->data);
	}
}