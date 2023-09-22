<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_exam extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();

	    if ($this->session->userdata('is_logged_in') == false) {
            redirect('login');
        }
	  $this->load->model('exam_subs','sub');
	  $this->load->model('pay_request_mod_exam','payexam');


	}
	public function index(){

		$data['title'] = "Ethio-Exam";
		$data['sub_count'] = $this->sub->count_all();
		$data["record"] = $this->payexam->get_info();

		$this->load->view('partials/title-meta',$data);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('exam/main');
		$this->load->view('partials/footer');
		$this->load->view('partials/vendor-scripts');
		$this->load->view('partials/idashchart');

	}
}
