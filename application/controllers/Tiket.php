<?php 
class Tiket extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_tiket');
	}

	public function index(){
		$this->load->view('v_tiket');
	}

	public function add(){
		//validasi form yang masuk
		$this->form_validation->set_rules('no_ktp', 'NOMOR KTP','required');
		$this->form_validation->set_rules('nama','NAMA','required');
		$this->form_validation->set_rules('jk','JENIS KELAMIN','required');
		$this->form_validation->set_rules('email','EMAIL','required');
		$this->form_validation->set_rules('alamat','ALAMAT','required');
		$this->form_validation->set_rules('no_telpon','NO TELPON','required');
		$this->form_validation->set_rules('tgl_kunjungan','TANGGAL KUNJUNGAN','required');
		$this->form_validation->set_rules('jam_kunjungan','JAM KUNJUNGAN','required');
		$this->form_validation->set_rules('jumlah','JUMLAH TIKET','required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('notif',
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Terjadi Kesalahan!</strong> Terjadi kesalahan pada data yang anda inputkan.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
			redirect ('tiket');
		}else{
			$convert=$this->M_tiket->add();
			echo json_encode($convert);
			$this->session->set_flashdata('notif',
			'<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>SUCCESS!</strong> Data yanda berhasil diinput
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect ('tiket');
		}
	}

	public function add_konfirmasi(){
		//validasi form yang masuk
		$this->form_validation->set_rules('no_ktp', 'NOMOR KTP','required');
		$this->form_validation->set_rules('nama','NAMA','required');
		$this->form_validation->set_rules('jk','JENIS KELAMIN','required');
		$this->form_validation->set_rules('email','EMAIL','required');
		$this->form_validation->set_rules('alamat','ALAMAT','required');
		$this->form_validation->set_rules('no_telpon','NO TELPON','required');
		$this->form_validation->set_rules('tgl_kunjungan','TANGGAL KUNJUNGAN','required');
		$this->form_validation->set_rules('jam_kunjungan','JAM KUNJUNGAN','required');
		$this->form_validation->set_rules('jumlah','JUMLAH TIKET','required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('notif',
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Terjadi Kesalahan!</strong> Terjadi kesalahan pada data yang anda inputkan.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>');
			redirect ('tiket');
		}else{
			$convert=$this->M_tiket->add();
			echo json_encode($convert);
			$this->session->set_flashdata('notif',
			'<div class="alert alert-primary alert-dismissible fade show" role="alert">
				<strong>SUCCESS!</strong> Data yanda berhasil diinput
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect ('tiket');
		}
	}

	public function search(){
			$keyword = $this->input->post('tiket');
			$data['tikets']=$this->M_tiket->show_all();
			$data['tikets']=$this->M_tiket->get_tiket_search($keyword);
			$this->load->view('v_tiket',$data);
		}
}