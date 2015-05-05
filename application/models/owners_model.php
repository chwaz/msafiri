<?php
class owners_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function ownerlist(){
		$query = $this->db->get('owner_details');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_owner($idno,$first_name,$last_name,$middle_name,$username,$owner_type,$owner_address,$owner_email,$owner_phoneno,$place_ofresidence){
		$query = "INSERT INTO owner_details
		(idno,first_name,last_name,middle_name,username,owner_type,owner_address,owner_email,owner_phoneno,place_ofresidence)
		VALUES (?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,
		array($idno,$first_name,$last_name,$middle_name,$username,$owner_type,$owner_address,$owner_email,$owner_phoneno,$place_ofresidence));
	}
	function edit_owner($idno){
		$this->db->where('idno',$idno);
		$query=$this->db->get('owner_details');
		return $query->row();
	}
	
	// function update_owner($data){
	// 	$this->db->where('idno',$idno);
	// 	$this->db->update('owner_details',$data);
	// }
}
?>