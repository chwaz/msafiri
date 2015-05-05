<?php
class Login extends CI_Controller{
	public $data;
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');		
		$this->load->library('session');
		$this->load->model('admin_model');

	}
	function login_form() {
		$this->load->view('back/admin/login');
	}
	function login_process(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('back/admin/login');
		} 
		else {
			$data = array(
			    'username' => $this->input->post('username'), 
			    'password' => $this->input->post('password')
			);
			$result = $this->admin_model->login($data);
				if($result == TRUE){
					$sess_array = array(
					'username' => $this->input->post('username')
					);
					$this->session->set_userdata('logged_in', $sess_array);
					$result = $this->admin_model->read_user_information($sess_array);
					if($result != false){
						 $data = array( 
						        'username' =>$result[0]->username,
						        'password' =>$result[0]->password
						        );
						 // $this->load->view('include/header_back');
						 // $this->load->view('back/admin/index', $data);
						 // $this->load->view('include/footer_back');
						 redirect('dashboard', 'refresh',$data);
  
					} 
				}
				else{
				    $data = array(
				        'error_message' => 'Invalid Username or Password'
				        );
				  $this->load->view('back/admin/login', $data);
				}
		}
	}
	function logout() {
    
		// Removing session data
		$sess_array = array(
					'username' => ''
					);
		$this->session->unset_userdata('logged_in', $sess_array);
		// $data['message_display'] = 'Successfully Logout';
		$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
		$this->output->set_header('Pragma: no-cache');
		$this->load->view('back/admin/login');

	}
}
?>