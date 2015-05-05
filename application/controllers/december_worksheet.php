<?php
class december_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('december_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->december_worksheet_model->decemberlist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/december/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/december/insert';
		$data['busreg'] = $this->december_worksheet_model->selectbusreg();
		$data['staffops'] = $this->december_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_december_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_dec','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_dec','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/december/insert');
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
			$bus_reg_dec = $this->input->post('bus_reg_dec');			
			$staff_operationsid_dec = $this->input->post('staff_operationsid_dec');
			
			
			$this->december_worksheet_model->insert_december($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_dec,$staff_operationsid_dec);
			// $this->do_upload_form();
			redirect('december/index','refresh');
		}
	}
	function edit($december_worksheetid){
		$row=$this->december_worksheet_model->edit_bus($december_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->december_worksheet_model->selectstaffops();
		$data['busreg'] = $this->december_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/december/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_december_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_dec' => $this->input->post('bus_reg_dec'),
						'staff_operationsid_dec' => $this->input->post('staff_operationsid_dec')		
					);
		$this->db->where('december_worksheetid',$id);
		$this->db->update('december_worksheet',$data);		
		redirect('december/index','refresh');
	}
	function delete($december_worksheetid)
	{
		$this->db->where('december_worksheetid',$december_worksheetid);
		$this->db->delete('december_worksheet');
		redirect('december/index','refresh');
	}
}
?>