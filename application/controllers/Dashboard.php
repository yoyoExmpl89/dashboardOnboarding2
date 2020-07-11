<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {
	 
	
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
		$this->template->write_view('content', 'dashboard/page', $data, true);
		$this->template->render();
	}
	
	function total_data(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://localhost:81/api/index.php/NewsFeedv1mock/total",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$data = json_decode($response,true);
		$dataX = array();
		
		foreach($data['data'] as $field){
			$row = array();
			$row['nama'] = $field['nama'];
			$row['total'] = $field['total'];
			$dataX[] = $row;
		}
		
		echo json_encode($dataX);
		
	}
	
	function step1(){
		$urlTotal = "http://172.16.137.16:4003/api/api_clientlist_total";
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $urlTotal,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{\"api_clientlist\": {\"step\": \"step-1\"}}",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$data = json_decode($response,true);
		//print_r($data);die();
		$dataX = array();
		
		//foreach($data as $field){
		$row = array();
		$row['total'] 	= $data['data'];
		$row['desc'] 	= $data['desc'];
		$row['status']  = $data['status'];
		$dataX[] 		= $row;
		//}
		
		echo json_encode($dataX);
		
	}
	function step2(){
		$urlTotal = "http://192.168.3.16:4003/api/api_clientlist_total";
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $urlTotal,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{\"api_clientlist\": {\"step\": \"step-2\"}}",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$data = json_decode($response,true);
		$dataX = array();
		
		$row = array();
		$row['total'] 	= $data['data'];
		$row['desc'] 	= $data['desc'];
		$row['status']  = $data['status'];
		$dataX[] 		= $row;
		
		echo json_encode($dataX);
		
	}
	function step3(){
		$urlTotal = "http://172.16.137.16:4003/api/api_clientlist_total";
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $urlTotal,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{\"api_clientlist\": {\"step\": \"step-3\"}}",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$data = json_decode($response,true);
		$dataX = array();
		
		$row = array();
		$row['total'] 	= $data['data'];
		$row['desc'] 	= $data['desc'];
		$row['status']  = $data['status'];
		$dataX[] 		= $row;
		
		echo json_encode($dataX);
		
	}
	
	function fail(){
		$urlTotal = "http://172.16.137.16:4003/api/api_clientlist_total";
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $urlTotal,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{\"api_clientlist\": {\"step\": \"fail\"}}",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$data = json_decode($response,true);
		$dataX = array();
		
		$row = array();
		$row['total'] 	= $data['data'];
		$row['desc'] 	= $data['desc'];
		$row['status']  = $data['status'];
		$dataX[] 		= $row;
		
		echo json_encode($dataX);		
	}
	
	function finish(){
		$urlTotal = "http://172.16.137.16:4003/api/api_clientlist_total";
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $urlTotal,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{\"api_clientlist\": {\"step\": \"finish\"}}",
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$data = json_decode($response,true);
		$dataX = array();
		
		$row = array();
		$row['total'] 	= $data['data'];
		$row['desc'] 	= $data['desc'];
		$row['status']  = $data['status'];
		$dataX[] 		= $row;
		
		echo json_encode($dataX);
		
	}	
	
	function summary_data(){
		$data = array(
			'status' => $this->input->post('status')
		);
		$datafix = json_encode($data);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  //CURLOPT_URL => "http://192.168.3.16:4003/api/source/summary",
		  CURLOPT_URL => "http://172.16.137.16:4003/api/source/summary",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS =>$datafix,
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;		
		
	}
	
	function error_data(){
		$data = array(
			'status' => $this->input->post('status')
		);
		$datafix = json_encode($data);
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  //CURLOPT_URL => "http://192.168.3.16:4003/api/error/summary",
		  CURLOPT_URL => "http://172.16.137.16:4003/api/error/summary",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>$datafix,
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
		
		/*
		{
			"invalid_client_data": {
				"email_exist_in_system": "13",
				"invalid_otp": "15",
				"nik_exist_in_system": "3",
				"nik_exist_in_system_closed": "0",
				"nik_exist_in_system_suspended": "0",
				"nik_not_found_in_dukcapil": "1"
			},
			"session_expired": "3",
			"status": "step-1",
			"total": "32"
		}
		*/
		
	}	
	
}