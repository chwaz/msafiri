<?php
class body_builders_model extends CI_Model{

	public $data;
	function __construct(){
		parent::__construct();
	}
	function builderslist(){
		$query = $this->db->get('body_builder');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } 
	}
	function insert_builders($company_name,$abbreviations,$category_type,$address,$physical_location,$email,$phoneno,$website){
		$query = "INSERT INTO body_builder
		(company_name,abbreviations,category_type,address,physical_location,email,phoneno,website)
		VALUES (?,?,?,?,?,?,?,?)";
		$this->db->query($query,
		array($company_name,$abbreviations,$category_type,$address,$physical_location,$email,$phoneno,$website));
	}
	function edit_builder($body_builderid){
		$this->db->where('body_builderid',$body_builderid);
		$query=$this->db->get('body_builder');
		return $query->row();
	}
	
	// function update_owner($data){
	// 	$this->db->where('idno',$idno);
	// 	$this->db->update('owner_details',$data);
	// }
}
?>