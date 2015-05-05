<?php
class bus_status_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function statuslist(){
		$query = $this->db->get('bus_status');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_status($busstatus){
		$query = "INSERT INTO bus_status (busstatus) VALUES (?)";
		$this->db->query($query, array($busstatus));
	}
	function edit_status($bus_statusid){
		$this->db->where('bus_statusid',$bus_statusid);
		$query=$this->db->get('bus_status');
		return $query->row();
	}
}
?>