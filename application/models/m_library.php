<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_library extends CI_Model
{
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}

	public function get_table_numrow_all($table){
		$query = $this->db->get($table);
		return $query->num_rows();
	}
	
	public function get_table_numrow($arr,$table){
		$this->db->where($arr);
		$query = $this->db->get($table);
		return $query->num_rows();
	}

	public function get_table_result($table){
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_result_where($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_result_order($table,$order){
		$this->db->order_by($order);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_result_order_limit($table,$order,$limit){
		$this->db->limit($limit);
		$this->db->order_by($order);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_row($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function get_table_row_order($table,$order){
		$this->db->order_by($order);
		$query = $this->db->get($table);
		return $query->row();
	}
}