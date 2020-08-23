<?php
class Tiket extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_tiket');
	}

	public function tiket_dipesan(){
		$x['tittle']="Data Tiket (Belum Dibayar)";
		$x['pesan']=$this->M_tiket->get_tiket_pesan();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}
	
	public function tiket_tunggu(){
		$x['tittle']="Data Tiket (Menunggu Konfirmasi)";
		$x['pesan']=$this->M_tiket->get_tiket_menunggu();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}

	public function tiket_ditolak(){
		$x['tittle']="Data Tiket (Pembayaran Gagal)";
		$x['pesan']=$this->M_tiket->get_tiket_ditolak();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}
	
	public function tiket_aktif(){
		$x['tittle']="Data Tiket (Aktif)";
		$x['pesan']=$this->M_tiket->get_tiket_aktif();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}

	

	public function tiket_digunakan(){
		$x['tittle']="Data Tiket (Sudah Digunakan)";
		$x['pesan']=$this->M_tiket->get_tiket_digunakan();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}

	public function update(){
		$this->load->library('form_validation');
		//validasi form yang masuk
		$this->form_validation->set_rules('id_tiket','ID TIKET','required');

		if ($this->form_validation->run()==FALSE){
		echo $this->session->set_flashdata('msg','error');
			redirect ('admin/tiket/tiket_aktif');
		}else{
			$this->M_tiket->update_konfirmasi();
			echo $this->session->set_flashdata('msg','success');
			redirect ('admin/tiket/tiket_aktif');
		}	
	}
}