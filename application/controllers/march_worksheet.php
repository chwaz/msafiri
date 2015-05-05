<?php
class march_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('march_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->march_worksheet_model->marchlist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/march/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/march/insert';
		$data['busreg'] = $this->march_worksheet_model->selectbusreg();
		$data['staffops'] = $this->march_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_march_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_mar','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_mar','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/march/insert');
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
			$bus_reg_mar = $this->input->post('bus_reg_mar');			
			$staff_operationsid_mar = $this->input->post('staff_operationsid_mar');
			
			
			$this->march_worksheet_model->insert_march($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_mar,$staff_operationsid_mar);
			// $this->do_upload_form();
			redirect('march/index','refresh');
		}
	}
	function edit($march_worksheetid){
		$row=$this->march_worksheet_model->edit_march($march_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->march_worksheet_model->selectstaffops();
		$data['busreg'] = $this->march_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/march/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_march_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_mar' => $this->input->post('bus_reg_mar'),
						'staff_operationsid_mar' => $this->input->post('staff_operationsid_mar')		
					);
		$this->db->where('march_worksheetid',$id);
		$this->db->update('march_worksheet',$data);		
		redirect('march/index','refresh');
	}
	function delete($march_worksheetid)
	{
		$this->db->where('march_worksheetid',$march_worksheetid);
		$this->db->delete('march_worksheet');
		redirect('march/index','refresh');
	}
}
?>