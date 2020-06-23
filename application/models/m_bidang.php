<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_bidang extends CI_Model
{
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}

	public function get_table_numrow($arr,$table){
		$this->db->where($arr);
		$query = $this->db->get($table);
		return $query->num_rows();
	}

	public function get_table_row($arr,$table){
		$this->db->where($arr);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function get_table_result($table){
		$query = $this->db->get($table);
		return $query->result();
	}

	public function is_bidang(){
		$nama = $this->input->post('nama');
		$this->db->where('bidang',$nama);
		$query = $this->db->get('bidang');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}	

	public function bidang_store(){
		$bidang = $this->input->post('bidang');
		$summernote = $this->input->post('summernote');
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'bidang' => $bidang,
			'deskripsi' => $summernote,
			'created' => $date
		);
		if($this->db->insert('bidang',$data)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil disimpan.'
			);
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal disimpan.'
			);
		}
		echo json_encode($pesan);
	}	

	public function bidang_update(){
		$id = $this->input->post('id');
		$bidang = $this->input->post('bidang');
		$summernote = $this->input->post('summernote');
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'bidang' => $bidang,
			'deskripsi' => $summernote,
			'updated' => $date
		);
		$this->db->where('id',$id);
		if($this->db->update('bidang',$data)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil disimpan.'
			);
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal disimpan.'
			);
		}
		echo json_encode($pesan);
	}

	public function bidang_delete(){
		$id = $this->input->post('id');		
		$this->db->delete('bidang',array('id' => $id));
		$pesan = array(
			'jenis' => 'success',
			'title' => 'Tindakan Berhasil Dilakukan',
			'message' => 'Data berhasil disimpan.'
			);
		echo json_encode($pesan);
	}
}