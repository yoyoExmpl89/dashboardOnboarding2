<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/sideleft', true);
		$this->template->write_view('navs', 'template/header', true);
		$this->template->write_view('footer','template/footer',true);
	}
	public function index()
	{

        //$this->template->set_template('login');
		$this->template->write('title', 'News Feed CMS', TRUE);
		$this->template->write('header', 'LOGIN CMS');
		$this->template->write_view('content', 'dashboard/page', '', true);
		$this->template->render();
	}
}
