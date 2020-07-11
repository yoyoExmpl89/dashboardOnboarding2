<?php

class Util_model extends CI_Model{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function get_branch($id){
		if($id == null){
			$query = $this->db->query("select branch_name, branch_code from tbl_branch");
			$result = $query->result_array();
		}else{
			$query = $this->db->query("select branch_name, branch_code from tbl_branch where branch_code ='".$id."'");
			$result = $query->result();
		}		
        return $result;
	}

	public function get_sales($salesid){
		if($salesid == null){
			$query = $this->db->query("select kode_sales,kode_sales_asmg ,nama from tbl_sales ts ");
			$result = $query->result_array();
		}else{
			//select kode_sales,kode_sales_asmg ,nama, branch_code, branch from tbl_sales ts where branch_code = 'BD'
			$query = $this->db->query("select kode_sales,kode_sales_asmg ,nama, branch_code, branch from tbl_sales ts where branch_code = '".$salesid."'");
			$result = $query->result_array();
		}
		return $result;
	}
}