<?php

namespace App\Http\Model;
use App\API;

Class HLDT{
	
	public static function RandomDeviceID()
	{
	    $characters = '123456789abcdefghijklmnopqrstuvwxyz123456789123456789123456789';
	    $randstring = '';
	    for ($i = 0; $i < 16; $i++) {
	        $randstring .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randstring;
	}
	public static function GetHoclieudientu($nganh){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSNhomHocLieu?maxSize=20&offset=0&orderBy=createdAt&order=desc";
		$api=new API();
		$request = $api->WebGet($url);
		return json_decode($request);
	}
	public static function GetDetailHoclieu($id){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSNhomHocLieu?maxSize=100&offset=0&orderBy=createdAt&order=desc&where[0][type]=contains&where[0][attribute]=id&where[0][value]=" . $id;
		$api=new API();
		$request = $api->WebGet($url );
		return json_decode($request);
	}
	public static function GetRichMedia($id){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=100&offset=0&order=asc&where%5B0%5D%5Btype%5D=in&where%5B0%5D%5Battribute%5D=loaiHocLieu&where%5B0%5D%5Bvalue%5D%5B%5D=Rick+Media&where%5B1%5D%5Btype%5D=contains&where%5B1%5D%5Battribute%5D=lCMSNhomHocLieuId&where%5B1%5D%5Bvalue%5D=".$id;
		$api=new API();
		$request = $api->WebGet($url);
		//print_r(json_decode($request));exit();
		return json_decode($request);
	}
	public static function GetDetailRichMedia($id){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=100&offset=0&order=asc&where%5B0%5D%5Btype%5D=in&where%5B0%5D%5Battribute%5D=loaiHocLieu&where%5B0%5D%5Bvalue%5D%5B%5D=Rick+Media&where%5B1%5D%5Btype%5D=contains&where%5B1%5D%5Battribute%5D=id&where%5B1%5D%5Bvalue%5D=".$id;
		$api=new API();
		$request = $api->WebGet($url);
		//print_r(json_decode($request));exit();
		return json_decode($request);
	}
	public static function GetBaigiangText($id){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=100&offset=0&order=asc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=baigiangtext&where[1][type]=contains&where[1][attribute]=lCMSNhomHocLieuId&where[1][value]=".$id;
		$api=new API();
		$request = $api->WebGet($url);
		return json_decode($request);
	}
	public static function GetEbook($id){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=100&offset=0&order=asc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=Doc&where[1][type]=contains&where[1][attribute]=lCMSNhomHocLieuId&where[1][value]=".$id;
		$api=new API();
		$request = $api->WebGet($url);
		return json_decode($request);
	}
	public static function DownloadFile($fileName,$fileId,$loaihoclieu,$tenmon){
		$api=new API();
		$request = $api->DownloadFile($fileName,$fileId,$loaihoclieu,$tenmon);
	}
	public static function GetRelateHoclieu($id,$nganh){
		$url = "http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=10&offset=0&orderBy=createdAt&order=desc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=Doc&where[1][type]=contains&where[1][attribute]=nganhId&where[1][value]=".$nganh."&where[2][attribute]=id&where[2][type]=notIn&where[2][attribute]=id&where[2][value]=".$id;
		$api=new API();
		$request = $api->WebGet($url );
		return json_decode($request);
	}
}