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

	public function search(){
		$keyword = $this->input->post('tiket');
		$data['tikets']=$this->M_tiket->show($keyword);
		//$data['payment']=$this->M_tiket->show_payment();
		$this->load->view('v_tiket',$data);
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
			$this->M_tiket->add();
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
		//$this->form_validation->set_rules('id_tiketk','ID TIKETING', 'required');
		$this->form_validation->set_rules('no_rek','NO REKENING', 'required');
		// $this->form_validation->set_rules('nama','NAMA', 'required');
		// $this->form_validation->set_rules('tgl_tf','TANGGAL TRANSFER', 'required');
		// $this->form_validation->set_rules('foto','FOTO', 'required');

		//ambil data tiket dari database (pertama kali ditampikan)
		//$data['tikets']=$this->M_tiket->show_all();
		//$data['tikets']=$this->M_tiket->get_tiket_search($keyword);

		//cek apakah validasi berhasil. jika gagal kembalikan ke halaman form
		if ($this->form_validation->run()==FALSE){
			//jika data inputan ada yang tidak terpenuhi maka tarik kembali ke form pengisian
			redirect('tiket/search');
		}else{
			//jika data validasi tidak ada masalah maka cek inputan foto terlebih dahulu
			$config['upload_path'] = './assets/img/bukti_tf';
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']=2000;
			$config['max_width']=4500;
			$config['max_height']=5700;
			//panggil library untuk upload data foto
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto')){
				//jika data yang diupload tidak sesuia kritria maka tampilkan notif
				$this->session->set_flashdata('notif','
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Terjadi masalah pada foto!</strong> Pastikan foto yang anda inputkan sudah sesuai aturan.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
				//tarik ke form
				redirect('tiket');
			}else{
				//simpan jika berhasil
				$this->M_tiket->add_konfirmasi();
				$this->session->set_flashdata('notif','
				<div class="alert alert-info alert-dismissible fade show" role="alert">
					<strong>Terimakasih! </strong>Pembayaran anda akan kami cek, mohon bersabar sampai tiket anda aktif
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>');
				//tarik ke form
				redirect('tiket');
				}
			}
		}

		public function laporan_pdf(){
			$keyword = $this->input->post('tiket');
			$data['tikets']=$this->M_tiket->show($keyword);

			$this->load->library('pdf');
			$this->pdf->setPaper('A4', 'potrait');
			$this->pdf->filename = "Tiket-TGI.pdf";
			$this->pdf->load_view('v_print_tiket', $data);
		}
}