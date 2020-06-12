@extends("backend.layouts.app")
@section('scripts')
    <script>
        $("#aboutTable").dataTable();
    </script>
@endsection
@section('contains')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Products</span>
            <i class="fa fa-angle-right"></i>
            <span>Products Lists</span>
        </h2>
    </div>
    <!--//banner-->
    <!--faq-->
    <div class="blank">
        <div class="blank-page">
            <div class="row">
                <div class="col-md-2 login-do">
                    <label class="hvr-shutter-in-horizontal login-sub">
                        <a href="{{route('product.create')}}"> Add New <i class="fa fa-plus-square"></i></a>
                    </label>
                </div>
                <br><br>
                <div class="col-md-12">
                    <table class="table table-bordered" id="aboutTable">
                        <thead>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Options</th>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                                <td>{{$product['id']}}</td>
                                <td><img style="height:100px; width:150px;" src="{{asset('uploads/product/cover/'.$product['cover'])}}" alt="..." class="img-thumbnail"></td>
                                <td>{{$product['title']}}</td>
                                <td>{{$product['price']}}</td>
                                <td>{{$product['quantity']}}</td>
                                <td>{{substr(strip_tags($product['description']), 0, 50) . "..."}}</td>
                                <td>{{date('j M Y h:i a', strtotime($product->created_at))}}</td>

                                <td><a href="{{route('product.show',$product['id'])}}" title='SHOW' class='btn btn-primary'><span
                                                class='fa fa-eye'></span></a>
                                    &emsp;{{-- <a href='{{route('product.edit',$product['id'])}}' title='EDIT' class='btn btn-success'> <span
                                                class='fa fa-edit'></span></a> --}}
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
