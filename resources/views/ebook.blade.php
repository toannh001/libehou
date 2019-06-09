
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
										 <div class="item post-75 product type-product status-publish has-post-thumbnail product_cat-creative-thinking product_cat-romance product_cat-science-fiction  instock sale featured shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <span class="on-sale">Sale!</span>
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/the-third-planet/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book3.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book3" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book3-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book3.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="75">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=75" rel="nofollow" data-product_id="75" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=75&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="75" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-75">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=75" rel="nofollow" data-product-id="75" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/the-third-planet/">The Third Planet</a></h4>
												  <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>100.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>50.00</span></ins></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-76 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-fantasy product_cat-historical-fiction product_cat-people-management product_cat-personal-finance product_cat-romance product_cat-science-fiction product_tag-historical product_tag-romance-stories last instock featured shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/colorless-tsukur/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book7.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book7" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book7-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book7.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="76">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=76" rel="nofollow" data-product_id="76" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=76&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="76" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-76">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=76" rel="nofollow" data-product-id="76" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/colorless-tsukur/">Colorless Tsukur</a></h4>
												  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>200.00</span></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-86 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-fantasy product_cat-people-management product_cat-romance product_cat-sales-and-marketting  instock shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/eos-lobortis/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="86">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=86" rel="nofollow" data-product_id="86" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=86&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="86" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-86">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=86" rel="nofollow" data-product-id="86" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/eos-lobortis/">Eos Lobortis</a></h4>
												  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>200.00</span></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-78 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance last instock sale featured shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <span class="on-sale">Sale!</span>
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/loving-kitchen-2/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book6.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book6" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book6-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book6.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="78">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=78" rel="nofollow" data-product_id="78" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=78&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="78" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-78">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=78" rel="nofollow" data-product-id="78" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/loving-kitchen-2/">Loving Kitchen 2</a></h4>
												  <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>40.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>20.00</span></ins></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-91 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-people-management product_cat-personal-finance product_cat-sales-and-marketting  instock sale featured shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <span class="on-sale">Sale!</span>
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/nam-dolor-felis-6/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book17.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book17" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book17-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book17.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="91">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=91" rel="nofollow" data-product_id="91" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=91&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="91" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-91">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=91" rel="nofollow" data-product-id="91" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/nam-dolor-felis-6/">Nam Dolor Felis 6</a></h4>
												  <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>105.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>75.00</span></ins></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-74 product type-product status-publish has-post-thumbnail product_cat-romance product_cat-thrillers last instock featured shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/thrillers-story/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book22.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book22" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book22-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book22.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="74">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=74" rel="nofollow" data-product_id="74" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=74&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="74" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-74">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=74" rel="nofollow" data-product-id="74" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/thrillers-story/">Thrillers Story</a></h4>
												  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>100.00</span></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-87 product type-product status-publish has-post-thumbnail product_cat-fantasy product_cat-romance product_cat-thrillers product_tag-love product_tag-romance-stories  instock shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/the-book-of-love/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book14.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book14" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book14-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book14.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="87">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=87" rel="nofollow" data-product_id="87" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=87&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="87" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-87">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=87" rel="nofollow" data-product-id="87" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/the-book-of-love/">The Book Of Love</a></h4>
												  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>300.00</span></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-92 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-fantasy product_cat-people-management product_cat-personal-finance product_cat-sales-and-marketting last instock shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/the-best-investment/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book12" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="92">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=92" rel="nofollow" data-product_id="92" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=92&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="92" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-92">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=92" rel="nofollow" data-product-id="92" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/the-best-investment/">The Best Investment</a></h4>
												  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>360.00</span></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-88 product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-personal-finance product_cat-romance  instock sale shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <span class="on-sale">Sale!</span>
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/vacation/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book10.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book10" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book10-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book10.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="88">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=88" rel="nofollow" data-product_id="88" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=88&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="88" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-88">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=88" rel="nofollow" data-product-id="88" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/vacation/">Vacation</a></h4>
												  <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>600.00</span></del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>259.00</span></ins></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
										 <div class="item post-8 product type-product status-publish has-post-thumbnail product_cat-creative-thinking product_cat-romance last instock shipping-taxable purchasable product-type-simple">
											<div class="product-wrap">
											   <div class="product-image">
												  <div class="catalog-image">
													 <a href="http://wp.acmeedesign.com/bookstore/product/the-myths/">
														<img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book15.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book15" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book15-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/book15.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
														<div class="button yith-wcqv-button" data-product_id="8">
														   <i class="fa fa-search"></i>
														</div>
													 </a>
												  </div>
												  <div class="product-buttons">
													 <div class="add-to-cart-btn"><a href="/bookstore/?add-to-cart=8" rel="nofollow" data-product_id="8" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Add to cart</a></div>
													 <div class="yith_compare_btn">
														<div class="woocommerce product compare-button"><a href="/bookstore/?action=yith-woocompare-add-product&amp;id=8&amp;_wpnonce=6f5aadfa0d" class="compare button" data-product_id="8" rel="nofollow">Compare</a></div>
													 </div>
													 <div class="yith-wcwl-add-to-wishlist add-to-wishlist-8">
														<div class="yith-wcwl-add-button hide" style="display:none">
														   <a href="/bookstore/?add_to_wishlist=8" rel="nofollow" data-product-id="8" data-product-type="simple" class="add_to_wishlist" >
														   Add to Wishlist</a>
														   <img src="http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
														</div>
														<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
														   <span class="feedback">Product added!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div class="yith-wcwl-wishlistexistsbrowse show" style="display:block">
														   <span class="feedback">The product is already in the wishlist!</span>
														   <a href="http://wp.acmeedesign.com/bookstore/wishlist/view/" rel="nofollow">
														   Browse Wishlist	        </a>
														</div>
														<div style="clear:both"></div>
														<div class="yith-wcwl-wishlistaddresponse"></div>
													 </div>
													 <div class="clear"></div>
												  </div>
											   </div>
											   <!-- end product-image -->
											   <div class="product-content">
												  <h4 class="product_title"><a class="bks_product_title_link" href="http://wp.acmeedesign.com/bookstore/product/the-myths/">The Myths</a></h4>
												  <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>300.00</span></span>
											   </div>
											   <!-- end product-content -->   
											</div>
										 </div>
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


