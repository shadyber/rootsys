<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="csrf_tocken" content="{{csrf_token()}}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="/img/apple_icons_57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/apple_icons_72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/apple_icons_114x114.png">
<title>root system|ICT Solutions</title>
<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all" />
<link rel="stylesheet" href="/css/theme.css" type="text/css" media="all" />
<!-- REVOLUTION CSS FILES -->
<link rel="stylesheet" type="text/css" href="/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="/revolution/css/navigation.css">
<link rel="stylesheet" href="/css/custom.css" type="text/css" media="all" />
</head>
<body class="page_with_abs_header">
    <div id="main_header" class="type4">
        <div class="tagline show_hide">
            <div class="container">
                <div class="fright">
                    <div class="tagline_items">
                        <div class="log_in_out">
                            <a href="javascript:void(0);"><i class="fa fa-sign-in"></i> Login</a>
                            <!-- Login submenu -->
                            <div class="login_submenu">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <input type="text" placeholder="Email or Login*" value="" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="password" placeholder="Password*" value="" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="remember_me"><label><input name="remember" type="checkbox" checked value="remember">Remember Password?</label></div>
                                    <button type="submit" class="shortcode_button left_icon btn_normal btn_type3"><i class="fa fa-sign-in"></i>Log in</button>
                                </form>
                            </div>
                            <!-- //Login submenu -->
                        </div>
                        <div class="cart_btn">
                            <a href="/shop" class="view_cart_btn"><i class="fa fa-shopping-cart"></i> $00.00 (0 items)</a>
                            <!-- Cart submenu -->
                            <div class="cart_submenu">
                                <!--div class="cart_wrap">
                                    < ul class="product_posts">
                                        <li>
                                            <img src="/img/shop/4.jpg" alt="" />
                                            <a href="shop_product.html" class="title">Duis Aute Irure Dolor</a>
                                            <div class="price">1<span>x</span>$1,190</div>
                                            <a class="remove_products" href="javascript:void(0);">Close</a>
                                        </li>
                                        <li>
                                            <img src="/img/shop/2.jpg" alt="" />
                                            <a href="shop_product.html" class="title">Vestibulum Fringilla</a>
                                            <div class="price">1<span>x</span>$400</div>
                                            <a class="remove_products" href="javascript:void(0);">Close</a>
                                        </li>
                                    </ul >
                                    <div class="subtotal">Subtotal: <span>$1,590</span></div>
                                    <a href="shop_cart.html" class="shortcode_button btn_normal btn_type3">View cart</a>
                                    <a href="javascript:void(0);" class="shortcode_button btn_normal btn_type1 mr0">Checkout</a>
                                </div -->
                            </div>
                            <!-- //Cart submenu -->
                        </div>
                        <div class="social_icons">
                            <ul>
                                <li><span>Follow:</span></li>
                                <li><a class="soc_fb" href="https://www.facebook.com/root.et"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a class="soc_tweet" href="https://twitter.com/shadyber"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="soc_instagram" href="https://www.instagram.com/birhaneshady/;"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="soc_dribbble" href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="soc_pinterest" href="https://www.pinterest.com/shadyber9/"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="soc_flickr" href="javascript:void(0);"><i class="fa fa-flickr"></i></a></li>
                            </ul>
                        </div>
                        <div class="language_select">
                            <div class="selectBox">
                                <span class="selected"></span>
                                <span class="selectArrow"></span>
                                <div class="selectOptions">
                                    <span class="selectOption" data-value="english"><img src="/img/imgs/uk_flag.png" alt="" />Eng</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fleft">
                    <div class="phone"><a href="tel:+251912852989" > <i class="fa fa-phone"></i> +251 - 91285 2989</a></div>
                    <div class="email"><a href="mailto:javascript:void(0);"><i class="fa fa-envelope"></i> info@rootsystem.info</a></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="header_parent_wrap">
            <header>
                <div class="container">
                    <div class="logo_sect">
                        <a href="/" class="logo"><img src="/img/logo_white.png" class="logo_def" alt="" /><img src="/img/retina/logo_white.png" class="logo_retina" alt="" /></a>
                    </div>
                    <div class="fright">
                        <nav>
                            <ul class="menu">
                                <li class="current-menu-parent menu-item-has-children megamenu mega_submenu"><a href="/">Home</a>

                                </li>

                                <li class="menu-item-has-children"><a href="javascript:void(0);">Portfolio</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="javascript:void(0);">Grid</a>
                                                <div class="sub-nav">
                                                    <ul class="sub-menu">
                                                        <li><a href="portfolio_1col.html">1 Column</a></li>
                                                        <li><a href="portfolio_2col.html">2 Columns</a></li>
                                                        <li><a href="portfolio_3col.html">3 Columns</a></li>
                                                        <li><a href="portfolio_4col.html">4 Columns</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="portfolio_masonry.html">Masonry</a></li>
                                            <li class="menu-item-has-children"><a href="javascript:void(0);">Single Post</a>
                                                <div class="sub-nav">
                                                    <ul class="sub-menu">
                                                        <li><a href="javascript:void(0);">Fullwidth Post</a></li>
                                                        <li><a href="portfolio_post_right_sidebar.html">With Right Sidebar</a></li>
                                                        <li><a href="portfolio_post_left_sidebar.html">With Left Sidebar</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);">Blog</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li><a href="/blog"> All Blogs</a></li>
                                            @foreach(\App\Models\Category::allCategories() as $category)
                                            <li><a href="/category/{{$category->id}}">{{$category->title}}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);">Shop</a>
                                    <div class="sub-nav">
                                        <ul class="sub-menu">
                                            <li><a href="/shop">All Products</a></li>
                                            <li><a href="/shop">Recent Products</a></li>
                                            <li><a href="/shop">Tranding Products</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);">Contact</a>

                                </li>
                            </ul>
                        </nav>
                        <div class="top_search">
                            <a href="javascript:void(0);" class="search_btn not_click">Search Button</a>
                            <div class="top_search_wrap not_click">
                                <form name="search_form" method="get" action="javascript:void(0);" class="search_form not_click">
                                    <input type="text" name="s" value="" placeholder="Search" class="not_click">
                                    <input type="submit" value="Go">
                                </form>
                            </div>
                        </div>
                        <div class="cart_in_header"></div><div class="socials_in_header"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </header>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="content_block row no-sidebar">
                <div class="fl-container">
                    <div class="posts-block">
                        <div class="contentarea">

                            <!-- Slider -->
                            <div class="fw_block bg_start wall_wrap">
                                <div class="row">
                                    <div class="col-sm-12 first-module module_slider module_cont pb0 fullwidthslider">
                                        <div class="slider_container">
                                            <div class="fullscreen_slider">
                                                <ul>
                                                    <!-- SLIDE 1 -->
                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                                                        <img src="/img/slider/portfolio.jpg" alt="slide1" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                        <!-- LAYER NR. 1 -->
                                                        <div class="tp-caption tp-resizeme tp-resizeme slide_title70 bold light text-uppercase z_index2"
                                                             id="slide-1-layer-1"
                                                             data-x="center" data-hoffset="0"
                                                             data-y="top" data-voffset="136"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:-200px;opacity:0;s:1000;e:Power4.easeOut;"
                                                             data-transform_out="opacity:0;s:500;s:500;"
                                                             data-start="1500"
                                                             data-elementdelay="0.05">Root System
                                                        </div>
                                                        <!-- LAYER NR. 2 -->
                                                        <div class="tp-caption tp-resizeme slide_subtitle25 light z_index3"
                                                             id="slide-1-layer-2"
                                                             data-x="center" data-hoffset="0"
                                                             data-y="top" data-voffset="210"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeOut;"
                                                             data-transform_out="opacity:0;s:500;s:500;"
                                                             data-start="2000"
                                                             data-elementdelay="0.05">javascript:void(0);Programmer  javascript:void(0);Consultant  javascript:void(0);Tehnician
                                                        </div>
                                                        <!-- LAYER NR. 3 -->
                                                        <div class="tp-caption tp-resizeme slide_btn dark_parent z_index5"
                                                             id="slide-1-layer-3"
                                                             data-x="left" data-hoffset="430"
                                                             data-y="top" data-voffset="270"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:100px;opacity:0;s:1000;e:Power4.easeOut;"
                                                             data-transform_out="opacity:0;s:500;s:500;"
                                                             data-start="2500"
                                                             data-elementdelay="0.05"><a class="shortcode_button btn_normal btn_type3" href="javascript:void(0);">Learn More<i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                        <!-- LAYER NR. 4 -->
                                                        <div class="tp-caption tp-resizeme slide_btn dark_parent z_index5"
                                                             id="slide-1-layer-4"
                                                             data-x="left" data-hoffset="592"
                                                             data-y="top" data-voffset="270"
                                                             data-whitespace="nowrap"
                                                             data-transform_idle="o:1;"
                                                             data-transform_in="y:100px;opacity:0;s:1000;e:Power4.easeOut;"
                                                             data-transform_out="opacity:0;s:500;s:500;"
                                                             data-start="2500"
                                                             data-elementdelay="0.05"><a class="shortcode_button btn_normal btn_type6" href="javascript:void(0);">Get in Touch<i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- //Slider -->

                            <div class="fw_block bg_start stretch portfolio_bg1">
                                <div class="row">
                                    <div class="col-sm-6 module_cont pb0"></div>
                                    <div class="col-sm-6 module_cont pb60">
                                        <div class="module_content">
                                            <h3>Hi! we are Root System.</h3>
                                           <p>
                                              <h2> IT In Your Company</h2>
                                               IT is a key part of every business, from small businesses run by a single person to huge multi-national corporations. Computer technology is used across the business world in every department and has become vital to business operations in the modern world.
                                           </p>
                                            <p>Without Information Technology and system support, the business simply stops! If the internet or phone service goes down in an office, nothing can get done – HR, finance, operations, communications, sales, and all other departments depend on functional computer and information systems to complete their work. Plus, IT and Information Services (or IS) protect the integrity of data and keep it protected from the wide variety of threats in the world of technology.</p>

                                              <div class="pb10"></div>
                                            <ul>


                                                 </ul>
                                            <div class="pb20"></div>
                                            <a class="shortcode_button btn_normal btn_type3" href="javascript:void(0);">Get in Touch<i class="fa fa-angle-double-right"></i></a>
                                            <a class="shortcode_button btn_normal btn_type1 mr0" href="javascript:void(0);">Hire Us.<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fw_block bg_start stretch portfolio_bg2 pt65 mb65">
                                <div class="row">
                                    <div class="col-sm-12 module_cont module_title pb5">
                                        <div class="bg_title">
                                            <h2>Our Working Process</h2>
                                            <div class="icon_divider"></div>
                                            <p>While we develop software for you , Our talented pool of web& mobile developers work in close coordination with the clients to ensure that the website/app satisfies the organization objectives & search engines principles with perfection in designing principles and ease of navigation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row flip_box_section pb40 ">
                                    <div class="col-sm-3 module_cont">
                                        <div class="flip-box-wrap">
                                            <div class="flip-box">
                                                <div class="ifb-flip-box">
                                                    <div class="ifb-face ifb-front">
                                                        <div class="ifb-flip-box-section ">
                                                            <h5>Design</h5>
                                                            <p class="mb24">Before we start we will discuss your requirements</p>
                                                            <div class="flip-box-icon">
                                                                <i class="fa fa-magic"></i>
                                                            </div>
                                                            <p>then the first step will be designing your software as per your requirmetns.</p>
                                                        </div>
                                                    </div><!-- END .front -->
                                                    <div class="ifb-face ifb-back">
                                                        <div class="ifb-flip-box-section">
                                                            <h5>More Info</h5>
                                                            <div class="ifb-desc-back"
                                                                <p>An effective website design should fulfill</p>

                                                                <p>SIMPLICITY</p>
                                                                <p>LESS LOAD TIME</p>
                                                                <p>MOBILE FRIENDLY</p>
                                                                <p>USER FRIENDLY</p>

                                                            </div>
                                                            <a class="shortcode_button btn_small btn_type1" href="javascript:void(0);">Learn More<i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div><!-- //back -->
                                                </div><!-- //ifb-flip-box -->
                                            </div><!-- //flip-box -->
                                        </div>
                                    </div>
                                    <div class="col-sm-3 module_cont">
                                        <div class="flip-box-wrap">
                                            <div class="flip-box yellow_bg">
                                                <div class="ifb-flip-box">
                                                    <div class="ifb-face ifb-front">
                                                        <div class="ifb-flip-box-section ">
                                                            <h5>Development</h5>
                                                            <p class="mb24">Next We'll Start Development</p>
                                                            <div class="flip-box-icon">
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <p>We Have greate Design now, so we need effective code.</p>
                                                        </div>
                                                    </div><!-- END .front -->
                                                    <div class="ifb-face ifb-back">
                                                        <div class="ifb-flip-box-section">
                                                            <h5>More Info</h5>
                                                            <div class="ifb-desc-back">
                                                                <p>Design is just beauty </p>
                                                                <p>Software need internal beauty</p>

                                                                    <p>Security</p>
                                                                    <p>Algorithm</p>
                                                                    <p>Interaction</p>
                                                                    <p>Process</p>
                                                                    <p>Output</p>

                                                            </div>
                                                            <a class="shortcode_button btn_small btn_type1" href="javascript:void(0);">Learn More<i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div><!-- //back -->
                                                </div><!-- //ifb-flip-box -->
                                            </div><!-- //flip-box -->
                                        </div>
                                    </div>
                                    <div class="col-sm-3 module_cont">
                                        <div class="flip-box-wrap">
                                            <div class="flip-box green_bg">
                                                <div class="ifb-flip-box">
                                                    <div class="ifb-face ifb-front">
                                                        <div class="ifb-flip-box-section ">
                                                            <h5>Testing</h5>
                                                            <p class="mb24">Testing is mandatory befor lunching a product </p>
                                                            <div class="flip-box-icon">
                                                                <i class="fa fa-thumbs-o-up"></i>
                                                            </div>
                                                            <p>When we say testing, we see that there are different types of tests. Categorization is a natural phenomenon that occurs spontaneously over time. Test types are results, not goals.</p>
                                                        </div>
                                                    </div><!-- END .front -->
                                                    <div class="ifb-face ifb-back">
                                                        <div class="ifb-flip-box-section">
                                                            <h5>More Info</h5>
                                                            <div class="ifb-desc-back">
                                                                <p>we'll do unit testing</p>
                                                                <p>Integration Testing</p>
                                                                <p>System Testing</p>
                                                                <p>Acceptance Testing</p>
                                                            </div>
                                                            <a class="shortcode_button btn_small btn_type1" href="javascript:void(0);">Learn More<i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div><!-- //back -->
                                                </div><!-- //ifb-flip-box -->
                                            </div><!-- //flip-box -->
                                        </div>
                                    </div>
                                    <div class="col-sm-3 module_cont">
                                        <div class="flip-box-wrap">
                                            <div class="flip-box red_bg">
                                                <div class="ifb-flip-box">
                                                    <div class="ifb-face ifb-front">
                                                        <div class="ifb-flip-box-section ">
                                                            <h5>Launch</h5>
                                                            <p class="mb24">The Final Step</p>
                                                            <div class="flip-box-icon">
                                                                <i class="fa fa-rocket"></i>
                                                            </div>
                                                            <p>Everything is ready now </p>
                                                        </div>
                                                    </div><!-- END .front -->
                                                    <div class="ifb-face ifb-back">
                                                        <div class="ifb-flip-box-section">
                                                            <h5>More Info</h5>
                                                            <div class="ifb-desc-back">
                                                                <p>After lunching your product we'll help you grow the system. </p>
                                                                <p> Training  </p>
                                                                <p> support  </p>
                                                                <p> Update  </p>
                                                            </div>
                                                            <a class="shortcode_button btn_small btn_type1" href="javascript:void(0);">Learn More<i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div><!-- //back -->
                                                </div><!-- //ifb-flip-box -->
                                            </div><!-- //flip-box -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h2>Recent Projects</h2>
                                        <div class="icon_divider"></div>
                                        <p>We don't just talk big. Our work says it all</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row pb50">
                                <div class="sorting_block image-grid column3" id="list">
                                    <div class="col-sm-4 polygraphy element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/1.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Security Camera Installation</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">CCTV</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 branding textstyle element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/2.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Printer Tonner Refill Serice</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Tonner Refill</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 textstyle polygraphy element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/3.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Server Room Setup</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Networking</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 webui element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/4.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Branding Identity Designs</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 branding webui element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/5.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Flyers and Businesscards</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphics Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 polygraphy branding element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/6.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Store and Inventory System</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Software Development</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 webui branding element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/7.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Preventive and Corrective Maintenance</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Maintenance </a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 textstyle polygraphy element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/8.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Website Design For Factory</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Web Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 webui branding element">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="javascript:void(0);">
                                                    <img alt="" src="/img/portfolio/masonry/9.jpg" />
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="javascript:void(0);">Website For Coffee Exporter</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Website Development</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="fw_block bg_start dark_bg portfolio_bg3 stretch">
                                <div class="row">
                                    <div class="col-sm-6 module_cont module_skills">
                                        <h3>Our Incredible Skills</h3>
                                        <p class="mb24">Our experienced marketers, Technicians,  talented designers and skilled programmers work together to uncover your goals and understand your business need and market. We develop and build web& mobile solutions designed to attract your target customers, and help in every angle of your business.</p>
                                        <div class="shortcode_skills">
                                            <ul class="skills_list">
                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Code</h6>
                                                        <div class="skill_div" data-percent="97%" data-background="javascript:void(0);08c1f3"></div>
                                                    </div>
                                                </li>
                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Design</h6>
                                                        <div class="skill_div" data-percent="93%" data-background="javascript:void(0);fecc17"></div>
                                                    </div>
                                                </li>
                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Networking</h6>
                                                        <div class="skill_div" data-percent="95%" data-background="javascript:void(0);3db39e"></div>
                                                    </div>
                                                </li>
                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Maintainance</h6>
                                                        <div class="skill_div" data-percent="85%" data-background="javascript:void(0);f1494b"></div>
                                                    </div>
                                                </li>

                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Digital Marketing</h6>
                                                        <div class="skill_div" data-percent="93%" data-background="javascript:void(0);fecc17"></div>
                                                    </div>
                                                </li>
                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Sales Supply</h6>
                                                        <div class="skill_div" data-percent="95%" data-background="javascript:void(0);3db39e"></div>
                                                    </div>
                                                </li>
                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Security</h6>
                                                        <div class="skill_div" data-percent="85%" data-background="javascript:void(0);f1494b"></div>
                                                    </div>
                                                </li>

                                                <li class="skill_li">
                                                    <div class="diagram_bar">
                                                        <h6>Consulting</h6>
                                                        <div class="skill_div" data-percent="85%" data-background="javascript:void(0);f1494b"></div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 module_cont pb0"></div>
                                </div>
                            </div>

                            <div class="fw_block bg_start colored_bg red_bg mb65">
                                <div class="row">
                                    <div class="col-sm-12 module_cont pb0">
                                        <div class="shortcode_promoblock">
                                            <div class="promoblock_wrapper">
                                                <div class="promo_text_block">
                                                    <div class="promo_text_block_wrapper">
                                                        <h1 class="promo_text_main_title">Need High Quality Services? <span>Call Us!</span></h1>
                                                    </div>
                                                </div>
                                                <div class="promo_button_block"><a class="shortcode_button btn_large btn_type1 left_icon" href="javascript:void(0);"><i class="fa fa-hand-o-right"></i>Get in Touch</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 module_cont module_title pb5">
                                    <div class="bg_title">
                                        <h2>Available Now</h2>
                                        <div class="icon_divider"></div>
                                        <p>We have attractive Web design and development package, choose your package and get your dream website.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 module_cont pb80 module_price_table items4">
                                    <div class="price_table_wrapper">
                                        <div class="price_item">
                                            <div class="price_item_wrapper">
                                                <div class="price_item_wrap">
                                                    <div class="price_item_head">
                                                        <div class="price_item_title"><h5>Basic</h5></div>
                                                        <div class="price_item_cost">
                                                            <h1 class=""><small class="small_text">$ETB</small><span class="">4,999</span><span>.99</span></h1>
                                                        </div>
                                                        <div class="price_item_period">1 Week Delivery</div>
                                                    </div>
                                                    <div class="price_item_body">
                                                        <div class="price_item_text">
                                                            Site Size
                                                            <span>Normal</span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Site Copywriting
                                                            <span><i class="fa fa-times"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Site Optimization (SEO)
                                                            <span><i class="fa fa-times"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            24/7 Customer Service
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Ecommerce Functionality
                                                            <span><i class="fa fa-times"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Database Integration
                                                            <span><i class="fa fa-times"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Responsive Design
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                           Hosting and Registration
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_btn"><a class="shortcode_button btn_normal btn_type3 left_icon" href="javascript:void(0);"><i class="fa fa-hand-o-right"></i>Purchase Now</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price_item">
                                            <div class="price_item_wrapper">
                                                <div class="price_item_wrap">
                                                    <div class="price_item_head">
                                                        <div class="price_item_title"><h5>Standard</h5></div>
                                                        <div class="price_item_cost">
                                                            <h1><small class="small_text">$ETB</small>9,999<span>.99</span></h1>
                                                        </div>
                                                        <div class="price_item_period">1 Week Delivery</div>
                                                    </div>
                                                    <div class="price_item_body">
                                                        <div class="price_item_text">
                                                            Site Size
                                                            <span>Normal</span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Site Copywriting
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Site Optimization (SEO)
                                                            <span><i class="fa fa-times"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            24/7 Customer Service
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Ecommerce Functionality
                                                            <span><i class="fa fa-times"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Database Integration
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Responsive Design
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Hosting and Registration
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_btn"><a class="shortcode_button btn_normal btn_type3 left_icon" href="javascript:void(0);"><i class="fa fa-hand-o-right"></i>Purchase Now</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price_item">
                                            <div class="price_item_wrapper">
                                                <div class="price_item_wrap">
                                                    <div class="price_item_head">
                                                        <div class="price_item_title"><h5>Premium</h5></div>
                                                        <div class="price_item_cost">
                                                            <h1><small class="small_text">$ETB</small>14,999<span>.99</span></h1>
                                                        </div>
                                                        <div class="price_item_period">2 Week Delivery</div>
                                                    </div>
                                                    <div class="price_item_body">
                                                        <div class="price_item_text">
                                                            Site Size
                                                            <span>Big</span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Site Copywriting
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Site Optimization (SEO)
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            24/7 Customer Service
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Ecommerce Functionality
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Database Integration
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Responsive Design
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Hosting and Registration
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_btn"><a class="shortcode_button btn_normal btn_type3 left_icon" href="javascript:void(0);"><i class="fa fa-hand-o-right"></i>Purchase Now</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price_item">
                                            <div class="price_item_wrapper">
                                                <div class="price_item_wrap">
                                                    <div class="price_item_head">
                                                        <div class="price_item_title"><h5>Ultimate</h5></div>
                                                        <div class="price_item_cost">
                                                            <h1>Call<span>Now</span></h1>
                                                        </div>
                                                        <div class="price_item_period"> Different</div>
                                                    </div>
                                                    <div class="price_item_body">
                                                        <div class="price_item_text">
                                                            Site Size
                                                            <span>Extra</span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Site Copywriting
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Site Optimization (SEO)
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            24/7 Customer Service
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Ecommerce Functionality
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Database Integration
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_text">
                                                            Responsive Design
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>
                                                        <div class="price_item_text">
                                                            Hosting and Registration
                                                            <span><i class="fa fa-check"></i></span>
                                                        </div>

                                                        <div class="price_item_btn"><a class="shortcode_button btn_normal btn_type3 left_icon" href="javascript:void(0);"><i class="fa fa-hand-o-right"></i>Purchase Now</a></div>
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
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="footer type2">
        <div class="pre_footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sidepanel widget_text">
                            <h6 class="title">Contact Info</h6>
                            <div class="textwidget contact_text">
                                <div class="section">
                                    <p>Welcome to Root System. We are glad to have you around. If you need to contact us, you can use the details below.</p>
                                </div>
                                <div class="section">
                                    <p class="section_title"><i class="fa fa-phone"></i> Phone Number:</p>
                                    <p class="pl15">+1 (800) 456 37 96 - <span>Central Office</span></p>
                                </div>
                                <div class="section">
                                    <p class="section_title"><i class="fa fa-map-marker"></i> Office:</p>
                                    <p class="pl15">74 West 55 Street, New York, NY</p>
                                </div>
                                <div class="section">
                                    <p class="section_title"><i class="fa fa-envelope"></i> Email:</p>
                                    <p class="pl15"><a href="mailto:javascript:void(0);">info@rootsystem.info</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="sidepanel widget_posts">
                            <h6 class="title">Recent Posts</h6>
                            <ul class="recent_posts">
                                <li class="with_img">
                                    <div class="recent_posts_content">
                                        <img src="/img/imgs/widget_post1.jpg" alt="" />
                                        <a href="javascript:void(0);" class="title">Duis Aute Irure Dolor</a>
                                        <div class="recent_posts_info">June 09, 2018</div>
                                    </div>
                                </li>
                                <li class="with_img">
                                    <div class="recent_posts_content">
                                        <img src="/img/imgs/widget_post2.jpg" alt="" />
                                        <a href="javascript:void(0);" class="title">Temporibus Autem Quibusdam</a>
                                        <div class="recent_posts_info">June 08, 2018</div>
                                    </div>
                                </li>
                                <li class="with_img">
                                    <div class="recent_posts_content">
                                        <img src="/img/imgs/widget_post3.jpg" alt="" />
                                        <a href="javascript:void(0);" class="title">Saepe Eveniet Ut Et</a>
                                        <div class="recent_posts_info">June 06, 2018</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="sidepanel widget_nav_menu">
                            <h6 class="title">Useful Links</h6>
                            <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <svg class="mr-2 cursor-pointer hover:text-gray-700 border rounded-full p-1 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" /></svg>
                            <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>


                            <ul>
                                <li><a href="javascript:void(0);">Home</a></li>
                                <li><a href="javascript:void(0);">About Company</a></li>
                                <li><a href="javascript:void(0);">Services</a></li>
                                <li><a href="javascript:void(0);">Frequently Asked Questions</a></li>
                                <li><a href="javascript:void(0);">Showreel</a></li>
                                <li><a href="javascript:void(0);">Portfolio</a></li>
                                <li><a href="javascript:void(0);">Root System Blog</a></li>
                                <li><a href="javascript:void(0);">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="sidepanel widget_flickr">
                            <h6 class="title">Flickr Photostream</h6>
                            <div class="flickr_widget_wrapper"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_bottom">
            <div class="container">
                <div class="foot_info_block">
                    <div class="logo_sect">
                        <a href="index.html" class="logo"><img src="/img/logo_white.png" class="logo_def" alt="" /><img src="/img/retina/logo_white.png" class="logo_retina" alt="" /></a>
                    </div>
                    <div class="copyright">Copyright &copy; 2020 Root System. All Rights Reserved.</div>
                    <div class="foot_slogan">Easy to Use and Flexible ICT Solution</div>
                    <div class="foot_menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="showreel.html">Showreel</a></li>
                            <li><a href="portfolio_masonry.html">Portfolio</a></li>
                            <li><a href="blog_right_sidebar.html">Blog</a></li>
                            <li><a href="contact_sidebar.html">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social_icons">
                    <ul>
                        <li><span>Follow:</span></li>
                        <li><a class="soc_fb" href="javascript:void(0);"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a class="soc_tweet" href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="soc_instagram" href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="soc_dribbble" href="javascript:void(0);"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="soc_pinterest" href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                        <li><a class="soc_flickr" href="javascript:void(0);"><i class="fa fa-flickr"></i></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <div class="fixed-menu"></div>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/modules.js"></script>
    <script type="text/javascript" src="/js/theme.js"></script>
    <!-- Portfolio -->
    <script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/js/sorting.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION EXTENSIONS (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- END SLIDER REVOLUTION EXTENSIONS -->

    <script type="text/javascript">
        jQuery(document).ready(function() {
            "use strict";
            jQuery('.fullscreen_slider').show().revolution({
                sliderType:"standard",
                jsFileLocation:"revolution/js/",
                sliderLayout:"fullscreen",
                delay:5000,
                gridwidth:1170,
                gridheight:450,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "custom_gt3",
                        enable: false,
                        hide_onmobile: true,
                        hide_onleave: true,
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        style: "custom_gt3",
                        enable: false,
                        hide_onmobile: false,
                        hide_onleave: true,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 10,
                        tmp:''
                    }
                },
                fullScreenOffsetContainer: "javascript:void(0);main_header"
            });
        });
    </script>
    </body>
</html>
