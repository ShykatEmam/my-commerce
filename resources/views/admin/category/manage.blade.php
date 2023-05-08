@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Table</h4>
                <h6 class="card-subtitle">Data table example</h6>
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-striped border">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Category Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php
                        $i=1;
                        ?>
                        <tbody>
                        @foreach($cats as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <img src="{{asset($category->image)}}" class="img-fluid" alt="Category image" width="100px">
                            </td>
                            <td>
                                @if($category->status ==1)
                                    <a href="{{route('status',['id'=>$category->id])}}" class="btn btn-success btn-sm">Published</a>
                                @else

                                    <a href="{{route('status',['id'=>$category->id])}}" class="btn btn-warning btn-sm">Unpublished</a>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('edit.category',['id'=>$category->id])}}" class="btn btn-success btn-sm">
                                    <i class="ti ti-pencil"></i>
                                </a>

                                <a href="{{route('delete.category',['id'=>$category->id])}}" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item?');">
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
