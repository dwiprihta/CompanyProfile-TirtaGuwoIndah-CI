<?php
class M_tiket extends CI_Model{
	function add(){
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

	public function get_tiket_search($keyword){
			$this->db->select('*');
			$this->db->from('tbl_tiket');
			$this->db->like('id_tiket',$keyword);
			$this->db->or_like('email',$keyword);
			$this->db->or_like('no_telpon',$keyword);
			return $this->db->get()->result_array();
		}
}	