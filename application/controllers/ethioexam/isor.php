<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Isor extends CI_Controller {
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('idun_mod_subs','subs');
	}
//////////////////////////////////////////

function index(){
    $query = $this->get_csv();
    echo $this->subs->insert_sor($query);
}


function get_csv(){
    
$filename = base_url("assets/sor/infoo.csv"); 
    if (($handle = fopen($filename, "r")) !== FALSE) {
        $str = "";
        $data = fgetcsv($handle, 1000, ",");
        foreach ($data as $value) {
            $str = $str . $value . ",";
        }
        ;
        $strr = substr("insert into sor(".str_replace(" ","_",$str), 0, -1).") values "  ;   
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $kal = "";
            foreach ($data as $value) {
                $kal = $kal . "'".$value."'" . ",";
            }
            $strr = $strr . "(".substr($kal, 0, -1)."),"."\n"; 
        }
        fclose($handle);
        $strr = substr($strr, 0, -2);
    }
    return $strr;
}
}