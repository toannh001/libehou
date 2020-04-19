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
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
//use Illuminate\Pagination\Paginator;
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
        return view('hoclieu_detail',compact('hoclieu_detail','hoclieu_relate','baigiang_richmedia','baigiang_text','baigiang_ebook'));
	}
	public function ViewBaigiangText($textId){
		$HLDT=new HLDT();
		$text=$HLDT->VỉewBaigiangText($textId);
		return redirect('http://uni.ehou.edu.vn/?entryPoint=download&id='.$textId);
	}
	public function GetHoclieuByNganh(Request $request,$nganh){
		$HLDT=new HLDT();
		$nganhhoclieu=$nganh;
		$hoclieu = $HLDT->GetHoclieuByNganh('CONGNGHETHONGTIN');
		$select=$request->input('orderby');
		//echo $request->path();
		//echo $select;exit();
		// code phân trang
        foreach($hoclieu->list as $item){
            $filter_products[]=(array)$item;
        }
        $count = count($filter_products);
        $total=$count;
		$page=$request->page;
		if($page == '')
		{
			$page=1;
		}
		$perPage=9;
		$offset = ($page-1) * $perPage;
		$vitridau=($perPage*($page-1))+1; // thứ tự sản phẩm ở vị trí đầu tiên trong trang
		$vitricuoi=$perPage*$page;// thứ tự cuối cùng của sản phẩm
        $products = array_slice($filter_products, $offset, $perPage);
		$data = new Paginator($products,$count,$perPage,$page, ['path'  => $request->url(),'query' => $request->query(),]);
		//$data = new Paginator($hoclieu->list,,$perPage);
        return view('hoclieu',compact('data','vitridau','vitricuoi','total','nganhhoclieu'));
	}
	public function DownloadRichMedia($id){
		$HLDT=new HLDT();
		$baigiang_richmedia=$HLDT->GetDetailRichMedia($id);
		//print_r($baigiang_richmedia);exit();
		foreach ($baigiang_richmedia->list as $richmedia) {
			$fileId=$richmedia->fileId;
			$fileName=$richmedia->fileName;
			$tenmon=$richmedia->lCMSNhomHocLieuName;
			//$nganh=$hoclieu_data->nganhId;
		}
		$str = $fileName;
		$name = str_replace( '.zip', '', $str );//bo duoi file .zip
		if (file_exists(storage_path() . '/data/'.$tenmon.'/richmedia/'.$name)) {//nếu file da tai ve va giai nen roi
			$url_richmedia='http://thuvienelc.ehou.edu.vn/storage/data/'.$tenmon.'/richmedia/'.$name.'/'.'story_html5.html';

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
			$url_richmedia='http://thuvienelc.ehou.edu.vn/storage/data/'.$tenmon.'/richmedia/'.$name.'/'.'story_html5.html';
		}
        return redirect($url_richmedia);
	}
	public function DownloadBaigiangText($id){
		$HLDT=new HLDT();
		$baigiang_text=$HLDT->GetDetailBaigiangText($id);
		foreach ($baigiang_text->list as $text) {
			$fileId=$text->fileId;
			$fileName=$text->fileName;
			$tenmon=$text->lCMSNhomHocLieuName;
			//$nganh=$hoclieu_data->nganhId;
		}
		if (file_exists(storage_path() . '/data/'.$tenmon.'/text/'.$fileName)) {//nếu file da tai ve va giai nen roi
			$url_text='http://thuvienelc.ehou.edu.vn/storage/data/'.$tenmon.'/text/'.$fileName;

		}else{
			if ( !is_dir(storage_path() . '/data/'.$tenmon) ) {// neu chưa tồn tại forder này thì tạo 
				mkdir(storage_path() . '/data/'.$tenmon); //tạo forder tên môn học
			}
			if ( !is_dir(storage_path() . '/data/'.$tenmon.'/text') ) {// neu chưa tồn tại forder này thì tạo 
				mkdir(storage_path() . '/data/'.$tenmon.'/text'); //tạo forder ebook cho môn học đó
			}
			$HLDT->DownloadFile($fileName,$fileId,'text',$tenmon);
			// Code download học liệu về
			$url_text='http://thuvienelc.ehou.edu.vn/storage/data/'.$tenmon.'/text/'.$fileName;
		}
        return redirect($url_text);
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
