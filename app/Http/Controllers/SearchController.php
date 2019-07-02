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
use Illuminate\Support\Facades\Input;
use Storage;
use ZipArchive;
class SearchController extends Controller
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
	public function Timkiemhoclieu(){
		//$name_convert=urlencode($name);
		$name=Input::get ( 's' );
		$name_convert = str_replace( ' ', '%20', $name );
		$HLDT=new HLDT();
		$hoclieu = $HLDT->Timkiemhoclieu($name_convert);
        return view('search',compact('hoclieu'));
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
