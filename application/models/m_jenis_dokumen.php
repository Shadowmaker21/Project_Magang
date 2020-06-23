<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_jenis_dokumen extends CI_Model
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

	public function is_jenis_dokumen(){
		$nama = $this->input->post('nama');
		$this->db->where('nama',$nama);
		$query = $this->db->get('jenis_dokumen');
		if($query->num_rows() > 0){
			echo false;
		} else {
			echo true;
		}
	}	

	public function jenis_dokumen_store(){
		$jenis_dokumen = $this->input->post('jenis_dokumen');
		$data = array(
			'nama' => $jenis_dokumen
		);
		if($this->db->insert('jenis_dokumen',$data)){
			$pesan = array(
				'jenis' => '1',
				'message' => 'Data berhasil disimpan.'
			);
		} else {
			$pesan = array(
				'jenis' => '2',
				'message' => 'Data gagal disimpan.'
			);
		}
		echo json_encode($pesan);
	}	

	public function jenis_dokumen_update(){
		$id = $this->input->post('id');
		$jenis_dokumen = $this->input->post('jenis_dokumen');
		$data = array(
			'nama' => $jenis_dokumen
		);
		$this->db->where('id_jenis_dokumen',$id);
		if($this->db->update('jenis_dokumen',$data)){
			$pesan = array(
				'jenis' => '1',
				'message' => 'Data berhasil diperbarui.'
			);
		} else {
			$pesan = array(
				'jenis' => '2',
				'message' => 'Coba untuk beberapa saat lagi.'
			);
		}
		echo json_encode($pesan);
	}

	public function jenis_dokumen_delete(){
		$id = $this->input->post('id');		
		$this->db->delete('jenis_dokumen',array('id_jenis_dokumen' => $id));
		$pesan = array(
			'jenis' => '1',
			'message' => 'Data berhasil dihapus.'
		);	
		echo json_encode($pesan);
	}
}