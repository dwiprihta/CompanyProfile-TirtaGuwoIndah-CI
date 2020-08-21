<?php
class M_tiket extends CI_Model{

	
	public function show($keyword){
		$this->db->select('*');
		$this->db->from('v_pembayaran');
		$this->db->like('id_tiket',$keyword);
		$this->db->or_like('no_ktp',$keyword);
		$this->db->or_like('email',$keyword);
		$this->db->or_like('no_telpon',$keyword);
		return $this->db->get()->result_array();
	}

	public function show_payment(){
		$this->db->get('tbl_pembayaran');
		return $this->db->get()->result_array();
	}
	
	public function add(){
		$data=[
			'id_tiket'=>time(),
			'no_ktp'=>$this->input->post('no_ktp'),
			'nama'=>$this->input->post('nama'),
			'jenis_kelamin'=>$this->input->post('jk'),
			'email'=>$this->input->post('email'),
			'no_telpon'=>$this->input->post('no_telpon'),
			'alamat'=>$this->input->post('alamat'),
			'tgl'=>$this->input->post('tgl_kunjungan'),
			'jam'=>$this->input->post('jam_kunjungan'),	
			'jumlah'=>$this->input->post('jumlah'),	
			'tottal'=>$this->input->post('tottal'),	
		];

		$this->db->insert('tbl_tiket',$data);		
	}

	public function add_konfirmasi(){
		$filename = $this->upload->data('file_name');
		$data=[
			'id_tiket'=>$this->input->post('id_tiket'),
			'no_rek'=>$this->input->post('no_rek'),
			'nama_rek'=>$this->input->post('nama'),
			'tgl_tf'=>$this->input->post('tgl_tf'),
			'foto'=>$filename,	
			'status'=>0,
		];
		$this->db->insert('tbl_pembayaran',$data);	
	}
	

	//=====================ADMIN PESAN================================//
	public function get_tiket_pesan(){
	$tiket=$this->db->get_where('v_tiket',['status'=>NULL]);
	return $tiket->result_array();
	}

	public function get_tiket_menunggu(){
		$tiket=$this->db->get_where('v_tiket',['status'=>0]);
		return $tiket->result_array();
	}

	public function get_tiket_ditolak(){
		$tiket=$this->db->get_where('v_tiket',['status'=>1]);
		return $tiket->result_array();
	}

	public function get_tiket_aktif(){
		$tiket=$this->db->get_where('v_tiket',['status'=>2]);
		return $tiket->result_array();
	}

	public function get_tiket_digunakan(){
		$tiket=$this->db->get_where('v_tiket',['status'=>3]);
		return $tiket->result_array();
	}



	
}	