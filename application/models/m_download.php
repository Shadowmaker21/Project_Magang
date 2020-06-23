<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_download extends CI_Model
{
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	public function download_upload($user){
		$macam = $this->input->post('macam');
		$nama = $this->input->post('nama');
		$bidang = $this->input->post('bidang');
		$deskripsi = $this->input->post('deskripsi');
		// belum pernah upload
		$upload_path = "files/download";    		
		if (!is_dir($upload_path)) {
	        if (!mkdir($upload_path, DIR_READ_MODE)) {
	            log_message('error', 'failed to create folder: ' . $upload_path);
	        }
	    }
	     
	    $config = array(
	        'upload_path' => $upload_path,
	        'encrypt_name' => 'true',
	        'allowed_types' => '*'
	    );

	    $this->load->library('upload');
	    $this->upload->initialize($config);
	    $flag=0;
	    if(!$this->upload->do_upload('download')) { // failed to upload
	    	$name = '';
		    $type = '';
		    $path = '';
		    $size = '';
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
			'download_macam' => $macam,
			'id_bidang' => $bidang,
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'file_path' => $path,
			'file_name' => $name,
			'file_ekstenstion' => $type,
			'file_size' => $size,
			'user_id' => $user['user']['uacc_id'],
			'created' => $date
		);
		if($this->db->insert('download',$data)){
			$pesan = array(
				'jenis' => 'success',
				'title' => 'Tindakan Berhasil Dilakukan '.$flag,
				'message' => 'Data berhasil disimpan'
			);
		} else {
			$pesan = array(
				'jenis' => 'warning',
				'title' => 'Tindakan Gagal Dilakukan '.$flag,
				'message' => 'Data gagal disimpan'
			);
		}
		$this->session->set_flashdata('message', $pesan);
		redirect('download');
	}

	public function get_table_row_where($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function get_table_result_where($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function download_update($user){
	    $tipe = $this->input->post('tipe');
	    $macam = $this->input->post('macam');
	    $nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$date = date('Y-m-d H:i:s',time());
		$user = $user['user']['uacc_id'];

		$upload_path = "files/download";    		
		if (!is_dir($upload_path)) {
	        if (!mkdir($upload_path, DIR_READ_MODE)) {
	            log_message('error', 'failed to create folder: ' . $upload_path);
	        }
	    }
	     
	    $config = array(
	        'upload_path' => $upload_path,
	        'encrypt_name' => 'true',
	        'allowed_types' => '*'
	    );

	    $this->load->library('upload');
	    $this->upload->initialize($config);
	    $flag=0;
	    $id = $this->input->post('id');
	    $where = array('id' => $id);
	    $a = $this->get_table_row_where('dtdownload',$where);
	    $ulang = $this->input->post('ulang');
		if($ulang == 2){
			$name = $a->file_name;
		    $type = $a->file_ekstenstion;
		    $path = $a->file_path;
		    $size = $a->file_size;
		} else {
			$path = $a->file_path.$a->file_name;
			@unlink($path);
		}
	    if(!$this->upload->do_upload('download')) { // failed to upload
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
			'download_macam' => $macam,
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'file_path' => $path,
			'file_name' => $name,
			'file_ekstenstion' => $type,
			'file_size' => $size,
			'user_id' => $user,
			'updated' => $date
		);
		$this->db->where('id',$id);
		if($this->db->update('download',$data)){
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
		redirect('download');
	}

	public function download_delete(){
		$id = $this->input->post('id');		
		$where = array('id' => $id);
	    $data = $this->get_table_row_where('download',$where);
		$path = $data->file_path.$data->file_name;
		if(is_readable($path)) {
		    unlink(realpath($path)); // delete file yang sidah ada
		}
		if($this->db->delete('download',array('id' => $id))){
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
}