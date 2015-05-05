<?php
class inspection_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function inspectionslist(){
		$query = $this->db->get('inspection_details');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_inspectors($inspector_id,$inspector_fname,$inspector_lname,$last_check,$next_check,$bus_reg_is){
		$query = "INSERT INTO inspection_details(inspector_id,inspector_fname,inspector_lname,last_check,next_check,bus_reg_is)VALUES (?,?,?,?,?,?)";
		$this->db->query($query,array($inspector_id,$inspector_fname,$inspector_lname,$last_check,$next_check,$bus_reg_is));
	}
	function edit_inspector($inspection_detailsid){
		$this->db->where('inspection_detailsid',$inspection_detailsid);
		$query=$this->db->get('inspection_details');
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