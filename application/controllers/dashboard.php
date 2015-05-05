<?php

class Dashboard extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view('include/header_back');
		$this->load->view('back/admin/index');
		$this->load->view('include/footer_back');
	}
	function logout() {
    
		redirect('login/logout','refresh');
	}
}
?>