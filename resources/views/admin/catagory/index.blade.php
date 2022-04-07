@extends('layouts/backend/main')
@section('title')
    Catagory
@endsection

@section('content')
    <div class="">
        <div class="main p-5">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Catagory Table Content</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover p-5">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tile</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($catagory as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <img src="{{asset('category/'.$item->image)}}" width="100px" height="80px" alt="">
                            </td>
                            <td>{{$item->featured}}</td>
                            <td>{{$item->active}}</td>
                            <td>
                                <a href="{{url('edite-catagory/'.$item->id)}}" class="btn btn-info">Update</a>
                                <a href="{{url('delete-catagory/'.$item->id)}}" class="btn btn-danger">Remove</a>
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