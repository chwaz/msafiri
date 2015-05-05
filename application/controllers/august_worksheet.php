<?php
class august_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('august_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->august_worksheet_model->augustlist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/august/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/august/insert';
		$data['busreg'] = $this->august_worksheet_model->selectbusreg();
		$data['staffops'] = $this->august_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_august_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_aug','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_aug','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/august/insert');
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
			$bus_reg_aug = $this->input->post('bus_reg_aug');			
			$staff_operationsid_aug = $this->input->post('staff_operationsid_aug');
			
			
			$this->august_worksheet_model->insert_august($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_aug,$staff_operationsid_aug);
			// $this->do_upload_form();
			redirect('august/index','refresh');
		}
	}
	function edit($august_worksheetid){
		$row=$this->august_worksheet_model->edit_august($august_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->august_worksheet_model->selectstaffops();
		$data['busreg'] = $this->august_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/august/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_august_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_aug' => $this->input->post('bus_reg_aug'),
						'staff_operationsid_aug' => $this->input->post('staff_operationsid_aug')		
					);
		$this->db->where('august_worksheetid',$id);
		$this->db->update('august_worksheet',$data);		
		redirect('august/index','refresh');
	}
	function delete($august_worksheetid)
	{
		$this->db->where('august_worksheetid',$august_worksheetid);
		$this->db->delete('august_worksheet');
		redirect('august/index','refresh');
	}
}
?>