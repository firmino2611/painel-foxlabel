<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Foxlabel | Blank Page</title>
    <!-- Css Files -->
    <link href="{{ asset('public/css/root.css') }}" rel="stylesheet">

    @yield('styles')
</head>
<body>
    <!-- Start Page Loading -->
    <div class="loading"><img src="{{ asset('public/img/loading.gif')}}" alt="loading-img"></div>
    <!-- End Page Loading --> 

    @include('layouts._sistema._navtopo')

    @include('layouts._sistema._sidebar')
    <!-- Start Content -->
    <div class="content"> 
        <!-- Start Page Header -->
        <div class="page-header">
            <h1 class="title">Dashboard</h1>
            <!--  <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Extra Pages</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
            </ol> -->
        </div>
        <!-- End Page Header -->
        @if(Session::has('alert'))
            @component('sistema.components.alerta')
                {{ Session::get('alert')['mensagem'] }}
            @endcomponent
        @endif

        <!-- Start Container -->
        <div class="container-default animated fadeInRight"> 
            <div class="row">
                 @yield('content')
            </div>
           
        </div>
        <!-- End Container --> 

        @include('layouts._sistema._footer')
    </div>
    <!-- End Content --> 

    <!-- Start Sidepanel -->
    
    
    <!-- End Sidepanel --> 

    <!-- jQuery Library --> 
    <script type="text/javascript" src="{{ asset('public/js/jquery.min.js')}}"></script> 
    <!-- Bootstrap Core JavaScript File --> 
    <script src="{{ asset('public/js/bootstrap/tether.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap/bootstrap.min.js')}}"></script> 
    <!-- Plugin.js - Some Specific JS codes for Plugin Settings --> 
    <script type="text/javascript" src="{{ asset('public/js/plugins.js')}}"></script>
    <!-- MetisMenu --> 
    <script type="text/javascript" src="{{ asset('public/js/metismenu/metisMenu.min.js')}}"></script>
    <!-- Bootstrap Select -->
    <script type="text/javascript" src="{{ asset('public/js/bootstrap-select/bootstrap-select.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
    
    @yield('scripts')
</body>
</html>