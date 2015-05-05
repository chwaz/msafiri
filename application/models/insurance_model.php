<?php
class insurance_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function insurancelist(){
		$query = $this->db->get('insurance_details');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_insurance($insurance_name,$insurance_phoneno,$insurance_email,$insurance_website,$insurance_location,$insurance_address,$last_renewal,$next_renewal,$bus_reg_in){
		$query = "INSERT INTO insurance_details(insurance_name,insurance_phoneno,insurance_email,insurance_website,insurance_location,insurance_address,last_renewal,next_renewal,bus_reg_in)VALUES (?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,array($insurance_name,$insurance_phoneno,$insurance_email,$insurance_website,$insurance_location,$insurance_address,$last_renewal,$next_renewal,$bus_reg_in));
	}
	function edit_insurance($insurance_detailsid){
		$this->db->where('insurance_detailsid',$insurance_detailsid);
		$query=$this->db->get('insurance_details');
		return $query->row();
	}
	function selectbusreg(){
		$query4 = $this->db->query('SELECT bus_reg FROM bus_details');
        return $query4->result();        
	}

	// function update_owner($data){
	// 	$this->db->where('idno',$idno);
	// 	$this->db->update('owner_details',$data);
	// }
}
?>