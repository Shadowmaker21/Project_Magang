<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grup extends CI_Controller {
 
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
		
		// Load required CI libraries and helpers.
		$this->load->database();
		$this->load->library('session');
 		$this->load->helper('url');
 		$this->load->helper('text');
 		$this->load->helper('form');

  		// IMPORTANT! This global must be defined BEFORE the flexi auth library is loaded! 
 		// It is used as a global that is accessible via both models and both libraries, without it, flexi auth will not work.
		$this->auth = new stdClass;

		// Load 'standard' flexi auth library by default.
		$this->load->library('flexi_auth');	

		// Check user is logged in as an admin.
		// For security, admin users should always sign in via Password rather than 'Remember me'.
		if (! $this->flexi_auth->is_logged_in_via_password() || ! $this->flexi_auth->is_admin()) 
		{
			// Set a custom error message.
			$this->flexi_auth->set_error_message('You must call administrator to access this area.', TRUE);
			$this->session->set_flashdata('message', $this->flexi_auth->get_messages());
			redirect('authenticate');
		}

		
		// Define a global variable to store data that is then used by the end view page.
		$this->data = null;		
		$this->data['user'] = $this->flexi_auth->get_user_by_identity_row_array();
	}

	public function index(){
		$this->load->model('m_grup','mg');
		$this->load->view('grup/index', $this->data);
	}

	public function view_table(){
		$this->load->model('m_admin','ma');
		$this->data['grup'] = $this->ma->get_table_result('user_groups');
		$this->load->view('grup/view_table', $this->data);
	}

	public function new_grup(){
		$this->load->model('m_grup','mg');
		$this->load->view('grup/new_grup', $this->data);
	}

	public function store_grup(){
		$this->load->model('m_grup','mg');
		$this->mg->store_grup();
		$messages = $this->flexi_auth->get_messages_array();
		$datar = array(
			'title' => 'Information ',
			'status' => $messages['status'],
			'errors' => $messages['errors'],
			'type' => $messages['type']
		);
		echo json_encode($datar);
	}

	public function edit_grup(){
		$this->load->model('m_admin','ma');
		$id = $this->input->post('id');
		$this->data['grup'] = $this->ma->get_table_row('ugrp_id',$id,'user_groups');
		$this->load->view('grup/edit_grup', $this->data);
	}

	public function update_grup(){
		$this->load->model('m_grup','mg');
		$this->mg->update_grup();
		$messages = $this->flexi_auth->get_messages_array();
		$datar = array(
			'title' => 'Information ',
			'status' => $messages['status'],
			'errors' => $messages['errors'],
			'type' => $messages['type']
		);
		echo json_encode($datar);
	}

	public function delete_grup(){
		$this->load->model('m_grup','mg');
		$this->mg->delete_grup();
		$messages = $this->flexi_auth->get_messages_array();
		$datar = array(
			'title' => 'Information ',
			'status' => $messages['status'],
			'errors' => $messages['errors'],
			'type' => $messages['type']
		);
		echo json_encode($datar);
	}
}