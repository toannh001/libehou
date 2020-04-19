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
class EbookController extends Controller
{
    //
	
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
	public function GetEbookByNganh(Request $request,$nganh){
		$ebook=new Ebook();
		$nganhhoclieu=$nganh;
		$ebook_data = $ebook->GetEbook($nganh);
		//$select=$request->input('orderby');
		//echo $request->path();
		//echo $select;exit();
		// code phân trang
		$thongbao=false;
		if(count($ebook_data->list)!=0)
		{
	        foreach($ebook_data->list as $item){
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
			return view('ebook',compact('data','vitridau','vitricuoi','total','nganhhoclieu','thongbao'));
		}else{
			$thongbao=true;
			$noidung='Dữ liệu đang được cập nhật';
			return view('ebook',compact('thongbao','noidung'));
		}
		//$data = new Paginator($hoclieu->list,,$perPage);
       
	}
	

}
