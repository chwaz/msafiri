<?php
class january_worksheet_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function januarylist(){
		$query = $this->db->get('january_worksheet');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_january($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_jan,$staff_operationsid_jan){
		$query = "INSERT INTO january_worksheet(no_oftrips,amount,fuel_liters,fuel_cost,car_wash,miscelleanous,no_ofkms,bus_reg_jan,staff_operationsid_jan)
		VALUES (?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,array($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_jan,$staff_operationsid_jan));
	}
	function edit_january($january_worksheetid){
		$this->db->where('january_worksheetid',$january_worksheetid);
		$query=$this->db->get('january_worksheet');
		return $query->row();
	}
	function selectstaffops(){
		$query3 = $this->db->query('SELECT * FROM staff_operations');
        return $query3->result();   
	}
	function selectbusreg(){
		$query4 = $this->db->query('SELECT bus_reg FROM bus_details');
        return $query4->result();        
	}
}
?>