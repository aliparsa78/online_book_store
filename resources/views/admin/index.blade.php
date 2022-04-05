<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.backend.main')
    
    @section('title')
        Online Book Store1
    @endsection
    
</head>
<body>
    @section('content')
        <div class="row p-5">
            <div class="col-md-3 ">
                <div class="admin-dashboard">
                    <div class="header">
                        <a href="">Dashboard</a>
                    </div><hr>
                    
                    <ul>
                        <li>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Books <i class="fa fa-book"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add Catagory</a>
                                    <a class="dropdown-item" href="#">See</a>
                                    <a class="dropdown-item" href="#">Link 3</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    Catagories <i class="fa fa-book"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{url('add-catagory')}}">Add Catagory</a>
                                    <a class="dropdown-item" href="#">See Catagory</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                Books
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                Books
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                Books
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>
</html>

