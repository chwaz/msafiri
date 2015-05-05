<?php
class september_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('september_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->september_worksheet_model->septemberlist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/september/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/september/insert';
		$data['busreg'] = $this->september_worksheet_model->selectbusreg();
		$data['staffops'] = $this->september_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_september_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_sept','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_sept','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/september/insert');
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
			$bus_reg_sept = $this->input->post('bus_reg_sept');			
			$staff_operationsid_sept = $this->input->post('staff_operationsid_sept');
			
			
			$this->september_worksheet_model->insert_september($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_sept,$staff_operationsid_sept);
			// $this->do_upload_form();
			redirect('september/index','refresh');
		}
	}
	function edit($september_worksheetid){
		$row=$this->september_worksheet_model->edit_bus($september_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->september_worksheet_model->selectstaffops();
		$data['busreg'] = $this->september_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/september/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_september_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_sept' => $this->input->post('bus_reg_sept'),
						'staff_operationsid_sept' => $this->input->post('staff_operationsid_sept')		
					);
		$this->db->where('september_worksheetid',$id);
		$this->db->update('september_worksheet',$data);		
		redirect('september/index','refresh');
	}
	function delete($september_worksheetid)
	{
		$this->db->where('september_worksheetid',$september_worksheetid);
		$this->db->delete('september_worksheet');
		redirect('september/index','refresh');
	}
}
?>