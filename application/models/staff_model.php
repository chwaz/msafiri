<?php
class staff_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function stafflist(){
		$this->db->select('idno,first_name,last_name,middle_name,phoneno,place_ofresidence,address,email,kra_pinno,health_insuranceno');
		$query = $this->db->get('staff_details');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function additionalinfo(){
		$this->db->select('idno,kin_firstname,kin_lastname,kin_middlename,kin_typeofrelation,kin_idno,kin_phoneno');
		$query2 = $this->db->get('staff_details');
        if ($query2->num_rows() > 0) {
            return $query2->result_array();
        } 
	}
	function insert_staff($idno,$first_name,$last_name,$middle_name,$phoneno,$place_ofresidence,$address,$email,$kra_pinno,$health_insuranceno,$kin_firstname,$kin_lastname,$kin_middlename,$kin_typeofrelation,$kin_idno,$kin_phoneno,$kin_residence,$kin_location,$kin_email){
		$query = "INSERT INTO staff_details
		(idno,first_name,last_name,middle_name,phoneno,place_ofresidence,address,email,kra_pinno,health_insuranceno,kin_firstname,kin_lastname,kin_middlename,kin_typeofrelation,kin_idno,kin_phoneno)
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,
		array($idno,$first_name,$last_name,$middle_name,$phoneno,$place_ofresidence,$address,$email,$kra_pinno,$health_insuranceno,$kin_firstname,$kin_lastname,$kin_middlename,$kin_typeofrelation,$kin_idno,$kin_phoneno));

	}
	function edit_staff($idno){
		$this->db->where('idno',$idno);
		$query=$this->db->get('staff_details');
		return $query->row();
	}
	
	// function update_staff($data){
	// 	$this->db->where('idno',$idno);
	// 	$this->db->update('staff_details',$data);
	// }
}
?>