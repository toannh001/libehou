<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use GuzzleHttp\Client;
//use GuzzleHttp\Message\Request;
use GuzzleHttp\Message\Response;
use App\Http\Model\Ebook;
use App\Http\Model\HLDT;
use Storage;
use ZipArchive;
class IndexController extends Controller
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
	public function GetDataIndex(){

		//Get data ebook
		$ebook=new Ebook();
		$TCNNH = $ebook->GetEbook('TAICHINHNGANHANG');
		$KETOAN = $ebook->GetEbook('KETOAN');
		$LKT = $ebook->GetEbook('LUATKINHTE');
		$NNA = $ebook->GetEbook('NGONNGUANH');
		$QTKD = $ebook->GetEbook('QUANTRIKINHDOANH');
		$CNTT = $ebook->GetEbook('CONGNGHETHONGTIN');
		//Get data HLDT
		$hldt=new HLDT();
		$HLDT_TCNNH = $hldt->GetHoclieudientu('TAICHINHNGANHANG');
		$HLDT_KETOAN = $hldt->GetHoclieudientu('KETOAN');
		$HLDT_LKT = $hldt->GetHoclieudientu('LUATKINHTE');
		$HLDT_NNA = $hldt->GetHoclieudientu('NGONNGUANH');
		$HLDT_QTKD = $hldt->GetHoclieudientu('QUANTRIKINHDOANH');
		$HLDT_CNTT = $hldt->GetHoclieudientu('CONGNGHETHONGTIN');

        return view('index',compact('TCNNH','KETOAN','LKT','NNA','QTKD','CNTT','HLDT_TCNNH','HLDT_KETOAN','HLDT_LKT','HLDT_NNA','HLDT_QTKD','HLDT_CNTT'));
	}
	public function GetDetailEbookID($id){
		$ebook=new Ebook();
		$ebook_detail = $ebook->GetDetailEbook($id);
		foreach ($ebook_detail->list as $ebook_data) {
			$fileId=$ebook_data->fileId;
			$fileName=$ebook_data->fileName;
			$tenmon=$ebook_data->name;
			$nganh=$ebook_data->nganhId;
		}
		$ebook_relate=$ebook->GetRelateEbook($id,$nganh);

		$str = $fileName;
		$name = str_replace( '.zip', '', $str );//bo duoi file .zip
		if (file_exists(storage_path() . '/data/'.$tenmon.'/ebook/'.$name)) {//nếu file da tai ve va giai nen roi
			$url_ebook='http://thuvienelc.ehou.edu.vn/storage/data/'.$tenmon.'/ebook/'.$name.'/'.'index.html';

		}else{
			if ( !is_dir(storage_path() . '/data/'.$tenmon) ) {// neu chưa tồn tại forder này thì tạo 
				mkdir(storage_path() . '/data/'.$tenmon); //tạo forder tên môn học
			}
			if ( !is_dir(storage_path() . '/data/'.$tenmon.'/ebook') ) {// neu chưa tồn tại forder này thì tạo 
				mkdir(storage_path() . '/data/'.$tenmon.'/ebook'); //tạo forder ebook cho môn học đó
			}
			$ebook->DownloadFile($fileName,$fileId,'ebook',$tenmon);
			// Code download học liệu về
			// Tai file ve xong giai nen file 
			$zip = new ZipArchive;
			$zipFile=storage_path() . '/data/'.$tenmon.'/ebook/'.$fileName;//đường dẫn file cần giải nén
			$extractPath =storage_path() . '/data/'.$tenmon.'/ebook/'.$name;
			if($zip->open($zipFile) != "true"){
			 echo "Error :- Unable to open the Zip File";
			}
			$zip->extractTo($extractPath);
			$zip->close();
			$url_ebook='http://thuvienelc.ehou.edu.vn/storage/data/'.$tenmon.'/ebook/'.$name.'/'.'index.html';
		}
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
        return view('ebook_detail',compact('ebook_detail','ebook_relate','url_ebook'));
	}
	public function GetHoclieudientu(){
		$ebook=new Ebook();
		$HLDT_TCNNH = $ebook->GetHoclieudientu('TAICHINHNGANHANG');
		$HLDT_KETOAN = $ebook->GetHoclieudientu('KETOAN');
		$HLDT_LKT = $ebook->GetHoclieudientu('LUATKINHTE');
		$HLDT_NNA = $ebook->GetHoclieudientu('NGONNGUANH');
		$HLDT_QTKD = $ebook->GetHoclieudientu('QUANTRIKINHDOANH');
		$HLDT_CNTT = $ebook->GetHoclieudientu('CONGNGHETHONGTIN');
        return view('index',compact('HLDT_TCNNH','HLDT_KETOAN','HLDT_LKT','HLDT_NNA','HLDT_QTKD','HLDT_CNTT'));
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
