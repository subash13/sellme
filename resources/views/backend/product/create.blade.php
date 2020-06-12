@extends("backend.layouts.app")
@section('scripts')

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
            <span>Create Product</span>
        </h2>
    </div>
    <!--//banner-->
    <!--faq-->
    <div class="blank">
        <div class="blank-page">
            <div class="row">
                <div class="col-md-12">
                    <h3>Add Products</h3>

                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            
                                <div class="form-group uploadfile {{ $errors->has('cover')?'has-error':''}}">
                                    <label for="exampleInputFile" class="col-sm-2 control-label">Cover Image</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="cover" class="form-control1" id="cover">
                                        <p class="help-block">{{ $errors->has('cover')?$errors->first('cover'):"file must be of jpeg,jpg,png,gif. (Image size 3:2)"}}</p>
                                    </div>
                                </div>
                                {{@csrf_field()}}
                                <div class="form-group {{ $errors->has('title')?'has-error':''}}">
                                    <label for="name" class="col-sm-2 control-label">Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" value="{{old('title')}}" name="title" class="form-control1"
                                               id="title"
                                               placeholder="{{ $errors->has('title')?$errors->first('title'):'Title'}}">
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('price')?'has-error':''}}">
                                    <label for="name" class="col-sm-2 control-label">Price:</label>
                                    <div class="col-sm-8">
                                        <input type="number" value="{{old('price')}}" name="price" class="form-control1"
                                               id="title"
                                               placeholder="{{ $errors->has('price')?$errors->first('price'):'Price'}}" min="0">
                                    </div>
                                </div>
                                <div class="form-group {{ $errors->has('quantity')?'has-error':''}}">
                                    <label for="name" class="col-sm-2 control-label">Price:</label>
                                    <div class="col-sm-8">
                                        <input type="number" value="{{old('quantity')}}" name="quantity" class="form-control1"
                                               id="title"
                                               placeholder="{{ $errors->has('quantity')?$errors->first('quantity'):'quantity'}}" min="0">
                                    </div>
                                </div>

                                <div class="form-group uploadfile {{ $errors->has('images')?'has-error':''}}">
                                    <label for="images" class="col-sm-2 control-label">Product Images</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="images[]" class="form-control1" id="images" multiple>
                                        <p class="help-block">{{ $errors->has('images')?$errors->first('images'):"file must be of jpeg,jpg,png,gif. (Image size 3:2)"}}</p>
                                    </div>
                                </div>
                                
                                <div class="form-group {{ $errors->has('description')?'has-error':''}}">
                                    <label for="description" class="col-sm-2 control-label">Description: </label>
                                    <div class="col-sm-8">
                                        <textarea name="description" id="description" cols="50"
                                                  placeholder="Description" rows="4"
                                                  class="form-control1">{{ $errors->has('description')?$errors->first('description'):old('description')}}</textarea>
                                    </div>
                                </div>
                              
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button type="submit" class="btn-primary btn">Save</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
