<?php
class february_worksheet_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function februarylist(){
		$query = $this->db->get('february_worksheet');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_february($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_feb,$staff_operationsid_feb){
		$query = "INSERT INTO february_worksheet(no_oftrips,amount,fuel_liters,fuel_cost,car_wash,miscelleanous,no_ofkms,bus_reg_feb,staff_operationsid_feb)
		VALUES (?,?,?,?,?,?,?,?,?,?)";
		$this->db->query($query,array($no_oftrips,$amount,$fuel_liters,$fuel_cost,$car_wash,$miscelleanous,$no_ofkms,$bus_reg_feb,$staff_operationsid_feb));
	}
	function edit_february($february_worksheetid)){
		$this->db->where('february_worksheetid',$february_worksheetid);
		$query=$this->db->get('february_worksheet');
		return $query->row();
	}
	function selectstaffops(){
		$query3 = $this->db->query('SELECT * FROM staff_operations');
        return $query->result();   
	}
	function selectbusreg(){
		$query4 = $this->db->query('SELECT bus_reg FROM bus_details');
        return $query->result();        
	}
?>