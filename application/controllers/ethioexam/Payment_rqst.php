<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_rqst extends CI_Controller {
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('pay_request_mod_exam','pay');
	}

public function index(){
	$recipients = $this->pay->charge_those();////// returns an array of phone number of subscribers with >3 days 
	$count = 1;
    foreach ($recipients as $recip) {
        $recips_phone = $recip->user_number;
		$amount = "2 birr";
		$datee = date("Y-M-d");
		echo $count ." - ";
		$server_response = $this->single_rqst($recips_phone);
		echo "<br>";
		$count++;
    }
}

public function single_rqst($mobile, $amount=200){
			//$getTimeStamp = date('Ymdhms'); // use timestamp as transaction ID
			$spId = '300008';//016006
			$spPass = 'Efo#6601';
			$getTimeStamp = "20230907082247";
			$TransID = str_replace(".","",microtime(true)).rand(000,999); // three digit rounded microtime
			$serviceID = "0160042000070009";

			$passwd = md5($spId . $spPass  . $getTimeStamp);
			//Generate Payment SOAP request to send to Payment API
				$soap_data = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:v2="http://www.huawei.com.cn/schema/common/v2_1" xmlns:loc="http://www.csapi.org/schema/parlayx/payment/amount_charging/v3_1/local">
							<soapenv:Header>
								<v2:RequestSOAPHeader>
									<v2:spId>'.$spId.'</v2:spId>
									<v2:spPassword>86f5dbd82b6a06108052db64e5eaa48c</v2:spPassword>
									<v2:serviceId>'.$serviceID.'</v2:serviceId>
									<v2:timeStamp>'. $getTimeStamp.'</v2:timeStamp>
									<v2:OA>'.$mobile.'</v2:OA>
									<v2:FA>'.$mobile.'</v2:FA>
								</v2:RequestSOAPHeader>
							</soapenv:Header>

							<soapenv:Body>
								<loc:chargeAmount>
									<loc:endUserIdentifier>'.$mobile.'</loc:endUserIdentifier>
									<loc:charge>
										<description>charging information</description>
										<currency>BIRR</currency>
										<amount>'.(string)$amount.'</amount>
										<code>255</code>
									</loc:charge>
									<loc:referenceCode>'.$TransID.'</loc:referenceCode>
								</loc:chargeAmount>
							</soapenv:Body>
						</soapenv:Envelope>';

			//Debugging
			//echo $soap_data;

			//Payment API endpoint address
			// $url = 'http://10.190.10.16:8310/AmountChargingService/services/AmountCharging';
			$url = 'http://10.175.206.42/soap-payment-api/ws/AmountChargingService/services/chargeAmount';
			

			
			//Initiate cURL
			$curl = curl_init($url);
			
			//Set the Content-Type to text/xml.
			curl_setopt ($curl, CURLOPT_HTTPHEADER, array("Content-Type: text/xml"));
			
			//Set CURLOPT_POST to true to send a POST request.
			curl_setopt($curl, CURLOPT_POST, true);
			
			//Attach the XML string to the body of our request.
			curl_setopt($curl, CURLOPT_POSTFIELDS, $soap_data);
			
			//Tell cURL that we want the response to be returned as
			//a string instead of being dumped to the output.
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			
			//Execute the POST request and send our XML.
			$result = curl_exec($curl);
			
			//Do some basic error checking.
			if(curl_errno($curl)){
			//throw new Exception(curl_error($curl));
			//$replay_cust = "ERROR: Conection Timeout or Sytem is Busy";
			$replay_admin = "Hi Anani , there is ERROR on PGW Connection, Please check";
			// sendMessage($mobile, $replay_cust);/////////////////////9999999999999999999999999999999999//////////////////////////
			// sendMessage('251911abcdef', $replay_admin);/////////////////////9999999999999999999999999999999999//////////////////////////
			$response_array["errorCode"] = 404;
			$response_array["errorDescription"] = "Endpoint can not be reached pls check connection";
			return $response_array;
			exit;
			}
			else {
			$info = curl_getinfo($curl);
			//  echo 'Took ' . $info['total_time'] . ' seconds to transfer a request to ' . $info['url'];
			}
			
			//Close the cURL handle.
			curl_close($curl);
			
			//Print out the response output.
			//echo $result;

			$xml_data = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $result );
			$xml2array = json_decode(json_encode((array)simplexml_load_string($xml_data)),true);

			//print_r(json_encode($xml2array));
			$response_array = array();


			//print_r($xml2array);
			if ( array_key_exists("soapenvFault",$xml2array['soapenvBody']))
			{

			$response_array["responseCode"] = $xml2array['soapenvBody']['soapenvFault']['faultcode'];
			$response_array["responseDescription"] = $xml2array['soapenvBody']['soapenvFault']['faultstring'];
			}

			elseif (array_key_exists("ns1chargeAmountResponse",$xml2array['soapenvBody'])) {

				$response_array["responseCode"] = 0;
				$response_array["responseDescription"] = "Success";
			}
			else
			{
				$response_array["responseCode"] = -1;
				$response_array["responseDescription"] = "Unexpected response or System busy...";
			}
			//header("Content-type: text/json; charset=utf-8");

			$rsp = $response_array["responseDescription"];
			$this->pay->update_on_request($mobile,$rsp);
			
			echo $mobile ." => ".$rsp;

	}
}
