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
        <span>Orders</span>
        <i class="fa fa-angle-right"></i>
        <span>Orders Lists</span>
    </h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
    <div class="blank-page">
        <div class="row">
            < <br><br>
                <div class="col-md-12">
                    <table class="table table-bordered" id="aboutTable">
                        <thead>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Order By</th>
                            <th>Total</th>
                            <th>Created At</th>
                            <th>Options</th>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order['id']}}</td>
                                <td>{{$order->product['title']}}</td>
                                <td>{{$order->product['price']}}</td>
                                <td>{{$order['quantity']}}</td>
                                <td>{{$order->user['name']}}</td>
                                <td>{{$order['quantity']*$order->product['price']}}</td>
                                <td>{{date('j M Y h:i a', strtotime($order->created_at))}}</td>

                                <td><a href="{{route('order.show',$order['id'])}}" title='SHOW'
                                        class='btn btn-primary'><span class='fa fa-eye'></span></a>
                                    &emsp;
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </>
        </div>
    </div>
    @endsection