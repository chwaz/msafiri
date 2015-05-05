<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class bus_status extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('bus_status_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->bus_status_model->statuslist();
		$this->load->view('include/header_back');
		$this->load->view('back/bus_status/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/bus_status/insert';
 		$this->load->view('include/template_back', $data);
	}
	function insert_status_info(){
 		$this->form_validation->set_rules('busstatus','Bus Status','required|xss_clean');
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/bus_status/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$busstatus = $this->input->post('busstatus');
			$this->bus_status_model->insert_status($busstatus);
			redirect('bus_status/index','refresh');
		}
	}
	function edit($bus_statusid){
		$row=$this->bus_status_model->edit_status($bus_statusid);
		$data['r']=$row;
		$this->load->view('include/header_back');
		$this->load->view('back/bus_status/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_status_info($id){
		$id=$this->uri->segment(3);
		$data= array(
						
			'busstatus' => $this->input->post('busstatus')
			);
		$this->db->where('bus_statusid', $id)->update( 'bus_status', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('bus_status/index','refresh');
	}
	function delete($bus_statusid)
	{
		$this->db->where('bus_statusid',$bus_statusid);
		$this->db->delete('bus_status');
		redirect('bus_status/index','refresh');
	}
}
?>