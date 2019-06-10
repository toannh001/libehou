
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
				@foreach($ebook_detail->list as $ebook)
				 <div itemscope="" itemtype="http://schema.org/Product" id="product-76" class="post-76 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-fantasy product_cat-historical-fiction product_cat-people-management product_cat-personal-finance product_cat-romance product_cat-science-fiction product_tag-historical product_tag-romance-stories first instock featured shipping-taxable purchasable product-type-simple">
					<div class="images col-sm-6">
					   <a href="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book7.png" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto"><img width="350" height="450" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book7-350x450.png" class="attachment-shop_single size-shop_single wp-post-image" alt="book7" title="book7"></a>
					</div>
					<div class="summary entry-summary col-sm-6">
					   <h2 class="product_title entry-title">{{$ebook->name}}</h2>
					   <!--
					   <div>
						  <p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>200.00</span></p>
					   </div>
					   !-->
					   <div class="description">
						  <p><span class="posted_in">Mô tả: Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable product</p>
					   </div>					   
					   <div class="clear"></div>					   
					   <div class="description">
						  <p><span class="posted_in">Tác giả: {{$ebook->tacGia}}</span></p>
					   </div>
					   <div class="description">
						  <p><span class="posted_in">Đơn vị sản xuất: {{$ebook->donvisanxuat}}</span></p>
					   </div>
					   <div class="book-by-author">
						  <a class="book-author" href="http://wp.acmeedesign.com/bookstore/author/ckbookstore/?post_type=product">Xem chi tiết</a>
					   </div>
					</div>
					<div style="clear:both"></div>
					<!-- .summary -->					
					<div class="vc_row wpb_row vc_row-fluid vc_custom_1454754526304">
					   <div class="page-container">
						  <div class="wpb_column vc_column_container vc_col-sm-12">
							 <div class="vc_column-inner ">
								<div class="wpb_wrapper">
								   <div class='bks-heading '>
									  <h3 class='bks-title'><span style='font-size:18px;color:#333333;line-height:21px'>E-BOOKS LIÊN QUAN</span></h3>
									  <div class='bks_descrition'>Top selling books of the month</div>
								   </div>
								   <div class='woocommerce bks-product-slider '>
									  <div class='carousel-controls'>
										 <div class='owl-prev'>
											<a class='prev'><i class='fa fa-angle-left'></i></a>
										 </div>
										 <div class='owl-next'>
											<a class='next'><i class='fa fa-angle-right'></i></a>
										 </div>
									  </div>
									  <div id='carousel_o7v7V' class='owl-carousel'>
														@foreach($ebook_relate->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="http://wp.acmeedesign.com/bookstore/product/loving-kitchen-2/">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=78" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem Ebook</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="http://localhost/libehou/public/ebook/{{ $product->id }}">{{ $product->name }}</a></h4>
																	<span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>40.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>20.00</span></ins></span>
																 </div>
																 <!-- end product-content -->   
															  </div>
														   </div>
													   @endforeach
									  </div>
								   </div>
								</div>
							 </div>
						  </div>
					   </div>
					</div>
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
                           <div class="wpb_text_column wpb_content_element  vc_custom_1454686431101 col-md-8 col-md-offset-2">
                              <div class="wpb_wrapper">
                                 <h3 style="text-align: center;"><span style="color: #ffffff;">Join <span style="color: #27ae61;">100,321</span> Happy readers And Get Access To Our Entire Collection Of <span style="color: #27ae61;">1000</span> ebooks For The Price Of One</span></h3>
                              </div>
                           </div>
                           <div class="wpb_text_column wpb_content_element  vc_custom_1454686645519 col-md-8 col-md-offset-2">
                              <div class="wpb_wrapper">
                                 <p style="text-align: center; font-size: 18px;"><em><span style="color: #999999; border-top: 1px solid #999999; border-bottom: 1px solid #999999; padding: 7px 0;">We offer a 45 Day Money Back Guarantee, so joining is risk-free!</span></em></p>
                              </div>
                           </div>
                           <div class="vc_btn3-container  clear bold vc_btn3-center"><a onmouseleave="this.style.borderColor='#ffffff'; this.style.backgroundColor='transparent'; this.style.color='#ffffff'" onmouseenter="this.style.borderColor='#ffffff'; this.style.backgroundColor='#ffffff'; this.style.color='#27ae61';" style="border-color:#ffffff; color:#ffffff;" class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-rounded vc_btn3-style-outline-custom vc_btn3-icon-right" href="#" title="" target="_self">SIGN UP TODAY <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
                              
			<div class="vc_row wpb_row vc_row-fluid newsletter_subscription vc_custom_1456470598040 vc_row-has-fill">
               <div class="page-container">
                  <div class="wpb_column vc_column_container vc_col-sm-6">
                     <div class="vc_column-inner vc_custom_1454829417282">
                        <div class="wpb_wrapper">
                           <h3 style="font-size: 18px;color: #ffffff;text-align: left" class="vc_custom_heading newsletter-heading">SUBSCRIBE TO OUR NEWS LETTER</h3>
                           <div class="wpb_text_column wpb_content_element  vc_custom_1454830425190">
                              <div class="wpb_wrapper">
                                 <p><span style="color: #ffffff;">Enter your e-mail address to receive regular updates, as well as news on upcoming events and special offers.</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="wpb_column vc_column_container vc_col-sm-6">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                           <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1454830469549">
                              <div class="wpb_wrapper">
                                 <form class="newsletter_subscription">
                                    <input id="user_email" onfocus="if(this.value == 'Email address') this.value = '';" onblur="if(this.value=='') this.value='Email address';" class="inputbox invalid" type="text" name="user[email]" style="width:100%" value="Email address" title="Email address">
                                    <span class="email-icon"></span>
                                 </form>
                              </div>
                           </div>
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


