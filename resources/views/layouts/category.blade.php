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
      <link rel='stylesheet' id='dashicons-css'  href="{{ asset('public/css/dashicons.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='wp-jquery-ui-dialog-css'  href="{{ asset('public/css/jquery-ui-dialog.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='contact-form-7-css'  href="{{ asset('public/css/styles.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='rs-plugin-settings-css'  href="{{ asset('public/css/settings.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-layout-css'  href="{{ asset('public/css/woocommerce-layout.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce-smallscreen-css'  href="{{ asset('public/css/woocommerce-smallscreen.css') }}" type='text/css' media='only screen and (max-width: 768px)' />
      <link rel='stylesheet' id='woocommerce-general-css'  href="{{ asset('public/css/woocommerce.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='resp-video-style-css'  href="{{ asset('public/css/respvid.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='yith_wcas_frontend-css'  href="{{ asset('public/css/yith_wcas_ajax_search.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='jquery-colorbox-css'  href="{{ asset('public/css/colorbox.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='yith-quick-view-css'  href="{{ asset('public/css/yith-quick-view.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href="{{ asset('public/css/prettyPhoto.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='jquery-selectBox-css'  href="{{ asset('public/css/jquery.selectBox.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href="{{ asset('public/css/font-awesome.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='vc-mm-css'  href="{{ asset('public/css/vc-mm.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='bookstore-social-icons-css'  href="{{ asset('public/css/social-icons.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='js_composer_front-css'  href="{{ asset('public/css/js_composer.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='bookstore-booststrap-css-css'  href="{{ asset('public/css/bootstrap.min.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='bookstore-com-styles-css'  href="{{ asset('public/css/common.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='bookstore-custom-styles-css'  href="{{ asset('public/css/styles.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' href="{{ asset('public/css/toannh.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' href="{{ asset('public/css/index.css') }}" type='text/css' media='all' />
      <link rel='stylesheet' href="{{ asset('public/css/slider.css') }}" type='text/css' media='all' />
      
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel='stylesheet' id='woocommerce-currency-switcher-css'  href='http://wp.acmeedesign.com/bookstore/wp-content/plugins/woocommerce-currency-switcher/css/front.css?ver=4.4.18' type='text/css' media='all' />
      <script type='text/javascript' src="{{ asset('public/js/jquery/jquery.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery/jquery-migrate.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery.themepunch.tools.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery.themepunch.revolution.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/woocommerce-add-to-cart.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/html5.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/bootstrap.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/front.js') }}"></script>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!--[if lte IE 9]>
      <link rel="stylesheet" type="text/css" href="http://wp.acmeedesign.com/bookstore/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen">
      <![endif]--><!--[if IE  8]>
      <link rel="stylesheet" type="text/css" href="http://wp.acmeedesign.com/bookstore/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen">
      <![endif]-->
      <meta name="generator" content="Powered by Slider Revolution 5.1.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
      <noscript>
         <style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style>
      </noscript>
   </head>
   <body class="home page page-id-31 page-template page-template-page-blank page-template-page-blank-php wpb-js-composer js-comp-ver-4.9.2 vc_responsive currency-usd woocommerce woocommerce-page">
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

      <script type='text/javascript' src="{{ asset('public/js/core.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/widget.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/mouse.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/slider.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery-ui-touch-punch.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/woocommerce/price-slider.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery/resizable.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery/draggable.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/button.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery/position.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery/dialog.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/wpdialog.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/jquery.form.min.js') }}"></script>

      <script type='text/javascript' src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/slick.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/lightslider.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/script.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/sticky.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/vc-accordion.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/vc-tta-autoplay.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('public/js/vc-tabs.min.js') }}"></script>
     
   </body>
</html>