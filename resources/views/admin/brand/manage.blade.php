@extends('admin.master')

@section('title')
    Manage Brand
@endsection

@section('body')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Table</h4>
                <h6 class="card-subtitle">Data table example</h6>
                <div class="table-responsive m-t-40">
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <table id="myTable" class="table table-striped border">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Brand Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php
                        $i=1;
                        ?>
                        <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>
                            <td>
                                <img src="{{asset($brand->image)}}" class="img-fluid" alt="Category image" width="100px">
                            </td>
                            <td>
                                @if($brand->status ==1)
                                    <a href="{{route('brand.status',['id'=>$brand->id])}}" class="btn btn-success btn-sm">Published</a>
                                @else

                                    <a href="{{route('brand.status',['id'=>$brand->id])}}" class="btn btn-warning btn-sm">Unpublished</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('edit.brand',['id'=>$brand->id])}}" class="btn btn-success btn-sm">
                                    <i class="ti ti-pencil"></i>
                                </a>

                                <a href="{{route('delete.brand',['id'=>$brand->id])}}" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="ti ti-trash"></i>
                                </a>
                            </td>
                        </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
