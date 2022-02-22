<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href={{asset("adminLte/plugins/fontawesome-free/css/all.min.css")}}>

    <link rel="stylesheet" href={{asset('adminLte/dist/css/adminlte.min.css?v=3.2.0')}}>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

          {{-- top-navigation-section  --}}
           @include('Layouts.Topnav')

        {{-- side-navigation-section  --}}
           @include('Layouts.Sidenav')

          {{-- overall-content-warper  --}}
           @include('Layouts.Warper')
         {{-- footer section  --}}
         @include('Layouts.Footer')

    </div>



    <script src={{asset('adminLte/plugins/jquery/jquery.min.js')}}></script>

    <script src={{asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <script src="{{asset('adminLte/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
</body>

</html>
