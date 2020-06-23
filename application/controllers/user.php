<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
 
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
		$this->load->view('user/index');
	}

	public function view_table(){
		$this->load->model('m_admin','ma');
		$this->data['user'] = $this->ma->get_table_result('user_accounts');
		$this->load->view('user/view_table', $this->data);
	}

	public function new_user(){
		$this->load->model('m_user','mg');
		$this->load->view('user/new_user', $this->data);
	}

	public function store_user(){
		$this->load->model('m_user','mg');
		$this->mg->store_user();
		$messages = $this->flexi_auth->get_messages_array();
		$datar = array(
			'title' => 'Information ',
			'status' => $messages['status'],
			'errors' => $messages['errors'],
			'type' => $messages['type']
		);
		echo json_encode($datar);
	}

	public function edit_user(){
		$this->load->model('m_admin','ma');
		$id = $this->input->post('id');
		$this->data['user'] = $this->ma->get_table_row('ugrp_id',$id,'user_groups');
		$this->load->view('user/edit_user', $this->data);
	}

	public function update_user(){
		$this->load->model('m_user','mg');
		$this->mg->update_user();
		$messages = $this->flexi_auth->get_messages_array();
		$datar = array(
			'title' => 'Information ',
			'status' => $messages['status'],
			'errors' => $messages['errors'],
			'type' => $messages['type']
		);
		echo json_encode($datar);
	}

	public function delete_user(){
		$this->load->model('m_user','mg');
		$this->mg->delete_user();
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