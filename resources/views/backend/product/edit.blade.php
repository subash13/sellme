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
            <span>News</span>
            <i class="fa fa-angle-right"></i>
            <span>News</span>
            <i class="fa fa-angle-right"></i>
            <span>News-Update</span>
        </h2>
    </div>
    <!--//banner-->
    <!--faq-->
    <div class="blank">
        <div class="blank-page">
            <div class="row">
                <div class="col-md-12">
                    <h3>Update About/Sub-Menu/{{$data['title']}}</h3>
                    <div class="tab-content">
                        <div class="tab-pane active" id="horizontal-form">
                            <form class="form-horizontal" action="{{route('news.update',['id'=>$data['id']])}}"
                                  method="POST" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                {{@method_field('patch')}}
                                <div class="form-group {{ $errors->has('category')?'has-error':''}}">
                                    <label for="type" class="col-sm-2 control-label">Sub-Menu: </label>
                                    <div class="col-sm-8">
                                        <select class="form-control1" name="category" id="type">
                                            <option value="{{$data->category['id']}}"
                                                    selected>{{ $errors->has('category')?$errors->first('category'):ucfirst($data->category['title'])}}</option>
                                            @foreach($submenus as $submenu)
                                                <option value="{{$submenu['id']}}"
                                                        data-type="{{$submenu['type']}}">{{ucfirst($submenu['title'])}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @if($data->category['type']!=='single')
                                    <div class="form-group uploadfile {{ $errors->has('cover')?'has-error':''}}">
                                        <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
                                        <div class="col-sm-8">
                                            <img class="pull-left" style="width: 150px; height:100px"
                                                 src="{{asset('uploads/news/'.$data['cover'])}}"
                                                 class="rounded float-right"
                                                 alt="...">
                                            <input type="file" name="cover" class="form-control1" id="cover">
                                            <p class="help-block">{{ $errors->has('cover')?$errors->first('cover'):"file must be of jpeg,jpg,png,gif. (Image size 3:2)"}}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="form-group uploadfile {{ $errors->has('cover')?'has-error':''}}" hidden>
                                        <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="cover" class="form-control1" id="cover">
                                            <p class="help-block">{{ $errors->has('cover')?$errors->first('cover'):"file must be of jpeg,jpg,png,gif. (Image size 3:2)"}}</p>
                                        </div>
                                    </div>
                                @endif

                                <br>
                                <h5>English</h5>
                                {{@csrf_field()}}
                                <div class="form-group {{ $errors->has('title')?'has-error':''}}">
                                    <label for="name" class="col-sm-2 control-label">Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" value="{{$data['ttitle']}}" name="title"
                                               class="form-control1" id="title"
                                               placeholder="{{ $errors->has('title')?$errors->first('title'):'Title'}}">

                                    </div>

                                </div>

                                <div class="form-group {{ $errors->has('description')?'has-error':''}}">
                                    <label for="description" class="col-sm-2 control-label">Description: </label>
                                    <div class="col-sm-8">
                                        <textarea name="description" id="description" cols="50"
                                                  placeholder="Description" rows="4"
                                                  class="form-control1">{{ $errors->has('description')?$errors->first('description'):$data['description']}}</textarea>
                                    </div>
                                </div>
                                <br>
                                <h5>Thai</h5>
                                <div class="form-group {{ $errors->has('ttitle')?'has-error':''}}">
                                    <label for="ttitle" class="col-sm-2 control-label">Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" value="{{$data['ttitle']}}" name="ttitle"
                                               class="form-control1" id="ttitle"
                                               placeholder="{{ $errors->has('ttitle')?$errors->first('ttitle'):'Title'}}">

                                    </div>

                                </div>

                                <div class="form-group {{ $errors->has('tdescription')?'has-error':''}}">
                                    <label for="description" class="col-sm-2 control-label">Description: </label>
                                    <div class="col-sm-8">
                                        <textarea name="tdescription" id="tdescription" cols="50"
                                                  placeholder="Description" rows="4"
                                                  class="form-control1">{{ $errors->has('tdescription')?$errors->first('description'):$data['tdescription']}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label for="status" class="col-sm-2 control-label">Status: </label>
                                    <!-- Rounded switch -->
                                    <div class="col-sm-8">
                                        <label class="switch">
                                            <input type="checkbox" id="status"
                                                   name="status" {{$data['status']==1?'checked':''}}>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button type="submit" class="btn-primary btn">Update</button>
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
