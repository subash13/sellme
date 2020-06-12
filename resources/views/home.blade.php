@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="card mt-4">

                                <img class="card-img-top img-fluid"
                                    src="{{asset('uploads/product/images/'.$product->images->first()['image'])}}"
                                    alt="">
                                <div class="card-body">
                                    <h3 class="card-title">{{$product['title']}}</h3>
                                    <h4>Rs.{{$product['price']}}</h4>
                                    <p class="card-text">{!!$product['description'] !!}</p>
                                    <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                                    4.0 stars
                                </div>
                            </div>
                            <!-- /.card -->

                            <div class="card card-outline-secondary my-4">
                                <div class="card-header">
                                    Product Images
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12">
                                        @foreach ($product->images as $image)

                                        <div class="col-lg-3 block">
                                            <a href="#"><img class="card-img-top"
                                                    src="{{asset('uploads/product/images/'.$image['image'])}}"
                                                    alt=""></a>
                                        </div>
                                        @endforeach
                                    </div>

                                    <hr>
                                <form method="POST" action="{{route('product.order')}}">
                                        <div class="form-group">
                                            {{ csrf_field() }}
                                            <label for="exampleInputEmail1">Quantity</label>
                                            <input type="number"
                                        value="{{$product['id']}}" class="form-control" name="product_id" id="product_id" placeholder="Quantity" hidden>
                                            <input type="number" name="quantity" onchange="totalChange({{$product['quantity']}})"
                                                value="1" class="form-control" id="quantity" placeholder="Quantity"
                                                min='1'>
                                        </div>

                                        <button type="submit" class="btn btn-primary">checkout</button>
                                    </form>

                                    </>
                                </div>
                                <!-- /.card -->

                            </div>
                            <!-- /.col-lg-9 -->

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
    <script>
        function totalChange( total )
        {
            var value = $('#quantity').val()
            if(value > total)
            {
                swal("Sorry!", "We are out of stock ! we have only "+total+ " item left", "error");
            }
        }
    </script>