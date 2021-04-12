@extends('layouts.front')
@section('content')


    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a><a href="/blog">Blog</a><span>here</span>
        </div>
    </div>

   <div class="wrapper">
<div class="container">
    <h1 class="blogpost_title"><a href="post_right_sidebar.html">{{$blog->title}}</a></h1>

    <div class="blog_post_preview format-image">
        <div class="postformats_cont blog_post_image">
            <div class="blog_post_format_label colored_bg"><i class="fa fa-camera-retro"></i></div>
            <a href="/blog/{{$blog->id}}"><img src="{{$blog->photo}}" alt="{{$blog->title}}" /></a>
        </div>
        <div class="blog_content clearfix m-3 p-3">

                <span><i class="fa fa-calendar-check-o"></i>{{$blog->created_at->diffForHumans()}}</span>
                <span><i class="fa fa-user"></i><a href="javascript:void(0);">Admin</a></span>
                <span><i class="fa fa-comments-o"></i><a href="javascript:void(0);">3 Comments</a></span>
                <span><i class="fa fa-tag"></i><a href="javascript:void(0);">people</a>, <a href="javascript:void(0);">photo</a>, <a href="javascript:void(0);">places</a></span>
            <hr>

            <p>{{$blog->detail}}</p>

        </div>
    </div>
</div>

   </div>

@endsection
