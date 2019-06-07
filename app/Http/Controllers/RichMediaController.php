<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use GuzzleHttp\Client;
//use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;
use App\Http\Model\RichMedia;
class RichMediaController extends Controller
{
    //
	public function getList(){
		$data=DB::table('users')->get();
		//print_r($data);
		//exit();
		return response()->json([
			'data' => $data
			]);
			//$data=DB::table('users')->get();
	}
	public function GetData(){
		$richMedia=new RichMedia();
		$products = $richMedia->GetData();
        return view('viewapi',compact('products'));
	}
	public function DemoGetAPI(){
		$richMedia=new RichMedia();
		//$client = new Client();
        //$request = $client->get('http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=20&offset=0&orderBy=createdAt&order=desc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=Rick%20Media');
        //$products1 = $request->getBody()->getContents();
		//$products= response()->json($response);
		$products = $richMedia->GetData();
		//return $response;
        return view('viewapi',compact('products'));
		//$products=DB::table('users')->get();
		//return view('viewapi')->with('products', $products);
	}
	public function index()
    {
        //$products = DB::table('products')->get();
        //return view('fontend.product.list')->with($products);viewapi
		$products=DB::table('users')->get();
		return view('viewapi')->with($products);
    }
}
