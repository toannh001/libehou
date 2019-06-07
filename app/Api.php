<?php

namespace App;
//$apikey = "ae0bc611187a5bb7ede1d2d581a9ba51";

Class API{
	public  $apikey="5cf131ec190d47d05";
	public function WebGet($url){
		//Global $apikey;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	    curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-Api-Key: '.$this->apikey, 'Accept: application/json, text/javascript, */*; q=0.01'));
	    $res = curl_exec($ch);
		//print_r($res);exit;
		curl_close($ch);
		return $res;
	}
	public static function WebPost($url,$param){
		//Global $apikey;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_POST, 1);
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-Api-Key: '. $this->apikey, 'Accept: application/json, text/javascript, */*; q=0.01')); 
	    $res = curl_exec($ch);
		curl_close($ch);
		return $res;
	}
	public static function WebPut($url,$param){
		Global $apikey;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-Api-Key: '. $this->apikey, 'Accept: application/json, text/javascript, */*; q=0.01')); 
	    $res = curl_exec($ch);
		curl_close($ch);
		return $res;
	}
	public static function RandomDeviceID()
	{
	    $characters = '123456789abcdefghijklmnopqrstuvwxyz123456789123456789123456789';
	    $randstring = '';
	    for ($i = 0; $i < 16; $i++) {
	        $randstring .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randstring;
	}
	public static function getPhoneByLNTID($id){
		$url = "http://localhost/api/v1/TaiKhoanCanThanhToan/" . $id;
		$response2 = WebGet($url );
		$contentInput2 = (array)json_decode($response2,true);
		$phone = $contentInput2["name"];
		return $phone;
	}
	public static function updateLNT($id,$mobiToken){
		$url = "http://localhost/api/v1/TaiKhoanCanThanhToan/" . $id;
		$response2 = WebPut($url, '{"passmyvt":"' . $mobiToken . '"}' );
	}
}