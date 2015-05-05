<?php
class february_worksheet extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('february_worksheet_model');
	}
	// function index(){
	// 	$data['query'] = $this->february_worksheet_model->februarylist();
	// 	$this->load->view('include/header_back');
	// 	$this->load->view('back/february/index', $data);
	// 	$this->load->view('include/footer_back');
	// }
	function insert(){
		$data['content'] = 'back/february/insert';
		$data['busreg'] = $this->february_worksheet_model->selectbusreg();
		$data['staffops'] = $this->february_worksheet_model->selectstaffops();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_february_worksheet_info(){
 		$this->form_validation->set_rules('no_oftrips','Number of Trips','required');
 		$this->form_validation->set_rules('amount','Total Collected Amount','required');
 		$this->form_validation->set_rules('fuel_liters', 'Fuel in Liters', 'required|xss_clean');
 		$this->form_validation->set_rules('fuel_cost','Fuel Cost','required');
 		$this->form_validation->set_rules('car_wash','Car Wash Cost','required');
 		$this->form_validation->set_rules('miscelleanous','Miscelleanous Cost','required');
 		$this->form_validation->set_rules('no_ofkms','Number of Kms','required');
 		$this->form_validation->set_rules('bus_reg_feb','Bus Registration','required');
 		$this->form_validation->set_rules('staff_operationsid_feb','Staff Operation ID','required');
		
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/february/insert');
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
			$bus_reg_feb = $this->input->post('bus_reg_feb');			
			$staff_operationsid_feb = $this->input->post('staff_operationsid_feb');
			
			
			$this->february_worksheet_model->insert_february($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_feb,$staff_operationsid_feb);
			// $this->do_upload_form();
			redirect('february/index','refresh');
		}
	}
	function edit($february_worksheetid){
		$row=$this->february_worksheet_model->edit_february($february_worksheetid);
		$data['r']=$row;
		$data['staffops'] = $this->february_worksheet_model->selectstaffops();
		$data['busreg'] = $this->february_worksheet_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/february/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_february_worksheet_info(){
		$id = $this->uri->segment(3);
		$data= array(
						
						'no_oftrips' => $this->input->post('no_oftrips'),
						'amount' => $this->input->post('amount'),
						'fuel_liters' => $this->input->post('fuel_liters'),
						'fuel_cost' => $this->input->post('fuel_cost'),
						'car_wash' => $this->input->post('car_wash'),
						'miscelleanous' => $this->input->post('miscelleanous'),
						'no_ofkms' => $this->input->post('no_ofkms'),
						'bus_reg_feb' => $this->input->post('bus_reg_feb'),
						'staff_operationsid_feb' => $this->input->post('staff_operationsid_feb')		
					);
		$this->db->where('february_worksheetid',$id);
		$this->db->update('february_worksheet',$data);		
		redirect('february/index','refresh');
	}
	function delete($february_worksheetid)
	{
		$this->db->where('february_worksheetid',$february_worksheetid);
		$this->db->delete('february_worksheet');
		redirect('february/index','refresh');
	}
}
?>