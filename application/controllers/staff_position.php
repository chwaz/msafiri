<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class staff_position extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('staff_position_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->staff_position_model->staff_positionlist();
		$this->load->view('include/header_back');
		$this->load->view('back/staff_position/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/staff_position/insert';
 		$this->load->view('include/template_back', $data);
	}
	function insert_staff_position_info(){
 		
 		$this->form_validation->set_rules('position_title','Position Title','required|xss_clean');
 		$this->form_validation->set_rules('position_description','Position Description','required|xss_clean');
 		$this->form_validation->set_rules('position_salaryclass','Position Salary class','required|xss_clean');
 		
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/staff_position/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$position_title = $this->input->post('position_title');
	 		$position_description = $this->input->post('position_description');
	 		$position_salaryclass = $this->input->post('position_salaryclass');
			
			$this->staff_position_model->insert_staff_position($position_title,$position_description,$position_salaryclass);
			//$this->do_upload_form();
			redirect('staff_position/index','refresh');
		}
	}
	function edit($staff_positionid){
		$row=$this->staff_position_model->edit_staff_position($staff_positionid);
		$data['r']=$row;
		$this->load->view('include/header_back');
		$this->load->view('back/staff_position/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_staff_position_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'position_title' => $this->input->post('position_title'),
	 		'position_description' => $this->input->post('position_description'),
	 		'position_salaryclass' => $this->input->post('position_salaryclass')
			);
		$this->db->where('staff_positionid', $id)->update( 'staff_position', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('staff_position/index','refresh');
	}
	function delete($staff_positionid)
	{
		$this->db->where('staff_positionid',$staff_positionid);
		$this->db->delete('staff_position');
		redirect('staff_position/index','refresh');
	}
}
?>