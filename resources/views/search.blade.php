
@extends('layouts.masters')
@section('header')
    @include('header')
@stop
@section('menutop')
    @include('menutop')
@stop
@section('content')
    <div class="container padding-40-v">
		   <div id="container">
			  <div id="content" role="main">
				@foreach($hoclieu->list as $ebook)
				 <div itemscope="" itemtype="http://schema.org/Product" id="product-76" class="post-76 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-fantasy product_cat-historical-fiction product_cat-people-management product_cat-personal-finance product_cat-romance product_cat-science-fiction product_tag-historical product_tag-romance-stories first instock featured shipping-taxable purchasable product-type-simple">
					<div class="images col-sm-6">
					   <a href="#" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto"><img width="350" height="450" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book7-350x450.png" class="attachment-shop_single size-shop_single wp-post-image" alt="book7" title="book7"></a>
					</div>
					<div class="summary entry-summary col-sm-6">
					   <h2 class="product_title entry-title">{{$ebook->name}}</h2>
					   <!--
					   <div>
						  <p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>200.00</span></p>
					   </div>
					   !-->
					   <div class="description">
						  <p><span class="posted_in">Mô tả: Nội dung môn học bao gồm các khái niệm, những vấn đề cơ bản;</p>
					   </div>					   
					   <div class="clear"></div>					   
					  
					</div>
					<div style="clear:both"></div>
					<!-- .summary -->					
					
				 </div>
				 <!-- #product-76 -->
				@endforeach
			  </div>
		   </div>
		</div>
		<div id="content" role="main">
           <div id="bks-guarantee-row" class="vc_row wpb_row vc_row-fluid vc_custom_1454685996679 vc_row-has-fill">
               <div class="page-container">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                           <div class="wpb_text_column wpb_content_element  vc_custom_1454686645519 col-md-8 col-md-offset-2">
                              <div class="wpb_wrapper">
                                 <p style="text-align: center; font-size: 18px;"><em><span style="color: #999999; border-top: 1px solid #999999; border-bottom: 1px solid #999999; padding: 7px 0;">Cơ hội học tập mọi lúc mọi nơi</span></em></p>
                              </div>
                           </div>
                           <div class="vc_btn3-container  clear bold vc_btn3-center"><a onmouseleave="this.style.borderColor='#ffffff'; this.style.backgroundColor='transparent'; this.style.color='#ffffff'" onmouseenter="this.style.borderColor='#ffffff'; this.style.backgroundColor='#ffffff'; this.style.color='#27ae61';" style="border-color:#ffffff; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-outline-custom vc_btn3-icon-right" href="http://moocs.ehou.edu.vn" title="" target="_self">Các khóa học chuyên đề <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
@stop
@section('footer')
    @include('footer')
@stop


