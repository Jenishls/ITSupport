<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'HomeController@');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/user/create', 'HomeController@createUser')->name('createUser');
Route::POST('/user/create', 'HomeController@storeUser')->name('storeUser');
Route::get('/user/list', 'HomeController@listUser')->name('listUser');
Route::get('/user/{user}', 'HomeController@editUser')->name('editUser');
Route::POST('/user/update', 'HomeController@updateUser')->name('updateUser');
Route::POST('/user/passwordReset', 'HomeController@passwordReset')->name('passwordReset');


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
GuzzleHttp\RequestOptions::BODY;

Route::get('/api',function(){


	$input = "<BlackListVerify>
      <SerialNumber>121</SerialNumber>
      <RequestType>Individual</RequestType>
      <Name>PRITHIVE KUMAR</Name>
      <CitizenshipNo></CitizenshipNo>
      <FatherName></FatherName>
      <CitizenshipIssuedDate></CitizenshipIssuedDate>
      <CitizenshipIssuedDistrict></CitizenshipIssuedDistrict>
      <ConsumerDOB></ConsumerDOB>
      <PassportNo></PassportNo>
      <IndianEmbassyNo></IndianEmbassyNo>
</BlackListVerify>";


	$hash = hash_hmac("sha256", $input, "igcZVPrcBV5Uui8EPXJCrM6Djg5WrNlL");


		$input1 = '<?xml version="1.0" encoding="UTF-8" ?>
<BlackListVerify>
      <SerialNumber>121</SerialNumber>
      <RequestType>Individual</RequestType>
      <Name>PRITHIVE KUMAR</Name>
      <CitizenshipNo></CitizenshipNo>
      <FatherName></FatherName>
      <CitizenshipIssuedDate></CitizenshipIssuedDate>
      <CitizenshipIssuedDistrict></CitizenshipIssuedDistrict>
      <ConsumerDOB></ConsumerDOB>
      <PassportNo></PassportNo>
      <IndianEmbassyNo></IndianEmbassyNo>
</BlackListVerify>';

	$hash1 = hash_hmac("sha256", $input1, "igcZVPrcBV5Uui8EPXJCrM6Djg5WrNlL");
	
	echo $hash.'<br/><br/>';

	echo $hash1.'<br/><br/>';

	// $options = [
	// 	'headers' => [
 //        'Content-Type' => 'text/xml',
 //    	'MERCHANTID' => 'CIBrkmwm4hs',
 //    	'HASH' => $hash
 //    	],
 //    	'form_params' => [
 //    		'fruit' => 'apple'
 //    	]
	// ];		

$options = [
    'form_params' => [
        "fruit" => "apple"
       ]
   ]; 

		$client = new Client([
		'verify' => 'C:\Program Files\PHP\v7.2\extras\ssl\cacert.pem',
		
		
	]);

	$res = $client->post(
		'http://localhost:7000/api/api',
		[ 
			'form_params' => [
		        $input
		       ] 
		] );
	echo $res->getBody();
});

// 1561aa577c63bd8ee38412cf2ff7c9f3cb00b9d591bd40e1086cfacfbf69c743

// 1561aa577c63bd8ee38412cf2ff7c9f3cb00b9d591bd40e1086cfacfbf69c743