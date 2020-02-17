<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class BlackListController extends Controller
{
	private $merchant = 'CIBrkmwm4hs';
	private $key = 'igcZVPrcBV5Uui8EPXJCrM6Djg5WrNlL';

    public function individual(Request $request){
    	return view('blacklist.individual.index');
    }

  public function individualSearch(Request $request){
    $xml =  $this->createXML($request);
    dd($xml);
//     $input = "<BlackListVerify>
//       <SerialNumber>121</SerialNumber>
//       <RequestType>Individual</RequestType>
//       <Name>PRITHIVE KUMAR</Name>
//       <CitizenshipNo></CitizenshipNo>
//       <FatherName></FatherName>
//       <CitizenshipIssuedDate></CitizenshipIssuedDate>
//       <CitizenshipIssuedDistrict></CitizenshipIssuedDistrict>
//       <ConsumerDOB></ConsumerDOB>
//       <PassportNo></PassportNo>
//       <IndianEmbassyNo></IndianEmbassyNo>
// </BlackListVerify>";

    $hash = hash_hmac("sha256", $xml, "igcZVPrcBV5Uui8EPXJCrM6Djg5WrNlL");
        $client = new Client([
          'verify' => 'C:\Program Files\PHP\v7.2\extras\ssl\cacert.pem',
          'headers' => [
              'Content-Type' => 'text/xml',
              'MERCHANTID' => 'CIBrkmwm4hs',
              'HASH' => $hash
              ],
      ]);
		$res = $client->post('https://blacklist.cibnepal.org.np/api/blacklist/verify',
                          ['body' => $xml ]
                        );
        dd( $res->getBody()->getContents() );
    $resp = $res->getBody()->getContents();

     dd(json_decode(json_encode(simplexml_load_string($resp, "SimpleXMLElement", LIBXML_NOCDATA)),1));
      dd($resArray);
    }

    public function institution(Request $request){
    	return view('blacklist.institution.index');
    }

    public function institutionSearch(Request $request){

    }

    public function createXML(Request $request){
        $d = $this->checkRequest($request);
        unset($d['_token']);
        $xml = new \SimpleXMLElement('<BlackListVerify/>');
        array_walk($d, array ($xml, 'addChild'));
        dd($xml);
        $data = $xml->asXML();
    	  return  $data;
    }

    public function checkRequest(Request $request){
      $d = $request->toArray();
      unset($d['_token']);
      foreach ($d as $key => $value) {
        if(is_null($value)){
          $d[$key] = "";
        }
      }
      return $d; 
    }
  
}
