<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_album extends CI_Model
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

	public function is_album(){
		$nama = $this->input->post('nama');
		$this->db->where('album',$nama);
		$query = $this->db->get('galeri_album');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}	

	public function album_store(){
		$album = $this->input->post('album');
		$data = array(
			'album' => $album
		);
		if($this->db->insert('galeri_album',$data)){
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

	public function album_update(){
		$id = $this->input->post('id');
		$album = $this->input->post('album');
		$data = array(
			'album' => $album
		);
		$this->db->where('id',$id);
		if($this->db->update('galeri_album',$data)){
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

	public function album_delete(){
		$id = $this->input->post('id');		
		$this->db->delete('galeri_album',array('id' => $id));
		$pesan = array(
			'jenis' => 'success',
			'title' => 'Tindakan Berhasil Dilakukan',
			'message' => 'Data berhasil disimpan.'
		);
		echo json_encode($pesan);
	}
}