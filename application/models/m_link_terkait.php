<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_link_terkait extends CI_Model
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

	public function link_terkait_save($user){
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$tampil = $this->input->post('tampil');
		$date = date('Y-m-d H:i:s',time()+21600);
		$user = $user['user']['uacc_id'];

		$upload_path = "files/link_terkait";    		
		if (!is_dir($upload_path)) {
	        if (!mkdir($upload_path, DIR_READ_MODE)) {
	            log_message('error', 'failed to create folder: ' . $upload_path);
	        }
	    }
	     
	    $config = array(
	       	'upload_path' => $upload_path,
	        'file_size' => 10240,
	        'encrypt_name' => 'true',
	        'allowed_types' => 'jpg|png|jpeg'
	    );

	    $this->load->library('upload');
	    $this->upload->initialize($config);
	    $name = '';
	    $type = '';
	    $path = '';
	    $size = '';
	    $flag=0;
	    if(!$this->upload->do_upload('gambar')) { // failed to upload
	    	$flag = 1;
	    } else {
	    	$data_upload = $this->upload->data();
		    $name = $data_upload['file_name'];
		    $type = $data_upload['file_ext'];
		    $path = $data_upload['file_path'];
		    $size = $data_upload['file_size'];
	    }

	    $date = date('Y-m-d H:i:s',time());
	    $data = array(
			'tampil' => $tampil,
			'link' => $judul,
			'deskripsi' => $deskripsi,
			'file_path' => $path,
			'file_name' => $name,
			'file_ekstention' => $type,
			'file_size' => $size,
			'user_id' => $user,
			'created' => $date
		);
		if($this->db->insert('link_terkait',$data)){
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
		$this->session->set_flashdata('message', $pesan);
		redirect('link_terkait');
	}	

	public function link_terkait_update($user){
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$tampil = $this->input->post('tampil');
		$date = date('Y-m-d H:i:s',time()+21600);
		$user = $user['user']['uacc_id'];

		$upload_path = "files/link_terkait";    		
		if (!is_dir($upload_path)) {
	        if (!mkdir($upload_path, DIR_READ_MODE)) {
	            log_message('error', 'failed to create folder: ' . $upload_path);
	        }
	    }
	     
	    $config = array(
	        'upload_path' => $upload_path,
	        'file_size' => 10240,
	        'encrypt_name' => 'true',
	        'allowed_types' => 'jpg|png|jpeg'
	    );

	    $this->load->library('upload');
	    $this->upload->initialize($config);
	    $flag=0;
	    $id = $this->input->post('id');
	    $where = array('id' => $id);
	    $a = $this->get_table_row($where,'dtlink_terkait');
	    $ulang = $this->input->post('ulang');
		if($ulang == 2){
			$name = $a->file_name;
		    $type = $a->file_ekstention;
		    $path = $a->file_path;
		    $size = $a->file_size;
		} else {
			$path = $a->file_path.$a->file_name;
			@unlink($path);
		}
	    if(!$this->upload->do_upload('gambar')) { // failed to upload
	    	$flag = 1;
	    } else {
	    	$data_upload = $this->upload->data();
		    $name = $data_upload['file_name'];
		    $type = $data_upload['file_ext'];
		    $path = $data_upload['file_path'];
		    $size = $data_upload['file_size'];
	    }

	    $date = date('Y-m-d H:i:s',time());
	    $data = array(
	    	'tampil' => $tampil,
			'link' => $judul,
			'deskripsi' => $deskripsi,
			'file_path' => $path,
			'file_name' => $name,
			'file_ekstention' => $type,
			'file_size' => $size,
			'user_id' => $user,
			'updated' => $date
		);
		$this->db->where('id',$id);
		if($this->db->update('link_terkait',$data)){
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
		$this->session->set_flashdata('message', $pesan);
		redirect('link_terkait');
	}

	public function link_terkait_delete(){
		$id = $this->input->post('id');		
		$where = array('id' => $id);
		$a = $this->get_table_row($where,'link_terkait');
		$path = $a->file_path.$a->file_name;
		@unlink($path);
		if($this->db->delete('link_terkait',array('id' => $a->id))){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan',
				'message' =>'Data berhasil dihapus'
			);
		} else {
			$pesan = array(
				'jenis' => 'error',
				'title' => 'Tindakan Gagal Dilakukan',
				'message' => 'Data tidak berhasil dihapus.'
			);	
		}
		echo json_encode($pesan);
	}
}