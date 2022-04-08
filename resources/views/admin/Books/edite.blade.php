<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/back/style.css">
    @extends('layouts.backend.main')
    @section('title')
        Edite Books
    @endsection
</head>
<body>
    <div class="main">
        @section('content')
            <div class="container">
                <!-- Start Add catagory form -->
                <h3 class="p-3">Editing Book Form</h3>
                <form action="{{url('edite-book/'.$book->id)}}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                    <tr>
                    <td>Book-Name:</td>
                    <td>
                        <input type="text" name = "name" class="form-control"value="{{$book->name}}" placeholder ="Enter the book's name">
                    </td>
                    </tr>
                    <tr>
                    <td>Book-Writer:</td>
                    <td>
                        <input type="text" name = "writer" class="form-control" value="{{$book->writer}}"  placeholder ="Enter the book's writer">
                    </td>
                    </tr>
                    <tr>
                    <td>Category-id:</td>
                    <td>
                        <select name="cat_id" class="form-select form-control" id="add-data">
                            @foreach($catagory as $item)
                            
                                <option <?php if($book->catagory_id == $item->id){echo "selected";}?> value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    </tr>
                    <tr>
                    <td>Book-Quantity:</td>
                    <td>
                        <input type="number" name = "qty" class="form-control" value="{{$book->qty}}"  placeholder ="Enter the quantity">
                    </td>
                    </tr>
                    <tr>
                    <td>Original Price:</td>
                    <td>
                        <input type="float" name = "original_price" class="form-control" value="{{$book->original_price}}"  placeholder ="Enter original price">
                    </td>
                    </tr>
                    <tr>
                    <td>Selling Price:</td>
                    <td>
                        <input type="float" name = "selling_price" class="form-control" value="{{$book->selling_price}}"  placeholder ="Enter selling price">
                    </td>
                    </tr>
                    <tr>
                    <td>image:</td>
                    <td>
                        <img src="{{asset('Books/'.$book->image)}}" alt="">
                    </td>
                    <tr>
                    <td>New Image</td>
                    <td>
                        <input type="file" name = "new_image">
                    </td>
                    </tr>
                    </tr>
                    <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description" id="" cols="40" rows="4"   placeholder="Write some description">
                        {{$book->description}}
                        </textarea>
                    </td>
                    </tr>               
                    <tr>
                    <td>Status:</td>
                    <td>
                        <input type="text" name = "status" class="form-control" value="{{$book->status}}"  placeholder="Enter Status">
                   </td>
                    </tr>
                    <tr>
                    <td>Tax:</td>
                    <td>
                        <input type="float" name = "tax" class="form-control" value="{{$book->tax}}"  placeholder="Enter the tax">
                   </td>
                    </tr>    
                    <tr>
                    <td>
                        <input type="submit" name = "submit" value="Add-book" class ="btn btn-success">
                    </td>
                    </tr>
                    </table>
                </form>
            </div>
        @endsection
    </div>
</body>
</html>