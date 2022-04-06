<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.backend.main')
    @section('title')
        Add Catagory
    @endsection
</head>
<body>
    @section('content')
        <div class="container">
            <form action="" class="p-5">
                <div class="row">
                    <div class="insert-catagory col-md-6">
                        <label>Catagory Name</label>
                        <input type="text" name ="catagory_name" class="form-control">
                    </div>
                    
                    <div class="insert-catagory col-md-6">
                        <label>Catagory Discription</label>
                        <input type="text" name ="catagory_discription" class="form-control">
                    </div>
                    <div class="insert-catagory col-md-6">
                        <label>Catagory Status</label><br>
                        <input type="radio" name ="" class="radio" checked> true
                        <input type="radio" name ="" class="radio"> false
                    </div>
                    
                    <div class="insert-catagory col-md-6">
                        <label>Catagory Name</label>
                        <input type="text" name ="" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    @endsection
</body>
</html>