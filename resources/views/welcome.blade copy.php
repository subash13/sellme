<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }



        .text-gray {
            color: #aaa
        }

        img {
            height: 170px;
            width: 140px
        }
    </style>
</head>

<body>
@include('sweet::alert')

    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="container py-5">
            <div class="row text-center text-white mb-5">
                <div class="col-lg-7 mx-auto">
                    <h1 class="display-4">Product List</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- List group-->
                    <ul class="list-group shadow">
                        <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">Apple iPhone XR (Red, 128 GB)</h5>
                                    <p class="font-italic text-muted mb-0 small">128 GB ROM | 15.49 cm (6.1 inch)
                                        Display 12MP Rear Camera | 7MP Front Camera A12 Bionic Chip Processor</p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">₹64,999</h6>
                                        <ul class="list-inline small">
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                        </ul>
                                    </div>
                                </div><img src="https://i.imgur.com/KFojDGa.jpg" alt="Generic placeholder image"
                                    width="200" class="ml-lg-5 order-1 order-lg-2">
                            </div> <!-- End -->
                        </li> <!-- End -->
                        <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">Apple iPhone XS (Silver, 64 GB)</h5>
                                    <p class="font-italic text-muted mb-0 small">64 GB ROM | 14.73 cm (5.8 inch) Super
                                        Retina HD Display 12MP + 12MP | 7MP Front Camera A12 Bionic Chip Processor</p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">₹99,900</h6>
                                        <ul class="list-inline small">
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div><img src="https://i.imgur.com/KFojDGa.jpg" alt="Generic placeholder image"
                                    width="200" class="ml-lg-5 order-1 order-lg-2">
                            </div> <!-- End -->
                        </li> <!-- End -->
                        <!-- list group item -->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">Apple iPhone XS Max (Gold, 64 GB)</h5>
                                    <p class="font-italic text-muted mb-0 small">64 GB ROM | 16.51 cm (6.5 inch) Super
                                        Retina HD Display 12MP + 12MP | 7MP Front Camera A12 Bionic Chip Processor</p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">₹1,09,900</h6>
                                        <ul class="list-inline small">
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                        </ul>
                                    </div>
                                </div><img src="https://i.imgur.com/KFojDGa.jpg" alt="Generic placeholder image"
                                    width="200" class="ml-lg-5 order-1 order-lg-2">
                            </div> <!-- End -->
                        </li> <!-- End -->
                        <!-- list group item -->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">OnePlus 7 Pro (Almond, 256 GB)</h5>
                                    <p class="font-italic text-muted mb-0 small">Rear Camera|48MP (Primary)+ 8MP
                                        (Tele-photo)+16MP (ultrawide)| Front Camera|16 MP POP-UP Camera|8GB RAM|Android
                                        pie</p>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <h6 class="font-weight-bold my-2">₹ 52,999</h6>
                                        <ul class="list-inline small">
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                            <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div><img src="https://i.imgur.com/6IUbEME.jpg" alt="Generic placeholder image"
                                    width="200" class="ml-lg-5 order-1 order-lg-2">
                            </div> <!-- End -->
                        </li> <!-- End -->
                    </ul> <!-- End -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
