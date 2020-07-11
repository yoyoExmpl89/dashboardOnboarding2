<?php

class Login_model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function auth_login($email){
        //select * from tbl_users a left join tbl_branch b  on b.branch_code = a.branch left join tbl_levels c  on a.level_id = c.id where a.email = 'yaniar.prayogo@trimegah.com'

        //$passwordMd5 = md5($password);
        $query = $this->db->query("select a.username, a.email, a.branch, b.branch_code, b.branch_name, c.id, c.level from tbl_users a left join tbl_branch b  on b.branch_code = a.branch left join tbl_levels c  on a.level_id = c.id where a.email ='".$email."'"); // and a.password ='".$passwordMd5."'");
		//$query = $this->db->query("select a.username, a.email, a.branch, b.branch_code, b.branch_name, c.id, c.level from tbl_users a left join tbl_branch b  on b.branch_code = a.branch left join tbl_levels c  on a.level_id = c.id where a.email ='".$email."' and a.password ='".$passwordMd5."'");

		//echo $this->db->last_query();die();
		//print_r($query->row());die();
        $result = $query;
        return $result;
    }
	
    function auth_login_no_ldap($email,$password){
        //select * from tbl_users a left join tbl_branch b  on b.branch_code = a.branch left join tbl_levels c  on a.level_id = c.id where a.email = 'yaniar.prayogo@trimegah.com'

        $passwordMd5 = md5($password);
        $query = $this->db->query("select a.username, a.email, a.branch, b.branch_code, b.branch_name, c.id, c.level from tbl_users a left join tbl_branch b  on b.branch_code = a.branch left join tbl_levels c  on a.level_id = c.id where a.email ='".$email."' and a.password ='".$passwordMd5."'");
		//$query = $this->db->query("select a.username, a.email, a.branch, b.branch_code, b.branch_name, c.id, c.level from tbl_users a left join tbl_branch b  on b.branch_code = a.branch left join tbl_levels c  on a.level_id = c.id where a.email ='".$email."' and a.password ='".$passwordMd5."'");

		//echo $this->db->last_query();die();
		//print_r($query->row());die();
        $result = $query;
        return $result;
    }	
}
