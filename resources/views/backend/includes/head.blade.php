<head>
    <title>Sell Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{asset('/')}}backend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="{{asset('/')}}backend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('/')}}backend/css/font-awesome.css" rel="stylesheet">
    <!-- Custom and plugin javascript -->
    <link href="{{asset('/')}}backend/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}backend/datatable/datatables.min.css" />
    @yield('styles')
    <script src="{{asset('/')}}backend/js/jquery-3.2.1.min.js"> </script>
    <script src="{{asset('/')}}backend/js/bootstrap.min.js"> </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>