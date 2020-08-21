<?php
class Tulisan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_tiket');
	}

	public function tiket_dipesan(){
		$data['tittle']="DATA PEMESANAN TIKET";
		$data['pesan']=$this->M_tiket->get_tiket_pesan();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$data);
	}


	
}