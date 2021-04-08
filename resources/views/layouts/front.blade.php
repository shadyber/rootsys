<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple_icons_114x114.png">
    <title>Root System |ICT Solutions</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/theme.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/custom.css" type="text/css" media="all" />
</head>
<body>
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
@yield('content')

<div class="footer">
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
                                <p class="pl15"><a href="mailto:#">info@rootsystem.info</a></p>
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
                                    <img src="img/imgs/widget_post1.jpg" alt="" />
                                    <a href="javascript:void(0);" class="title">Duis Aute Irure Dolor</a>
                                    <div class="recent_posts_info">June 09, 2018</div>
                                </div>
                            </li>
                            <li class="with_img">
                                <div class="recent_posts_content">
                                    <img src="img/imgs/widget_post2.jpg" alt="" />
                                    <a href="javascript:void(0);" class="title">Temporibus Autem Quibusdam</a>
                                    <div class="recent_posts_info">June 08, 2018</div>
                                </div>
                            </li>
                            <li class="with_img">
                                <div class="recent_posts_content">
                                    <img src="img/imgs/widget_post3.jpg" alt="" />
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
                    <a href="index.html" class="logo"><img src="img/logo_white.png" class="logo_def" alt="" /><img src="img/retina/logo_white.png" class="logo_retina" alt="" /></a>
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
</body>
</html>
