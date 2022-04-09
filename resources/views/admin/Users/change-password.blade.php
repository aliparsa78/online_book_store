<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/back/style.css">
    @extends('layouts.backend.main')
    @section('title')
        Change Password
    @endsection
</head>
<body>
    <div class="main">
        @section('content')
            <div class="container">
                <!-- Start Add catagory form -->
                <h3 class="p-3">Change Your Password</h3>
                <form action="{{url('change_password/'.$user->id)}}" method = "POST" enctype="multipart/form-data" class="p-3 ">
                    @csrf
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <label for="">Current Password</label>
                            <input type="text" class="form-control" name ="current_password">
                            <label for="">New Password</label>
                            <input type="text" class="form-control" name ="new_password">
                            <label for="">Confirm New Password</label>
                            <input type="text" class="form-control" name ="confirm_password">
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