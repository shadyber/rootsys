@extends('layouts.front')
@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="content_block row no-sidebar">
                <div class="page_title">
                    <h1>Portfolio Grid 4 Columns</h1>
                    <div class="icon_divider"></div>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div class="fl-container">
                    <div class="posts-block portfolio-block">
                        <div class="contentarea">
                            <!-- Filter_block -->
                            <div class="filter_block container">
                                <div class="filter_navigation">
                                    <ul id="options" class="splitter">
                                        <li>
                                            <ul data-option-key="filter" class="optionset">
                                                <li class="selected"><a data-option-value="*" data-catname="all" href="#filter">All Works</a></li>
                                                <li><a data-option-value=".branding" data-catname="branding" href="#filter">Branding</a></li>
                                                <li><a data-option-value=".polygraphy" data-catname="polygraphy" href="#filter">Polygraphy</a></li>
                                                <li><a data-option-value=".textstyle" data-catname="textstyle" href="#filter">Text Style</a></li>
                                                <li><a data-option-value=".webui" data-catname="webui" href="#filter">Web UI</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- //Filter_block -->
                            <div class="row pb40">
                                <div class="sorting_block image-grid column4 isotope" id="list" style="position: relative; overflow: hidden; height: 1152px;">
                                    <div class="col-sm-3 polygraphy element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/1.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 branding textstyle element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 96px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/4.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 textstyle polygraphy element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 192px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/3.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 webui element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 288px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/2.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 branding webui element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 384px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/5.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 polygraphy branding element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 480px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/6.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 webui branding element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 576px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/7.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 textstyle polygraphy element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 672px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/8.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 polygraphy branding element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 768px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/9.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 webui branding element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 864px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/10.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 textstyle polygraphy element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 960px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/11.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 textstyle polygraphy element isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 1056px, 0px);">
                                        <div class="portfolio_item">
                                            <div class="portf_img">
                                                <a href="portfolio_post_fullwidth.html">
                                                    <img alt="" src="img/portfolio/370_275/12.jpg">
                                                </a>
                                            </div>
                                            <div class="portf_descr">
                                                <h6 class="portf_title"><a href="portfolio_post_fullwidth.html">Greeting Card Mock-Up</a></h6>
                                                <div class="listing_meta">
                                                    <span><i class="fa fa-bookmark-o"></i><a href="javascript:void(0);">Graphic Design</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="clear"></div>
                            </div>

                            <div class="pb20">
                                <ul class="pagerblock text-center">
                                    <li><a class="prev_page" href="javascript:void(0);"><i class="fa fa-caret-left"></i>Prev</a></li>
                                    <li><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);" class="current">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="javascript:void(0);">12</a></li>
                                    <li><a class="next_page" href="javascript:void(0);">Next<i class="fa fa-caret-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
