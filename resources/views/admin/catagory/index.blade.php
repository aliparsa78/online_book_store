@extends('layouts/backend/main')
@section('title')
    Catagory
@endsection

@section('content')
    <div class="main">
        <div class="container">
            
            <table class="table table-responsive table-bordered text-center p-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tile</th>
                        <th>Description</th>
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
                            <td>{{$item->featured}}</td>
                            <td>{{$item->active}}</td>
                            <td>
                                <a href="" class="btn btn-info">Update</a>
                                <a href="" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection