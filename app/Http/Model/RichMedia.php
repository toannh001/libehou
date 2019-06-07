<?php

namespace App\Http\Model;
use App\API;

Class RichMedia{
	
	public static function RandomDeviceID()
	{
	    $characters = '123456789abcdefghijklmnopqrstuvwxyz123456789123456789123456789';
	    $randstring = '';
	    for ($i = 0; $i < 16; $i++) {
	        $randstring .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randstring;
	}
	public static function GetData(){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=100&offset=0&orderBy=createdAt&order=desc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=Rick%20Media&where[1][type]=contains&where[1][attribute]=nganhId&where[1][value]=CONGNGHETHONGTIN";
		$api=new API();
		$request = $api->WebGet($url );
		return json_decode($request);
	}
	public static function updateLNT($id,$mobiToken){
		$url = "http://localhost/api/v1/TaiKhoanCanThanhToan/" . $id;
		$response2 = WebPut($url, '{"passmyvt":"' . $mobiToken . '"}' );
	}
}