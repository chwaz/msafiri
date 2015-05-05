<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class staff_status extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('staff_status_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->staff_status_model->statuslist();
		$this->load->view('include/header_back');
		$this->load->view('back/staff_status/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/staff_status/insert';
 		$this->load->view('include/template_back', $data);
	}
	function insert_status_info(){
 		$this->form_validation->set_rules('staffstatus','staff Status','required|xss_clean');
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/staff_status/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$staffstatus = $this->input->post('staffstatus');
			$this->staff_status_model->insert_status($staffstatus);
			redirect('staff_status/index','refresh');
		}
	}
	function edit($staff_statusid){
		$row=$this->staff_status_model->edit_status($staff_statusid);
		$data['r']=$row;
		$this->load->view('include/header_back');
		$this->load->view('back/staff_status/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_status_info($id){
		$id=$this->uri->segment(3);
		$data= array(
						
			'staffstatus' => $this->input->post('staffstatus')
			);
		$this->db->where('staff_statusid', $id)->update( 'staff_status', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('staff_status/index','refresh');
	}
	function delete($staff_statusid)
	{
		$this->db->where('staff_statusid',$staff_statusid);
		$this->db->delete('staff_status');
		redirect('staff_status/index','refresh');
	}
}
?>