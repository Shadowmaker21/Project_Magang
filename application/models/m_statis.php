<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_statis extends CI_Model
{
	public function &__get($key)
	{
		$CI =& get_instance();
		return $CI->$key;
	}
	
	public function statis_upload($user){
		$pencipta_arsip = $this->input->post('pencipta_arsip');
		$riwayat = $this->input->post('riwayat');
		$masalah = $this->input->post('masalah');
		$sub_masalah = $this->input->post('sub_masalah');
		$jenis_naskah = $this->input->post('jenis_naskah');
		$bahasa = $this->input->post('bahasa');
		$media = $this->input->post('media');
		$tingkat_perkembangan = $this->input->post('tingkat_perkembangan');
		$kode_pelaksana = $this->input->post('kode_pelaksana');
		$hasil = $this->input->post('hasil');
		$isi = $this->input->post('isi');
		$indeks = $this->input->post('indeks');
		$id_user =  $this->input->post('id_user');
		
		// belum pernah upload
		$upload_path = "files/statis";    		
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
	    if(!$this->upload->do_upload('statis')) { // failed to upload
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
			'id_pencipta_arsip' => $pencipta_arsip,
			'id_riwayat' => $riwayat,
			'id_masalah' => $masalah,
			'id_submasalah' =>$sub_masalah,
			'id_jenis_naskah' =>$jenis_naskah,
			'id_bahasa' =>$bahasa,
			'kurun_waktu' =>$date,
			'id_media' =>$media,
			'id_tingkat_perkembangan' =>$tingkat_perkembangan,
			'hasil' =>$hasil,
			'kode_pelaksana' =>$kode_pelaksana,
			'isi' =>$isi,
			'indeks' =>$indeks,
			'uacc_id' =>$id_user

			
		);
		if($this->db->insert('statis',$data)){
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
		redirect('statis');
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

	public function statis_update($user){
		$id_statis = $this->input->post('id_statis');
		$pencipta_arsip = $this->input->post('pencipta_arsip');
		$riwayat = $this->input->post('riwayat');
		$masalah = $this->input->post('masalah');
		$sub_masalah = $this->input->post('sub_masalah');
		$jenis_naskah = $this->input->post('jenis_naskah');
		$bahasa = $this->input->post('bahasa');
		$isi = $this->input->post('isi');
		$hasil = $this->input->post('hasil');
		$kode_pelaksana = $this->input->post('kode_pelaksana');
		$indeks = $this->input->post('indeks');
		$media = $this->input->post('media');
		$tingkat_perkembangan = $this->input->post('tingkat_perkembangan');
			
	    $data = array(
			'id_pencipta_arsip' => $pencipta_arsip,
			'id_riwayat' => $riwayat,
			'id_masalah' => $masalah,
			'id_submasalah' => $sub_masalah,
			'id_jenis_naskah' => $jenis_naskah,
			'id_bahasa' => $bahasa,
			'isi' => $isi,
			'hasil' => $hasil,
			'kode_pelaksana' => $kode_pelaksana,
			'indeks' => $indeks,
			'id_media' => $media,
			'id_tingkat_perkembangan' => $tingkat_perkembangan

		);
		$this->db->where('id_statis',$id_statis);
		if($this->db->update('statis',$data)){
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
		redirect('statis');
	}

	public function statis_delete(){
		$id = $this->input->post('id');		
		$where = array('id_statis' => $id);
		if($this->db->delete('statis',array('id_statis' => $id))){
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