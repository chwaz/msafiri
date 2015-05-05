<?php
class june_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('june_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->june_worksheet_model->junelist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/june/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/june/insert';
		$data['busreg'] = $this->june_worksheet_model->selectbusreg();
		$data['staffops'] = $this->june_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_june_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_jun','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_jun','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/june/insert');
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
			$bus_reg_jun = $this->input->post('bus_reg_jun');			
			$staff_operationsid_jun = $this->input->post('staff_operationsid_jun');
			
			
			$this->june_worksheet_model->insert_june($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_jun,$staff_operationsid_jun);
			// $this->do_upload_form();
			redirect('june/index','refresh');
		}
	}
	function edit($june_worksheetid){
		$row=$this->june_worksheet_model->edit_june($june_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->june_worksheet_model->selectstaffops();
		$data['busreg'] = $this->june_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/june/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_june_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_jun' => $this->input->post('bus_reg_jun'),
						'staff_operationsid_jun' => $this->input->post('staff_operationsid_jun')		
					);
		$this->db->where('june_worksheetid',$id);
		$this->db->update('june_worksheet',$data);		
		redirect('june/index','refresh');
	}
	function delete($june_worksheetid)
	{
		$this->db->where('june_worksheetid',$june_worksheetid);
		$this->db->delete('june_worksheet');
		redirect('june/index','refresh');
	}
}
?>