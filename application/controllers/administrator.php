	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {
 
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
		$this->data['folder'] = 'administrator';
	}

	public function index(){
		$this->data['menu'] = 'dashboard';
		$this->load->view($this->data['folder'].'/index',$this->data);
	}

	public function berita_view(){
		$this->load->model('m_library','jd');
		$order = 'id_berita desc';
		$limit = 5;
		$this->data['w'] = $this->jd->get_table_result_order_limit('dtberita',$order,$limit);
		$this->load->view('administrator/berita_view',$this->data);
	}

	public function jadwal_kegiatan_view(){
		$this->load->model('m_library','jd');
		$order = 'id desc';
		$limit = 5;
		$this->data['w'] = $this->jd->get_table_result_order_limit('dtjadwal_kegiatan',$order,$limit);
		$this->load->view('administrator/jadwal_kegiatan_view',$this->data);
	}

	public function download_view(){
		$this->load->model('m_library','jd');
		$order = 'n_download desc';
		$limit = 5;
		$this->data['w'] = $this->jd->get_table_result_order_limit('dtdownload',$order,$limit);
		$this->load->view('administrator/download_view',$this->data);
	}

	public function count_berita(){
		$this->load->model('m_library','jd');
		echo $this->jd->get_table_numrow_all('dtberita');	
	}

	public function count_banner(){
		$this->load->model('m_library','jd');
		echo $this->jd->get_table_numrow_all('dtcarousel');	
	}

	public function count_galeri(){
		$this->load->model('m_library','jd');
		echo $this->jd->get_table_numrow_all('dtgaleri');	
	}

	public function count_jadwal(){
		$this->load->model('m_library','jd');
		echo $this->jd->get_table_numrow_all('dtjadwal_kegiatan');	
	}

	public function count_download(){
		$this->load->model('m_library','jd');
		echo $this->jd->get_table_numrow_all('dtdownload');	
	}

	public function count_link(){
		$this->load->model('m_library','jd');
		echo $this->jd->get_table_numrow_all('dtlink_terkait');	
	}
	

}