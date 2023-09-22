<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {
	
	public function __construct()
	{
	  parent::__construct();
	}
//////////////////////////////////////////

 function getsms(){
    $sender =  $_GET['sender'];
    $message = $_GET['message'];
	$receiver = $_GET['receiver'];
	if(isset($receiver)){
		if($receiver == "8674"){
			$wp_website = "https://ethio-exam.com/";
			$system_name = "Ethio-Exam";
			$contact_address = "+251929140970";
			$imsg = "Dear Subscriber you have reached to ".$system_name." Systems you can visit our website ".$wp_website." or call ".$contact_address." for further information.";
			$this -> isend($sender,$imsg);
		}
		elseif($receiver == "8676"){
			$wp_website = "http://ethiolifehack.com";
			$system_name = "Ethio-LifeHack";
			$contact_address = "+251929140970";
			$imsg = "Dear Subscriber you have reached to ".$system_name." Systems you can visit our website ".$wp_website." or call ".$contact_address." for further information.";
			$this -> isend($sender,$imsg);
		}
	}
}


function httpRequest($url){
	$pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
	preg_match($pattern,$url,$args);
	$in = "";
	$fp = fsockopen("$args[1]", $args[2], $errno, $errstr, 30);
	if (!$fp) {
	   return("$errstr ($errno)");
	} else {
		$out = "GET /$args[3] HTTP/1.1\r\n";
		$out .= "Host: $args[1]:$args[2]\r\n";
		$out .= "User-agent: Ozeki PHP client\r\n";
		$out .= "Accept: */*\r\n";
		$out .= "Connection: Close\r\n\r\n";
 
		fwrite($fp, $out);
		while (!feof($fp)) {
		   $in.=fgets($fp, 128);
		}
	}
	fclose($fp);
	return($in);
}

function isend($sender,$imsg){
    $this->ozekiSend($sender,$imsg);
}
 
function ozekiSend($phone, $msg){
	  global $ozeki_user,$ozeki_password,$ozeki_url;
	  $debug=false;
	  $ozeki_url = "http://127.0.0.1:9501/api?";
	  $ozeki_user = "admin";
	  $ozeki_password = "Efoy@121212";
	  
	  $url = 'username='.$ozeki_user;
	  $url.= '&password='.$ozeki_password;
	  $url.= '&action=sendmessage';
	  $url.= '&messagetype=SMS:TEXT';
	  $url.= '&recipient='.urlencode($phone);
	  $url.= '&messagedata='.urlencode($msg);
	  
	  echo $ozeki_url;
	  $urltouse =  $ozeki_url.$url;
	  if ($debug) { echo "Request: \n$urltouse\n\n"; }
 
	  //Open the URL to send the message
	  $response = $this->httpRequest($urltouse);
	  if ($debug) {echo "Response: \n<pre>".str_replace(array("<",">"),array("&lt;","&gt;"),$response)."</pre>\n"; }
 
	  return($response);
}


}
