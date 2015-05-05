<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class staff extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->model('staff_model');
		$this->load->library('form_validation');
	}
	function index(){
		$data['query'] = $this->staff_model->stafflist();
		$this->load->view('include/header_back');
		$this->load->view('back/staff/index', $data);
		$this->load->view('include/footer_back');
	}
	function additionalinfo(){
		$data['query2'] = $this->staff_model->additionalinfo();
		$this->load->view('include/header_back');
		$this->load->view('back/staff/additionalinfo', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/staff/insert';
 		$this->load->view('include/template_back', $data);
	}
	function insert_staff_info(){
 		
 		// $this->form_validation->set_rules('idno','Identification/Passport No','required|xss_clean');
 		// $this->form_validation->set_rules('first_name','First Name','required|xss_clean');
 		// $this->form_validation->set_rules('last_name','Last Name','required|xss_clean');
 		// $this->form_validation->set_rules('middle_name','Middle Name','required|xss_clean');
 		// $this->form_validation->set_rules('phoneno','Phone Number','required|xss_clean');
 		// $this->form_validation->set_rules('place_ofresidence','Place of Residence','required|xss_clean');
 		// $this->form_validation->set_rules('address','Address','required|xss_clean');
 		// $this->form_validation->set_rules('email','Email','required|xss_clean');
 		// $this->form_validation->set_rules('kra_pinno','KRA Pin','required|xss_clean');
 		// $this->form_validation->set_rules('health_insuranceno','Health Insurance No','required|xss_clean');
 		// $this->form_validation->set_rules('kin_firstname','Kin`s First Name','required|xss_clean');
 		// $this->form_validation->set_rules('kin_lastname','Kin`s Last Name','required|xss_clean');
 		// $this->form_validation->set_rules('kin_middlename','Kin`s Middle Name','required|xss_clean');
 		// $this->form_validation->set_rules('kin_typeofrelation','Kin`s Type of Relation','required|xss_clean');
 		// $this->form_validation->set_rules('kin_idno','Kin`s Identification/Passport No','required|xss_clean');
 		// $this->form_validation->set_rules('kin_phoneno','Kin`s Phone Number','required|xss_clean');
 		// $this->form_validation->set_rules('kin_residence','Kin`s Place of Residence','required|xss_clean');
 		// $this->form_validation->set_rules('kin_location','Kin`s Location','required|xss_clean');
 		// $this->form_validation->set_rules('kin_email','Kin`s Email','required|xss_clean');
 		
 		
 		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/staff/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$idno = $this->input->post('idno');
	 		$first_name = $this->input->post('first_name');
	 		$last_name = $this->input->post('last_name');
	 		$middle_name = $this->input->post('middle_name');
	 		$phoneno = $this->input->post('phoneno');
	 		$place_ofresidence = $this->input->post('place_ofresidence');
	 		$address = $this->input->post('address');
	 		$email = $this->input->post('email');
	 		$kra_pinno = $this->input->post('kra_pinno');
	 		$health_insuranceno = $this->input->post('health_insuranceno');
	 		$kin_firstname = $this->input->post('kin_firstname');
	 		$kin_lastname = $this->input->post('kin_lastname');
	 		$kin_middlename = $this->input->post('kin_middlename');
	 		$kin_typeofrelation = $this->input->post('kin_typeofrelation');
	 		$kin_idno = $this->input->post('kin_idno');
	 		$kin_phoneno = $this->input->post('kin_phoneno');
	 		
	 		
			
			$this->staff_model->insert_staff($idno,$first_name,$last_name,$middle_name,$phoneno,$place_ofresidence,$address,$email,$kra_pinno,$health_insuranceno,$kin_firstname,$kin_lastname,$kin_middlename,$kin_typeofrelation,$kin_idno,$kin_phoneno);
			//$this->do_upload_form();
			redirect('staff/index','refresh');

		}
	}
	function edit($idno){
		$row=$this->staff_model->edit_staff($idno);
		$data['r']=$row;
		$this->load->view('include/header_back');
		$this->load->view('back/staff/edit',$data);
		$this->load->view('include/footer_back');
	}
	function update_staff_info($id){
		$id=$this->uri->segment(3);
		$data= array(
			'idno' => $this->input->post('idno'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'middle_name' => $this->input->post('middle_name'),
			'phoneno' => $this->input->post('phoneno'),
			'place_ofresidence' => $this->input->post('place_ofresidence'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'kra_pinno' => $this->input->post('kra_pinno'),
			'health_insuranceno' => $this->input->post('health_insuranceno'),
			'kin_firstname' => $this->input->post('kin_firstname'),
			'kin_lastname' => $this->input->post('kin_lastname'),
			'kin_middlename' => $this->input->post('kin_middlename'),
			'kin_typeofrelation' => $this->input->post('kin_typeofrelation'),
			'kin_idno' => $this->input->post('kin_idno'),
			'kin_phoneno' => $this->input->post('kin_phoneno'),
			'kin_residence' => $this->input->post('kin_residence'),
			'kin_location' => $this->input->post('kin_location'),
			'kin_email' => $this->input->post('kin_email')
			);
		$this->db->where('idno', $id)->update( 'staff_details', $data );
		// Very important code - Do not delete!
		// echo $this->db->last_query();die;
		redirect('staff/index','refresh');
	}
	function delete($idno)
	{
		$this->db->where('idno',$idno);
		$this->db->delete('staff_details');
		redirect('staff/index','refresh');
	}
}
?>