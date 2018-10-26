<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('M_login');
		$this->load->model('Admin/M_admin');
		date_default_timezone_set("Asia/Bangkok");
	}

	public function index() {
		$data['total_antrian'] = $this->M_admin->getCountAntrian();
		$data['sisa_antrian'] = $this->M_admin->getCountSisaAntrian();
		$data['current_antrian'] = $this->M_admin->getCurrentAntrian();


		// echo "<pre>";
		// print_r($data);
		// exit();
		
		$this->checkSession();
		$this->load->view("V_Header");
		$this->load->view("Admin/V_Index",$data);
		$this->load->view("V_Footer");
	}

	public function checkSession(){
		if(!$this->session->id_user){
			redirect('Login');
		}
	}	
}
