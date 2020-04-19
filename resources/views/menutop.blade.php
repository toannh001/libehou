      <script>
         $(document).ready(function(){
         // tab 1
           $("#content_mobile_menu").hide();
           $("#mobile_menu_click").click(function(){
            if ($("#content_mobile_menu").css('display') == 'none') {
               $("#content_mobile_menu").show();
            }else{
               $("#content_mobile_menu").hide();
            }
           });
         });
      </script>
      <div class="container">
               <div id="vc-nav-id-16-wrapper" class=" vc-mm-menu-h  vc-mm-h-layout-5 vc-mm-container  vc-transparent ">
                  <ul id="vc-nav-id-16-mobile" class="vc-nav-on-mobile vc-mm-menu">
                     <li class="vc-menu-item  mobile-btn">
                        <a class="nav-link" href="http://{{$_SERVER['HTTP_HOST']}}"><i class="fa fa-home"></i></a>
                     </li>
                     <li href='javascript:void(0)' id="mobile_menu_click" class="vc-menu-item vc-mm-mobile-toggle">
                        <a href="#" class="nav-link vc-mm-mobile-toggle-btn"><i class="fa fa-bars"></i></a>
                        <h3 class="vc-mm-child-title lv-0">
                           <span>Main Menu</span><a class="vc-close" href="#"></a>
                        </h3>
                     </li>
                     <!-- menu mobile !-->
                     <div class="v3-header-navigation menumobile" id="content_mobile_menu" style="display:none;overflow: hidden;">
                        <nav>
                           <ul>
                              <li>
                                 <a href="">Ebook</a>
                                 <ul class="sub-menu animated fadeInRight">
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/CONGNGHETHONGTIN">Công nghệ Thông tin</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/KETOAN">Kế toán</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/LUATKINHTE">Luật kinh tế</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/NGONNGUANH">Ngôn ngữ Anh</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/QUANTRIKINHDOANH">Quản trị kinh doanh</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/TAICHINHNGANHANG">Tài chính ngân hàng</a>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="">Học liệu điện tử</a>
                                 <ul class="sub-menu animated fadeInRight">
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/CONGNGHETHONGTIN">Công nghệ Thông tin</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/KETOAN">Kế toán</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/LUATKINHTE">Luật kinh tế</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/NGONNGUANH">Ngôn ngữ Anh</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/QUANTRIKINHDOANH">Quản trị kinh doanh</a>
                                    </li>
                                    <li>
                                       <a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/TAICHINHNGANHANG">Tài chính ngân hàng</a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14">
                                 <a href="http://elc.ehou.edu.vn/lien-he/">Liên hệ</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </ul>
                  
                  <ul id="vc-nav-id-16" data-menu-type="h" class="vc-nav-on-desktop vc-mm-menu">
                     <li class="vc-menu-item vc-mm-mobile-toggle">
                        <a href="#" class="nav-link vc-mm-mobile-toggle-btn"><i class="fa fa-bars"></i></a>
                        <h3 class="vc-mm-child-title lv-0">
                           <span>Main Menu</span><a class="vc-close" href="#"></a>
                        </h3>
                     </li>
                     <li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-30 vc-menu-item vc-d-0 vc-mm-layout-full">
                        <a href="http://{{$_SERVER['HTTP_HOST']}}" class="nav-link"><span class="vc-label">Trang chủ</span></a>
                     </li>
                     <li id="menu-item-118" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-118 vc-menu-item vc-d-0 vc-mm-mega vc-mm-align-default vc-mm-layout-full" 
                     -mm-settings="{&quot;layout&quot;:&quot;full&quot;,&quot;width&quot;:&quot;&quot;}" >
                        <a href="#" class="nav-link"><span class="vc-label">Học liệu điện tử</span></a>
                        <div class="vc-mm-mega-cont">
                           <div class="vc-mm-mega-cont-inner">
                              <div class="vc_row wpb_row vc_row-fluid">
                                 <div class="page-container">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                       <div class="vc_column-inner vc_custom_1454743982508">
                                          <div class="wpb_wrapper">  
                                             <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                   <div class="menu-novel-container">
                                                      <ul id="menu-novel" class="menu">
                                                         <li id="menu-item-120" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-120"><a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/CONGNGHETHONGTIN">Công nghệ thông tin</a></li>
                                                         <li id="menu-item-121" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-121"><a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/KETOAN">Kế toán</a></li>
                                                         <li id="menu-item-122" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-122"><a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/LUATKINHTE">Luật kinh tế</a></li>
													  </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                       <div class="vc_column-inner vc_custom_1454743993099">
                                          <div class="wpb_wrapper">
                                             <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                   <div class="menu-business-container">
                                                      <ul id="menu-business" class="menu">
                                                         <li id="menu-item-125" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-125"><a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/NGONNGUANH">Ngôn ngữ Anh</a></li>
                                                         <li id="menu-item-126" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-126"><a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/QUANTRIKINHDOANH">Quản trị kinh doanh</a></li>
                                                         <li id="menu-item-127" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-127"><a href="http://{{$_SERVER['HTTP_HOST']}}/hoclieu/nganh/TAICHINHNGANHANG">Tài chính ngân hàng</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class=''>
                                                <div class='dis-bottom-left'>
                                                   <div class='dis-bottom-left-img'>
                                                      <img src="{{ asset('public/images/home-1-text-book.jpg')}}" alt='TEXT BOOKS'>
                                                      <div class='dis-bottom-left-content'>
                                                         <div class='dis-bottom-left-text'>
                                                            <h2 style='color:#27ae61'>Học liệu điện tử</h2>                                                            
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
                     </li>
                     <li id="menu-item-136" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-136 vc-menu-item vc-d-0 vc-mm-mega vc-mm-align-default vc-mm-layout-full" 
                     -mm-settings="{&quot;layout&quot;:&quot;full&quot;,&quot;width&quot;:&quot;&quot;}" >
                        <a href="#" class="nav-link"><span class="vc-label">E-Books</span></a>
                        <div class="vc-mm-mega-cont">
                           <div class="vc-mm-mega-cont-inner">
                              <div class="vc_row wpb_row vc_row-fluid">
                                 <div class="page-container">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                       <div class="vc_column-inner vc_custom_1454743982508">
                                          <div class="wpb_wrapper">  
                                             <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                   <div class="menu-novel-container">
                                                      <ul id="menu-novel" class="menu">
                                                         <li id="menu-item-120" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-120"><a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/NGONNGUANH">Công nghệ thông tin</a></li>
                                                         <li id="menu-item-121" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-121"><a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/KETOAN">Kế toán</a></li>
                                                         <li id="menu-item-122" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-122"><a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/LUATKINHTE">Luật kinh tế</a></li>
													  </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                       <div class="vc_column-inner vc_custom_1454743993099">
                                          <div class="wpb_wrapper">
                                             <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                   <div class="menu-business-container">
                                                      <ul id="menu-business" class="menu">
                                                         <li id="menu-item-125" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-125"><a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/NGONNGUANH">Ngôn ngữ Anh</a></li>
                                                         <li id="menu-item-126" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-126"><a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/QUANTRIKINHDOANH">Quản trị kinh doanh</a></li>
                                                         <li id="menu-item-127" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-127"><a href="http://{{$_SERVER['HTTP_HOST']}}/ebook/nganh/TAICHINHNGANHANG">Tài chính ngân hàng</a></li>
                                                      </ul>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                       <div class="vc_column-inner ">
                                          <div class="wpb_wrapper">
                                             <div class=''>
                                                <div class='dis-bottom-left'>
                                                   <div class='dis-bottom-left-img'>
                                                      <img src="{{ asset('public/images/home-1-ebook.jpg')}}" alt='E-BOOKS'>
                                                      <div class='dis-bottom-left-content'>
                                                         <div class='dis-bottom-left-text'>
                                                            <h2 style='color:#27ae61'>E-BOOKS</h2>
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
                     </li>
                     <li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-151 vc-menu-item vc-d-0 vc-mm-layout-full">
                        <a href="http://tuyensinh.ehou.edu.vn/" class="nav-link"><span class="vc-label">Tuyển sinh</span></a>
                     </li>
                     <li id="menu-item-151" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-151 vc-menu-item vc-d-0 vc-mm-layout-full">
                        <a href="http://ehou.edu.vn/" class="nav-link"><span class="vc-label">Cổng thông tin</span></a>
                     </li>
                     <!--
                     <li id="menu-item-150" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-150 vc-menu-item vc-d-0 vc-mm-layout-full">
                        <a href="#" class="nav-link"><span class="vc-label">Chuyên đề</span></a>
                        <div class='sub-menu'>
                           <ul class="sub-menu-inner">
                              <li id="menu-item-402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-402 vc-menu-item vc-d-1 vc-mm-layout-full"><a href="http://wp.acmeedesign.com/bookstore/tabbed-products-slider/" class="nav-link"><span class="vc-label">Công nghệ thông tin</span></a></li>
                              <li id="menu-item-405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-405 vc-menu-item vc-d-1 vc-mm-layout-full"><a href="http://wp.acmeedesign.com/bookstore/featured-products/" class="nav-link"><span class="vc-label">Kế toán</span></a></li>
                              <li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-403 vc-menu-item vc-d-1 vc-mm-layout-full"><a href="http://wp.acmeedesign.com/bookstore/recent-products/" class="nav-link"><span class="vc-label">Luật kinh tế</span></a></li>
                              <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401 vc-menu-item vc-d-1 vc-mm-layout-full"><a href="http://wp.acmeedesign.com/bookstore/typography/" class="nav-link"><span class="vc-label">Ngôn ngữ Anh</span></a></li>
                              <li id="menu-item-404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-404 vc-menu-item vc-d-1 vc-mm-layout-full"><a href="http://wp.acmeedesign.com/bookstore/google-map/" class="nav-link"><span class="vc-label">Quản trị kinh doanh</span></a></li>
                              <li id="menu-item-406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-406 vc-menu-item vc-d-1 vc-mm-layout-full"><a href="http://wp.acmeedesign.com/bookstore/faq/" class="nav-link"><span class="vc-label">Tài chính ngân hàng</span></a></li>
                           </ul>
                        </div>
                     </li>
                     !-->
					 <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29 vc-menu-item vc-d-0 vc-mm-layout-full"><a href="http://elc.ehou.edu.vn/lien-he/" class="nav-link"><span class="vc-label">Liên hệ</span></a></li>
                  </ul>
               </div>
               <div class="nav-search">
                  <form method="get" id="searchform" class="searchform" action="search/">
                     <div class="form">
                        <input type="search" class="field" name="s" value="" id="s" placeholder="Search &hellip;" />
                     </div>
                     <div class="search-type">						
                        <input type="hidden" name="post_type" value="product"/>           
                     </div>
                  </form>
               </div>
            </div>