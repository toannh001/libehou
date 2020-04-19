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
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
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
	public function Timkiemhoclieu(Request $request){
		//$name_convert=urlencode($name);
		//$name= $request->input( 's' );
		$name=Input::get ( 's' );
		$name_convert = str_replace( ' ', '%20', $name );
		$HLDT=new HLDT();
		$hoclieu = $HLDT->Timkiemhoclieu($name_convert);
		$filter_products =[];
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
		$perPage=5;
		$offset = ($page-1) * $perPage;
		$vitridau=($perPage*($page-1))+1; // thứ tự sản phẩm ở vị trí đầu tiên trong trang
		$vitricuoi=$perPage*$page;// thứ tự cuối cùng của sản phẩm
        $products = array_slice($filter_products, $offset, $perPage);
		$data = new Paginator($products,$count,$perPage,$page, ['path'  => $request->url(),'query' => $request->query(),]);

		//$data = new Paginator($hoclieu->list,,$perPage);
		//print_r($data);
		//exit();
		//$paginator = new Illuminate\Pagination\LengthAwarePaginator($hoclieu->list, $hoclieu->total,'5');
		//$perPage=5;
		//$data = new Paginator($hoclieu->list, $perPage);
		//print_r($pagination);
		//$paginator = Paginator::make($hoclieu->list, $hoclieu->total,5);
		//exit();
        return view('search',compact('data','vitridau','vitricuoi','total'));
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
