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
	
	public function tiket_tunggu(){
		$x['tittle']="Data Tiket (Menunggu Konfirmasi)";
		$x['pesan']=$this->m_tiket->get_tiket_menunggu();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}

	public function tiket_ditolak(){
		$x['tittle']="Data Tiket (Pembayaran Gagal)";
		$x['pesan']=$this->m_tiket->get_tiket_ditolak();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}
	
	public function tiket_aktif(){
		$x['tittle']="Data Tiket (Aktif)";
		$x['pesan']=$this->m_tiket->get_tiket_aktif();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}

	

	public function tiket_digunakan(){
		$x['tittle']="Data Tiket (Sudah Digunakan)";
		$x['pesan']=$this->m_tiket->get_tiket_digunakan();
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_tiket',$x);
	}

	public function update(){
		//validasi form yang masuk
		$this->form_validation->set_rules('id_tiket','ID TIKET','required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('notif',
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Terjadi Kesalahan!</strong> Terjadi kesalahan pada data yang anda ingin update.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
			redirect ('admin/tiket_tunggu');
		}else{
			$convert=$this->M_tiket->add();
			echo json_encode($convert);
			$this->session->set_flashdata('notif',
			'<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>SUCCESS!</strong> Data tiket diupdate
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect ('admin/tiket_tunggu');
		}	
	}
}