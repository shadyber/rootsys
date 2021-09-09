@extends('layouts.front')
@section('content')


    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a><a href="/blog">Blog</a><span>here</span>
        </div>
    </div>

    <div class="content_block row right-sidebar">
        <div class="page_title">
            <h1>  Product Detail</h1>
            <div class="icon_divider"></div>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
        </div>
        <div class="fl-container hasRS">
            <div class="posts-block">
              detail
            </div>
        </div>
        <div class="right-sidebar-block">

            <div class="sidepanel widget_search">
                <form name="search_form" method="get" action="javascript:void(0);" class="search_form">
                    <input type="text" name="s" value="" placeholder="Search the Site">
                    <input type="submit" value="Go">
                </form>
            </div>

            <div class="sidepanel widget_cart">
                <h6 class="title">Cart</h6>
                <div class="cart_wrap">
                    <ul class="product_posts">
                        <li>
                            <img src="img/shop/4.jpg" alt="">
                            <a href="shop_product.html" class="title">Duis Aute Irure Dolor</a>
                            <div class="price">1<span>x</span>$1,190</div>
                            <a class="remove_products" href="javascript:void(0);">Close</a>
                        </li>
                    </ul>
                    <div class="subtotal">Subtotal: <span>$1,190</span></div>
                    <a class="shortcode_button btn_normal btn_type3 widget_cart_btn" href="shop_cart.html">View Cart</a>
                    <a class="shortcode_button btn_normal btn_type1 mr0 widget_checkout_btn" href="javascript:void(0);">Checkout</a>
                </div>
            </div>

            <div class="sidepanel widget_categories">
                <h6 class="title">Categories</h6>
                <ul>
                    <li class="cat-item"><a href="javascript:void(0);">Accessories</a></li>
                    <li class="cat-item"><a href="javascript:void(0);">Cardigans</a></li>
                    <li class="cat-item current-menu-item"><a href="javascript:void(0);">Dresses</a></li>
                    <li class="cat-item"><a href="javascript:void(0);">Hoodies</a></li>
                    <li class="cat-item"><a href="javascript:void(0);">Jeans</a></li>
                    <li class="cat-item"><a href="javascript:void(0);">Men</a></li>
                    <li class="cat-item"><a href="javascript:void(0);">T-Shirts</a></li>
                    <li class="cat-item"><a href="javascript:void(0);">Women</a></li>
                </ul>
            </div>

            <div class="sidepanel widget_filter">
                <h6 class="title">FIlter By Price</h6>
                <div class="price_filter_wrap">
                    <div class="range-filter-wrapper">
                        <div id="slider-range"></div>
                    </div>
                    <div class="cart_widget_total">Price: <span class="price-filter"><span class="from">$0</span> - <span class="to">$200</span></span></div>
                    <a class="shortcode_button btn_normal btn_type6 widget_filter_btn" href="javascript:void(0);">Filter</a>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="sidepanel widget_products">
                <h6 class="title">Featured Products</h6>
                <ul class="product_posts">
                    <li>
                        <a href="shop_product.html" class="title"><img src="img/shop/2.jpg" alt=""></a>
                        <a href="shop_product.html" class="title">Duis Aute Irure Dolor</a>
                        <div class="price">$3,000</div>
                    </li>
                    <li>
                        <a href="shop_product.html" class="title"><img src="img/shop/3.jpg" alt=""></a>
                        <a href="shop_product.html" class="title">Temporibus Autem Quibusdam</a>
                        <div class="price">$400</div>
                    </li>
                    <li>
                        <a href="shop_product.html" class="title"><img src="img/shop/4.jpg" alt=""></a>
                        <a href="shop_product.html" class="title">Saepe Eveniet Ut Et</a>
                        <div class="price">$29.99</div>
                    </li>
                </ul>
            </div>

            <div class="sidepanel widget_tag_cloud">
                <h6 class="title">Popular Tags</h6>
                <div class="tagcloud">
                    <a href="javascript:void(0);">art</a>
                    <a href="javascript:void(0);">branding</a>
                    <a href="javascript:void(0);">business</a>
                    <a href="javascript:void(0);">css</a>
                    <a href="javascript:void(0);">gallery</a>
                    <a href="javascript:void(0);">html</a>
                    <a href="javascript:void(0);">people</a>
                    <a href="javascript:void(0);">photo</a>
                    <a href="javascript:void(0);">photoshop</a>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>


@endsection
