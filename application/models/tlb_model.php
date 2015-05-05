<?php
class tlb_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function tlblist(){
		$query = $this->db->get('tlb_details');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_tlb($route_name,$last_renewal,$next_renewal,$bus_reg_tlb){
		$query = "INSERT INTO tlb_details(route_name,last_renewal,next_renewal,bus_reg_tlb) VALUES (?,?,?,?)";
		$this->db->query($query,array($route_name,$last_renewal,$next_renewal,$bus_reg_tlb));
	}
	function edit_tlb($tlb_detailsid){
		$this->db->where('tlb_detailsid',$tlb_detailsid);
		$query=$this->db->get('tlb_details');
		return $query->row();
	}
	function selectroutename(){
		$query = $this->db->query('SELECT route_detailsid,route_number,route_name FROM route_details');
        return $query->result();        
	}
	function selectbusreg(){
		$query4 = $this->db->query('SELECT bus_reg FROM bus_details');
        return $query4->result();        
	}

	// function update_owner($data){
	// 	$this->db->where('idno',$idno);
	// 	$this->db->update('owner',$data);
	// }
}
?>