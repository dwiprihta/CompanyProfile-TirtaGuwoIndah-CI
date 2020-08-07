<?php
defined ('BASEPATH') or exit ('no direct script access allowed');

class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper('url','form','html');
        }

    // public function index(){
    //     $this->load->view('v_login_user');
    // }

    public function login(){
        $this->form_validation->set_rules('username','USERNAME','required');
        $this->form_validation->set_rules('password','PASSWORD','required');

        if ($this->form_validation->run==FALSE){
            redirect('v_login_user');
        }else{
            $this->_login();
        }
    }

    public function _login(){
        $email=$this->input->post('email');
        $pass=$this->input->post('password');

        $user=$this->db->get_where('tbl_user',['email'=>$email])->row_array();

        if($user){
            if($user['id_role']=='1'){
                if (password_verify($pass,$user['password'])){
                    $data=[
                        'id'=>$user['id'],
                        'nama'=>$user['nama'],
                        'email'=>$user['email'],
                        'no_telpon'=>$user['no_telpon'],
                    ];

                    $this->session->set_userdata($data);

                        if ($data['id_role']==1){

                            redirect('user/login');

                        }else{

                            redirect('error');
                        }

                    }else{

                    $this->session->set_flashdata('notif','<div style="border-radius:5px; color:#fff; background-color:#da3737;" class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fa fa-exclamation-triangle"></i> Password salah !</div>');

                    redirect('user/login');

                    }
            }else{
                $this->session->set_flashdata('notif','<div style="border-radius:5px; color:#fff; background-color:#da3737;" class="alert alert-danger alert-dismissible fade show" role="alert"><strong></strong><i class="fa fa-exclamation-triangle"></i> Email belum diaktivasi !</div>');
                redirect('user/login');	
            }

    }else{

        $this->session->set_flashdata('notif','<div style="border-radius:5px; color:#fff; background-color:#da3737;" class="alert alert-danger alert-dismissible fade show" role="alert"><strong></strong><i class="fa fa-exclamation-triangle"></i> Username atau password anda salah !</div>');
        redirect('user/login');	

    }
}
    
    // REGISTER
    public function register(){
        $this->load->view('v_register_user');
    }
}
            

    
    



