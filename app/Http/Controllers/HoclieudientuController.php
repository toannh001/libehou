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
class HoclieudientuController extends Controller
{
    //
	
	public function GetDetailHoclieuID($id){
		$HLDT=new HLDT();
		$hoclieu_detail = $HLDT->GetDetailHoclieu($id);
		foreach ($hoclieu_detail->list as $hoclieu_data) {
			//$fileId=$hoclieu_data->fileId;
			//$fileName=$hoclieu_data->fileName;
			//$nganh=$hoclieu_data->nganhId;
		}
		$baigiang_richmedia=$HLDT->GetRichMedia($id);
		$baigiang_text=$HLDT->GetBaigiangText($id);
		$baigiang_ebook=$HLDT->GetEbook($id);
		$hoclieu_relate=$HLDT->GetRelateHoclieu($id,'TAICHINHNGANHANG');
        return view('hoclieu',compact('hoclieu_detail','hoclieu_relate','baigiang_richmedia','baigiang_text','baigiang_ebook'));
	}
	public function DownloadRichMedia($id){
		$HLDT=new HLDT();
		$baigiang_richmedia=$HLDT->GetDetailRichMedia($id);
		foreach ($baigiang_richmedia->list as $richmedia) {
			$fileId=$richmedia->fileId;
			$fileName=$richmedia->fileName;
			$tenmon=$richmedia->lCMSNhomHocLieuName;
			//$nganh=$hoclieu_data->nganhId;
		}
		$str = $fileName;
		$name = str_replace( '.zip', '', $str );//bo duoi file .zip
		if (file_exists(storage_path() . '/data/'.$tenmon.'/richmedia/'.$name)) {//nếu file da tai ve va giai nen roi
			$url_richmedia='http://localhost/libehou/storage/data/'.$tenmon.'/richmedia/'.$name.'/'.'story_html5.html';

		}else{
			if ( !is_dir(storage_path() . '/data/'.$tenmon) ) {// neu chưa tồn tại forder này thì tạo 
				mkdir(storage_path() . '/data/'.$tenmon); //tạo forder tên môn học
			}
			if ( !is_dir(storage_path() . '/data/'.$tenmon.'/richmedia') ) {// neu chưa tồn tại forder này thì tạo 
				mkdir(storage_path() . '/data/'.$tenmon.'/richmedia'); //tạo forder ebook cho môn học đó
			}
			$HLDT->DownloadFile($fileName,$fileId,'richmedia',$tenmon);
			// Code download học liệu về
			// Tai file ve xong giai nen file 
			$zip = new ZipArchive;
			$zipFile=storage_path() . '/data/'.$tenmon.'/richmedia/'.$fileName;//đường dẫn file cần giải nén
			$extractPath =storage_path() . '/data/'.$tenmon.'/richmedia/'.$name;
			if($zip->open($zipFile) != "true"){
			 echo "Error :- Unable to open the Zip File";
			}
			$zip->extractTo($extractPath);
			$zip->close();
			$url_richmedia='http://localhost/libehou/storage/data/'.$tenmon.'/richmedia/'.$name.'/'.'story_html5.html';
		}
        return redirect($url_richmedia);
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

}
