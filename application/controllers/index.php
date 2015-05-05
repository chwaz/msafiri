<?php

class Index extends CI_Controller{
public $data;

	function __construct(){
		parent::__construct();
				
	}
	//Display the front page
	function index(){
	$data['content'] = 'front/index';
	$this->load->view('include/template_front',$data);
	}
	function about(){
	$data['content'] = 'front/about';
	$this->load->view('include/template_front',$data);
	}
	function services(){
	$data['content'] = 'front/services';
	$this->load->view('include/template_front',$data);
	}
	function contact(){
	$data['content'] = 'front/contact';
	$this->load->view('include/template_front',$data);
	}
	
}
?>