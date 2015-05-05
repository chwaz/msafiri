<?php
class psv_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function psvlist(){
		$query = $this->db->get('psv_details');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_psv($date_ofacquisition,$last_renewal,$next_renewal,$bus_reg_psv){
		$query = "INSERT INTO psv_details(date_ofacquisition,last_renewal,next_renewal,bus_reg_psv)VALUES (?,?,?,?)";
		$this->db->query($query,array($date_ofacquisition,$last_renewal,$next_renewal,$bus_reg_psv));
	}
	function edit_psv($psv_detailsid){
		$this->db->where('psv_detailsid',$psv_detailsid);
		$query=$this->db->get('psv_details');
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