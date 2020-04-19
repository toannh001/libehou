
@extends('layouts.category')
@section('header')
    @include('header')
@stop
@section('menutop')
    @include('menutop')
@stop
@section('content')

    <div class="container padding-40-v">
		@include('menulefthoclieu')
		<div id="main-content" class="col-xs-12 col-sm-9 right page_category">
		   <div id="container">
		      <div id="content" role="main">
		         <div class="before-shop-loop">
		            <p class="woocommerce-result-count">
		               Hiển thị {{$vitridau}}–{{$vitricuoi}} của {{$total}} Học liệu
		            </p>
		            <!--
		            <form class="woocommerce-ordering" method="get" action="http://localhost/libehou/public/hoclieu/nganh/{{$nganhhoclieu}}">
		               <select name="orderby" class="orderby id="myselect" onchange="this.form.submit()">">
		                  <option value="menu_order" selected="selected">Default sorting</option>
		                  <option value="popularity">Sort by popularity</option>
		                  <option value="rating">Sort by average rating</option>
		                  <option value="date">Sort by newness</option>
		                  <option value="price">Sort by price: low to high</option>
		                  <option value="price-desc">Sort by price: high to low</option>
		               </select>
		            </form>
		            <nav class="gridlist-toggle">
		               <a href="#" id="grid" title="Grid view" class="active"><span class="fa fa-th-large"></span> <em>Grid view</em></a><a href="#" id="list" title="List view"><span class="fa fa-th-list"></span> <em>List view</em></a>
		            </nav>
		            !-->
		         </div>
		         <div class="products clearfix grid">		            
		            @foreach($data as $ebook)
			            <div class="item col-xs-12 col-sm-4 post-{{$ebook['id']}} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-fantasy product_cat-romance product_cat-sales-and-marketting product_tag-romance-stories product_tag-suspense last instock shipping-taxable purchasable product-type-simple">
			               <div class="product-wrap">
			                  <div class="product-image">
			                     <div class="catalog-image">
			                        <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/{{$ebook['id']}}">
			                           <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book23" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png 555w" sizes="(max-width: 207px) 100vw, 207px">                        
			                           <div class="button yith-wcqv-button" data-product_id="73">
			                              <i class="fa fa-search"></i>
			                           </div>
			                        </a>
			                     </div>
			                     
			                     <div class="product-buttons">
			                        <div class="add-to-cart-btn">
			                        	<a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/{{$ebook['id']}}" rel="nofollow" data-product_id="73" data-product_sku="" data-quantity="1" class="button">Xem chi tiết</a>
			                        </div>
			                        <div class="clear"></div>
			                     </div>
			                     
			                  </div>
			                  <!-- end product-image -->
			                  <div class="product-content">
			                     <h4 class="product_title"><a class="bks_product_title_link" href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/{{$ebook['id']}}">{{$ebook['name']}}</a></h4>
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


