<?php
class staff_position_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function staff_positionlist(){
		$query = $this->db->get('staff_position');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_staff_position($position_title,$position_description,$position_salaryclass){
		$query = "INSERT INTO staff_position(position_title,position_description,position_salaryclass) VALUES (?,?,?)";
		$this->db->query($query,array($position_title,$position_description,$position_salaryclass));
	}
	function edit_staff_position($staff_positionid){
		$this->db->where('staff_positionid',$staff_positionid);
		$query=$this->db->get('staff_position');
		return $query->row();
	}

	// function update_owner($data){
	// 	$this->db->where('idno',$idno);
	// 	$this->db->update('owner',$data);
	// }
}
?>