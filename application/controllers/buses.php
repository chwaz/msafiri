<?php
class Buses extends CI_Controller{

	public $data;
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('buses_model');
		$this->load->model('owners_model');
	}
	function index(){
		$data['query'] = $this->buses_model->buseslist();
		$this->load->view('include/header_back');
		$this->load->view('back/buses/index', $data);
		$this->load->view('include/footer_back');
	}
	function insert(){
		$data['content'] = 'back/buses/insert';
		$data['idnos'] = $this->buses_model->selectownerid();
		$data['builders'] = $this->buses_model->selectbuilderid();
 		$this->load->view('include/template_back', $data);
	}	
	function insert_bus_info(){
 		$this->form_validation->set_rules('bus_reg','Bus Registration','required');
 		$this->form_validation->set_rules('body_builderid2','Body Builder/Fabricator','required');
 		$this->form_validation->set_rules('idno', 'Owner Identification', 'required|xss_clean');
 		$this->form_validation->set_rules('bus_make','Bus Make','required');
 		$this->form_validation->set_rules('bus_model','Bus Model','required');
 		$this->form_validation->set_rules('no_of_seats','Number of Seats','required');
 		$this->form_validation->set_rules('bus_chasisno','Chasis Number','required');
 		$this->form_validation->set_rules('bus_engineno','Engine Number','required');
 		$this->form_validation->set_rules('year_of_manufacture','Year of Manufacture','required');
		$this->form_validation->set_rules('date_of_purchase','Date of Purchase','required');
		
				
		if($this->form_validation->run()==FALSE)
 		{
 			$this->load->view('include/header_back');
 			$this->load->view('back/buses/insert');
 			$this->load->view('include/footer_back');
 		}
 		else
 		{
 		
	 		$bus_reg = $this->input->post('bus_reg');
	 		$body_builderid2 = $this->input->post('body_builderid2');
	 		$idno = $this->input->post('idno');
			$bus_make = $this->input->post('bus_make');
			$bus_model = $this->input->post('bus_model');
			$no_of_seats = $this->input->post('no_of_seats');
			$bus_chasisno = $this->input->post('bus_chasisno');
			$bus_engineno = $this->input->post('bus_engineno');			
			$year_of_manufacture = $this->input->post('year_of_manufacture');
			$date_of_purchase = $this->input->post('date_of_purchase');
			
			$this->buses_model->insert_bus($bus_reg,$body_builderid2,$idno,$bus_make,$bus_model,$no_of_seats,$bus_chasisno,$bus_engineno,$year_of_manufacture,$date_of_purchase);
			// $this->do_upload_form();
			redirect('buses/index','refresh');
		}
	}
	function edit($bus_reg){
		$row=$this->buses_model->edit_bus($bus_reg);
		$data['r']=$row;
		$data['idnos'] = $this->buses_model->selectownerid();
		$data['builders'] = $this->buses_model->selectbuilderid();
		$this->load->view('include/header_back');
		$this->load->view('back/buses/edit',$data);
		$this->load->view('include/footer_back');

	}
	function update_bus_info(){
		$bus_reg=$this->input->post('bus_reg');
		$data= array(
						
						'body_builderid2' => $this->input->post('body_builderid2'),
						'idno_bus' => $this->input->post('idno'),
						'bus_reg' => $this->input->post('bus_reg'),
						'bus_make' => $this->input->post('bus_make'),
						'bus_model' => $this->input->post('bus_model'),
						'no_of_seats' => $this->input->post('no_of_seats'),
						'bus_chasisno' => $this->input->post('bus_chasisno'),
						'bus_engineno' => $this->input->post('bus_engineno'),
						'year_of_manufacture' => $this->input->post('year_of_manufacture'),
						'date_of_purchase' => $this->input->post('date_of_purchase')
		
		
					);
		$this->db->where('bus_reg',$bus_reg);
		$this->db->update('bus_details',$data);		
		redirect('buses/index','refresh');
	}
	function delete($bus_reg)
	{
		$this->db->where('bus_reg',$bus_reg);
		$this->db->delete('bus_details');
		redirect('buses/index','refresh');
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