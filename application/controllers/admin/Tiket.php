<?php
class Tiket extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_tiket');
	}

	public function tiket_dipesan(){
		$x['tittle']="Data Tiket (Belum Dibayar)";
		$x['pesan']=$this->m_tiket->get_tiket_pesan();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}	
}