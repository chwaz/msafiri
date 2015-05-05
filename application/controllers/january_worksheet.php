<?php
class january_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('january_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->january_worksheet_model->januarylist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/january/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/january/insert';
		$data['busreg'] = $this->january_worksheet_model->selectbusreg();
		$data['staffops'] = $this->january_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_january_worksheet_info(){
 		// $this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		// $this->form_validation->set_rules('amount','Total Collected Amount','required');
 		// $this->form_validation->set_rules('fuel_liters', 'Total Fuel in Liters', 'required|xss_clean');
 		// $this->form_validation->set_rules('fuel_cost','Total Fuel Cost','required');
 		// $this->form_validation->set_rules('car_wash','Total Car Wash Cost','required');
 		// $this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		// $this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		// $this->form_validation->set_rules('bus_reg_jan','Bus Registration','required');
 		// $this->form_validation->set_rules('staff_operationsid_jan','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/january/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$no_oftrips = $this->input->post('no_oftrips');
	 		$amount = $this->input->post('amount');
	 		$fuel_liters = $this->input->post('fuel_liters');
			$fuel_cost = $this->input->post('fuel_cost');
			$car_wash = $this->input->post('car_wash');
			$miscelleanous = $this->input->post('miscelleanous');
			$no_ofkms = $this->input->post('no_ofkms');
			$bus_reg_jan = $this->input->post('bus_reg_jan');			
			$staff_operationsid_jan = $this->input->post('staff_operationsid_jan');
			
			
			$this->january_worksheet_model->insert_january($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_jan,$staff_operationsid_jan);
			// $this->do_upload_form();
			redirect('january/index','refresh');
		}
	}
	function edit($january_worksheetid){
		$row=$this->january_worksheet_model->edit_january($january_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->january_worksheet_model->selectstaffops();
		$data['busreg'] = $this->january_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/january/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_january_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_jan' => $this->input->post('bus_reg_jan'),
						'staff_operationsid_jan' => $this->input->post('staff_operationsid_jan')		
					);
		$this->db->where('january_worksheetid',$id);
		$this->db->update('january_worksheet',$data);		
		redirect('january/index','refresh');
	}
	function delete($january_worksheetid)
	{
		$this->db->where('january_worksheetid',$january_worksheetid);
		$this->db->delete('january_worksheet');
		redirect('january/index','refresh');
	}
}
?>