<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class service_repair extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('service_repair_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->service_repair_model->service_repairlist();
		$this->load->view('include/header_back');
		$this->load->view('back/service_repair/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/service_repair/insert';
		$data['busreg'] = $this->service_repair_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_service_repair_info(){
 		
 		$this->form_validation->set_rules('bus_reg_sr','Bus Registration','required|xss_clean');
 		$this->form_validation->set_rules('nature','Nature of Repair','required|xss_clean');
 		$this->form_validation->set_rules('description','Description','required|xss_clean');
 		$this->form_validation->set_rules('total_cost','Total Cost','required|xss_clean');
 		$this->form_validation->set_rules('date_of_previous','Previous Service Check','required|xss_clean');
 		$this->form_validation->set_rules('date_of_next','Next Service Check','required|xss_clean');
 		$this->form_validation->set_rules('garage_name','Garage Name','required|xss_clean');
 		$this->form_validation->set_rules('garage_location','Garage Location','required|xss_clean');
 		$this->form_validation->set_rules('garage_contact','Garage Contact','required|xss_clean');
 		$this->form_validation->set_rules('garage_address','Garage Address','required|xss_clean');
 		
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/service_repair/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$bus_reg_sr = $this->input->post('bus_reg_sr');
	 		$nature = $this->input->post('nature');
	 		$description = $this->input->post('description');
	 		$total_cost = $this->input->post('total_cost');
	 		$date_of_previous = $this->input->post('date_of_previous');
	 		$date_of_next = $this->input->post('date_of_next');
	 		$garage_name = $this->input->post('garage_name');
			$garage_location = $this->input->post('garage_location');
			$garage_contact = $this->input->post('garage_contact');
			$garage_address = $this->input->post('garage_address');
			
			$this->service_repair_model->insert_service_repair($bus_reg_sr,$nature,$description,$total_cost,$date_of_previous,$date_of_next,$garage_name,$garage_location,$garage_contact,$garage_address);
			//$this->do_upload_form();
			redirect('service_repair/index','refresh');
		}
	}
	function edit($service_repairid){
		$row=$this->service_repair_model->edit_service_repair($service_repairid);
		$data['r']=$row;
		$data['busreg'] = $this->service_repair_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/service_repair/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_service_repair_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'bus_reg_sr' => $this->input->post('bus_reg_sr'),
			'nature' => $this->input->post('nature'),
			'description' => $this->input->post('description'),
			'total_cost' => $this->input->post('total_cost'),
			'date_of_previous' => $this->input->post('date_of_previous'),
			'date_of_next' => $this->input->post('date_of_next'),
			'garage_name' => $this->input->post('garage_name'),
			'garage_location' => $this->input->post('garage_location'),
			'garage_contact' => $this->input->post('garage_contact'),
			'garage_address' => $this->input->post('garage_address')
			);
		$this->db->where('service_repairid', $id)->update( 'service_&_repair', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('service_repair/index','refresh');
	}
	function delete($service_repairid)
	{
		$this->db->where('service_repairid',$service_repairid);
		$this->db->delete('service_&_repair');
		redirect('service_repair/index','refresh');
	}
}
?>