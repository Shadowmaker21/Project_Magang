<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_berita extends CI_Model
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

	public function get_table_row($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->row();
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
	
	public function berita_store($user){
		$jenis_berita = $this->input->post('jenis_berita');
		$judul = $this->input->post('judul');
		$slug = $this->input->post('slug');
		$bidang = $this->input->post('bidang');
		$summernote = $this->input->post('summernote');
		$iduser = $user['user']['uacc_id'];
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'id_berita_jenis' => $jenis_berita,
			'id_bidang' => $bidang,
			'judul' => $judul,
			'slug' => $slug,
			'isi' => $summernote,
			'user_id' => $iduser,
			'created' => $date
		);
		if($this->db->insert('berita',$data)){
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

	public function berita_update(){
		$jenis_berita = $this->input->post('jenis_berita');
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$slug = $this->input->post('slug');
		$bidang = $this->input->post('bidang');
		$summernote = $this->input->post('summernote');
		$date = date('Y-m-d H:i:s',time());
		$data = array(
			'id_berita_jenis' => $jenis_berita,
			'id_bidang' => $bidang,
			'judul' => $judul,
			'slug' => $slug,
			'isi' => $summernote,
			'updated' => $date
		);
		$this->db->where('id_berita',$id);
		if($this->db->update('berita',$data)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil diperbarui.'
			);
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Coba untuk beberapa saat lagi.'
			);
		}
		echo json_encode($pesan);
	}

	public function gambar_upload($user){
		$id = $this->input->post('id');
		$tampil = $this->input->post('tampil');
		// belum pernah upload
		$upload_path = "files/berita/";    		
		if (!is_dir($upload_path)) {
	        if (!mkdir($upload_path, DIR_READ_MODE)) {
	            log_message('error', 'failed to create folder: ' . $upload_path);
	        }
	    }
	     
	    $config = array(
	        'upload_path' => $upload_path,
	        'encrypt_name' => 'true',
	        'allowed_types' => 'jpg|png|jpeg'
	    );

	    $this->load->library('upload');
	    $this->upload->initialize($config);
	    if(!$this->upload->do_upload('gambar')) { // failed to upload
	    	$pesan = array(
				'jenis' => 'warning',
				'title' => 'Terjadi Kesalahan',
				'message' => $this->upload->display_errors()
			);
			$this->session->set_flashdata('message', $pesan);
	        redirect('berita/add_gambar/'.$id.'');
	    } else {
	    	if($tampil == 1){
		    	$update = array(
		    		'utama' => 0
		    	);
		    	$this->db->where('id_berita',$id);
		    	$this->db->update('berita_gambar',$update);
		    }
	    	$data_upload = $this->upload->data();
	        $name = $data_upload['file_name'];
	        $type = $data_upload['file_ext'];
	        $path = $data_upload['file_path'];
	        $size = $data_upload['file_size'];
	        $date = date('Y-m-d H:i:s',time());
	        $users = $user['user']['uacc_id'];
			$data = array(
				'id_berita' => $id,
				'utama' => $tampil,
				'file_path' => $path,
				'file_name' => $name,
				'file_ekstention' => $type,
				'file_size' => $size,
				'user_id' => $users,
				'created' => $date
			);
	        $this->db->insert('berita_gambar',$data);
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil disimpan'
			);
			$this->session->set_flashdata('message', $pesan);
			redirect('berita/add_gambar/'.$id.'');
		}
	}

	public function berita_delete(){
		$id = $this->input->post('id');		
		$where = array('id_berita' => $id);
		$berita = $this->get_table_result_where('berita_gambar',$where);
		foreach($berita as $data){
			$path = $data->file_path.$data->file_name;
			if(is_readable($path)) {
			    @unlink(realpath($path)); // delete file yang sidah ada
			}
		}
		if($this->db->delete('berita_gambar',array('id_berita' => $id))){
			if($this->db->delete('berita',array('id_berita' => $id))){
				$pesan = array(
					'jenis' => 'success',
					'title' => 'Tindakan Berhasil Dilakukan',
					'message' => 'Data berhasil dihapus.'
				);	
			} else {
				$pesan = array(
					'jenis' => 'warning',
					'title' => 'Tindakan Gagal Dilakukan',
					'message' => 'Data tidak berhasil dihapus'
				);	
			}
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data gagal dihapus.'
			);	
		}

		echo json_encode($pesan);
	}

	public function gambar_delete(){
		$id = $this->input->post('id');		
		$where = array('id' => $id);
	    $data = $this->get_table_row('berita_gambar',$where);
		$path = $data->file_path.$data->file_name;
		if(is_readable($path)) {
		    unlink(realpath($path)); // delete file yang sidah ada
		}
		if($this->db->delete('berita_gambar',array('id' => $id))){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data telah dihapus'
			);	
		} else {
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data belum dapat dihapus'
			);	
		}
		echo json_encode($pesan);
	}

	public function ubahstatus(){
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$gambar = $this->get_table_row('berita_gambar',$where);
		$data = array(
			'utama' => 0
		);
		$this->db->where('id_berita',$gambar->id_berita);
		if($this->db->update('berita_gambar',$data)){
			$datar = array(
				'utama' => 1
			);
			$this->db->where('id',$id);
			$this->db->update('berita_gambar',$datar);
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' => 'Data berhasil diperbarui.'
			);
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Coba untuk beberapa saat lagi.'
			);
		}
		echo json_encode($pesan);
	}
}