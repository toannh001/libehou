
@extends('layouts.category')
@section('header')
    @include('header')
@stop
@section('menutop')
    @include('menutop')
@stop
@section('content')

    <div class="container padding-40-v">
		<div id="main-content" class="search_hoclieu">
		   <div id="container">
		      <div id="content" role="main">
		         <div class="before-shop-loop">
		            <p class="woocommerce-result-count">
		               Hiển thị {{$vitridau}}–{{$vitricuoi}} của {{$total}} kết quả tìm kiếm
		            </p>
		         </div>
		         <div class="products clearfix list" style="display: block;">		            
		            @foreach($data as $item)
			            <div class="item col-xs-12 col-sm-4 post-76 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-fantasy product_cat-historical-fiction product_cat-people-management product_cat-personal-finance product_cat-romance product_cat-science-fiction product_tag-historical product_tag-romance-stories  instock featured shipping-taxable purchasable product-type-simple">
						   <div class="product-wrap">
						      <div class="product-image">
						         <div class="catalog-image">
						            <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/{{$item['id']}}">
						               <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book23" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png 555w" sizes="(max-width: 207px) 100vw, 207px">                        
						               <div class="button yith-wcqv-button" data-product_id="76">
						                  <i class="fa fa-search"></i>
						               </div>
						            </a>
						         </div>
						         <div class="product-buttons">
						            <div class="add-to-cart-btn"><a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/{{$item['id']}}" rel="nofollow" data-product_id="76" data-product_sku="" data-quantity="1" class="button">Xem chi tiết</a></div>
						            <div class="clear"></div>
						         </div>
						      </div>
						      <!-- end product-image -->
						      <div class="product-content">
						         <h4 class="product_title"><a class="bks_product_title_link" href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/{{$item['id']}}">{{$item['name']}}</a></h4>
						         <div class="product-desc">
						            <p></p>
						         </div>
						      </div>
						      <!-- end product-content -->
						   </div>
						</div>
		            @endforeach		            
		                  <!-- end product-content -->
		               </div>
		            </div>
		         </div>
		         {{$data->links()}}
		      </div>
		   </div>
		</div>
    </div>
         
@stop
@section('footer')
    @include('footer')
@stop


