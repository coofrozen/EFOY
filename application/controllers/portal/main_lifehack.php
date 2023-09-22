<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_lifehack extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();

	    if ($this->session->userdata('is_logged_in') == false) {
            redirect('login');
        }
	  $this->load->model('lifehack_subs','sub');
	  $this->load->model('pay_request_mod_lifehack','paylifehack');


	}
	public function index(){

		$data['title'] = "Ethio-lifehack";
		$data['sub_count'] = $this->sub->count_all();
		$data["record"] = $this->paylifehack->get_info();

		$this->load->view('partials/title-meta',$data);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('lifehack/main');
		$this->load->view('partials/footer');
		$this->load->view('partials/vendor-scripts');
		$this->load->view('partials/idashchart');

	}
}
