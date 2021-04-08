<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $blogs=Blog::all();
        return view('blog.index')->with(['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save blog
        $this->validate($request, [
            'title' => 'required|max:120|unique:blogs',
            'detail' => 'required|min:80',
            'category_id' => 'required',
            'photo' =>'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);

        $post = new Blog;
        $post->title = $request['title'];
        $post->detail = $request['detail'];
        $post->tags = $request['tags'];
        $post->category_id = $request['category_id'];

        if($request->hasFile('photo')){


            $image = $request->file('photo');
            $input['title'] = time().'.'.$image->extension();

            $filePath = public_path('/thumbnails');

            $img = \Intervention\Image\Facades\Image::make($image->path());
            $img->resize(110, 110, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$input['title']);

            $filePath = public_path('/images');
            $image->move($filePath, $input['title']);

$post->photo=$filePath;
        }

        $post->save();

        return redirect()->back()->with('sucsess','Blog Created Succusfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
        return view('blog.show')->with('blog',$blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
