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
            <span>Dashboard</span>
            <i class="fa fa-angle-right"></i>
            <span>New Registered</span>
            <i class="fa fa-angle-right"></i>
            <span>Registration Lists</span>
        </h2>
    </div>
    <!--//banner-->
    <!--faq-->
    <div class="blank">
        <div class="blank-page">
            <div class="row">
                <div class="col-md-4 login-do">
                    
                </div>
                <br><br>
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>
    </div>
@endsection
