<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_visimisi extends CI_Model
{
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	public function visimisi_store($user){
		$summernote = $this->input->post('summernote');
		$iduser = $user['user']['uacc_id'];
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'isi' => $summernote,
			'created' => $date
		);
		if($this->db->insert('profil_visimisi',$data)){
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

	public function visimisi_update(){
		$id = $this->input->post('id');
		$summernote = $this->input->post('summernote');
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'id' => $id,
			'isi' => $summernote,
			'updated' => $date
		);
		$this->db->where('id',$id);
		if($this->db->update('profil_visimisi',$data)){
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
}