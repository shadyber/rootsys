@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Product</h3></div>
                    <div class="card-body">
                        <form method="post" action="/shop" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="title">Title</label>
                                        <input class="form-control py-4" id="title" name="title" type="text" placeholder="Enter Post Title" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Tags</label>
                                        <input class="form-control py-4" id="tags" name="tags" type="text" placeholder="Enter Tags by Comma">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="small mb-1 text-dark" for="category_id">Category</label>
                                <select class="form-control py-4" name="category_id"  aria-describedby="Category" placeholder="Select  Category">
                                    <option value="">Select Category</option>
                                    @foreach(\App\Models\ProductCategory::allCategories() as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="photo">Photo</label>
                                        <input class="form-control py-4" id="photo" name="photo" type="file" placeholder="Select Photo" required>
                                    </div>
                                </div>


                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="photo">More Photo</label>
                                        <input class="form-control py-4" id="more_photo" name="more_photo[]" type="file" placeholder="Select Photo" required>
                                    </div>
                                </div>

                            </div>
     <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="price">Price</label>
                                        <input class="form-control py-4" id="price" name="price" type="number" placeholder="Price" required>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="detail" class="small mb-1">Detail</label>
                                        <textarea name="detail" id="" cols="30" rows="10" class="form-control py-4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4 mb-0"><button type="submit" class="btn btn-primary btn-block"  >Create Blog</button></div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <div class="small"><a href="http://www.youtube.com/channel/UCri_1_-P8-LkhXMJCurJ1nA">Subscribe on YouTube For More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
