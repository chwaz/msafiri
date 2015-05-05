<?php
class july_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('july_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->july_worksheet_model->julylist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/july/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/july/insert';
		$data['busreg'] = $this->july_worksheet_model->selectbusreg();
		$data['staffops'] = $this->july_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_july_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_jul','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_jul','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/july/insert');
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
			$bus_reg_jul = $this->input->post('bus_reg_jul');			
			$staff_operationsid_jul = $this->input->post('staff_operationsid_jul');
			
			
			$this->july_worksheet_model->insert_july($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_jul,$staff_operationsid_jul);
			// $this->do_upload_form();
			redirect('july/index','refresh');
		}
	}
	function edit($july_worksheetid){
		$row=$this->july_worksheet_model->edit_july($july_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->july_worksheet_model->selectstaffops();
		$data['busreg'] = $this->july_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/july/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_july_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_jul' => $this->input->post('bus_reg_jul'),
						'staff_operationsid_jul' => $this->input->post('staff_operationsid_jul')		
					);
		$this->db->where('july_worksheetid',$id);
		$this->db->update('july_worksheet',$data);		
		redirect('july/index','refresh');
	}
	function delete($july_worksheetid)
	{
		$this->db->where('july_worksheetid',$july_worksheetid);
		$this->db->delete('july_worksheet');
		redirect('july/index','refresh');
	}
}
?>