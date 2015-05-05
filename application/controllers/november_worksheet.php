<?php
class november_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('november_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->november_worksheet_model->novemberlist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/november/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/november/insert';
		$data['busreg'] = $this->november_worksheet_model->selectbusreg();
		$data['staffops'] = $this->november_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_november_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_nov','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_nov','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/november/insert');
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
			$bus_reg_nov = $this->input->post('bus_reg_nov');			
			$staff_operationsid_nov = $this->input->post('staff_operationsid_nov');
			
			
			$this->november_worksheet_model->insert_november($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_nov,$staff_operationsid_nov);
			// $this->do_upload_form();
			redirect('november/index','refresh');
		}
	}
	function edit($november_worksheetid){
		$row=$this->november_worksheet_model->edit_bus($november_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->november_worksheet_model->selectstaffops();
		$data['busreg'] = $this->november_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/november/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_november_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_nov' => $this->input->post('bus_reg_nov'),
						'staff_operationsid_nov' => $this->input->post('staff_operationsid_nov')		
					);
		$this->db->where('november_worksheetid',$id);
		$this->db->update('november_worksheet',$data);		
		redirect('november/index','refresh');
	}
	function delete($november_worksheetid)
	{
		$this->db->where('november_worksheetid',$november_worksheetid);
		$this->db->delete('november_worksheet');
		redirect('november/index','refresh');
	}
}
?>