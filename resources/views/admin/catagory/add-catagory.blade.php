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
    <div class="main">
        @section('content')
            <div class="container">
                <!-- Start Add catagory form -->
        <form action="" method = "POST" enctype="multipart/form-data">
            @csrf
            <table class="table">
                <tr>
                    <td>title:</td>
                    <td>
                        <input type="text" name = "name" class="form-control" placeholder ="Enter your title">
                    </td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description" id="" cols="40" rows="4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>image:</td>
                    <td>
                    <input type="file" class="form-control" name ="image">
                    </td>
                </tr>
                <tr>
                    <td>Featur:</td>
                    <td>
                        <input type="radio" name = "featured" value ="1"> yes
                        <input type="radio" name = "featured" value ="0">no
                   </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name = "active" value ="1"> yes
                        <input type="radio" name = "active" value ="0">no
                   </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name = "submit" value="add-to-catagory" class ="btn btn-success">
                    </td>
                </tr>
            </table>
        </form>
            </div>
        @endsection
    </div>
</body>
</html>