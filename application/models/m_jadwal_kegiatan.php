<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_jadwal_kegiatan extends CI_Model
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

	public function is_jadwal_kegiatan($n){
		$nama = $this->input->post('nama');
		$this->db->where('nama',$nama);
		$query = $this->db->get('jadwal_kegiatan');
		if($query->num_rows() > $n){
			echo false;
		} else {
			echo true;
		}
	}	
	
	public function jadwal_kegiatan_store($user){
		$jadwal_kegiatan = $this->input->post('jadwal_kegiatan');
		$tanggal = $this->input->post('tanggal');
		$bidang = $this->input->post('bidang');
		$iduser = $user['user']['uacc_id'];
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'id_bidang' => $bidang,
			'nama' => $jadwal_kegiatan,
			'tanggal' => $tanggal,
			'user_id' => $iduser,
			'created' => $date
		);
		if($this->db->insert('jadwal_kegiatan',$data)){
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

	public function jadwal_kegiatan_update(){
		$id = $this->input->post('id');
		$jadwal_kegiatan = $this->input->post('jadwal_kegiatan');
		$tanggal = $this->input->post('tanggal');
		$bidang = $this->input->post('bidang');
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'id_bidang' => $bidang,
			'nama' => $jadwal_kegiatan,
			'tanggal' => $tanggal,
			'updated' => $date
		);
		$this->db->where('id',$id);
		if($this->db->update('jadwal_kegiatan',$data)){
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

	public function jadwal_kegiatan_delete(){
		$id = $this->input->post('id');		
		$this->db->delete('jadwal_kegiatan',array('id' => $id));
		$pesan = array(
			'jenis' => 'success',
			'title' => 'Tindakan Berhasil Dilakukan',
			'message' => 'Data berhasil disimpan'
		);
		echo json_encode($pesan);
	}
}