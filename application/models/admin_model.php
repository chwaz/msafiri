<?php
class admin_model extends CI_Model{
	public $data;
	function __construct(){
		parent::__construct();
	}
	function login($data){
		// $condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$query = $this->db->get('admin');
		
		if($query->num_rows == 1){
			return true;
		}
		else{
			return false;
		}
	}
	function read_user_information($sess_array) {

        $condition = "username =" . "'" . $sess_array['username'] . "'";
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}





?>