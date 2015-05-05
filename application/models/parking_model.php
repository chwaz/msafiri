<?php
class parking_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function parkinglist(){
		$query = $this->db->get('parking_details');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_parking($county_name,$last_renewal,$next_renewal,$bus_reg_park){
		$query = "INSERT INTO parking_details(county_name,last_renewal,next_renewal,bus_reg_park)VALUES (?,?,?,?)";
		$this->db->query($query,array($county_name,$last_renewal,$next_renewal,$bus_reg_park));
	}
	function edit_parking($parking_detailsid){
		$this->db->where('parking_detailsid',$parking_detailsid);
		$query=$this->db->get('parking_details');
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