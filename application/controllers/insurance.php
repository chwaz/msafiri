<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class insurance extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('insurance_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->insurance_model->insurancelist();
		$this->load->view('include/header_back');
		$this->load->view('back/insurance/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/insurance/insert';
		$data['query4'] = $this->insurance_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_insurance_info(){
 		$this->form_validation->set_rules('insurance_name','Insurance Company Name','required|xss_clean');
 		$this->form_validation->set_rules('insurance_phoneno','Insurance Contact','required|xss_clean');
 		$this->form_validation->set_rules('insurance_email','Insurance Company Email','required|xss_clean');
 		$this->form_validation->set_rules('insurance_website','Insurance Website','required|xss_clean');
 		$this->form_validation->set_rules('insurance_location','Insurance Physical Location','required|xss_clean');
 		$this->form_validation->set_rules('insurance_address','Insurance Physical Address','required|xss_clean');
 		$this->form_validation->set_rules('last_renewal','Previous Renewal','required|xss_clean');
 		$this->form_validation->set_rules('next_renewal','Next Renewal','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_in','Bus Registration','required|xss_clean');
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/insurance/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$insurance_name = $this->input->post('insurance_name');
	 		$insurance_phoneno = $this->input->post('insurance_phoneno');
			$insurance_email = $this->input->post('insurance_email');
			$insurance_website = $this->input->post('insurance_website');
			$insurance_location = $this->input->post('insurance_location');
			$insurance_address = $this->input->post('insurance_address');
			$last_renewal = $this->input->post('last_renewal');
			$next_renewal = $this->input->post('next_renewal');
			$bus_reg_in = $this->input->post('bus_reg_in');

			$this->insurance_model->insert_insurance($insurance_name,$insurance_phoneno,$insurance_email,$insurance_website,$insurance_location,$insurance_address,$last_renewal,$next_renewal,$bus_reg_in);
			//$this->do_upload_form();
			redirect('insurance/index','refresh');
		}
	}
	function edit($insurance_detailsid){
		$row=$this->insurance_model->edit_insurance($insurance_detailsid);
		$data['r']=$row;
		$data['query4'] = $this->insurance_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/insurance/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_insurance_info($id){
		$id=$this->uri->segment(3);
		$data= array(						
			'insurance_name' => $this->input->post('insurance_name'),
	 		'insurance_phoneno' => $this->input->post('insurance_phoneno'),
			'insurance_email' => $this->input->post('insurance_email'),
			'insurance_website' => $this->input->post('insurance_website'),
			'insurance_location' => $this->input->post('insurance_location'),
			'insurance_address' => $this->input->post('insurance_address'),
			'last_renewal' => $this->input->post('last_renewal'),
			'next_renewal' => $this->input->post('next_renewal'),
			'bus_reg_in' => $this->input->post('bus_reg_in')
			);
		$this->db->where('insurance_detailsid', $id)->update( 'insurance_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('insurance/index','refresh');
	}
	function delete($insurance_detailsid)
	{
		$this->db->where('insurance_detailsid',$insurance_detailsid);
		$this->db->delete('insurance_details');
		redirect('insurance/index','refresh');
	}
}
?>