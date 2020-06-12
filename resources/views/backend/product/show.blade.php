@extends("backend.layouts.app")
@section('scripts')
<script>

</script>
<script src="{{asset('backend/javascripts/pcategory.js')}}"></script>
@endsection
@section('contains')
<!--banner-->
<div class="banner">
    <h2>
        <a href="index.html">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Product</span>
        <i class="fa fa-angle-right"></i>
        <span>Product-Details</span>
    </h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">
    <div class="blank-page">
        <div class="row">
            <div class="col-md-12">
                <h3>View News/Gallery/{{$data['title']}}</h3>
                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <div class="form-horizontal">

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Cover Image:</label>
                                <div class="col-sm-8">
                                    <img class="pull-left" style="width: 300px; height:200px"
                                        src="{{asset('uploads/product/cover/'.$data['cover'])}}"
                                        class="rounded float-right" alt="...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Product Image:</label>
                                <div class="col-sm-8">
                                    @foreach ($data->images as $image)

                                    <div class="col-sm-2">
                                        <img class="pull-left" style="width: 150px; height:100px"
                                            src="{{asset('uploads/product/images/'.$image['image'])}}"
                                            class="rounded float-right" alt="...">
                                    </div>
                                    @endforeach

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" value="{{$data['title']}}" name="name" class="form-control1"
                                        id="name" disabled>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Price:</label>
                                <div class="col-sm-8">
                                    <input type="text" value="Rs.{{$data['price']}}" name="price" class="form-control1"
                                        id="name" disabled>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Quantity:</label>
                                <div class="col-sm-8">
                                    <input type="text" value="{{$data['quantity']}}" name="name" class="form-control1"
                                        id="name" disabled>
                                </div>

                            </div>

                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description: </label>
                                <div class="col-sm-8">
                                    <textarea name="description" id="description" cols="50"
                                        placeholder="Category Description" rows="4" class="form-control1"
                                        disabled>{{$data['description']}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <form class="form-horizontal"
                                        action="{{route('product.destroy',['id'=>$data['id']])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" name="archive" type="submit"
                                            onclick="archiveFunction()">
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection