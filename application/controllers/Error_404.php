<?php
class Error_404 extends CI_Controller{

	function index(){
		$this->load->view('v_error_404');
	}
}