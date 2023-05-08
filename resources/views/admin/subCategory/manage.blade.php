@extends('admin.master')
@section('title')
    Manage SubCategory
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
                            <th>SubCategory Name</th>
                            <th>SubCategory Description</th>
                            <th>Parent Category Name</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <?php
                        $i=1;
                        ?>
                        <tbody>
                        @foreach($subCategories as $sub)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$sub->name}}</td>
                                <td>{{$sub->description}}</td>
                                <td>{{$sub->category_name}}</td>
                                <td>
                                    @if($sub->status ==1)
                                        <a href="{{route('sub.status',['id'=>$sub->id])}}" class="btn btn-success btn-sm">Published</a>
                                    @else

                                        <a href="{{route('sub.status',['id'=>$sub->id])}}" class="btn btn-warning btn-sm">Unpublished</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('edit.subcategory',['id'=>$sub->id])}}" class="btn btn-success btn-sm">
                                        <i class="ti ti-pencil"></i>
                                    </a>

                                    <a href="{{route('delete.subcategory',['id'=>$sub->id])}}" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item?');">
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
