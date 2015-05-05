<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class staff_operations extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('staff_operations_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->staff_operations_model->staff_operationslist();
		// $data['query2'] = $this->staff_operations_model->additionalinfo();
		$this->load->view('include/header_back');
		$this->load->view('back/staff_operations/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/staff_operations/insert';
		$data['query1'] = $this->staff_operations_model->selectstaffposition();
		$data['query2'] = $this->staff_operations_model->selectstaffdetails();
		$data['query3'] = $this->staff_operations_model->selectstaffstatus();
		$data['query4'] = $this->staff_operations_model->selectbusreg();
 		$this->load->view('include/template_back', $data);
	}
	function insert_staff_operations_info(){
 		
 		$this->form_validation->set_rules('idno2','Staff Personnel','required|xss_clean');
 		$this->form_validation->set_rules('staff_positionid3','Staff Position','required|xss_clean');
 		$this->form_validation->set_rules('staff_statusid3','Staff Operational Status','required|xss_clean');
 		$this->form_validation->set_rules('bus_reg_staff','Bus Assigned','required|xss_clean'); 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/staff_operations/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$idno2 = $this->input->post('idno2');
	 		$staff_positionid3 = $this->input->post('staff_positionid3');
	 		$staff_statusid3 = $this->input->post('staff_statusid3');
	 		$bus_reg_staff = $this->input->post('bus_reg_staff');
	 		
			
			$this->staff_operations_model->insert_staff_operations($idno2,$staff_positionid3,$staff_statusid3,$bus_reg_staff);
			//$this->do_upload_form();
			redirect('staff_operations/index','refresh');
		}
	}
	function edit($staff_operationsid){
		$row=$this->staff_operations_model->edit_staff_operations($staff_operationsid);
		$data['r']=$row;
		$data['query1'] = $this->staff_operations_model->selectstaffposition();
		$data['query2'] = $this->staff_operations_model->selectstaffdetails();
		$data['query3'] = $this->staff_operations_model->selectstaffstatus();
		$data['query4'] = $this->staff_operations_model->selectbusreg();
		$this->load->view('include/header_back');
		$this->load->view('back/staff_operations/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_staff_operations_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'idno' => $this->input->post('idno'),
			'staff_positionid3' => $this->input->post('staff_positionid3'),
			'staff_statusid3' => $this->input->post('staff_statusid3'),
			'bus_reg_staff' => $this->input->post('bus_reg_staff')
			);
		$this->db->where('staff_operationsid', $id)->update( 'staff_operations', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('staff_operations/index','refresh');
	}
	function delete($staff_operationsid)
	{
		$this->db->where('staff_operationsid',$staff_operationsid);
		$this->db->delete('staff_operations');
		redirect('staff_operations/index','refresh');
	}
}
?>