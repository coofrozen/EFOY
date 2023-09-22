<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('pay_request_mod_exam','payexam');
	  $this->load->model('pay_request_mod_lifehack','paylifehack');
	}

	public function index(){
		$this->Dashboard('ex');
	}
	public function Dashboard($lnk)
	{
		if($lnk == "ex"){
			$data['title'] = "Ethio Exams";
			$data["record"] = $this->payexam->get_info();
			$this->load->view('welcome_message',$data);
		}
		if($lnk == "lh"){
			$data['title'] = "Ethio Life Hacks";
			$data["record"] = $this->paylifehack->get_info();
			$this->load->view('welcome_message',$data);
		}
		
	}
}
