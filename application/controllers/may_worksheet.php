<?php
class may_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('may_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->may_worksheet_model->maylist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/may/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/may/insert';
		$data['busreg'] = $this->may_worksheet_model->selectbusreg();
		$data['staffops'] = $this->may_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_may_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_may','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_may','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/may/insert');
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
			$bus_reg_may = $this->input->post('bus_reg_may');			
			$staff_operationsid_may = $this->input->post('staff_operationsid_may');
			
			
			$this->may_worksheet_model->insert_may($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_may,$staff_operationsid_may);
			// $this->do_upload_form();
			redirect('may/index','refresh');
		}
	}
	function edit($may_worksheetid){
		$row=$this->may_worksheet_model->edit_may($may_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->may_worksheet_model->selectstaffops();
		$data['busreg'] = $this->may_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/may/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_may_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_may' => $this->input->post('bus_reg_may'),
						'staff_operationsid_may' => $this->input->post('staff_operationsid_may')		
					);
		$this->db->where('may_worksheetid',$id);
		$this->db->update('may_worksheet',$data);		
		redirect('may/index','refresh');
	}
	function delete($may_worksheetid)
	{
		$this->db->where('may_worksheetid',$may_worksheetid);
		$this->db->delete('may_worksheet');
		redirect('may/index','refresh');
	}
}
?>