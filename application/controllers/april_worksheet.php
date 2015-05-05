<?php
class april_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('april_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->april_worksheet_model->aprillist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/april/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/april/insert';
		$data['busreg'] = $this->april_worksheet_model->selectbusreg();
		$data['staffops'] = $this->april_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_april_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_apr','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_apr','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/april/insert');
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
			$bus_reg_apr = $this->input->post('bus_reg_apr');			
			$staff_operationsid_apr = $this->input->post('staff_operationsid_apr');
			
			
			$this->april_worksheet_model->insert_april($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_apr,$staff_operationsid_apr);
			// $this->do_upload_form();
			redirect('april/index','refresh');
		}
	}
	function edit($april_worksheetid){
		$row=$this->april_worksheet_model->edit_april($april_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->april_worksheet_model->selectstaffops();
		$data['busreg'] = $this->april_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/april/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_april_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_apr' => $this->input->post('bus_reg_apr'),
						'staff_operationsid_apr' => $this->input->post('staff_operationsid_apr')		
					);
		$this->db->where('april_worksheetid',$id);
		$this->db->update('april_worksheet',$data);		
		redirect('april/index','refresh');
	}
	function delete($april_worksheetid)
	{
		$this->db->where('april_worksheetid',$april_worksheetid);
		$this->db->delete('april_worksheet');
		redirect('april/index','refresh');
	}
}
?>