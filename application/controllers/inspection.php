<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class inspection extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('inspection_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->inspection_model->inspectionslist();
		$this->load->view('include/header_back');
		$this->load->view('back/inspection/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/inspection/insert';
		$data['query4'] = $this->inspection_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_inspection_info(){
		$this->form_validation->set_rules('inspector_id','Inspection Identification','required|xss_clean');
 		$this->form_validation->set_rules('inspector_fname','Inspector`s First Name','required|xss_clean');
 		$this->form_validation->set_rules('inspector_lname','Inspector`s Last Name','required|xss_clean');
 		$this->form_validation->set_rules('last_check','Previous Expiry Date','required|xss_clean');
 		$this->form_validation->set_rules('next_check', 'Next Expiry Date', 'required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_is','Bus Registration','required|xss_clean');
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/inspection/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$inspector_id = $this->input->post('inspector_id');
	 		$inspector_fname = $this->input->post('inspector_fname');
			$inspector_lname = $this->input->post('inspector_lname');
			$last_check = $this->input->post('last_check');
			$next_check = $this->input->post('next_check');
			$bus_reg_is = $this->input->post('bus_reg_is');
			$this->inspection_model->insert_inspectors($inspector_id,$inspector_fname,$inspector_lname,$last_check,$next_check,$bus_reg_is);
			//$this->do_upload_form();
			redirect('inspection/index','refresh');
		}
	}
	function edit($inspection_detailsid){
		$row=$this->inspection_model->edit_inspector($inspection_detailsid);
		$data['r']=$row;
		$data['query4'] = $this->inspection_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/inspection/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_inspection_info($id){
		$id=$this->uri->segment(3);
		$data= array(						
			'inspector_id' => $this->input->post('inspector_id'),
	 		'inspector_fname' => $this->input->post('inspector_fname'),
			'inspector_lname' => $this->input->post('inspector_lname'),
			'last_check' => $this->input->post('last_check'),
			'next_check' => $this->input->post('next_check'),
			'bus_reg_is' => $this->input->post('bus_reg_is'),
			);
		$this->db->where('inspection_detailsid', $id)->update( 'inspection_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('inspection/index','refresh');
	}
	function delete($inspection_detailsid)
	{
		$this->db->where('inspection_detailsid',$inspection_detailsid);
		$this->db->delete('inspection_details');
		redirect('inspection/index','refresh');
	}
}
?>