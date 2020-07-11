<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Client extends CI_Controller {

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
		
		$this->load->model('Util_model','util_model');
    }

    function index() {
		$this->template->write('title', 'ON-Boarding CMS', TRUE);
		$this->template->write('header', 'ON-Boarding');
		$data['data'] = "Processing Dashboard";
		$this->template->write_view('content', 'client/page', $data, true);
		$this->template->render();
	}
	
	function get_client_step_home(){
		$this->template->write('title', 'ON-Boarding CMS', TRUE);
		$this->template->write('header', 'ON-Boarding');
		$data['data'] = "Processing Dashboard";		

		$this->template->write_view('content', 'client/page', $data, true);
		$this->template->render();

		
	}	
	
	function get_data_real(){
		$data = array(
			'api_clientlist' => array(
				'step'   		=> $this->input->post('step'),
				'branch' 		=> $this->input->post('branch'),
				'sales'  		=> $this->input->post('sales'),
				'referal_code'	=> $this->input->post('referalcode'),
				'periode_start' => $this->input->post('startDate'),
				'periode_end'   => $this->input->post('endDate'),
				'page'			=> $this->input->post('page'),
				'sort_field'	=> $this->input->post('sort_field'),
				'direction'		=> $this->input->post('direction')
			)
		);
		$datafix = json_encode($data);
		
		log_message('info', 'data_list_post_real  ===> '. $datafix);
		//print_r(json_encode($data));die();
		/*$step 			= $this->input->post('step');
		$branch 		= $this->input->post('branch');
		$sales  		= $this->input->post('sales');
		$referal_code 	= $this->input->post('referal_code');
		$periode_start 	= $this->input->post('startDate');
		$periode_end 	= $this->input->post('endDate');
		$page 			= $this->input->post('page');
		$sort_field 	= $this->input->post('sort_field');
		$direction 		= $this->input->post('direction');
		*/
		//echo $direction; die();
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://172.16.137.16:4003/api/api_clientlist",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $datafix,
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
		//print_r($response);die();
		log_message('info', 'data_list_result_real  ===> '. $response);
		$data = json_decode($response,true);
		
		$dataX = array();
		$no = 0;	
		foreach ($data['data'] as $field) {
			$no++;
			$row = array();
			$dataregis = str_replace(' ','-',$field['regis_step']);
			$row['no'] 				= $no;
			$row['name'] 			= "<a href='".base_url('client/get_detail_by_email_real/') .$field['email']."/".$dataregis."'>".$field['nama_lengkap']."</a>";
			$row['nik'] 			= $field['nik'];
			$row['no_hp'] 			= $field['no_hp'];
			$row['email'] 			= $field['email'];
			$row['regis_step'] 		= $field['regis_step'];
			$row['regis_status']	= $field['referal_name'];
			$row['reviews_status'] 	= $field['referal_code'];
			$row['cif_no'] 			= $field['cif_no'];
			$row['sid'] 			= $field['sid'];
			$row['sre'] 			= $field['sre'];
			$row['ifua'] 			= $field['ifua'];
			$row['branch'] 			= $field['branch'];
			$row['sales_code'] 		= $field['sales_code'];
			$row['sales_name'] 		= $field['sales_name'];
			$row['source_regis'] 	= $field['source_of_regis'];
			$row['created_date'] 	= $field['created_date'];
			$row['error_reason'] 	= $field['fail_reason'];
			
 
			$dataX[] = $row;
		}
		//print_r($dataX);die();
		$output = array(
			//"draw" => 1,
			//"recordsTotal" => 100,
			//"recordsFiltered" => 100,
			"data" => $dataX,
		);
		//output dalam format JSON
		echo json_encode($output);		
	}


	
	function get_detail_by_email_real(){
		$email = $this->uri->segment(3);
		$step = $this->uri->segment(4);
		$dataa = array(
			'api_clientlist' => array(
				'email'   	=> $email,
				'step' 		=> $step
			)
		);
		$datafix = json_encode($dataa);
		//print_r($datafix);die();
		
		$this->template->write('title', 'ON-Boarding CMS', TRUE);
		$this->template->write('header', 'ON-Boarding');
		

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "172.16.137.16:4003/api/api_clientlist_detail",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $datafix, 	
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
		
		$dataX = json_decode($response,true);
		

		//$nikdata = ($dataX['data']['nik'] == "" ? $dataX['data']['nik'] : "" );
		//print_r($dataX);die();
		foreach ($dataX['data'] as $item) {
			//if ($item['nik'] == "3307012301890003") {
				
			
			$data['nik'] 					= $item['nik']; //done
			$data['nama_lengkap']   		= $item['nama_lengkap'];
			$data['no_hp'] 					= $item['no_hp']; //done
			$data['email'] 					= $item['email']; //done
			$data['regis_step'] 			= $item['regis_step'];//done
			//$data['regis_status'] 			= $item['regis_status'];
			//$data['reviews_status'] 		= $item['reviews_status'];
			$data['cif_no'] 				= $item['cif_no']; //done
			$data['sid'] 					= $item['sid']; //done
			$data['sre'] 					= $item['sre']; //done
			$data['ifua'] 					= $item['ifua']; //done
			$data['branch'] 				= $item['branch']; //done
			$data['sales_code'] 			= $item['sales_code']; //done
			$data['sales_name'] 			= $item['sales_name']; //done
			//$data['source_regis'] 			= $item['source_regis'];
			$data['created_date'] 			= $item['created_date']; //done
			$data['tempat_lahir'] 			= $item['tempat_lahir']; //done
			$data['tanggal_lahir'] 			= $item['tanggal_lahir'];//."-".$item['bulan_lahir']."-".$item['tahun_lahir']; //done
			$data['alamat_tinggal'] 		= $item['alamat_ktp']; //done
			$data['alamat_domisili'] 		= $item['alamat_domisili']; //done
			$data['alamat_korespondensi'] 	= $item['alamat_korespondesndi'];
			
			$valAgama = "";
			if ($item['agama'] ==  1) {
				$valAgama = "Islam";
			}else if ($item['agama'] ==  2) {
				$valAgama = "Protestan";
			}else if ($item['agama'] ==  3) {
				$valAgama = "Katolik";
			}else if ($item['agama'] ==  4) {
				$valAgama = "Hindu";
			}else if ($item['agama'] ==  5) {
				$valAgama = "Budha";
			} else if ($item['agama'] ==  7) {
				$valAgama = "Lainnya";
			}			
			
			$data['agama'] 					= $valAgama; //done
			
//            die('-->'.$item['pendidikan']);
            
			$valPendidikan = "";
			if($item['pendidikan'] ==  1) {
				$valPendidikan = "Lainnya";
			}else if ($item['pendidikan'] ==  2) {
				$valPendidikan = "SD";
			}else if ($item['pendidikan'] ==  3) {
				$valPendidikan = "SMP";
			}else if ($item['pendidikan'] ==  4) {
				$valPendidikan = "SMA";
			}else if ($item['pendidikan'] ==  5) {
				$valPendidikan = "D3";
			}else if ($item['pendidikan'] ==  6) {
				$valPendidikan = "S1";
			}else if ($item['pendidikan'] ==  7) {
				$valPendidikan = "S2";
			}else if ($item['pendidikan'] ==  8) {
				$valPendidikan = "S3";
			}			
			
			
			$data['pendidikan'] 			= $valPendidikan; //done
			
			$valSumberPendanaan = "";
			if ($item['sumber_pendanaan'] ==  1) {
				$valSumberPendanaan = "Lainnya"; 
			}else if ($item['sumber_pendanaan'] ==  2) {
				$valSumberPendanaan = "Gaji"; 
			}else if ($item['sumber_pendanaan'] ==  4) {
				$valSumberPendanaan = "Bunga Tabungan";
			}else if ($item['sumber_pendanaan'] ==  5) {
				$valSumberPendanaan = "Warisan";
			}else if ($item['sumber_pendanaan'] ==  6) {	
				$valSumberPendanaan = "Orang Tua/Anak";
			}else if ($item['sumber_pendanaan'] ==  7) {
				$valSumberPendanaan = "Suami/Istri"; 
			}else if ($item['sumber_pendanaan'] ==  8) {
				$valSumberPendanaan = "Dana Pensiun"; 
			}else if ($item['sumber_pendanaan'] ==  9) {
				$valSumberPendanaan = "Undian";
			}else if ($item['sumber_pendanaan'] ==  10) {
				$valSumberPendanaan = "Investasi"; 
			}else if ($item['sumber_pendanaan'] ==  11) {
				$valSumberPendanaan = "Hasil Usaha";
			}else if ($item['sumber_pendanaan'] ==  12) {
				$valSumberPendanaan = "Hibah";
			}
			
			
			$data['sumber_pendanaan'] 		= $valSumberPendanaan; //done
			
			$valPekerjaan = "";
			
			if($item['pekerjaan'] ==  1) {
				$valPekerjaan = "Pelajar/Mahasiswa";
			}else if ($item['pekerjaan'] ==  2) {
				$valPekerjaan = "Ibu Rumah Tangga";
			}else if ($item['pekerjaan'] ==  3) {
				$valPekerjaan = "Karyawan Swasta";
			}else if ($item['pekerjaan'] ==  4) {
				$valPekerjaan = "Pegawai Negeri";
			}else if ($item['pekerjaan'] ==  5) {
				$valPekerjaan = "TNI/Polri";
			}else if ($item['pekerjaan'] ==  6) {
				$valPekerjaan = "Pejabat Negara/Daerah";
			}else if ($item['pekerjaan'] ==  7) {
				$valPekerjaan = "Pensiunan";
			}else if ($item['pekerjaan'] ==  8) {
				$valPekerjaan = "Pengusaha Pabrikan";
			}else if ($item['pekerjaan'] ==  9) {
				$valPekerjaan = "Pedagang";
			}else if ($item['pekerjaan'] ==  10) {
				$valPekerjaan = "Pengusaha Jasa";
			}else if ($item['pekerjaan'] ==  17) {
				$valPekerjaan = "Profesional Lainnya";
			}else if ($item['pekerjaan'] ==  18) {
				$valPekerjaan = "Lainnya";
			}			
			
			$data['pekerjaan'] 				= $valPekerjaan; //done
            
//            echo "<pre>";
//            print_r($data['pekerjaan']);
//            echo "</pre>";
//            die('abc');

			$data['bidang_pekerjaan'] 		= $item['bidang_usaha']; //done
			$data['nama_perusahaan'] 		= $item['nama_perusahaan']; //done
			$data['alamat_tempat_bekerja'] 	= $item['alamat_tempat_bekerja'];
			
			
			$valPosisi = "";
			if ($item['posisi'] == 1) { 
				$valPosisi = "Pelajar/Mahasiswa";
			}else if ($item['posisi'] == 2) { 
				$valPosisi = "PNS Esselon 1";
			}else if ($item['posisi'] == 3) { 
				$valPosisi = "PNS Esselon 2";
			}else if ($item['posisi'] == 4) { 
				$valPosisi = "Hakim";
			}else if ($item['posisi'] == 5) { 
				$valPosisi = "Jaksa";
			}else if ($item['posisi'] == 6) { 
				$valPosisi = "Panitera";
			}else if ($item['posisi'] == 7) { 
				$valPosisi = "PNS Penyidik";
			}else if ($item['posisi'] == 8) { 
				$valPosisi = "PNS Auditor Pajak";
			}else if ($item['posisi'] == 9) { 
				$valPosisi = "PNS Auditor BPKP";
			}else if ($item['posisi'] == 10) {
				$valPosisi = "PNS Auditor BPK";
			}else if ($item['posisi'] == 11) { 
				$valPosisi  = "Ka. Kantor Pajak";
			}else if ($item['posisi'] == 12) { 
				$valPosisi  = "Ka. Kantor Bea Cukai";
			}else if ($item['posisi'] == 13) { 
				$valPosisi  = "Ka. Kas Negara";
			}else if ($item['posisi'] == 14) { 	
				$valPosisi  = "Pengawas Bea Cukai";
			}else if ($item['posisi'] == 15) { 
				$valPosisi  = "Penyidik";
			}else if ($item['posisi'] == 16) { 
				$valPosisi  = "Perwira Tinggi";
			}else if ($item['posisi'] == 17) { 
				$valPosisi  = "Presiden";
			}else if ($item['posisi'] == 18) { 
				$valPosisi  = "Wakil Presiden";
			}else if ($item['posisi'] == 19) { 
				$valPosisi  = "Anggota MPR";
			}else if ($item['posisi'] == 20) { 
				$valPosisi  = "Anggota DPR";
			} else if ($item['posisi'] == 21) { 
				$valPosisi  = "Anggota DPD";			
			} else if ($item['posisi'] == 22) { 
				$valPosisi  = "Watimpres";			
			} else if ($item['posisi'] == 23) { 
				$valPosisi  = "Pimpinan MA";			
			} else if ($item['posisi'] == 24) { 
				$valPosisi  = "Pimpinan BPK";
			} else if ($item['posisi'] == 25) { 
				$valPosisi  = "Anggota Komisi Yudisial";
			} else if ($item['posisi'] == 26) { 
				$valPosisi  = "Dewan Gubernur BI";
			} else if ($item['posisi'] == 27) { 
				$valPosisi  = "Dewan Komisioner OJK";
			} else if ($item['posisi'] == 28) { 
				$valPosisi  = "Pimpinan Komisi";
			} else if ($item['posisi'] == 29) { 
				$valPosisi  = "Gubernur";
			} else if ($item['posisi'] == 30) { 
				$valPosisi  = "Wakil Gubernur";
			} else if ($item['posisi'] == 31) { 
				$valPosisi = "Anggota DPRD I";
			} else if ($item['posisi'] == 32) { 
				$valPosisi = "Bupati/Walikota";
			} else if ($item['posisi'] == 33) { 
				$valPosisi = "Wakil Bupati/Walikota";
			} else if ($item['posisi'] == 34) { 
				$valPosisi = "Anggota DPRD II";
			} else if ($item['posisi'] == 35) { 
				$valPosisi = "Pimpinan PTN";
			} else if ($item['posisi'] == 36) { 
				$valPosisi = "Direktur BUMN/BUMD";
			} else if ($item['posisi'] == 37) { 
				$valPosisi = "Pensiunan PNS Esselon 1/2";
			} else if ($item['posisi'] == 38) { 
				$valPosisi = "Pensiunan Perwira Tinggi";
			} else if ($item['posisi'] == 39) { 
				$valPosisi = "Pensiunan Pejabat Daerah";
			} else if ($item['posisi'] == 40) { 
				$valPosisi = "Pemilik";
			} else if ($item['posisi'] == 41) { 
				$valPosisi = "Pejabat Senior";
			} else if ($item['posisi'] == 42) { 
				$valPosisi = "Konsultan Hukum";
			} else if ($item['posisi'] == 43) { 
				$valPosisi = "Konsultan Pajak";
			} else if ($item['posisi'] == 44) { 
				$valPosisi = "Konsultan Keuangan";
			} else if ($item['posisi'] == 45) { 
				$valPosisi = "Pengurus Partai Politik";
			} else if ($item['posisi'] == 46) { 
				$valPosisi = "Pengurus Ormas/LSM";
			} else if ($item['posisi'] == 47) { 
				$valPosisi = "Pengurus Organisasi Non-Profit";
			} else if ($item['posisi'] == 48) { 
				$valPosisi = "Dokter Umum";
			} else if ($item['posisi'] == 49) { 
				$valPosisi = "Dokter Spesialis";
			} else if ($item['posisi'] == 50) { 
				$valPosisi = "Pengacara";
			} else if ($item['posisi'] == 51) { 
				$valPosisi = "Akuntan";
			} else if ($item['posisi'] == 52) { 
				$valPosisi = "Wartawan";
			} else if ($item['posisi'] == 53) { 
				$valPosisi = "Seniman";			
			} else if ($item['posisi'] == 54) { 
				$valPosisi = "Notaris";
			} else {
				$valPosisi = $item['posisi'];
			}			
			
			
			$data['posisi'] 				= $valPosisi; //done
            
            $data['posisi_lainnya'] = $item['posisi_lainnya'];
			
			$valBidangUsaha = "";
			
			if ($item['bidang_usaha'] == 1) { 
				$valBidangUsaha = "Pendidikan";
			}else if ($item['bidang_usaha'] == 2) { 
				$valBidangUsaha = "Pemerintahan";
			}else if ($item['bidang_usaha'] == 3) { 
				$valBidangUsaha = "Pengolahan Hasil Hutan";
			}else if ($item['bidang_usaha'] == 4) { 
				$valBidangUsaha = "Barang Seni/Antik";
			}else if ($item['bidang_usaha'] == 5) { 
				$valBidangUsaha = "Batu Permata/Logam Mulia";
			}else if ($item['bidang_usaha'] == 6) { 
				$valBidangUsaha = "Eksim Minyak";
			}else if ($item['bidang_usaha'] == 7) { 
				$valBidangUsaha = "Eksim Mineral";
			}else if ($item['bidang_usaha'] == 8) { 
				$valBidangUsaha = "SPBU";
			}else if ($item['bidang_usaha'] == 9) { 
				$valBidangUsaha = "Minimarket";
			}else if ($item['bidang_usaha'] == 10)	{
				$valBidangUsaha = "Barang/Kendaraan Mewah";
			}else if ($item['bidang_usaha'] == 11)	{
				$valBidangUsaha = "Senjata Api/Peledak/Alusista";
			}else if ($item['bidang_usaha'] == 12)	{
				$valBidangUsaha = "Money Changer";
			}else if ($item['bidang_usaha'] == 13)	{
				$valBidangUsaha = "Pengiriman Uang";
			}else if ($item['bidang_usaha'] == 14)	{
				$valBidangUsaha = "Investasi Logam Mulia";
			}else if ($item['bidang_usaha'] == 15)	{
				$valBidangUsaha = "Konsultan Hukum";
			}else if ($item['bidang_usaha'] == 16)	{
				$valBidangUsaha = "Konsultan Pajak";
			}else if ($item['bidang_usaha'] == 17)	{
				$valBidangUsaha = "Konsultan Keuangan";
			}else if ($item['bidang_usaha'] == 18)	{
				$valBidangUsaha = "Properti";
			}else if ($item['bidang_usaha'] == 19)	{
				$valBidangUsaha = "Survey";
			}else if ($item['bidang_usaha'] == 20)	{
				$valBidangUsaha = "Tour dan Travel";
			}else if ($item['bidang_usaha'] == 21)	{
				$valBidangUsaha = "Freight Fowarding";
			}else if ($item['bidang_usaha'] == 22)	{
				$valBidangUsaha = "Pengelola Parkir";
			}else if ($item['bidang_usaha'] == 23)	{
				$valBidangUsaha = "Kasino/Executive Club";
			}else if ($item['bidang_usaha'] == 24)	{	
				$valBidangUsaha = "Organisasi International";
			}else if ($item['bidang_usaha'] == 25)	{
				$valBidangUsaha = "Hukum";
			}else if ($item['bidang_usaha'] == 26)	{
				$valBidangUsaha = "Pajak";
			}else if ($item['bidang_usaha'] == 27)	{
				$valBidangUsaha = "Keuangan";
			}else if ($item['bidang_usaha'] == 28)	{
				$valBidangUsaha = "Politik";
			}else if ($item['bidang_usaha'] == 29)	{
				$valBidangUsaha = "Ormas/LSM";
			}else if ($item['bidang_usaha'] == 30)	{
				$valBidangUsaha = "Organisasi Non-Profit";
			}else if ($item['bidang_usaha'] == 31)	{
				$valBidangUsaha = "Kesehatan";
			}else if ($item['bidang_usaha'] == 32)	{
				$valBidangUsaha = "Media";
			}else if ($item['bidang_usaha'] == 33)	{
				$valBidangUsaha = "Seni dan Budaya";
			}else if ($item['bidang_usaha'] == 34)	{
				$valBidangUsaha = "Hukum PPAT";
			}else {
				$valBidangUsaha = $item['bidang_usaha'];
			}			
			
			
			
			$data['bidang_usaha'] 			= $valBidangUsaha; //done
           
            $data['bidang_usaha_lainnya'] = $item['bidang_usaha_lainnya'];
            
			$data['lama_bekerja'] 			= '-'; //BELUM
			
			$valPengPerThn = "";
			if ($item['penghasilan_pertahun'] ==  1) {
				$valPengPerThn = "< 10 juta/tahun";
			}else if ($item['penghasilan_pertahun'] ==  2) {
				$valPengPerThn = "10 – 50 juta/tahun";
			}else if ($item['penghasilan_pertahun'] ==  3) {
				$valPengPerThn = "50 – 100 juta/tahun";
			}else if ($item['penghasilan_pertahun'] ==  4) {
				$valPengPerThn = "100 – 500 juta/tahun";
			}else if ($item['penghasilan_pertahun'] ==  5) {
				$valPengPerThn = "500 juta – 1 miliar/tahun";
			}else if ($item['penghasilan_pertahun'] ==  6) {
				$valPengPerThn = "1 miliar/tahun";
			}			
			
			$data['penghasilan_pertahun'] 	= $valPengPerThn; //DONE
			
			$valTujuanInvestasi = "";
			
			if($item['tujuan_investasi'] ==  1) {
				$valTujuanInvestasi = "Lainnya";
			}else if ($item['tujuan_investasi'] ==  2) {
				$valTujuanInvestasi = "Apresiasi harga";
			}else if ($item['tujuan_investasi'] ==  3) {
				$valTujuanInvestasi = "Investasi";
			}else if ($item['tujuan_investasi'] ==  4) {
				$valTujuanInvestasi = "Spekulasi";
			}else if ($item['tujuan_investasi'] ==  5) {
				$valTujuanInvestasi = "Sumber pendapatan";
			}			
			
			
			$data['tujuan_investasi'] 		= $valTujuanInvestasi; //DONE
			$data['nama_bank'] 				= $item['nama_bank'];
			$data['cabang_bank'] 			= $item['cabang_bank'];
			$data['no_rekening'] 			= $item['no_rekening'];
			$data['nama_pemilik_rekening'] 	= $item['nama_pemilik_rekening'];
			$data['mata_uang'] 				= $item['mata_uang']; //done
			$data['image_ktp']				= 'https://172.16.137.16/page/image/ktp/'.$item['token'];
			$data['image_selfie'] 			= 'https://172.16.137.16/page/image/selfi/'.$item['token'];
			$data['image_npwp'] 			= 'https://172.16.3.16/page/image/npwp/'.$item['token'];
			$data['image_kk'] 				= 'https://172.16.3.16/page/image/kk/'.$item['token'];
			$data['step_1_created_on'] 		= $item['step_1_created_on'];
			$data['step_2_created_on'] 		= $item['step_2_created_on'];
			$data['step_3_created_on'] 		= $item['step_3_created_on'];
			$data['finish_created_on'] 		= $item['finish_cretaed_on'];
			$data['token'] 					= $item['token'];
				
			//}
		}
		//echo $data['nik'];
	
		$curl2 = curl_init();
		curl_setopt_array($curl2, array(
		  CURLOPT_URL => "http://172.16.137.16:4003/api/process_logs/".$data['nik'],
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		));

		$response2 = curl_exec($curl2);
		$err = curl_error($curl2);

		curl_close($curl2);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$dataComment = json_decode($response2,true);
		//print_r($dataComment);die();
		//echo $dataComment['data'][0]['created_by'];die();		
		$dataCommentArray = array();
		for($i=0;$i<count($dataComment['data']);$i++){
			$dataCommentary['created_by'] = $dataComment['data'][$i]['created_by'];
			$dataCommentary['created_on'] = $dataComment['data'][$i]['created_on'];
			$dataCommentary['notes'] 	  = $dataComment['data'][$i]['notes'];
			$dataCommentary['status'] 	  = $dataComment['data'][$i]['status'];
			$dataCommentary['id'] 	  = $dataComment['data'][$i]['id'];
			array_push($dataCommentArray,$dataCommentary);
 		}
		//print_r($dataCommentArray);die();
		$data['commentary'] = $dataCommentArray;
		
		$curl3 = curl_init();

		curl_setopt_array($curl3, array(
		  CURLOPT_URL => "172.16.137.16:4003/api/stats-logs/".$data['token'],
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		));

		$response4 = curl_exec($curl3);

		curl_close($curl3);
		
		//echo $data['token'];
		
		$dataLog = json_decode($response4,true);
		//print_r($dataLog['data']['logs']);die();
		$datalogArray = array();
		for($i=0;$i<count($dataLog['data']['logs']);$i++){
			$dataLogtary['diff'] = $dataLog['data']['logs'][$i]['diff'];
			$dataLogtary['status'] = $dataLog['data']['logs'][$i]['status'];
			$dataLogtary['notes'] = $dataLog['data']['logs'][$i]['notes'];
			$dataLogtary['created_on'] = $dataLog['data']['logs'][$i]['created_on'];
			array_push($datalogArray,$dataLogtary);
		}
		//print_r($datalogArray);die();
		$data['logdataprocessing'] = $datalogArray;
		//echo $response;
		//$data[''] = //echo $response;
				
		//$data[''$dataComment['data'][0]['created_by'];
		
		//print_r($data['commentary']);die();
		
		
		$this->template->write_view('content', 'client/detail', $data, true);
		$this->template->render();		
		
	}
	
	function get_detail_by_nik(){
		$email = $this->uri->segment(3);
		//echo $email;die();
		$this->template->write('title', 'ON-Boarding CMS', TRUE);
		$this->template->write('header', 'ON-Boarding');
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  //CURLOPT_PORT => "4455",
		  CURLOPT_URL => "http://localhost:81/api/index.php/NewsFeedv1mock/client",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
			"Accept: */*",
			//"Accept-Encoding: gzip, deflate",
			//"Authorization: Basic ".$str,
			"Cache-Control: no-cache",
			"Connection: keep-alive",
			"Content-Length: 0",
			"Host: localhost:81",
			//"Postman-Token: af7ef9a6-e134-402f-b9c2-0c44ab177893,8fa4755d-63b0-4ebe-b0aa-3d004701bf2b",
			//"User-Agent: PostmanRuntime/7.19.0",
			"cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$dataX = json_decode($response,true);
		foreach ($dataX['data'] as $item) {
			if ($item['email'] == "yanipra@gmail.com") {
				$data['nik'] 				= $item['nik'];
				$data['nama_lengkap']   	= $item['nama_lengkap'];
				$data['no_hp'] 				= $item['no_hp'];
				$data['email'] 				= $item['email'];
				$data['regis_step'] 		= $item['regis_step'];
				$data['regis_status'] 		= $item['regis_status'];
				$data['reviews_status'] 	= $item['reviews_status'];
				$data['cif_no'] 			= $item['cif_no'];
				$data['sid'] 				= $item['sid'];
				$data['sre'] 				= $item['sre'];
				$data['ifua'] 				= $item['ifua'];
				$data['branch'] 			= $item['branch'];
				$data['sales_code'] 		= $item['sales_code'];
				$data['sales_name'] 		= $item['sales_name'];
				$data['source_regis'] 		= $item['source_regis'];
				$data['created_date'] 		= $item['created_date'];
				$data['tempat_lahir'] 		= $item['tempat_lahir'];
				$data['tanggal_lahir'] 		= $item['tanggal_lahir'];
				$data['alamat_tinggal'] 		= $item['alamat_tinggal'];
				$data['alamat_domisili'] 		= $item['alamat_domisili'];
				$data['alamat_korespondensi'] 	= $item['alamat_korespondensi'];
				$data['agama'] 					= $item['agama'];
				$data['pendidikan'] 			= $item['pendidikan'];
				$data['sumber_pendanaan'] 		= $item['sumber_pendanaan'];
				$data['pekerjaan'] 				= $item['pekerjaan'];
				$data['bidang_pekerjaan'] 		= $item['bidang_pekerjaan'];
				$data['nama_perusahaan'] 		= $item['nama_perusahaan'];
				$data['alamat_tempat_bekerja'] 	= $item['alamat_tempat_bekerja'];
				$data['posisi'] 				= $item['posisi'];
				$data['bidang_usaha'] 			= $item['bidang_usaha'];
				$data['lama_bekerja'] 			= $item['lama_bekerja'];
				$data['penghasilan_pertahun'] 	= $item['penghasilan_pertahun'];
 				$data['tujuan_investasi'] 		= $item['tujuan_investasi'];
				$data['nama_bank'] 				= $item['nama_bank'];
				$data['cabang_bank'] 			= $item['cabang_bank'];
				$data['no_rekening'] 			= $item['no_rekening'];
				$data['nama_pemilik_rekening'] 	= $item['nama_pemilik_rekening'];
				$data['mata_uang'] 				= $item['mata_uang'];
				$data['image_ktp']				= $item['image_ktp'];
				$data['image_selfie'] 			= $item['image_selfie'];
				$data['image_npwp'] 			= $item['image_npwp'];
				$data['image_kk'] 				= $item['image_kk'];
				$data['step_1_created_on'] 		= $item['step_1_created_on'];
				$data['step_2_created_on'] 		= $item['step_2_created_on'];
				$data['step_3_created_on'] 		= $item['step_3_created_on'];
				$data['finish_created_on'] 		= $item['finish_created_on'];
				
			}
		}
		
		$curl2 = curl_init();
		curl_setopt_array($curl2, array(
		  CURLOPT_URL => "http://172.16.137.16:4003/api/process_logs/123123123",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		));

		$response = curl_exec($curl2);

		curl_close($curl2);
		//echo $response;
		
		
		print_r($response);
		
		
		$this->template->write_view('content', 'client/detail', $data, true);
		$this->template->render();
	}
	
	function get_branch(){
		$id = $this->uri->segment(3);
		$data = $this->util_model->get_branch($id);
		echo json_encode($data);
	}
	
	function get_sales(){
		$id = $this->uri->segment(3);
		$data = $this->util_model->get_sales($id);
		echo json_encode($data);
	}
	

	
	//-- comment add
	function post_comment(){
		$nik = $this->input->post('nik');
		$status = $this->input->post('status');
		$notes = $this->input->post('notes');
		$create_by = $this->input->post('create_by');
		/*{
			  "nik": "123123123",
			  "status": "open",
			  "notes": "test notes",
			  "created_by": "isma@trimegah.com"
		}*/
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://192.168.3.16:4003/api/process_logs/",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;		
		
		
		
	}
	
	//get comment
	function get_comment(){
		$nik = $this->uri->segment(3);
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://172.16.137.16:4003/api/process_logs/123123123",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;

	}
	
	function get_data_list(){
		$data = array(
			'step'       		=> $this->input->post('step'),
			'branch'     		=> $this->input->post('branch'),
			'sales'    	 		=> $this->input->post('sales'),
			'referal_code'    	=> $this->input->post('referal_code'),
			'periode_start'    	=> $this->input->post('startDate'),
			'periode_end'    	=> $this->input->post('endDate'),
			'page'    	 		=> $this->input->post('page'),
			'sort_field'    	=> $this->input->post('sort_field'),
			'direction'    	 	=> $this->input->post('direction')	
		);
		
		log_message('info', 'data_list_post  ===> '. $data);
		//print_r($data);die();
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  //CURLOPT_PORT => "4455",
		  CURLOPT_URL => "http://localhost:81/api/index.php/NewsFeedv1mock/client",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
			"Accept: */*",
			//"Accept-Encoding: gzip, deflate",
			//"Authorization: Basic ".$str,
			"Cache-Control: no-cache",
			"Connection: keep-alive",
			"Content-Length: 0",
			"Host: localhost:81",
			//"Postman-Token: af7ef9a6-e134-402f-b9c2-0c44ab177893,8fa4755d-63b0-4ebe-b0aa-3d004701bf2b",
			//"User-Agent: PostmanRuntime/7.19.0",
			"cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		}
		
		$data = json_decode($response,true);
		log_message('info', 'result_list_post  ===> '. $data);
		//print_r($data);die();
		$dataX = array();
		$no = 0;
		foreach ($data['data'] as $field) {
			$no++;
			$row = array();
			$row['no'] 				= $no;
			$row['name'] 			= "<a href='".base_url('client/get_detail_by_email_real/') .$field['email']."/".$field['regis_step']."'>".$field['nama_lengkap']."</a>";
			$row['nik'] 			= $field['nik'];
			$row['no_hp'] 			= $field['no_hp'];
			$row['email'] 			= $field['email'];
			$row['regis_step'] 		= $field['regis_step'];
			$row['regis_status']	= $field['regis_status'];
			$row['reviews_status'] 	= $field['reviews_status'];
			$row['cif_no'] 			= $field['cif_no'];
			$row['sid'] 			= $field['sid'];
			$row['sre'] 			= $field['sre'];
			$row['ifua'] 			= $field['ifua'];
			$row['branch'] 			= $field['branch'];
			$row['sales_code'] 		= $field['sales_code'];
			$row['sales_name'] 		= $field['sales_name'];
			$row['source_regis'] 	= $field['source_regis'];
			$row['created_date'] 	= $field['created_date'];
			$row['error_reason'] 	= $field['error_reason'];
			
			
			
			
 
			$dataX[] = $row;
		}
		//print_r($dataX);die();
		$output = array(
			"draw" => 1,
			"recordsTotal" => $data['recordsTotal'],
			"recordsFiltered" => $data['recordsFiltered'],
			"data" => $dataX,
		);
		//output dalam format JSON
		echo json_encode($output);

	}	
	
	
	//function ratake 
	function retake_email(){
		$email_to = $this->input->post('email_to');
		$nama = $this->input->post('nama');
		$type = $this->input->post('type');
		$subject = "Email Retake";
		
		$dataa = array(
			'api_retake' => array(
				'email_to'   	=> $email_to,
				'subject' 		=> $subject,
				'nama' 			=> $nama,
				'type'          => $type
			)
		);
		$dataSend = json_encode($dataa);
		
		log_message('info', 'retake_email_post  ===> '. $dataSend);
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://172.16.137.16:4003/api/api_email_retake",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $dataSend,
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		
		log_message('info', 'retake_email_result  ===> '. $response);

		curl_close($curl);
		echo $response;

	}
	
	function resend_link(){
		/*{
			"api_resendlink" : 
			{
				"email_to" : "yaniar.prayogo@trimegah.com",
				"nama" : "Kristoforus Muda",
				"subject" : "Continue Registrasi Trima"
			}
		}*/
		$email_to = $this->input->post('email_to');
		$nama = $this->input->post('nama');
		$subject = "Continue Registrasi Trima";
		
		$dataa = array(
			'api_resendlink' => array(
				'email_to'   	=> $email_to,
				'subject' 		=> $subject,
				'nama' 			=> $nama
			)
		);
		$dataSend = json_encode($dataa);
		
		log_message('info', 'resend_link_email  ===> '. $dataSend);	
		//print_r($dataSend);die();
		
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://172.16.137.16:4003/api/api_email_resend_link",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>$dataSend,
		  CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);

		log_message('info', 'retake_resend_link_result  ===> '. $response);
		curl_close($curl);
		echo $response;
	}

}
