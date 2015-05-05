<?php
class speedgov_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function speedgovlist(){
		$query = $this->db->get('speedgov_details');
	    if ($query->num_rows() > 0) {
	        return $query->result_array();
	    } 
	}
	function insert_speedgov($company_name,$company_address,$company_email,$company_phoneno,$company_website,$fitted_by,$date_fitted,$bus_reg_sg){
		$query = "INSERT INTO speedgov_details(company_name,company_address,company_email,company_phoneno,company_website,fitted_by,date_fitted,bus_reg_sg) VALUES (?,?,?,?,?,?,?,?)";
		$this->db->query($query,array($company_name, $company_address,$company_email,$company_phoneno,$company_website,$fitted_by,$date_fitted,$bus_reg_sg));
	}
	function edit_speedgov($speedgov_detailsid){
		$this->db->where('speedgov_detailsid',$speedgov_detailsid);
		$query=$this->db->get('speedgov_details');
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