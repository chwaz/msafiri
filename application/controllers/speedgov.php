<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class speedgov extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('speedgov_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->speedgov_model->speedgovlist();
		$this->load->view('include/header_back');
		$this->load->view('back/speedgov/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/speedgov/insert';
		$data['query4'] = $this->speedgov_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_speedgov_info(){
 		
 		$this->form_validation->set_rules('company_name','Company Name','required|xss_clean');
 		$this->form_validation->set_rules('company_address','Company Address','required|xss_clean');
 		$this->form_validation->set_rules('company_email','Company Email','required|xss_clean');
 		$this->form_validation->set_rules('company_phoneno','Company Phone Number','required|xss_clean');
 		$this->form_validation->set_rules('company_website','Company Website','required|xss_clean');
 		$this->form_validation->set_rules('fitted_by','Fitted by Whom','required|xss_clean');
 		$this->form_validation->set_rules('date_fitted','Date Fitted','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_sg','Bus Registration','required|xss_clean');
 		
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/speedgov/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$company_name = $this->input->post('company_name');
	 		$company_address = $this->input->post('company_address');
	 		$company_email = $this->input->post('company_email');
	 		$company_phoneno = $this->input->post('company_phoneno');
	 		$company_website = $this->input->post('company_website');
	 		$fitted_by = $this->input->post('fitted_by');
	 		$date_fitted = $this->input->post('date_fitted');
	 		$bus_reg_sg = $this->input->post('bus_reg_sg');
			
			$this->speedgov_model->insert_speedgov($company_name,$company_address,$company_email,$company_phoneno,$company_website,$fitted_by,$date_fitted,$bus_reg_sg);
			//$this->do_upload_form();
			redirect('speedgov/index','refresh');
		}
	}
	function edit($speedgov_detailsid){
		$row=$this->speedgov_model->edit_speedgov($speedgov_detailsid);
		$data['r']=$row;
		$data['query4'] = $this->speedgov_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/speedgov/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_speedgov_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'company_name' => $this->input->post('company_name'),
	 		'company_address' => $this->input->post('company_address'),
	 		'company_email' => $this->input->post('company_email'),
	 		'company_phoneno' => $this->input->post('company_phoneno'),
	 		'company_website' => $this->input->post('company_website'),
	 		'fitted_by' => $this->input->post('fitted_by'),
	 		'date_fitted' => $this->input->post('date_fitted'),
	 		'bus_reg_sg' => $this->input->post('bus_reg_sg'),
			);
		$this->db->where('speedgov_detailsid', $id)->update( 'speedgov_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('speedgov/index','refresh');
	}
	function delete($speedgov_detailsid)
	{
		$this->db->where('speedgov_detailsid',$speedgov_detailsid);
		$this->db->delete('speedgov_details');
		redirect('speedgov/index','refresh');
	}
}
?>