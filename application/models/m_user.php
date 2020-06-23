<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* Name: flexi auth Model
*
* Author: 
* Rob Hussey
* flexiauth@haseydesign.com
* haseydesign.com/flexi-auth
*
* Copyright 2012 Rob Hussey
* 
* Previous Authors / Contributors:
* Ben Edmunds, benedmunds.com
* Phil Sturgeon, philsturgeon.co.uk
* Mathew Davies
* Filou Tschiemer (User Group Privileges)
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
* 
* http://www.apache.org/licenses/LICENSE-2.0
* 
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.
*
* Description: A full login authorisation and user management library for CodeIgniter based on Ion Auth (By Ben Edmunds) which itself was based on Redux Auth 2 (Mathew Davies)
* Released: 13/09/2012
* Requirements: PHP5 or above and Codeigniter 2.0+
*/


class M_grup extends Flexi_auth_lite_model {
	
	public function &__get($key){
		$CI =& get_instance();
		return $CI->$key;
	}

	public function store_grup(){
		$data = array(
			'ugrp_name' => $this->input->post('name'),
			'ugrp_desc' => $this->input->post('desc')
		);
		if($this->db->insert('user_groups',$data)){
			$this->set_status_message('save_successful', 'config', TRUE);
			return TRUE;
		} else {
			$this->set_error_message('save_unsuccessful', 'config', TRUE);
			return FALSE;
		}
	}

	public function update_grup(){
		$data = array(
			'ugrp_name' => $this->input->post('name'),
			'ugrp_desc' => $this->input->post('desc')
		);
		$this->db->where('ugrp_id',$this->input->post('id'));
		if($this->db->update('user_groups',$data)){
			$this->set_status_message('update_successful', 'config', TRUE);
			return TRUE;
		} else {
			$this->set_error_message('update_unsuccessful', 'config', TRUE);
			return FALSE;
		}
	}

	public function delete_grup(){
		$where = array('ugrp_id' => $this->input->post('id'));
		if($this->db->delete('user_groups',$where)){
			$this->set_status_message('delete_successful', 'config', TRUE);
			return TRUE;
		} else {
			$this->set_error_message('delete_unsuccessful', 'config', TRUE);
			return FALSE;
		}
	}
}