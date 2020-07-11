<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        
        $this->load->library('session');
        $this->load->model('Login_model','login_model');
    }
	
    function index() {
        $this->template->set_template('login');
		$this->template->write('title', 'On Boarding Dashboard', TRUE);
		$this->template->write('header', 'Login On Boarding Dashboard');
		$this->template->write_view('content', 'login/page', '', true);
		$this->template->render();
	}
	
	function auth_0ld(){
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		
		$cekAuth =$this->login_model->auth_login($email,$password);
		//print_r($cekAuth->num_rows());die();
		if($cekAuth->num_rows() > 0){ 
			$data=$cekAuth->row_array();
			//print_r($data);die();
			if($data['level'] != null){
				$sesdata = array(
					'level'    	=> $data['id'],
					'username'  => $data['username'],
					'email'		=> $data['email'],
					'branch'	=> $data['branch_code'],
					'level_name'=> $data['level'],
					'logged_in' => TRUE
				);
				//print_r($sesdata);die();
				$this->session->set_userdata($sesdata);    
                redirect('Dashboard');
			}else{
				echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('Login');
			}
		}else{
            redirect('Login');
        }
	}

	//-- ini function auth by ldap
	function auth(){
        $email = htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		
		log_message('info', 'username ->'. $email.'+ password -> '.$password);
        // config
        $ldapserver = '172.16.3.20';
        $ldapuser   = $email;  
        $ldappass   = $password;
        // connect 
        $ldapconn = ldap_connect($ldapserver) or die("Could not connect to LDAP server.");
        
			
        $cekuser = $this->login_model->auth_login($email);
        //PRINT_R($cekuser);die();

        if($cekuser->num_rows() > 0){
            $data=$cekuser->row_array();
            // binding to ldap server

			//die();
            $ldapbind = @ldap_bind($ldapconn, $ldapuser, $ldappass);// or die ("Error trying to bind: ".ldap_error($ldapconn));
            // verify binding
            if ($ldapbind) {
                $sesdata = array(
					'level'    	=> $data['id'],
					'username'  => $data['username'],
					'email'		=> $data['email'],
					'branch'	=> $data['branch_code'],
					'level_name'=> $data['level'],
					'logged_in' => TRUE
                );
				//print_r($sesdata);
                $this->session->set_userdata($sesdata);    
				redirect('dashboard');
                //echo "konek lo dul";
                //return true;
            } else { 
                echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                redirect('login');
            }
        }else{
            redirect('login');
        }

	}
	
	
	public function logout()
    {    
        $this->session->sess_destroy();
        redirect('Login'); 
    }
}

?>