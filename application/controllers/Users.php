<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}

		$this->template->write_view('sidenavs', 'template/sideleft', true);
		$this->template->write_view('navs', 'template/header', true);
		$this->template->write_view('footer','template/footer',true);
    }

    function index() {
		$this->template->write('title', 'ON-Boarding CMS', TRUE);
		$this->template->write('header', 'ON-Boarding');
		$data['data'] = "Processing Dashboard";
		$this->template->write_view('content', 'users/page', $data, true);
		$this->template->render();
	}

}