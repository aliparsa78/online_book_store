@extends('layouts.frontend.main')

@section('title')
    Best Online Book Store
@endsection

@section('content')

    <div class="main">
        <div class="wrapper">
            <!-- new books start here -->
            <div class="card-header"><h4 class="text-end">New Books</h4></div>
            
            <div class="row">
                <div class="col-md-3 p-3">
                    <div class="card shadow">
                        <div class="card-body">
                            sallam
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="card shadow">
                        <div class="card-body">
                            sallam
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="card shadow">
                        <div class="card-body">
                            sallam
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="card shadow">
                        <div class="card-body">
                            sallam
                        </div>
                    </div>
                </div>
            </div>
  
            <!-- all books with owl-carousel -->
            <div class="card-header">
                <h4>Features</h4>
            </div>
            <div class="owl-carousel featur-carousel owl-theme">   
                <div class="item">
                        <a href="#">
                        <div class="card">
                            <img src="../images/1.jpg" alt="">
                            <div class="card-body">
                            </div>
                        </div>
                        </a>
                </div>
                <div class="item">
                        <a href="#">
                        <div class="card">
                            <img src="../images/2.jpg" alt="">
                            <div class="card-body">
                            </div>
                        </div>
                        </a>
                </div>
                <div class="item">
                        <a href="#">
                        <div class="card">
                            <img src="../images/3.jpg" alt="">
                            <div class="card-body">
                            </div>
                        </div>
                        </a>
                </div>
                <div class="item">
                        <a href="#">
                        <div class="card">
                            <img src="../images/4.jpg" alt="">
                            <div class="card-body">
                            </div>
                        </div>
                        </a>
                </div>
                <div class="item">
                        <a href="#">
                        <div class="card">
                            <img src="../images/1.jpg" alt="">
                            <div class="card-body">
                            </div>
                        </div>
                        </a>
                </div>
                <div class="item">
                        <a href="#">
                        <div class="card">
                            <img src="../images/3.jpg" alt="">
                            <div class="card-body">
                            </div>
                        </div>
                        </a>
                </div>
            </div>

            <!-- comming soon -->

            <!-- the best books -->

            <!-- catagories -->

        </div>
    
    </div>
    @section('script')
    <script>
   $('.featur-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
@endsection
@endsection


