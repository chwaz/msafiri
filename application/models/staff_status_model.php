<?php
class staff_status_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function statuslist(){
		$query = $this->db->get('staff_status');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_status($staffstatus){
		$query = "INSERT INTO staff_status (staffstatus) VALUES (?)";
		$this->db->query($query, array($staffstatus));
	}
	function edit_status($staff_statusid){
		$this->db->where('staff_statusid',$staff_statusid);
		$query=$this->db->get('staff_status');
		return $query->row();
	}
}
?>