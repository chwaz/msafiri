<?php
class service_repair_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function service_repairlist(){
		$query = $this->db->get('service_&_repair');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_service_repair($bus_reg_sr,$nature,$description,$total_cost,$date_of_previous,$date_of_next,$garage_name,$garage_location,$garage_contact,$garage_address){
		$query = "INSERT INTO service_&_repair(bus_reg_sr,nature,description,total_cost,date_of_previous,date_of_next,garage_name,garage_location,garage_contact,garage_address)
		VALUES (?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,array($bus_reg_sr,$nature,$description,$total_cost,$date_of_previous,$date_of_next,$garage_name,$garage_location,$garage_contact,$garage_address));
	}
	function edit_service_repair($service_repairid){
		$this->db->where('service_repairid',$service_repairid);
		$query=$this->db->get('service_&_repair');
		return $query->row();
	}
	function selectbusreg(){
		$query = $this->db->query('SELECT bus_reg FROM bus_details');
        return $query->result();        
	}
}
?>