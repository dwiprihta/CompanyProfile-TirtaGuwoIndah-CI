<?php 
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		$jum=$this->m_tulisan->berita();
        $page=$this->uri->segment(3);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=6;
        $config['base_url'] = base_url() . 'blog/index/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
        $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_tulisan->berita_perpage($offset,$limit);
		$this->load->view('v_blog',$x);
	}

	function detail($slug){
		$data=$this->m_tulisan->get_berita_by_slug($slug);
		$q=$data->row_array();
		$kode=$q['tulisan_id'];
		$this->m_tulisan->count_views($kode);
		$x['rate']=$this->m_tulisan->cek_ip_rate($kode);
		$x['data']=$this->m_tulisan->get_berita_by_slug($slug);
		$x['populer']=$this->m_tulisan->get_tulisan_populer();
		$x['terbaru']=$this->m_tulisan->get_tulisan_terbaru();
		$x['kat']=$this->m_tulisan->get_kategori_for_blog();
		$this->load->view('v_blog_detail',$x);
	}

	function kategori(){
		$kategori_id=$this->uri->segment(3);
		$jum=$this->m_tulisan->get_tulisan_by_kategori($kategori_id);
        $page=$this->uri->segment(4);
        if(!$page):
            $offset = 0;
        else:
            $offset = $page;
        endif;
        $limit=5;
        $config['base_url'] = base_url() . 'blog/kategori/'.$kategori_id.'/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 4;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $this->pagination->initialize($config);
        $x['page'] =$this->pagination->create_links();
		$x['data']=$this->m_tulisan->get_tulisan_by_kategori_perpage($kategori_id,$offset,$limit);
		$this->load->view('v_blog',$x);
	}

	function search(){
		$keyword=str_replace("'", "", $this->input->post('xfilter',TRUE));
		$x['data']=$this->m_tulisan->search_tulisan($keyword);
		$this->load->view('v_blog',$x);
	}

	function komentar(){
		$tulisan_id=$this->input->post('kode');
		$nama=strip_tags(htmlspecialchars(str_replace("'", "", $this->input->post('nama',TRUE))));
		$email=strip_tags(htmlspecialchars(str_replace("'", "", $this->input->post('email',TRUE))));
		$web=strip_tags(htmlspecialchars(str_replace("'", "", $this->input->post('web',TRUE))));
		$msg=strip_tags(trim(htmlspecialchars(str_replace("'", "", $this->input->post('message',TRUE)))));
		$this->m_tulisan->post_komentar($nama,$email,$web,$msg,$tulisan_id);
		echo $this->session->set_flashdata("msg","<div class='alert alert-info alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Informasi!</strong> Komentar Anda akan tampil setelah di moderasi oleh admin!</div>");
		redirect('blog/detail/'.$tulisan_id);
	}

	function good($slug){
		$data=$this->m_tulisan->get_berita_by_slug($slug);
		if($data->num_rows() > 0){
			$q=$data->row_array();
			$kode=$q['tulisan_id'];
			$this->m_tulisan->count_good($kode);
			redirect('artikel/'.$slug);
		}else{
			redirect('artikel/'.$slug);
		}
	}

	function like($slug){
		$data=$this->m_tulisan->get_berita_by_slug($slug);
		if($data->num_rows() > 0){
			$q=$data->row_array();
			$kode=$q['tulisan_id'];
			$this->m_tulisan->count_like($kode);
			redirect('artikel/'.$slug);
		}else{
			redirect('artikel/'.$slug);
		}
	}

	function love($slug){
		$data=$this->m_tulisan->get_berita_by_slug($slug);
		if($data->num_rows() > 0){
			$q=$data->row_array();
			$kode=$q['tulisan_id'];
			$this->m_tulisan->count_love($kode);
			redirect('artikel/'.$slug);
		}else{
			redirect('artikel/'.$slug);
		}
	}

	function genius($slug){
		$data=$this->m_tulisan->get_berita_by_slug($slug);
		if($data->num_rows() > 0){
			$q=$data->row_array();
			$kode=$q['tulisan_id'];
			$this->m_tulisan->count_genius($kode);
			redirect('artikel/'.$slug);
		}else{
			redirect('artikel/'.$slug);
		}
	}


}