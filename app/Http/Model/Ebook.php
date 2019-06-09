<?php

namespace App\Http\Model;
use App\API;

Class Ebook{
	
	public static function RandomDeviceID()
	{
	    $characters = '123456789abcdefghijklmnopqrstuvwxyz123456789123456789123456789';
	    $randstring = '';
	    for ($i = 0; $i < 16; $i++) {
	        $randstring .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randstring;
	}
	public static function GetEbook($nganh){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=100&offset=0&orderBy=createdAt&order=desc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=Doc&where[1][type]=contains&where[1][attribute]=nganhId&where[1][value]=" . $nganh;
		$api=new API();
		$request = $api->WebGet($url );
		return json_decode($request);
	}
	public static function GetDetailEbook($id){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=100&offset=0&orderBy=createdAt&order=desc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=Doc&where[1][type]=contains&where[1][attribute]=id&where[1][value]=" . $id;
		$api=new API();
		$request = $api->WebGet($url );
		return json_decode($request);
	}
	public static function updateLNT($id,$mobiToken){
		$url = "http://localhost/api/v1/TaiKhoanCanThanhToan/" . $id;
		$response2 = WebPut($url, '{"passmyvt":"' . $mobiToken . '"}' );
	}
}