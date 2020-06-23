<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_berita_jenis extends CI_Model
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

	public function is_berita_jenis(){
		$nama = $this->input->post('nama');
		$this->db->where('nama_berita',$nama);
		$query = $this->db->get('berita_jenis');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}	

	public function berita_jenis_store(){
		$berita_jenis = $this->input->post('berita_jenis');
		$data = array(
			'nama_berita' => $berita_jenis
		);
		if($this->db->insert('berita_jenis',$data)){
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

	public function berita_jenis_update(){
		$id = $this->input->post('id');
		$berita_jenis = $this->input->post('berita_jenis');
		$data = array(
			'nama_berita' => $berita_jenis
		);
		$this->db->where('id_berita_jenis',$id);
		if($this->db->update('berita_jenis',$data)){
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

	public function berita_jenis_delete(){
		$id = $this->input->post('id');		
		$arr = array('id_berita_jenis' => $id);
		$num = $this->get_table_numrow($arr,'berita');
		if($num == 0){
			if($this->db->delete('berita_jenis',array('id_berita_jenis' => $id))){
				$pesan = array(
					'jenis' => 'success',
					'title' => 'Tindakan Berhasil Dilakukan',
					'message' => 'Data berhasil dihapus.'
				);
			} else {
				$pesan = array(
					'jenis' => 'warning',
					'title' => 'Tindakan Gagal Dilakukan',
					'message' => 'Data gagal dihapus.'
				);
			}
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Tidak Bisa  Dilakukan',
				'message' => 'Terdapat '.$num.' Yang menggunakan Jenis Ini, Anda harus menghapusnya / menggantinya terlebih dahulu'
			);
		}
		echo json_encode($pesan);
	}
}