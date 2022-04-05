<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Store</title>
    @yield('title')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/back/style.css">
</head>
<body>
@include('../layouts/backend/header')
        <div class="row p-5">
            <div class="col-md-3 ">
                <div class="admin-dashboard">
                    <a href="">Dashboard</a>
                    <ul>
                        <li>
                            <div class="dropdown">
                            <a type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Books <i class="fa fa-book"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                            </div>
                        </li>
                        <li>
                            <a href="">Catagories</a>
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
@include('../layouts/backend/footer') 
</body>
</html>
