<?php
defined ('BASEPATH') or exit ('no direct script access allowed');

class User extends CI_Controller{

    public function __construct(){
        parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper('url','form','html');
        }

    public function index(){
        $this->load->view('v_login_user');
    }

    public function login(){
        $this->form_validation->set_rules('username','USERNAME','required');
        $this->form->validation_set_ruls('password','PASSWORD','required');

    }
}

