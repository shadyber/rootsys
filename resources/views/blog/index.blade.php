@extends('layouts.front')
@section('content')


    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a><a href="/blog">Blog</a><span>here</span>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="content_block row no-sidebar">
                <div class="page_title">
                    <h1>Welcome to Our Blog</h1>
                    <div class="icon_divider"></div>
                    <p>Our blog will allow us to leverage social technologies to engage in two-way communication with our community and to take your feedback into consideration as we create new content, tools and resources. In addition, we’ll use the blog to share multimedia, such as videos, photo albums and more. </p>
                </div>
                <div class="fl-container">
                    <div class="posts-block">
                        <div class="contentarea">
                            <div class="row">
                                <div class="col-sm-12 module_cont module_blog">
                                @foreach($blogs as $blog)
                                    <div class="blog_post_preview format-image">
                                        <div class="postformats_cont blog_post_image">
                                            <div class="blog_post_format_label colored_bg"><i class="fa fa-camera-retro"></i></div>
                                            <a href="/blog/{{$blog->id}}"><img src="{{$blog->photo}}" alt="{{$blog->title}}" /></a>
                                        </div>
                                        <div class="blog_content clearfix">
                                            <div class="listing_meta">
                                                <span><i class="fa fa-calendar-check-o"></i>{{$blog->created_at->diffForHumans()}}</span>
                                                <span><i class="fa fa-user"></i><a href="javascript:void(0);">Admin</a></span>
                                                <span><i class="fa fa-comments-o"></i><a href="javascript:void(0);">3 Comments</a></span>
                                                <span><i class="fa fa-tag"></i><a href="javascript:void(0);">people</a>, <a href="javascript:void(0);">photo</a>, <a href="javascript:void(0);">places</a></span>
                                            </div>
                                            <h5 class="blogpost_title"><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h5>
                                            <p>{{ substr($blog->detail,0,255)}}...</p>
                                            <a class="blog_post_readmore" href="/blog/{{$blog->id}}">Read More<i class="fa fa-angle-double-right"></i></a>
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

@endsection
@section('js')
    <!-- Portfolio -->
    <script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/js/sorting.js"></script>
@endsection

