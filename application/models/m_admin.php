<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	// The following method prevents an error occurring when $this->data is modified.
	// Error Message: 'Indirect modification of overloaded property Demo_cart_admin_model::$data has no effect'.
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}


	/**==============================================================================================
	 * UPDATE USER ACCOUNT
	 * The function loops through all POST data checking the 'Suspend' and 'Delete' checkboxes that have been checked, and updates/deletes the user accounts accordingly.
	**/

	public function get_table_row($field,$id,$table){
		$this->db->where($field,$id);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function get_table_result($table){
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_result_where($field,$id,$table){
		$this->db->where($field,$id);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_result_where_array($array,$table){
		$this->db->where($array);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function databeberapa($table,$where,$order,$var){
		$this->db->from($table);
		$this->db->where_in($where);
		$this->db->order_by($order);
		$query = $this->db->get();
		$this->data[$var] = $query->result();
	}
}