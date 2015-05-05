<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class psv extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('psv_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->psv_model->psvlist();
		$this->load->view('include/header_back');
		$this->load->view('back/psv/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/psv/insert';
		$data['query4'] = $this->psv_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_psv_info(){
 		
 		$this->form_validation->set_rules('date_ofacquisition','Date of Acquisition','required|xss_clean');
 		$this->form_validation->set_rules('next_renewal','Next Renewal','required|xss_clean');
 		$this->form_validation->set_rules('last_renewal','Previous Renewal','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_psv','Bus Registration','required|xss_clean');
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/psv/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	        $date_ofacquisition = $this->input->post('date_ofacquisition');
			$next_renewal = $this->input->post('next_renewal');
			$last_renewal = $this->input->post('last_renewal');
			$bus_reg_psv = $this->input->post('bus_reg_psv');
			$this->psv_model->insert_psv($date_ofacquisition,$last_renewal,$next_renewal,$bus_reg_psv);
			//$this->do_upload_form();
			redirect('psv/index','refresh');
		}
	}
	function edit($psv_detailsid){
		$row=$this->psv_model->edit_psv($psv_detailsid);
		$data['r']=$row;
		$data['query4'] = $this->psv_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/psv/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_psv_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'date_ofacquisition' => $this->input->post('date_ofacquisition'),						
			'next_renewal' => $this->input->post('next_renewal'),
			'last_renewal' => $this->input->post('last_renewal'),
			'bus_reg_psv' => $this->input->post('bus_reg_psv')
			);
		$this->db->where('psv_detailsid', $id)->update( 'psv_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('psv/index','refresh');
	}
	function delete($psv_detailsid)
	{
		$this->db->where('psv_detailsid',$psv_detailsid);
		$this->db->delete('psv_details');
		redirect('psv/index','refresh');
	}
}
?>