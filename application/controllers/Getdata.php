<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

class Getdata extends CI_Controller {
   
    function __construct()
    {
		parent::__construct();
		$this->load->library('session');
		//if($this->session->userdata('logged_in') !== TRUE){
		//	redirect('login');
		//}
		$this->ws_url = "192.168.3.15:9666";
    }
    
    public function index()
    {        
		$email 		= $this->session->userdata('email');
		$emailsha 	= md5($email);
		$client = new Client(new Version2X($this->ws_url));

		@$client->initialize();
		@$client->emit('join_room', ['id' => $emailsha]);
		@$client->emit('send_msg', ['room_id' => $emailsha,'msg'=>'DATA NASABAH BARU']);
		@$client->close();

        //print_r($_POST);
    }
	

    public function asmgNotif()
    {        
        $client = new Client(new Version2X($this->ws_url));
		$emaildata = $_POST['email'];
		$emailmd5 = md5($emaildata);
		echo $emailmd5;
		
        
        $_nama = trim(strtoupper($_POST['nama']));
        $_email = trim(strtoupper($_POST['email']));
		//$_nama = "yaniar prayogo";
		//$_email = "yanipra@gmail.com";
        //log_message("error", print_r($_POST, true));
        //$_id = "syaiful.rahman@trimegah.com";
        //$_rid = sha1($_id);
        @$client->initialize();
        @$client->emit('join_room', ['id' => $emailmd5, 'msg'=>'data']);
        @$client->emit('send_msg', ['room_id' => $emailmd5, 'email' => $_email,'name' => $_nama,'msg'=>'Opening Account Baru']);
        @$client->close();

        print_r($_POST);
    }

    public function s21NotifSid()
    {        
        $client = new Client(new Version2X($this->ws_url));
        
        $_name = trim(strtoupper($_POST['name']));
        $_id = trim(strtoupper($_POST['id']));
        $_nik = $_POST['nik'];
        $_sid = $_POST['sid'];
        $_sre = $_POST['sre'];


        log_message("error", print_r($_POST, true));
        //$_id = "syaiful.rahman@trimegah.com";
        $_rid = sha1($_id);
        @$client->initialize();
        @$client->emit('join_room', ['id' => $_rid, 'msg'=>'pin']);
        @$client->emit('send_s21_sid_notif', ['room_id' => $_rid, 'nik' => $_nik,'name' => $_name,'sid' => $_sid,'sre' => $_sre,'msg'=>'push message from opening account api - s21 sid notification']);
        @$client->close();

        print_r($_POST);
    }

    public function grabPost(){
         // print_r(json_encode($_POST, JSON_PRETTY_PRINT));
    }
}

?>
