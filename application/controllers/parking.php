<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class parking extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('parking_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->parking_model->parkinglist();
		$this->load->view('include/header_back');
		$this->load->view('back/parking/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/parking/insert';
		$data['query4'] = $this->parking_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_parking_info(){
 		
 		$this->form_validation->set_rules('county_name','County Name','required|xss_clean');
 		$this->form_validation->set_rules('last_renewal','Previous Renewal','required|xss_clean');
 		$this->form_validation->set_rules('next_renewal','Next Renewal','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_park','Bus Registration','required|xss_clean');
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/parking/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$county_name = $$this->input->post('county_name');
			$last_renewal = $this->input->post('last_renewal');
			$next_renewal = $this->input->post('next_renewal');
			$bus_reg_park = $this->input->post('bus_reg_park');
			$this->parking_model->insert_parking($county_name,$last_renewal,$next_renewal,$bus_reg_park);
			//$this->do_upload_form();
			redirect('parking/index','refresh');
		}
	}
	function edit($parking_detailsid){
		$row=$this->parking_model->edit_parking($parking_detailsid);
		$data['r']=$row;
		$data['query4'] = $this->parking_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/parking/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_parking_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'county_name' => $this->input->post('county_name');						
			'last_renewal' => $this->input->post('last_renewal'),
			'next_renewal' => $this->input->post('next_renewal'),
			'bus_reg_park' => $this->input->post('bus_reg_park'),
			);
		$this->db->where('parking_detailsid', $id)->update( 'parking_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('parking/index','refresh');
	}
	function delete($parking_detailsid)
	{
		$this->db->where('parking_detailsid',$parking_detailsid);
		$this->db->delete('parking_details');
		redirect('parking/index','refresh');
	}
}
?>