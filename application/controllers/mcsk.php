<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class mcsk extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('mcsk_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->mcsk_model->mcsklist();
		$this->load->view('include/header_back');
		$this->load->view('back/mcsk/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/mcsk/insert';
		$data['query4'] = $this->mcsk_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_mcsk_info(){
 		
 		$this->form_validation->set_rules('last_renewal','Previous Renewal','required|xss_clean');
 		$this->form_validation->set_rules('next_renewal','Next Renewal','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_mcsk','Bus Registration','required|xss_clean');
 		
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/mcsk/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$
			$last_renewal = $this->input->post('last_renewal');
			$next_renewal = $this->input->post('next_renewal');
			$bus_reg_mcsk = $this->input->post('bus_reg_mcsk');
			$this->mcsk_model->insert_mcsk($last_renewal,$next_renewal,$bus_reg_mcsk);
			//$this->do_upload_form();
			redirect('mcsk/index','refresh');
		}
	}
	function edit($mcsk_detailsid){
		$row=$this->mcsk_model->edit_mcsk($mcsk_detailsid);
		$data['r']=$row;
		$data['query4'] = $this->mcsk_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/mcsk/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_mcsk_info($id){
		$id=$this->uri->segment(3);
		$data= array(						
			'last_renewal' => $this->input->post('last_renewal'),
			'next_renewal' => $this->input->post('next_renewal'),
			'bus_reg_mcsk' => $this->input->post('bus_reg_mcsk')
			);
		$this->db->where('mcsk_detailsid', $id)->update( 'mcsk_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('mcsk/index','refresh');
	}
	function delete($mcsk_detailsid)
	{
		$this->db->where('mcsk_detailsid',$mcsk_detailsid);
		$this->db->delete('mcsk_details');
		redirect('mcsk/index','refresh');
	}
}
?>