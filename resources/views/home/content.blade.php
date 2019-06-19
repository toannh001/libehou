		
		<script>
			$(document).ready(function(){
			// tab 1
			  $("#content_hldt_index").hide();
			  $("#hldt_click").click(function(){
				$("#content_ebook_index").hide();
				if ($("#content_hldt_index").css('display') == 'none') {
					$("#content_hldt_index").show();
				}else{
					//$("#content_hldt_index").hide();
				}
			  });
			  
			  //$("#content_ebook_index").hide();
			  $("#ebook_click").click(function(){
				$("#content_hldt_index").hide();
				if ($("#content_ebook_index").css('display') == 'none') {
					$("#content_ebook_index").show();
				}else{
					//$("#content_ebook_index").hide();
				}
			  });
			  
			});
		</script>
		<div id="content" role="main">
            <div class="vc_row wpb_row vc_row-fluid">
               <div class="page-container">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                           <div style='background-color:#27ae61;color:#f7f7f7;' class='jb-features t3-spotlight t3-spotlight-1 clearfix feature-box-style1 '>
                              <div class='col-lg-4 col-md-12 col-sm-10 col-xs-12'>
                                 <div class='t3-module module border-right col-sm-offset-2 col-lg-offset-0 '>
                                    <div class='custom border-right col-sm-offset-2 col-lg-offset-0'>
                                       <div class='jb-icon-with-description'>
                                          <em class='fa fa-phone'></em>
                                          <h4 style='color:#f7f7f7'>Hỗ trợ online</h4>
                                          <p><a href="tel:0243 623 0853" class="tabthongtinkhac" title="0978.938.787">0243 623 0853</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class='col-lg-4 col-md-12 col-sm-10 col-xs-12'>
                                 <div class='t3-module module border-right col-sm-offset-2 col-lg-offset-0 '>
                                    <div class='custom border-right col-sm-offset-2 col-lg-offset-0'>
                                       <div class='jb-icon-with-description'>
                                          <em class='fa fa-book-open'><i class="fa fa-book" aria-hidden="true"></i></em>
                                          <h4 style='color:#f7f7f7'>Các khóa học online</h4>
                                           <p><a href="http://moocs.ehou.edu.vn/" class="tabthongtinkhac">Xem chi tiết tại đây</a></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class='col-lg-4 col-md-12 col-sm-10 col-xs-12'>
                                 <div class='t3-module module col-sm-offset-2 col-lg-offset-0 '>
                                    <div class='custom col-sm-offset-2 col-lg-offset-0'>
                                       <div class='jb-icon-with-description'>
                                          <em class='fa fa-usd'></em>
                                          <h4 style='color:#f7f7f7'>Mua giáo trình</h4>
                                          <p><a href="http://elc.ehou.edu.vn/danh-muc-giao-trinh/" class="tabthongtinkhac">Đăng ký tại đây</a></p>
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
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1454662051521">
               <div class="page-container">
                  <div class="wpb_column vc_column_container vc_col-sm-4" id="ebook_index">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                           <div class=''>
                              <div class='dis-bottom-left'>
                                 <div class='dis-bottom-left-img'>
                                    <img src='http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/home-1-ebook.jpg' alt='E-BOOKS'>
                                    <div class='dis-bottom-left-content'>
                                       <div class='dis-bottom-left-text'>
                                          <h6 style='color:#323232'></h6>
                                          <h2 style='color:#27ae61'>E-BOOKS</h2>
                                          <a href='javascript:void(0)' id="ebook_click" style='color:#323232' class='btn-link'>Xem học liệu <em class='fa fa-long-arrow-right'></em></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
                  <div class="wpb_column vc_column_container vc_col-sm-4" id="hldt_index">
                     <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                           <div class=''>
                              <div class='dis-bottom-left'>
                                 <div class='dis-bottom-left-img'>
                                    <img src='http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/home-1-offer.jpg' alt='OFFER ZONE'>
                                    <div class='dis-bottom-left-content'>
                                       <div class='dis-bottom-left-text'>
                                          <h6 style='color:#323232'></h6>
                                          <h2 style='color:#27ae61'>HỌC LIỆU ĐIỆN TỬ</h2>
                                          <a href='javascript:void(0)' id="hldt_click" style='color:#323232' class='btn-link'>Xem học liệu <em class='fa fa-long-arrow-right'></em></a>
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
            <div id="bks-products-slider" class="vc_row wpb_row vc_row-fluid vc_custom_1454597513538">
               <div class="page-container">
				   
                   <div class="wpb_column vc_column_container vc_col-sm-12" id="content_ebook_index">
                     <div class="vc_column-inner ">
					    <nav class="navbar nav-menu nav-menu-red show-brand">
							<div>
								 <h2 class="navbar-brand" style="width:300px">
									E-BOOKS
								 </h2>                    
							</div>
				        </nav>
                        <div class="wpb_wrapper">
                           <div class="vc_tta-container" data-vc-action="collapse">
                              <div class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-top vc_tta-controls-align-left">
                                 <div class="vc_tta-tabs-container">
                                    <ul class="vc_tta-tabs-list">
									   <li class="vc_tta-tab vc_active" data-vc-tab><a href="#TCNH" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Tài chính ngân hàng</span></a></li>
                                       <li class="vc_tta-tab" data-vc-tab><a href="#KT" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Kế toán</span></a></li>
                                       <li class="vc_tta-tab" data-vc-tab><a href="#LKT" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Luật kinh tế</span></a></li>
									   <li class="vc_tta-tab" data-vc-tab><a href="#NNA" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Ngôn ngữ Anh</span></a></li>
									   <li class="vc_tta-tab" data-vc-tab><a href="#QTKD" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Quản trị kinh doanh</span></a></li>
									   <li class="vc_tta-tab" data-vc-tab><a href="#CNTT" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Công nghệ thông tin</span></a></li>
									</ul>
                                 </div>
                                 <div class="vc_tta-panels-container">
                                    <div class="vc_tta-panels">
                                       <div class="vc_tta-panel vc_active" id="TCNH" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#TCNH" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Tài chính ngân hàng</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_D13Id' class='owl-carousel'>
														@foreach($TCNNH->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="ebook/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="ebook/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem chi tiêt</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="ebook/{{$product->id}}">{{ $product->name }}</a></h4>																	
																 </div>
																 <!-- end product-content -->   
															  </div>
														   </div>
													   @endforeach
													</div>
												 </div>
											  </div>
										   </div>
									   <div class="vc_tta-panel" id="KT" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#KT" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Kế toán</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_D13Id' class='owl-carousel'>
														@foreach($KETOAN->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="ebook/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="ebook/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem chi tiết</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="ebook/{{ $product->id }}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
														   </div>
													   @endforeach
													</div>
												 </div>
											  </div>
									   </div>
                                       <div class="vc_tta-panel" id="LKT" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#LKT" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Luật kinh tế</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_D13Id' class='owl-carousel'>
														@foreach($LKT->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="ebook/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book6" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book6-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book6.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="ebook/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem chi tiết</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="ebook/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
														   </div>
													   @endforeach
													</div>
												 </div>
											  </div>
                                       </div>
									   <div class="vc_tta-panel" id="NNA" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#NNA" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Ngôn ngữ Anh</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_D13Id' class='owl-carousel'>
														@foreach($NNA->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="ebook/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book6" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book6-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book6.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="ebook/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem chi tiết</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="ebook/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
														   </div>
													   @endforeach
													</div>
												 </div>
											  </div>
										   </div>
									   <div class="vc_tta-panel" id="QTKD" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#QTKD" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Quản trị kinh doan</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_D13Id' class='owl-carousel'>
														@foreach($QTKD->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="ebook/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book12" srcset="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12-100x128.png 100w, http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book12.png 555w" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="ebook/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem chi tiết</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="ebook/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
														   </div>
													   @endforeach
													</div>
												 </div>
											  </div>
										   </div>                                 
									   <div class="vc_tta-panel" id="CNTT" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#CNTT" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Công nghệ thông tin</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_D13Id' class='owl-carousel'>
														@foreach($CNTT->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="ebook/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="ebook/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem chi tiết</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="ebook/{{$product->id}}">{{ $product->name }}</a></h4>
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
                        </div>
                     </div>
                  </div>
				  <div class="wpb_column vc_column_container vc_col-sm-12" id="content_hldt_index" style="display:none;">
				     
                     <div class="vc_column-inner ">
						<nav class="navbar nav-menu nav-menu-red show-brand">
							<div>
								 <h2 class="navbar-brand" style="width:300px">
									Học liệu điện tử
								 </h2>                    
							</div>
						</nav>
                        <div class="wpb_wrapper">
                           <div class="vc_tta-container" data-vc-action="collapse">
                              <div class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-top vc_tta-controls-align-left">
                                 <div class="vc_tta-tabs-container">
                                    <ul class="vc_tta-tabs-list">
									   <li class="vc_tta-tab vc_active" data-vc-tab><a href="#TCNH" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Tài chính ngân hàng</span></a></li>
                                       <li class="vc_tta-tab" data-vc-tab><a href="#KT" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Kế toán</span></a></li>
                                       <li class="vc_tta-tab" data-vc-tab><a href="#LKT" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Luật kinh tế</span></a></li>
									   <li class="vc_tta-tab" data-vc-tab><a href="#NNA" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Ngôn ngữ Anh</span></a></li>
									   <li class="vc_tta-tab" data-vc-tab><a href="#QTKD" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Quản trị kinh doanh</span></a></li>
									   <li class="vc_tta-tab" data-vc-tab><a href="#CNTT" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Công nghệ thông tin</span></a></li>
									</ul>
                                 </div>
                                 <div class="vc_tta-panels-container">
                                    <div class="vc_tta-panels">
                                       <div class="vc_tta-panel vc_active" id="TCNH" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#TCNH" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Tài chính ngân hàng</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_ry10k' class='owl-carousel'>
														<?php $tong=count($HLDT_TCNNH->list)/2; ?>
														@for($i=0; $i< $tong;$i++)
														   <?php $dem=0;  ?>
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  @foreach($HLDT_TCNNH->list as $id=>$product)
															  <div class="product-wrap">
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="hoclieu/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="hoclieu/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem học liệu</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="hoclieu/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
																	<?php 
																		$dem++;
																		unset($HLDT_TCNNH->list[$id]);
																		if($dem==2) break;																
																    ?>
															   @endforeach
														   </div>
														@endfor
													</div>
												 </div>
											  </div>
										   </div>
									   <div class="vc_tta-panel" id="KT" data-vc-content=".vc_tta-panel-body">
                                          <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#KT" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Kế toán</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_ry10k' class='owl-carousel'>
														<?php $tong=count($HLDT_KETOAN->list)/2; ?>
														@for($i=0; $i< $tong;$i++)
														   <?php $dem=0;  ?>
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  @foreach($HLDT_KETOAN->list as $id=>$product)
															  <div class="product-wrap">
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="hoclieu/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="hoclieu/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem học liệu</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="hoclieu/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
																	<?php 
																		$dem++;
																		unset($HLDT_KETOAN->list[$id]);
																		if($dem==2) break;																
																    ?>
															   @endforeach
														   </div>
														@endfor
													</div>
												 </div>
											  </div>
									   </div>
                                       <div class="vc_tta-panel" id="LKT" data-vc-content=".vc_tta-panel-body">
                                              <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#LKT" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Luật kinh tế</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider'>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_ry10k' class='owl-carousel'>
														<?php $tong=count($HLDT_LKT->list)/2; ?>
														@for($i=0; $i< $tong;$i++)
														   <?php $dem=0;  ?>
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  @foreach($HLDT_LKT->list as $id=>$product)
															  <div class="product-wrap">
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="hoclieu/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="hoclieu/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem học liệu</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="hoclieu/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
																	<?php 
																		$dem++;
																		unset($HLDT_LKT->list[$id]);
																		if($dem==2) break;																
																    ?>
															   @endforeach
														   </div>
														@endfor
													</div>
											  </div>
											</div>
									   </div>
									   <div class="vc_tta-panel" id="NNA" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#NNA" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Ngôn ngữ Anh</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_ry10k' class='owl-carousel'>
														<?php $tong=count($HLDT_NNA->list)/2; ?>
														@for($i=0; $i< $tong;$i++)
														   <?php $dem=0;  ?>
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  @foreach($HLDT_NNA->list as $id=>$product)
															  <div class="product-wrap">
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="hoclieu/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="hoclieu/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem học liệu</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="hoclieu/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
																	<?php 
																		$dem++;
																		unset($HLDT_NNA->list[$id]);
																		if($dem==2) break;																
																    ?>
															   @endforeach
														   </div>
														@endfor
													</div>
												 </div>
											  </div>
										   </div>
									   <div class="vc_tta-panel" id="QTKD" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#QTKD" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Quản trị kinh doanh</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_ry10k' class='owl-carousel'>
														<?php $tong=count($HLDT_QTKD->list)/2; ?>
														@for($i=0; $i< $tong;$i++)
														   <?php $dem=0;  ?>
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  @foreach($HLDT_QTKD->list as $id=>$product)
															  <div class="product-wrap">
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="hoclieu/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="hoclieu/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem học liệu</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="hoclieu/{{$product->id}}">{{ $product->name }}</a></h4>
																 </div>
																 <!-- end product-content -->   
															  </div>
																	<?php 
																		$dem++;
																		unset($HLDT_QTKD->list[$id]);
																		if($dem==2) break;																
																    ?>
															   @endforeach
														   </div>
														@endfor
													</div>
												 </div>
											  </div>
										   </div>                                 
									   <div class="vc_tta-panel" id="CNTT" data-vc-content=".vc_tta-panel-body">
											  <div class="vc_tta-panel-heading">
												 <h4 class="vc_tta-panel-title"><a href="#CNTT" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Công nghệ Thông tin</span></a></h4>
											  </div>
											  <div class="vc_tta-panel-body">
												 <div class='woocommerce bks-product-slider '>
													<div class='carousel-controls'>
													   <div class='owl-prev'>
														  <a class='prev'><i class='fa fa-angle-left'></i></a>
													   </div>
													   <div class='owl-next'>
														  <a class='next'><i class='fa fa-angle-right'></i></a>
													   </div>
													</div>
													<div id='carousel_D13Id' class='owl-carousel'>
														@foreach($HLDT_CNTT->list as $product)
														   <div class="item post-{{ $product->id }} product type-product status-publish has-post-thumbnail product_cat-budgeting-and-finance product_cat-creative-thinking product_cat-personal-finance product_cat-romance  instock sale featured shipping-taxable purchasable product-type-simple">
															  <div class="product-wrap">
																 
																 <div class="product-image">
																	<div class="catalog-image">
																	   <a href="hoclieu/{{$product->id}}">
																		  <img width="207" height="265" src="http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/book11.png" class="attachment-bookstore_product_thumb size-bookstore_product_thumb wp-post-image" alt="book11" sizes="(max-width: 207px) 100vw, 207px" />                        
																		  <div class="button yith-wcqv-button" data-product_id="{{ $product->id }}">
																			 <i class="fa fa-search"></i>
																		  </div>
																	   </a>
																	</div>
																	<div class="product-buttons">
																	   <div class="add-to-cart-btn"><a href="hoclieu/{{$product->id}}" rel="nofollow" data-product_id="{{ $product->id }}" data-product_sku="" data-quantity="1" class="button add_to_cart_button ajax_add_to_cart product_type_simple">Xem học liệu</a></div>																	   
																	   <div class="clear"></div>
																	</div>
																 </div>
																 <!-- end product-image -->
																 <div class="product-content">
																	<h4 class="product_title"><a class="bks_product_title_link" href="ebook/{{$product->id}}">{{ $product->name }}</a></h4>
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
                        </div>
                     </div>
                  </div>
               
			   </div>
            </div>
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
         