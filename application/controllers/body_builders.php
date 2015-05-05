<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class body_builders extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('body_builders_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->body_builders_model->builderslist();
		$this->load->view('include/header_back');
		$this->load->view('back/body_builders/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/body_builders/insert';
 		$this->load->view('include/template_back', $data);
	}
	function insert_builder_info(){
 		$this->form_validation->set_rules('company_name','Company Name','required|xss_clean');
 		$this->form_validation->set_rules('abbreviations','Abbreviations','required|xss_clean');
 		$this->form_validation->set_rules('category_type','Category Type','required|xss_clean');
 		$this->form_validation->set_rules('address', 'Address', 'required|xss_clean');
 		$this->form_validation->set_rules('physical_location','Physical Location','required|xss_clean');
 		$this->form_validation->set_rules('email','Email','required|xss_clean');
 		$this->form_validation->set_rules('phoneno','Phone Number','required|xss_clean');
		$this->form_validation->set_rules('website','Website','required|xss_clean');
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/body_builders/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$company_name = $this->input->post('company_name');
	 		$abbreviations = $this->input->post('abbreviations');
			$category_type = $this->input->post('category_type');
			$address = $this->input->post('address');
			$physical_location = $this->input->post('physical_location');
			$email = $this->input->post('email');
			$phoneno = $this->input->post('phoneno');
			$website = $this->input->post('website');
			$this->body_builders_model->insert_builders($company_name,$abbreviations,$category_type,$address,$physical_location,$email,$phoneno,$website);
			//$this->do_upload_form();
			redirect('body_builders/index','refresh');
		}
	}
	function edit($body_builderid){
		$row=$this->body_builders_model->edit_builder($body_builderid);
		$data['r']=$row;
		$this->load->view('include/header_back');
		$this->load->view('back/body_builders/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_builder_info($id){
		$id=$this->uri->segment(3);
		$data= array(
						
			'company_name' => $this->input->post('company_name'),
	 		'abbreviations' => $this->input->post('abbreviations'),
			'category_type' => $this->input->post('category_type'),
			'address' => $this->input->post('address'),
			'physical_location' => $this->input->post('physical_location'),
			'email' => $this->input->post('email'),
			'phoneno' => $this->input->post('phoneno'),
			'website' => $this->input->post('website')
			);
		$this->db->where('body_builderid', $id)->update( 'body_builder', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('body_builders/index','refresh');
	}
	function delete($body_builderid)
	{
		$this->db->where('body_builderid',$body_builderid);
		$this->db->delete('body_builder');
		redirect('body_builders/index','refresh');
	}
}
?>