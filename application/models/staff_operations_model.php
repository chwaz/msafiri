<?php
class staff_operations_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function staff_operationslist(){
		$query = $this->db->get('staff_operations');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_staff_operations($idno2,$staff_positionid3,$staff_statusid3,$bus_reg_staff){
		$query = "INSERT INTO staff_operations(idno2,staff_positionid3,staff_statusid3,bus_reg_staff) VALUES (?,?,?,?)";
		$this->db->query($query,array($idno2,$staff_positionid3,$staff_statusid3,$bus_reg_staff));
	}
	function edit_staff_operations($staff_operationsid){
		$this->db->where('staff_operationsid',$staff_operationsid);
		$query=$this->db->get('staff_operations');
		return $query->row();
	}
	function selectstaffposition(){
		$query1 = $this->db->query('SELECT * FROM staff_position');
        return $query1->result();        
	}
	function selectstaffdetails(){
		$query2 = $this->db->query('SELECT * FROM staff_details');
        return $query2->result();        
	}
	function selectstaffstatus(){
		$query3 = $this->db->query('SELECT * FROM staff_status');
        return $query3->result();        
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