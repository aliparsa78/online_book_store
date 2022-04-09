<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/back/style.css">
    @extends('layouts.backend.main')
    @section('title')
        Update User
    @endsection
</head>
<body>
    <div class="main">
        @section('content')
            <div class="container">
                <!-- Start Add catagory form -->
                <h3 class="p-3">Update Users</h3>
                <form action="{{url('update_user/'.$user->id)}}" method = "POST" enctype="multipart/form-data" class="p-3 ">
                    @csrf
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <label for="">User Name</label>
                            <input type="text" class="form-control" value="{{$user->name}}" name ="name">
                            <label for="">User Email</label>
                            <input type="text" class="form-control" value="{{$user->email}}" name ="email">
                            <label for="">Role_as</label>
                            <input type="text" class="form-control" value="{{$user->role_as}}" name ="role_as">
                            <input type="submit" name="submit" class="btn btn-info mt-3" value="change password">
                        </div>
                        <div class="col-md-7"></div>
                    </div>
                </form>
            </div>
        @endsection
    </div>
</body>
</html>