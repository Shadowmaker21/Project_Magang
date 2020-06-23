<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_tugas extends CI_Model
{
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	public function tugas_store($user){
		$summernote = $this->input->post('summernote');
		$iduser = $user['user']['uacc_id'];
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'isi' => $summernote,
			'created' => $date
		);
		if($this->db->insert('profil_tugas',$data)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil disimpan'
			);
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal disimpan'
			);
		}
		echo json_encode($pesan);
	}	

	public function tugas_update(){
		$id = $this->input->post('id');
		$summernote = $this->input->post('summernote');
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'id' => $id,
			'isi' => $summernote,
			'updated' => $date
		);
		$this->db->where('id',$id);
		if($this->db->update('profil_tugas',$data)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil diperbarui'
			);
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal diperbarui'
			);
		}
		echo json_encode($pesan);
	}
}