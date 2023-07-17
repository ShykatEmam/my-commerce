@extends('admin.master')
@section('title')
    Add Product
@endsection

@section('body')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Product Form</h4>
                    <hr>
                    <form class="form-horizontal p-t-20" action="{{route('product.new')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Parent Category Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="select2 form-control form-select" name="category_id" id="categoryId">
                                    <option value="" disabled selected>--- Select Category ---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Sub Category Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="select2 form-control form-select" name="sub_category_id" id="subCategoryId">
                                    <option value="" selected>--- Select Sub Category ---</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Brand Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="select2 form-control form-select" name="brand_id">
                                    <option value="" disabled selected>--- Select Brand ---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Unit Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="select2 form-control form-select" name="unit_id">
                                    <option value="" disabled selected>--- Select Unit ---</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}">{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">
                                Product Name <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="exampleInputuname3" name="name" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">
                                Product Code <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="code" placeholder="Product Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">
                                Product Model <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="model" placeholder="Product Model">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">
                                Product Stock Amount <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="" name="stock_amount" placeholder="Product stock amount">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">
                                Product Price <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">

                                    <input type="number" class="form-control" id="" name="regular_price" placeholder="Regular Price">
                                    <input type="number" class="form-control" id="" name="selling_price" placeholder="Selling Price">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail33" class="col-sm-3 control-label">
                                Short Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description" id="exampleInputEmail33" placeholder="Short Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail34" class="col-sm-3 control-label">
                                Long Description <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <textarea class="form-control summernote" name="long_description" id="exampleInputEmail34" placeholder="Long Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web"> Feature Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="dropify" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web"> Other Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="other_image[]" multiple class="dropify" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" name="status" value="1" checked> Published</label>
                                <label class="me-3"><input type="radio" name="status" value="2"> Unpublished</label>
                            </div>
                        </div>

                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
