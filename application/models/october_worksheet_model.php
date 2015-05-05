<?php
class october_worksheet_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function octoberlist(){
		$query = $this->db->get('october_worksheet');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_october($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_mar,$staff_operationsid_mar){
		$query = "INSERT INTO october_worksheet(no_oftrips,amount,fuel_liters,fuel_cost,car_wash,miscelleanous,no_ofkms,bus_reg_mar,staff_operationsid_mar)
		VALUES (?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,array($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_mar,$staff_operationsid_mar));
	}
	function edit_october($october_worksheetid){
		$this->db->where('october_worksheetid',$october_worksheetid);
		$query=$this->db->get('october_worksheet');
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