<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribers_exam extends CI_Controller {

	public function __construct()
	{
	  parent::__construct();

	    if ($this->session->userdata('is_logged_in') == false) {
            redirect('login');
        }
	  $this->load->model('exam_subs','sub');


	}
	public function index(){

		$data['title'] = "Ethio-Exam Subscribers";
		$data['all_subz'] = $this->sub->allsubs();

		$this->load->view('partials/title-meta',$data);
		$this->load->view('partials/topbar');
		$this->load->view('partials/sidebar');
		$this->load->view('exam/subscribers');
		$this->load->view('partials/footer');
		$this->load->view('partials/vendor-scripts');

	}
}
