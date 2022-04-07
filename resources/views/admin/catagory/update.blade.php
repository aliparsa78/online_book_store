<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/back/style.css">
    @extends('layouts.backend.main')
    @section('title')
        Edite Catagory
    @endsection
</head>
<body>
    <div class="main">
        @section('content')
            <div class="container">
                <!-- Start Add catagory form -->
            <form action="{{url('update-catagory/'.$catagory->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
            <table class="table">
                <tr>
                    <td>title:</td>
                    <td>
                        <input type="text" name = "name" value="{{$catagory->name}}" class="form-control" placeholder ="Enter your title">
                    </td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description" id="" cols="40" rows="4">
                            {{$catagory->description}}
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>image:</td>
                    <td>
                        <img src="{{asset('category/'.$catagory->image)}}" name="current_img" width="160px" height="100px" alt="img">
                    </td>
                </tr>
                <tr>
                    <td>New Image</td>
                    <td>
                        <input type="file" name="new_image">
                    </td>
                </tr>
                <tr>
                    <td>Featur:</td>
                    <td>
                        <input type="radio" <?php if($catagory->featured =='1'){echo 'checked';} ?> name = "featured" value ="1"> yes
                        <input type="radio" <?php if($catagory->featured =='0'){echo 'checked';} ?> name = "featured" value ="0">no
                   </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name = "active" value ="1" @php if($catagory->active == '1')echo "checked";  @endphp > yes
                        <input type="radio" name = "active" value ="0" @php if($catagory->active == '0')echo "checked"; @endphp >no
                   </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name = "submit" value="Update-Catagory" class ="btn btn-success">
                    </td>
                </tr>
            </table>
            </form>
            </div>
        @endsection
    </div>
</body>
</html>