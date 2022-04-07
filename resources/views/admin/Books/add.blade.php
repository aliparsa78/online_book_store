<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.backend.main')
    @section('title')
        Add Book
    @endsection
</head>
<body>
    <div class="main">
        @section('content')
            <div class="container">
                <!-- Start Add catagory form -->
                <h3 class="p-3">Adding Book Form</h3>
                <form action="{{url('add-book')}}" method = "POST" enctype="multipart/form-data">
                @csrf
                    <table class="table">
                    <tr>
                    <td>Book-Name:</td>
                    <td>
                        <input type="text" name = "name" class="form-control" placeholder ="Enter the book's name">
                    </td>
                    </tr>
                    <tr>
                    <td>Book-Writer:</td>
                    <td>
                        <input type="text" name = "writer" class="form-control" placeholder ="Enter the book's writer">
                    </td>
                    </tr>
                    <tr>
                    <td>Category-id:</td>
                    <td>
                        <select name="cat_id" class="form-select form-control" id="add-data">
                            @foreach($catagory as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    </tr>
                    <tr>
                    <td>Book-Quantity:</td>
                    <td>
                        <input type="number" name = "qty" class="form-control" placeholder ="Enter the quantity">
                    </td>
                    </tr>
                    <tr>
                    <td>Original Price:</td>
                    <td>
                        <input type="number" name = "original_price" class="form-control" placeholder ="Enter original price">
                    </td>
                    </tr>
                    <tr>
                    <td>Selling Price:</td>
                    <td>
                        <input type="number" name = "selling_price" class="form-control" placeholder ="Enter selling price">
                    </td>
                    </tr>
                    <tr>
                    <td>image:</td>
                    <td>
                    <input type="file" class="form-control" name ="image">
                    </td>
                    </tr>
                    <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description" id="" cols="40" rows="4" placeholder="Write some description"></textarea>
                    </td>
                    </tr>               
                    <tr>
                    <td>Status:</td>
                    <td>
                        <input type="text" name = "status" class="form-control" placeholder="Enter Status">
                   </td>
                    </tr>
                    <tr>
                    <td>Tax:</td>
                    <td>
                        <input type="number" name = "tax" class="form-control" placeholder="Enter the tax">
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