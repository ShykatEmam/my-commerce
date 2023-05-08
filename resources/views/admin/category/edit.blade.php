@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('body')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Category Form</h4>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{route('update.category')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Category Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputuname3" name="name" value="{{$category->name}}" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">
                                Category Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="exampleInputEmail3" placeholder="Category Description">{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">
                                Update Image
                            </label>
                            <div class="col-sm-5">
                                <input type="file" name="image"  class="dropify" >
                            </div>
                            <div class="col-sm-4">
                                <label class="form-label col-sm-3 control-label" for="web">
                                    Old Image ->
                                </label>
                                <img src="{{asset($category->image)}}" alt="" class="img-fluid" width="200px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">
                                Publication Status
                            </label>
                            <div class="col-sm-9">

                                <label class="me-3">
                                    <input type="radio" name="status" value="1" {{$category->status ==1?'checked':''}}> Published
                                </label>
                                <label class="me-3">
                                    <input type="radio" name="status" value="2" {{$category->status ==2?'checked':''}}> Unpublished
                                </label>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
