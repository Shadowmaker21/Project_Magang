<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_tipe extends CI_Model
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

	public function get_table_result_where($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function is_tipe(){
		$nama = $this->input->post('nama');
		$this->db->where('nama',$nama);
		$query = $this->db->get('download_jenis');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}	

	public function tipe_store(){
		$tipe = $this->input->post('tipe');
		$data = array(
			'nama' => $tipe
		);
		if($this->db->insert('download_jenis',$data)){
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

	public function tipe_update(){
		$id = $this->input->post('id_statis');
		$tipe = $this->input->post('tipe');
		$data = array(
			'nama' => $tipe
		);
		$this->db->where('id_statis',$id);
		if($this->db->update('download_jenis',$data)){
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

	public function tipe_delete(){
		$id = $this->input->post('id_statis');		
		$arr = array('id_download_jenis' => $id);
		$jum = $this->get_table_numrow($arr,'download_macam');
		if($jum >= 1){
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data tidak dapat dihapus karena terdapat daftar didalamnya .'
			);
		} else {
			$this->db->delete('download_jenis',array('id_statis' => $id));
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil dihapus.'
			);
		}
		echo json_encode($pesan);
	}

	public function is_macam(){
		$nama = $this->input->post('nama');
		$this->db->where('nama_jenis_peraturan',$nama);
		$query = $this->db->get('download_macam');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}	

	public function macam_update(){
		$id = $this->input->post('id_statis');
		$macam = $this->input->post('macam');
		$data = array(
			'nama_jenis_peraturan' => $macam
		);
		$this->db->where('id_download_macam',$id);
		if($this->db->update('download_macam',$data)){
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

	public function macam_delete(){
		$id = $this->input->post('id_statis');		
		$arr = array('download_macam' => $id);
		$jum = $this->get_table_numrow($arr,'download');
		if($jum >= 1){
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data tidak dapat dihapus karena terdapat file download dengan kategori ini .'
			);
		} else {
			$this->db->delete('download_macam',array('id_download_macam' => $id));
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil disimpan.'
			);
		}
		echo json_encode($pesan);
	}

	public function macam_store(){
		$id = $this->input->post('id_statis');
		$macam = $this->input->post('macam');
		$data = array(
			'id_download_jenis' => $id,
			'nama_jenis_peraturan' => $macam
		);
		if($this->db->insert('download_macam',$data)){
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
}