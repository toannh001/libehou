<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
      <title>Thư viện điện tử</title>
      <style>
         #yith-quick-view-modal .yith-wcqv-main {
         background: #ffffff                }
         #yith-quick-view-close {
         color: #cdcdcd             }
         #yith-quick-view-close:hover {
         color: #ff0000             }
      </style>
      <style>
         .wishlist_table .add_to_cart, a.add_to_wishlist.button.alt { border-radius: 16px; -moz-border-radius: 16px; -webkit-border-radius: 16px; }         
      </style>
      <style type="text/css">
         img.wp-smiley,
         img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 .07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
         }
      </style>
      <link rel='stylesheet' id='dashicons-css'  href="{{ asset('css/dashicons.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='wp-jquery-ui-dialog-css'  href="{{ asset('css/jquery-ui-dialog.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='contact-form-7-css'  href="{{ asset('css/styles.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css'  href="{{ asset('css/settings.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-layout-css'  href="{{ asset('css/woocommerce-layout.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css'  href="{{ asset('css/woocommerce-smallscreen.css') }}" type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css'  href="{{ asset('css/woocommerce.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='resp-video-style-css'  href="{{ asset('css/respvid.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='yith_wcas_frontend-css'  href="{{ asset('css/yith_wcas_ajax_search.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='jquery-colorbox-css'  href="{{ asset('css/colorbox.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='yith-quick-view-css'  href="{{ asset('css/yith-quick-view.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href="{{ asset('css/prettyPhoto.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='jquery-selectBox-css'  href="{{ asset('css/jquery.selectBox.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href="{{ asset('css/font-awesome.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='vc-mm-css'  href="{{ asset('css/vc-mm.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='bookstore-social-icons-css'  href="{{ asset('css/social-icons.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='js_composer_front-css'  href="{{ asset('css/js_composer.min.css') }}" type='text/css' media='all' />
     <link rel='stylesheet' id='bookstore-booststrap-css-css'  href="{{ asset('css/bootstrap.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='bookstore-com-styles-css'  href="{{ asset('css/common.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='bookstore-custom-styles-css'  href="{{ asset('css/styles.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' href="{{ asset('css/toannh.css') }}" type='text/css' media='all' />
      <style id='bookstore-custom-styles-inline-css' type='text/css'>
         body { color:#666666;font-family:Roboto Slab;font-weight:400;line-height:30px; } .read-more { color:#27ae61 !important; } .read-more:hover { color:#229955 !important; } .btn-link:after { background:#229955 !important; } h1,h2,h3,h4,h5,h6 {color:#323232;font-family:Roboto Slab; } .topbar { background-color:#F5F5F5;color:#999999; } .topbar .nav > li.current_page_item a, .topbar .nav > li.current-menu-item a { color:#27ae61; } .topbar .nav > li a:hover { color:#27ae61; } .topbar .nav > li a { color:#999999;border-color:#27ae61; } .topbar i { color:#27ae61; } .header { background-color:#ffffff; } .bks-cart-widget .currency-switcher .dd-select { background:#ffffff !important; } .bks-cart-widget .currency-switcher, .bks-cart-widget .minicart-button { border-color:#e4e4e4 ; } .bks-cart-widget .currency-switcher a, .bks-cart-widget .minicart-button .cart-item-info a { color:#323232; } .bks-cart-widget .dd-pointer-down {border-top-color:#323232; } .bks-cart-widget .currency-switcher .dd-options { background:#ffffff; } .bks-cart-widget .currency-switcher ul.dd-options li:hover { background:#27ae61; } .bks-cart-widget .currency-switcher ul.dd-options a { color:#323232; } .bks-cart-widget .currency-switcher ul.dd-options li:hover a { color:#ffffff; } .main-menu, .main-menu .vc-mm-menu-h > ul.vc-nav-on-desktop > li > a { background:#27ae61;color:#ffffff;font-family:Roboto Slab;font-size:13px; } .main-menu .vc-mm-menu-h > ul.vc-nav-on-desktop > li > a:hover {color:#ffffff; } .main-menu .vc-mm-menu-h > ul.vc-nav-on-desktop li.current-menu-ancestor > a, .main-menu .vc-mm-menu-h > ul.vc-nav-on-desktop li.current-menu-parent > a, .main-menu .vc-mm-menu-h > ul.vc-nav-on-desktop li.current-page-item > a { color:#ffffff; } .main-menu .vc-nav-on-desktop > li:hover > a.nav-link { background:#229955; } .main-menu .vc-nav-on-desktop > li.current-menu-item > a.nav-link,.main-menu vc-nav-on-desktop > li.current_page_item > a.nav-link { background:#229955; } .main-menu .vc-mm-mega-cont, .main-menu .sub-menu, .main-menu .vc-mm-menu-h .vc-nav-on-desktop .vc-mm-mega-cont-inner {background-color:#ffffff !important; } .main-menu .vc-mm-mega-cont li a, .sub-menu-inner li a.nav-link, .vc-mm-menu a, .vc-mm-menu li a {color:#262626; } .main-menu .vc-mm-mega-cont li a:hover, .main-menu ul.sub-menu-inner li a:hover, .main-menu .vc-mm-mega-cont li a:hover, .main-menu .vc-mm-mega-cont-inner li.current-menu-parent a {color:#27ae61 !important; } .main-menu .vc-mm-mega-cont ul li {border-color:#e5e5e5 !important; } body.boxed-layout { background-color:#e5e5e5;background-image:url();background-repeat:no-repeat;background-position:0 0; background-size:cover; } .product-header {background:url(http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/title.jpg);background-color:#e5e5e5; } .page-header { background:url(http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/02/Bookshelf-1200.jpg);background-color:#555555; } .btn-primary, #back-to-top .btn { background-color:#27ae61 !important;border-color:#27ae61 !important;color:#ffffff !important;}.btn-primary:hover, .btn-primary:focus, .btn-primary:active:focus, .btn-primary:active:hover, #back-to-top .btn:hover, #back-to-top .btn:active, #back-to-top .btn:focus { background-color:#229955 !important;border-color:#229955;color:#ffffff !important;}.product-wrap .add-to-cart-btn a, .product-wrap .yith_compare_btn a, .product-wrap .yith-wcwl-add-to-wishlist a, .yith-wcwl-add-to-wishlist .woocommerce a.add_to_wishlist,.product .single_add_to_cart_button, div.product .summary .yith-wcwl-add-to-wishlist a, .woocommerce div.product .summary .compare,.woocommerce div.product .woocommerce-tabs ul.tabs li.active, .gridlist-toggle a:hover, .gridlist-toggle a.active,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt,.woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button,.woocommerce button.button, .woocommerce input.button,.main-menu .vc-mm-h-sticky-wrapper.is-sticky .vc-transparent.vc-mm-menu-h, .main-menu .vc-nav-on-mobile, ul.post-categories li a,.main-menu .vc-mm-mega-cont h3:hover, .main-menu .vc-mm-mega-cont h4:hover, .main-menu .vc-mm-mega-cont h5:hover, #bks-products-slider .vc_tta.vc_general li.vc_active a{background-color:#27ae61 !important;color:#ffffff !important;}.product-wrap .add-to-cart-btn a:hover, .woocommerce button.single_add_to_cart_button:hover, .product-wrap .add-to-cart-btn a.added, .product-wrap .yith_compare_btn a:hover, .product-wrap .yith-wcwl-add-to-wishlist a:hover,.product-wrap .yith-wcwl-wishlistaddedbrowse.show a, .product-wrap .yith-wcwl-wishlistexistsbrowse.show a, .product .single_add_to_cart_button:hover,div.product .summary .yith-wcwl-add-to-wishlist a:hover, .woocommerce div.product .summary .compare:hover,.yith-wcwl-wishlistaddedbrowse.show, .yith-wcwl-wishlistexistsbrowse.show, .catalog-image .yith-wcqv-button {background-color:#229955 !important;color:#ffffff !important;}.woocommerce #content div.product div.thumbnails a:hover, .woocommerce div.product div.thumbnails a:hover,.woocommerce-page #content div.product div.thumbnails a:hover, .woocommerce-page div.product div.thumbnails a:hover,.woocommerce .woocommerce-info, .product-wrap:hover, .main-menu .vc-mm-mega-cont h3, .main-menu .vc-mm-mega-cont h4,.main-menu .vc-mm-mega-cont h5, .woocommerce .woocommerce-message, .bks-product-list-wrap .bks-products-list-container li:hover,.main-menu .vc-mm-mega-cont .wpb_wrapper h3 {border-color:#27ae61;}.woocommerce div.product .woocommerce-tabs ul.tabs li.active { border:2px solid #27ae61;}#bks-products-slider .vc_tta-tabs-container ul li.vc_active:after {border-color:#27ae61 rgba(0,0,0,0) rgba(0,0,0,0) rgba(0,0,0,0);}.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .bks-post-slider .post-grid .post-content .post-date {background-color:#27ae61 !important;}.woocommerce .widget_price_filter .ui-slider .ui-slider-handle {border:2px solid #27ae61;}.gridlist-toggle a { color:#27ae61;border:2px solid #27ae61;}.bks-post-slider .post-grid .post-content .post-date:after { border-color:rgba(0,0,0,0) rgba(0,0,0,0) #27ae61 rgba(0,0,0,0);}.woocommerce .woocommerce-info:before, .single .post-meta .author a,.woocommerce .woocommerce-message:before, .read-more, .bks-product-list-wrap .bks-products-list-container li .product-content .amount,.slick-dots li.slick-active button:before, .product-wrap span.price { color:#27ae61!important;}ul.post-categories li a:after { border-right-color:#27ae61;}.pagination > .active > a, .pagination > .active > span, .pagination>.active>a, .pagination>.active>a:focus,.pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus,.pagination>.active>span:hover {background-color:#27ae61 !important;border:2px solid #27ae61 !important;color:#ffffff !important;}@media only screen and (max-width:768px) { .vc-mm-menu-h .vc-nav-on-desktop, .vc-mm-menu-v .vc-nav-on-desktop,.vc-mm-menu-h .vc-nav-on-desktop .vc-mm-mega-cont, .vc-mm-menu-v .vc-nav-on-desktop .vc-mm-mega-cont { } }@media only screen and (max-width:768px) { .vc-mm-menu-h .vc-nav-on-desktop > li:hover > a, .vc-mm-menu-v .vc-nav-on-desktop > li:hover > a { background-color:#229955 !important;color:#ffffff !important;}.vc-mm-menu-h .vc-nav-on-desktop .vc-d-0 > .nav-link, .vc-mm-menu-v .vc-nav-on-desktop .vc-d-0 > .nav-link,.vc-mm-menu-h .vc-mm-child-title, .vc-mm-menu-v .vc-mm-child-title {border-color:#229955 !important;}}.read-more:hover { color:#229955;}.woocommerce div.product .woocommerce-tabs ul.tabs li {background-color:#ffffff !important;color:#333333 !important;}.bks-cart-widget .minicart-button { border-top-left-radius:0px !important;border-bottom-left-radius:0px !important;border-left:0px;}.bks-promo { background-color:#B7A930;}body .social-links li a .social-icon { background:#24a9e2;color:#ffffff;}body .social-links li a .social-icon:hover, body .social-links li a .social-icon:focus { background:#1e73be;color:#ffffff;}body .social-links li .social-icon, .social-icon:after { -webkit-border-radius:50%;-moz-border-radius:50%;-ms-border-radius:50%;-o-border-radius:50%;border-radius:50%;}
      </style>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel='stylesheet' id='woocommerce-currency-switcher-css'  href='http://wp.acmeedesign.com/bookstore/wp-content/plugins/woocommerce-currency-switcher/css/front.css?ver=4.4.18' type='text/css' media='all' />
      <script type='text/javascript' src="{{ asset('js/jquery/jquery.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/woocommerce-add-to-cart.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/html5.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/front.js') }}"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!--[if lte IE 9]>
      <link rel="stylesheet" type="text/css" href="http://wp.acmeedesign.com/bookstore/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen">
      <![endif]--><!--[if IE  8]>
      <link rel="stylesheet" type="text/css" href="http://wp.acmeedesign.com/bookstore/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen">
      <![endif]-->
      <meta name="generator" content="Powered by Slider Revolution 5.1.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
      <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1454662051521{padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1454597513538{padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1454683539961{margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 3px !important;margin-left: 0px !important;padding-top: 10px !important;padding-bottom: 10px !important;background-color: #27ae61 !important;}.vc_custom_1454754526304{padding-top: 20px !important;padding-bottom: 00px !important;}.vc_custom_1454685996679{padding-top: 60px !important;padding-bottom: 60px !important;background: #424242 url(http://wp.acmeedesign.com/bookstore/wp-content/uploads/2016/01/ada9a09acea936d776a6f55c82778c43_XL.jpg?id=10) !important;}.vc_custom_1454679052819{padding-top: 60px !important;padding-bottom: 60px !important;}.vc_custom_1454597724991{margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important;padding-top: 60px !important;padding-bottom: 60px !important;background-color: #f5f5f5 !important;}.vc_custom_1456470598040{margin-top: 0px !important;margin-right: 0px !important;margin-bottom: 0px !important;margin-left: 0px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #27ae61 !important;}.vc_custom_1454686431101{margin-top: 0px !important;margin-bottom: 0px !important;}.vc_custom_1454686645519{margin-top: 30px !important;border-bottom-width: 30px !important;}.vc_custom_1454829417282{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;}.vc_custom_1454830425190{margin-top: 0px !important;margin-bottom: 0px !important;padding-right: 150px !important;}.vc_custom_1454830469549{padding-top: 30px !important;padding-left: 90px !important;}</style>
      <noscript>
         <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
      </noscript>
	  
   </head>
   <body class="home page page-id-31 page-template page-template-page-blank page-template-page-blank-php wpb-js-composer js-comp-ver-4.9.2 vc_responsive currency-usd">
      <div class="wrapper">
         <!-- TOPBAR -->
		 <!--
         <div id="topbar" class="topbar">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 text-left header-address">
                     <i class="fa fa-map-marker"></i> Brooklyn, NY 10036, United States <i class="fa fa-mobile"></i> 1-800-123-1234                  
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 text-right header-quick-links">
                     <ul id="menu" class="nav  nav-pills nav-stacked">
                        <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"><a href="http://wp.acmeedesign.com/bookstore/wishlist/">Wishlist</a></li>
                        <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a href="http://wp.acmeedesign.com/bookstore/my-account/">My Account</a></li>
                        <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a href="http://wp.acmeedesign.com/bookstore/checkout/">Checkout</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
		 !-->
         <!-- //TOPBAR -->
         <!-- HEADER -->
         <header id="header" class="header">
             @yield('header')
         </header>
         <!-- //HEADER -->
         <!-- MAIN NAVIGATION -->
         <nav class="main-menu affix-top" data-spy="affix" data-offset-top="110"> 
			@yield('menutop')            
         </nav>
         <!-- //MAIN NAVIGATION -->
         <!-- Slide show -->
         <div class="wrap jb-slideshow">
			 @yield('slider')
            <!-- END REVOLUTION SLIDER -->         
         </div>
         <!-- End of Slide show -->
		 <!-- Chứa nội dung content -->
		 @yield('content')
		 <!-- Back to Top -->
         <div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix">
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-arrow-up"></i></button>
         </div>
         <!-- Back to Top -->
         <!-- FOOTER -->
         <footer id="bks-footer" class="wrap bks-footer">
            <!-- FOOT NAVIGATION -->
            @yield('footer')
         </footer>
         <!-- //FOOTER -->
      
      
	  <div id="yith-quick-view-modal">
         <div class="yith-quick-view-overlay"></div>
         <div class="yith-wcqv-wrapper">
            <div class="yith-wcqv-main">
               <div class="yith-wcqv-head">
                  <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
               </div>
               <div id="yith-quick-view-content" class="woocommerce single-product"></div>
            </div>
         </div>
      </div>

      <script type='text/javascript' src="{{ asset('js/core.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/widget.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/mouse.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/slider.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery-ui-touch-punch.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/woocommerce/price-slider.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery/resizable.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery/draggable.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/button.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery/position.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery/dialog.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/wpdialog.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('js/jquery.form.min.js') }}"></script>

      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=2.0.13'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/themes/bookstore/assets/js/owl.carousel.min.js?ver=4.4.18'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/themes/bookstore/assets/js/lightslider.min.js?ver=4.4.18'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/themes/bookstore/assets/js/slick.min.js?ver=4.4.18'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/themes/bookstore/assets/js/script.js?ver=4.4.18'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/plugins/vc-mega-menu/assets/frontend/sticky.js?ver=4.4.18'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/plugins/js_composer/assets/lib/vc_accordion/vc-accordion.min.js?ver=4.9.2'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/plugins/js_composer/assets/lib/vc-tta-autoplay/vc-tta-autoplay.min.js?ver=4.9.2'></script>
      <script type='text/javascript' src='http://wp.acmeedesign.com/bookstore/wp-content/plugins/js_composer/assets/lib/vc_tabs/vc-tabs.min.js?ver=4.9.2'></script>

     
   </body>
</html>