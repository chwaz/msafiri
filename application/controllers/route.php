<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class route extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('route_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->route_model->routelist();
		$this->load->view('include/header_back');
		$this->load->view('back/route/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/route/insert';
		$data['query4'] = $this->route_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_route_info(){
 		
 		$this->form_validation->set_rules('route_number','Route Number','required|xss_clean');
 		$this->form_validation->set_rules('route_name','Route Name','required|xss_clean');
 		$this->form_validation->set_rules('route_county','Route County','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_rt','Bus Registration','required|xss_clean');
 		
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/route/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$route_number = $this->input->post('route_number');
	 		$route_name = $this->input->post('route_name');
	 		$route_county = $this->input->post('route_county');
	 		$bus_reg_rt = $this->input->post('bus_reg_rt');
			
			$this->route_model->insert_route($route_number,$route_name,$route_county,$bus_reg_rt);
			//$this->do_upload_form();
			redirect('route/index','refresh');
		}
	}
	function edit($route_detailsid){
		$row=$this->route_model->edit_route($route_detailsid);
		$data['r']=$row;
		$data['query4'] = $this->route_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/route/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_route_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'route_number' => $this->input->post('route_number'),
			'route_name' => $this->input->post('route_name'),
			'route_county' => $this->input->post('route_county'),
			'bus_reg_rt' => $this->input->post('bus_reg_rt'),
			);
		$this->db->where('route_detailsid', $id)->update( 'route_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('route/index','refresh');
	}
	function delete($route_detailsid)
	{
		$this->db->where('route_detailsid',$route_detailsid);
		$this->db->delete('route_details');
		redirect('route/index','refresh');
	}
}
?>