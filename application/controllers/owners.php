<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Owners extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('owners_model');
	}
	function index(){
		$data['query'] = $this->owners_model->ownerlist();
		$this->load->view('include/header_back');
		$this->load->view('back/owners/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/owners/insert';
 		$this->load->view('include/template_back', $data);
	}
	function insert_owner_info(){
 		$this->form_validation->set_rules('idno','Identification/Passport No','required');
 		$this->form_validation->set_rules('first_name','First Name','required');
 		$this->form_validation->set_rules('last_name','Last Name','required');
 		$this->form_validation->set_rules('middle_name','Middle Name','required');
 		$this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
 		$this->form_validation->set_rules('ownertype','Type of Ownership','required');
 		$this->form_validation->set_rules('owner_address','Owner Address','required');
 		$this->form_validation->set_rules('owner_email','Owner Email','required');
		$this->form_validation->set_rules('owner_phoneno','Train Name','required');
		$this->form_validation->set_rules('place_ofresidence','Place of Residence','required');
		
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/owners/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$idno = $this->input->post('idno');
	 		$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$middle_name = $this->input->post('middle_name');
			$username = $this->input->post('username');
			$owner_type = $this->input->post('ownertype');
			$owner_address = $this->input->post('owner_address');
			$owner_email = $this->input->post('owner_email');
			$owner_phoneno = $this->input->post('owner_phoneno');
			$place_ofresidence = $this->input->post('place_ofresidence');
			$this->owners_model->insert_owner($idno,$first_name,$last_name,$middle_name,$username,$owner_type,$owner_address,$owner_email,$owner_phoneno,$place_ofresidence);
			//$this->do_upload_form();
			redirect('buses/insert/','refresh');
		}
	}
	function edit($idno){
		$row=$this->owners_model->edit_owner($idno);
		$data['r']=$row;
		$this->load->view('include/header_back');
		$this->load->view('back/owners/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_owner_info(){
		$idno=$this->input->post('idno');
		$data= array(
						
						'idno' => $this->input->post('idno'),
						'first_name' => $this->input->post('first_name'),
						'last_name' => $this->input->post('last_name'),
						'middle_name' => $this->input->post('middle_name'),
						'username' => $this->input->post('username'),
						'owner_type' => $this->input->post('ownertype'),
						'owner_address' => $this->input->post('owner_address'),
						'owner_email' => $this->input->post('owner_email'),
						'owner_phoneno' => $this->input->post('owner_phoneno'),
						'place_ofresidence' => $this->input->post('place_ofresidence')
		
		
					);
		$this->db->where('idno',$idno);
		$this->db->update('owner_details',$data);		
		redirect('owners/index','refresh');
	}
	function delete($idno)
	{
		$this->db->where('idno',$idno);
		$this->db->delete('owner_details');
		redirect('owners/index','refresh');
	}
	function do_upload(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '62500';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "success";
		}
	}

}

?>