<?php
class M_komentar extends CI_Model{

	function get_komentar(){
		$hsl=$this->db->query("SELECT tbl_komentar.*,DATE_FORMAT(komentar_tanggal,'%d %M %Y %H:%i') AS tanggal FROM tbl_komentar WHERE komentar_parent='0'");
		return $hsl;
	}

	function reply_komentar($kode,$komentar,$tulisan_id){
		$nama=$this->session->userdata('nama');
		$hsl=$this->db->query("INSERT INTO tbl_komentar(komentar_nama,komentar_isi,komentar_status,komentar_tulisan_id,komentar_parent) VALUES ('$nama','$komentar','1','$tulisan_id','$kode')");
		return $hsl;
	}

	function publish_komentar($kode){
		$hsl=$this->db->query("UPDATE tbl_komentar SET komentar_status='1' WHERE komentar_id='$kode'");
		return $hsl;
	}

	function hapus_komentar($kode){
		$hsl=$this->db->query("DELETE FROM tbl_komentar WHERE komentar_id='$kode'");
		return $hsl;
	}
}