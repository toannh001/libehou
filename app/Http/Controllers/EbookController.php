<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use GuzzleHttp\Client;
//use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;
use App\Http\Model\Ebook;
use Storage;
class EbookController extends Controller
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
	public function GetEbook(){
		$ebook=new Ebook();
		$TCNNH = $ebook->GetEbook('TAICHINHNGANHANG');
		$KETOAN = $ebook->GetEbook('KETOAN');
		$LKT = $ebook->GetEbook('LUATKINHTE');
		$NNA = $ebook->GetEbook('NGONNGUANH');
		$QTKD = $ebook->GetEbook('QUANTRIKINHDOANH');
        return view('index',compact('TCNNH','KETOAN','LKT','NNA','QTKD'));
	}
	public function GetDetailEbookID($id){
		$ebook=new Ebook();
		$ebook_detail = $ebook->GetDetailEbook($id);
		foreach ($ebook_detail->list as $ebook_data) {
			$fileId=$ebook_data->fileId;
			$fileName=$ebook_data->fileName;
			$nganh=$ebook_data->nganhId;
		}
		$ebook_relate=$ebook->GetRelateEbook($id,$nganh);

		//$basepath = storage_path() . '/data';
		//$fileName = 'invoice_20160729';
		//$flie=file_get_contents('http://moocs.ehou.edu.vn/wp-content/uploads/2019/06/test.zip');
		//$save=file_put_contents(storage_path(),$flie);
		//$contents = Storage::url('http://uni.ehou.edu.vn/?entryPoint=download&id=5cf88390ed2109764');
		//echo $contents;
		//exit();
		//Storage::put('http://uni.ehou.edu.vn/?entryPoint=download&id=5cf88390ed2109764', $contents);
		/*
		if (file_exists($basepath . '/' . $fileName)) {
		    return response()->download($basepath . '/' . $fileName);
		}*/
		//response()->download('http://uni.ehou.edu.vn/?entryPoint=download&id=5cf88390ed2109764');
        return view('ebook',compact('ebook_detail','ebook_relate'));
	}
	public function DemoGetAPI(){
		$richMedia=new Ebook();
		//$client = new Client();
        //$request = $client->get('http://uni.ehou.edu.vn/api/v1/LCMSHocLieu?maxSize=20&offset=0&orderBy=createdAt&order=desc&where[0][type]=in&where[0][attribute]=loaiHocLieu&where[0][value][]=Rick%20Media');
        //$products1 = $request->getBody()->getContents();
		//$products= response()->json($response);
		$products = $richMedia->GetEbook();
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
