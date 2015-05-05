<?php
class route_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function routelist(){
		$query = $this->db->get('route_details');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_route($route_number,$route_name,$route_county,$bus_reg_rt){
		$query = "INSERT INTO route_details(route_number,route_name,route_county,bus_reg_rt)VALUES (?,?,?,?)";
		$this->db->query($query,array($route_number,$route_name,$route_county,$bus_reg_rt));
	}
	function edit_route($route_detailsid){
		$this->db->where('route_detailsid',$route_detailsid);
		$query=$this->db->get('route_details');
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