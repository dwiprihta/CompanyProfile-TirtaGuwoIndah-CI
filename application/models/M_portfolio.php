<?php
class M_portfolio extends CI_Model{

	function get_portofolio_home(){
		$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio ORDER BY port_id DESC limit 8");
		return $hsl;
	}

	function get_all_portfolio(){
		$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio ORDER BY port_id DESC");
		return $hsl;
	} 
	
	function simpan_portfolio($judul,$isi,$user_nama,$gambar){
		$hsl=$this->db->query("INSERT INTO tbl_portfolio (port_judul,port_deskripsi,port_author,port_image) VALUES ('$judul','$isi','$user_nama','$gambar')");
		return $hsl;
	}

	function get_portfolio_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_portfolio WHERE port_id='$kode'");
		return $hsl;
	}

	function update_portfolio($port_id,$judul,$isi,$user_nama,$gambar){
		$hsl=$this->db->query("UPDATE tbl_portfolio SET port_judul='$judul',port_deskripsi='$isi',port_author='$user_nama',port_image='$gambar' WHERE port_id='$port_id'");
		return $hsl;
	}

	function update_portfolio_tanpa_img($port_id,$judul,$isi,$user_nama){
		$hsl=$this->db->query("UPDATE tbl_portfolio SET port_judul='$judul',port_deskripsi='$isi',port_author='$user_nama' WHERE port_id='$port_id'");
		return $hsl;
	}

	function hapus_portfolio($kode){
		$hsl=$this->db->query("DELETE FROM tbl_portfolio WHERE port_id='$kode'");
		return $hsl;
	}


	//Frontend
	function get_portfolio(){
		$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio ORDER BY port_id DESC");
		return $hsl;
	}

	function get_portfolio_per_page($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_portfolio.*,DATE_FORMAT(port_tanggal,'%d %M %Y') AS tanggal FROM tbl_portfolio ORDER BY port_id DESC LIMIT $offset,$limit");
		return $hsl;
	}
}