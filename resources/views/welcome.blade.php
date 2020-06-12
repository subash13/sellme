@extends('layouts.app')

@section('content')
<div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>

            </li>
            @if (Route::has('login'))

            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>

            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>

            @endif
            @endauth
            @endif


        </ul>
    </div>
</div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">


        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    @foreach ($products as $item)
                    @if($products->first()['id']==$item['id'])
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{asset('uploads/product/cover/'.$item['cover'])}}"
                            alt="First slide">
                    </div>
                    @else
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('uploads/product/cover/'.$item['cover'])}}"
                            alt="First slide">
                    </div>
                    @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top"
                                src="{{asset('uploads/product/cover/'.$product['cover'])}}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#">{{$product['title']}}</a>
                            </h4>
                            <h5>Rs.{{$product['price']}}</h5>
                            <p class="card-text">{!! str_limit($product['description'], $limit = 150, $end = '...')
                                !!}</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{route('product.item',['id'=>$product['id']])}}" class="btn btn-success"> Buy </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@endsection