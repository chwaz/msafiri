<?php

class services extends CI_Controller{
public $data;

	function __construct(){
		parent::__construct();
				
	}
	//Display the front page
	function index(){
	$data['content'] = 'front/services';
	$this->load->view('include/template_front',$data);
	}
	
}
?>