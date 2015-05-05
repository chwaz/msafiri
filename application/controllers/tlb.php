<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class tlb extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('tlb_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->tlb_model->tlblist();
		$this->load->view('include/header_back');
		$this->load->view('back/tlb/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/tlb/insert';
		$data['route'] = $this->tlb_model->selectroutename();
		$data['query4'] = $this->tlb_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_tlb_info(){
 		
 		$this->form_validation->set_rules('route_name','Route Name','required|xss_clean');
 		$this->form_validation->set_rules('last_renewal','Last Renewal','required|xss_clean');
 		$this->form_validation->set_rules('next_renewal','Next Renewal','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_tlb','Bus Registration','required|xss_clean');
 		
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/tlb/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$route_name = $this->input->post('route_name');
	 		$last_renewal = $this->input->post('last_renewal');
	 		$next_renewal = $this->input->post('next_renewal');
	 		$bus_reg_tlb = $this->input->post('bus_reg_tlb');
			
			$this->tlb_model->insert_tlb($route_name,$last_renewal,$next_renewal,$bus_reg_tlb);
			//$this->do_upload_form();
			redirect('tlb/index','refresh');
		}
	}
	function edit($tlb_detailsid){
		$row=$this->tlb_model->edit_tlb($tlb_detailsid);
		$data['r']=$row;
		$data['route'] = $this->tlb_model->selectroutename();
		$data['query4'] = $this->tlb_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/tlb/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_tlb_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'route_name' => $this->input->post('route_name'),
	 		'last_renewal' => $this->input->post('last_renewal'),
	 		'next_renewal' => $this->input->post('next_renewal'),
	 		'bus_reg_tlb' => $this->input->post('bus_reg_tlb'),

			);
		$this->db->where('tlb_detailsid', $id)->update( 'tlb_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('tlb/index','refresh');
	}
	function delete($tlb_detailsid)
	{
		$this->db->where('tlb_detailsid',$tlb_detailsid);
		$this->db->delete('tlb_details');
		redirect('tlb/index','refresh');
	}
}
?>