@extends('admin.master')
@section('title')
    Edit SubCategory
@endsection

@section('body')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Sub Category Form</h4>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{route('update.subcategory')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$sub->id}}">
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Parent Category Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="select2 form-control form-select" name="category_id">
                                    <option>Select</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id == $sub->category_id ? 'selected':''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Sub Category Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputuname3" name="name" value="{{$sub->name}}" placeholder="Sub category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">
                                Category Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description" id="exampleInputEmail3" placeholder="Sub category Description">{{$sub->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">
                                Publication Status
                            </label>
                            <div class="col-sm-9">
                                <label class="me-3">
                                    <input type="radio" name="status" value="1" {{$sub->status ==1?'checked':''}}> Published
                                </label>
                                <label class="me-3">
                                    <input type="radio" name="status" value="2"{{$sub->status ==2?'checked':''}}> Unpublished
                                </label>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update Sub Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
