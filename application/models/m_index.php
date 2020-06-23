<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_index extends CI_Model
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

	public function get_table_result_custom($table,$where,$limit,$order){
		$this->db->where($where);
		if($limit){
			$this->db->limit($limit);
		}
		$this->db->order_by($order);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_result_where($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->result();
	}

	public function get_table_like_row($table,$like){
		$this->db->like($like);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function get_table_row($table,$where){
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function get_table_row_custom($table,$where,$limit,$order){
		$this->db->where($where);
		if($limit){
			$this->db->limit($limit);
		}
		$this->db->order_by($order);
		$query = $this->db->get($table);
		return $query->row();
	}

	public function berita_beranda(){
		$this->db->limit(6);
		$this->db->order_by('id_berita','desc');
		$berita = $this->get_table_result('dtberita');
		$one = array();
		foreach($berita as $datars){
			$two = array();
			$two['id_list_berita'] = $datars->id_berita;
			$two['id_bidang'] = $datars->id_bidang;
			$two['judul'] = $datars->judul;
			$two['slug'] = $datars->slug;
			$two['isi'] = $datars->isi;
			$two['n_read'] = $datars->n_read;
			$two['n_comment'] = $datars->n_comment;
			$two['created'] = $datars->created;
			$two['jenis_berita'] = $datars->username;
			$two['username'] = $datars->username;
			$two['tanggalan'] = $datars->tanggalan;
			$two['bidang'] = $datars->bidang;
			$arr = array('id_berita' => $datars->id_berita,'utama' => 1);
			$gambar = $this->get_table_row('berita_gambar',$arr);
			$two['file_name'] = @$gambar->file_name;
			$one[] = (object)$two;
		}
		return $one;
	}

	public function download(){
		$jenis = $this->get_table_result('download_jenis');
		$one = array();
		foreach($jenis as $data){
			$two = array();
			$two['id'] = $data->id;
			$two['nama'] = $data->nama;
			$where = array('download_jenis' => $data->id);
			$datar = $this->get_table_result_where('dtdownload',$where);
			$four = array();
			foreach($datar as $datars){
				$three = array();
				$three['id'] = $datars->id;
				$three['download_macam'] = $datars->download_macam;
				$three['nama'] = $datars->nama;
				$three['deskripsi'] = $datars->deskripsi;
				$three['file_path'] = $datars->file_path;
				$three['file_name'] = $datars->file_name;
				$three['file_ekstenstion'] = $datars->file_ekstenstion;
				$three['file_size'] = $datars->file_size;
				$three['n_download'] = $datars->n_download;
				$three['user'] = $datars->user;
				$four[] = (object)$three;
			}
			$two['data'] = (object)$four;
			$one[] = (object)$two;
		}
		return $one;
	}

	public function berita(){
		$jenis = $this->get_table_result('berita_jenis');
		$one = array();
		foreach($jenis as $data){
			$two = array();
			$two['id_berita_jenis'] = $data->id_berita_jenis;
			$two['nama'] = $data->nama_berita;
			$two['nama_berita'] = str_replace(' ', '_', $data->nama_berita);
			$where = array('id_berita_jenis' => $data->id_berita_jenis);
			$limit = 4;
			$order = 'id_berita desc';
			$datar = $this->get_table_result_custom('dtberita',$where,$limit,$order);
			$four = array();
			foreach($datar as $datars){
				$three = array();
				$three['id_list_berita'] = $datars->id_berita;
				$three['id_bidang'] = $datars->id_bidang;
				$three['judul'] = $datars->judul;
				$three['slug'] = $datars->slug;
				$three['isi'] = $datars->isi;
				$three['n_read'] = $datars->n_read;
				$three['n_comment'] = $datars->n_comment;
				$three['created'] = $datars->created;
				$three['jenis_berita'] = $datars->username;
				$three['username'] = $datars->username;
				$three['tanggalan'] = $datars->tanggalan;
				$three['bidang'] = $datars->bidang;
				$arr = array('id_berita' => $datars->id_berita,'utama' => 1);
				$gambar = $this->get_table_row('berita_gambar',$arr);
				$three['file_name'] = @$gambar->file_name;
				$four[] = (object)$three;
			}
			$two['data'] = $four;
			$one[] = (object)$two;
		}
		return $one;
	}

	public function count_download($id){
		$arr = array('id' => $id);
		$now = $this->get_table_row('download',$arr);
		$count = $now->n_download+1;
		$data = array(
			'n_download' => $count
		);
		$this->db->where('id',$id);
		$this->db->update('download',$data);
	}

	public function counter_berita($id){
		$where = array('id_berita' => $id);
		$berita = $this->get_table_row('dtberita',$where);
		$new = $berita->n_read;
		$new = $new+1;
		$data = array(
			'n_read' => $new
		);
		$this->db->where('id_berita',$id);
		$this->db->update('berita',$data);
	}
}