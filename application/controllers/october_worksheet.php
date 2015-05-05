<?php
class october_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('october_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->october_worksheet_model->octoberlist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/october/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/october/insert';
		$data['busreg'] = $this->october_worksheet_model->selectbusreg();
		$data['staffops'] = $this->october_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_october_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_oct','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_oct','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/october/insert');
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
			$bus_reg_oct = $this->input->post('bus_reg_oct');			
			$staff_operationsid_oct = $this->input->post('staff_operationsid_oct');
			
			
			$this->october_worksheet_model->insert_october($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_oct,$staff_operationsid_oct);
			// $this->do_upload_form();
			redirect('october/index','refresh');
		}
	}
	function edit($october_worksheetid){
		$row=$this->october_worksheet_model->edit_bus($october_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->october_worksheet_model->selectstaffops();
		$data['busreg'] = $this->october_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/october/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_october_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_oct' => $this->input->post('bus_reg_oct'),
						'staff_operationsid_oct' => $this->input->post('staff_operationsid_oct')		
					);
		$this->db->where('october_worksheetid',$id);
		$this->db->update('october_worksheet',$data);		
		redirect('october/index','refresh');
	}
	function delete($october_worksheetid)
	{
		$this->db->where('october_worksheetid',$october_worksheetid);
		$this->db->delete('october_worksheet');
		redirect('october/index','refresh');
	}
}
?>