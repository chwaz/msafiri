<?php
class mcsk_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function mcsklist(){
		$query = $this->db->get('mcsk_details');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_mcsk($last_renewal,$next_renewal,$bus_reg_mcsk){
		$query = "INSERT INTO mcsk_details(last_renewal,next_renewal,bus_reg_mcsk)VALUES (?,?,?)";
		$this->db->query($query,array($last_renewal,$next_renewal,$bus_reg_mcsk));
	}
	function edit_mcsk($mcsk_detailsid){
		$this->db->where('mcsk_detailsid',$mcsk_detailsid);
		$query=$this->db->get('mcsk_details');
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