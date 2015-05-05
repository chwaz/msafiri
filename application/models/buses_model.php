<?php
class buses_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function buseslist(){
		$query = $this->db->get('bus_details');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_bus($bus_reg,$body_builderid2,$idno,$bus_make,$bus_model,$no_of_seats,$bus_chasisno,$bus_engineno,$year_of_manufacture,$date_of_purchase){
		$query = "INSERT INTO bus_details(bus_reg,body_builderid2,idno_bus,bus_make,bus_model,no_of_seats,bus_chasisno,bus_engineno,year_of_manufacture,date_of_purchase)
		VALUES (?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,array($bus_reg,$body_builderid2,$idno,$bus_make,$bus_model,$no_of_seats,$bus_chasisno,$bus_engineno,$year_of_manufacture,$date_of_purchase));
	}
	function edit_bus($bus_reg){
		$this->db->where('bus_reg',$bus_reg);
		$query=$this->db->get('bus_details');
		return $query->row();
	}
	function selectownerid(){
		$query = $this->db->query('SELECT idno,username FROM owner_details');
        return $query->result();        
	}
	function selectbuilderid(){
		$query = $this->db->query('SELECT body_builderid,abbreviations FROM body_builder');
        return $query->result();        
	}
}
?>