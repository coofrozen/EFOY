<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iget extends CI_Controller {
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('lifehack_subs','subs');
	}
//////////////////////////////////////////

function index(){	

	$soap_xml_result = file_get_contents("php://input");
	$response_OK = '
		  <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:loc="http://www.csapi.org/schema/parlayx/data/sync/v1_0/local">
			 <soapenv:Header/>
			 <soapenv:Body>
				<loc:syncOrderRelationResponse>
				   <loc:result>0</loc:result>
				   <loc:resultDescription>OK</loc:resultDescription>
				</loc:syncOrderRelationResponse>
			 </soapenv:Body>
		  </soapenv:Envelope>';

	$response_err = '
		  <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:loc="http://www.csapi.org/schema/parlayx/data/sync/v1_0/local">
			 <soapenv:Header/>
			 <soapenv:Body>
				<loc:syncOrderRelationResponse>
				   <loc:result>2500</loc:result>
				   <loc:resultDescription>Internal System Error</loc:resultDescription>
				</loc:syncOrderRelationResponse>
			 </soapenv:Body>
		  </soapenv:Envelope>';

	if(!($soap_xml_result=="")){
	 
	$xml = simplexml_load_string($soap_xml_result);

	$myfile = fopen("ethiolifehack.xml","w") or die("unable to prepare");
	$txt = json_encode($soap_xml_result);
	fwrite($myfile,$txt);
	fclose($myfile);

	//$getMob = $getMobns->xpath("/\ns1:syncOrderRelation");

	$userDetail = $xml->children('soapenv', true)->Body->children('ns1', true)->syncOrderRelation->userID->children(); //phone number array 
	$user_number = $userDetail->ID; // get customer number   1
	$sub_time = $xml->children('soapenv', true)->Body->children('ns1', true)->syncOrderRelation->effectiveTime; //update sub_time 5   
	$sub_rel_end_time = $xml->children('soapenv', true)->Body->children('ns1', true)->syncOrderRelation->expiryTime; //update sub_rel_end_time 5
	$sub_rel_start_time = $xml->children('soapenv', true)->Body->children('ns1', true)->syncOrderRelation->updateTime; //update sub_rel_start_time 5
	$suborunsub = $xml->children('soapenv', true)->Body->children('ns1', true)->syncOrderRelation->updateDesc; //update subscription or unsubscription
	

	$extInfo = $xml->children('soapenv', true)->Body->children('ns1', true)->syncOrderRelation->extensionInfo->children(); 
	$xml2rray = $this->simpleXmlToArray($extInfo);
	$sub_key = $xml2rray["orderKey"];    // subscription key
	$short_message = $xml2rray["keyword"];    //message sent
	
	
	   if(!($user_number == null)){
		  
		  $this->check_message($user_number,$sub_time,$sub_rel_end_time,$sub_rel_start_time,$sub_key,$short_message,$suborunsub);
		  header("Content-type: text/xml; charset=utf-8");
		  print($response_OK);
		  return $response_OK;
	   }
	   else{
		  header("Content-type: text/xml; charset=utf-8");
		  print($response_err);
		  return $response_err;
	   }
	}
  }

  public function check_message($user_number,$sub_time,$sub_rel_end_time,$sub_rel_start_time,$sub_key,$short_message,$suborunsub){
	$upl_time = date('Y-m-d H:i:s', strtotime($sub_rel_start_time));
	$sub_rel_end_time = date('Y-m-d H:i:s', strtotime($sub_rel_end_time));
	$sub_rel_start_time = date('Y-m-d H:i:s', strtotime($sub_rel_start_time));
	$uplval = $this->_validate_upltime($upl_time);
	
	if($uplval==0){//checks if the SDP sends same message twice or more
			$zar = $this->_validate_subscription($user_number);
			$newpass = rand(1000,9999);
			//$this->kannelSend($user_number,"hello girma");
			if($zar == 0 )
			{

				if($suborunsub=='Addition'){
					$this->respond($user_number,$short_message,$newpass,$suborunsub);

					$data = array(
						'user_number' => $user_number,
						'sub_time' => $upl_time,
						'sub_rel_end_time' => $sub_rel_end_time,
						'sub_rel_start_time' => $sub_rel_start_time,
						'sub_key' => $sub_key,
						'suborunsub' => $suborunsub,
						);
						$this->subs->save($data);
						$this->save_2_away($user_number,$newpass);
				}
					
			}
			if($suborunsub=='Deletion'){

						$this->subs->delete_by_id($user_number);
						$this->subs->delete_by_away_id($user_number);  //////////// remote db connection delete user from remote table
				
			}
		}
  }


  function respond($user_number,$short_message,$password,$suborunsub){
	if($user_number != null){
		$system_name = "Ethio-Lifehack";
		$wp_website = "https://ethiolifehack.com";
		$sender  = $user_number;
		$msg = preg_replace( '/\s+/', '', strtolower($short_message));
		switch($msg){
			case "ok":
				$imsg = "welcome to ".$system_name." you have subscribed you can check ".$wp_website." your username is ".$sender." and your password is ".$password." you will be charged 2 birr per day after 3 days of subscription";
				$this->isend($sender,$imsg);
				break;
		}
	}
}

function save_2_away($user_number,$newpass){
	$url = "https://ethiolifehack.com/index.php/wp-json/wp/v2/users"; // The POST URL
    // The POST Data
    $postdata  = "username=".$user_number;
    $postdata .= "&password=".$newpass;
    $postdata .= "&email=".$user_number."@ethiolifehack.com";
    //Your username.
    $username = 'admin';
    //Your password.
    $password = 'NY&By4U_!7lh4^t~';

    $ch = curl_init($url);
    // curl basic authentication
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password); 
    // Set the request type to POST
    curl_setopt($ch, CURLOPT_POST, true);
    // Pass the post parameters as a naked string
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    // Option to Return the Result, rather than just true/false
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Perform the request, and save content to $result
    $result = curl_exec($ch);
    // Show the result?
    echo $result;
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
	  $ozeki_url = "http://127.0.0.1:9601/api?";
	  $ozeki_user = "admin";
	  $ozeki_password = "Efoytech@21";
	  
	  $url = 'username='.$ozeki_user;
	  $url.= '&password='.$ozeki_password;
	  $url.= '&action=sendmessage';
	  $url.= '&messagetype=SMS:TEXT';
	  $url.= '&recipient='.urlencode($phone);
	  $url.= '&messagedata='.urlencode($msg);
	  
	  
	  $urltouse =  $ozeki_url.$url;
	  if ($debug) { echo "Request: \n$urltouse\n\n"; }

	  //Open the URL to send the message
	  $response = $this->httpRequest($urltouse);
	  if ($debug) {echo "Response: \n<pre>".str_replace(array("<",">"),array("&lt;","&gt;"),$response)."</pre>\n"; }
 
	  return($response);
}



function _validate_subscription($sender){
	$att = $this->subs->validate($sender);
	return $att;
}

function _validate_upltime($upl_time){
	$jj = $this->subs->validate_single_send($upl_time);
	return $jj;
}

function iclean(){
	$count = $this->subs->chk_daily_report();
	if($count == 0){
		$this->subs->b4_clean();
		$this->subs->clean();
		echo "success copy->clean";
	}
	else{
		echo "already exists";
	}
	$this->subs->close_all_connection();
}

function simpleXmlToArray($xmlObject)
{
    $array = array();
    for($i=0;$i< count($xmlObject) ; $i++) {
        //$array[$xmlObject->item[$i]->children()[0]] = $xmlObject->item[$i]->children()[1];
        $index = (string)($xmlObject->item[$i]->children()[0]);
        $array[$index] = (string)($xmlObject->item[$i]->children()[1]);
    }
    return $array;
}

}
