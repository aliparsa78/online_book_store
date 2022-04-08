@extends('layouts/backend/main')
@section('title')
    Book
@endsection

@section('content')
    <div class="">
        <div class="main p-5">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Books Table</h4>
                </div>
                <div class="card-body">
                    <p class="display-inline">
                     <a href="{{url('add-book')}}" class="btn btn-info float-right mb-4">Add Book</a>
                    </p>
                    <table class="table table-bordered table-responsive table-hover p-5">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Writer</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>OriginalPrice</th>
                        <th>SellingPrice</th>
                        <th>Tax</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $idNumber=1   @endphp
                        @foreach($book as $item)
                        
                        <tr>
                            <td>{{$idNumber++}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->writer}}</td>
                            <td>{{$item->description}}</td>
                            <td>
                                <img src="{{asset('Books/'.$item->image)}}"  width="170px" height="80px" alt="">
                            </td>
                            
                            <td>
                               {{$item->catagory->name}}
                            </td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->original_price}}$</td>
                            <td>{{$item->selling_price}}$</td>
                            <td>{{$item->tax}}$</td>
                            
                            <td>
                                <a href="{{url('edite-book/'.$item->id)}}" class="btn btn-info fa fa-edit">Update</a>
                            </td>
                            <td>
                            <a href="{{url('delete-book/'.$item->id)}}" class="btn btn-danger fa fa-remove">Remove</a>
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