<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf8">
    <title>Taxi Management System</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo|Changa" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/taxi.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/aside.css')}}">
    <link href="bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    

    @yield('styles')


</head>

<body dir="rtl">


    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                    <span class="glyphicon glyphicon-"></span>
                    <span>@lang('dash.dashboard')</span>
                    <span class="glyphicon glyphicon-dashboard"></span>
                </a>
                </li>
                <li @if($dep == 'overview') class="active" @endif>
                    <a href="{{url('dashboard/overview')}}">@lang('dash.overview')</a>
                </li>
                <li @if($dep == 'cars') class="active" @endif>
                    <a href="{{url('dashboard/cars')}}">@lang('dash.cars')</a>
                </li>
                <li @if($dep == 'drivers') class="active" @endif>
                    <a href="{{url('dashboard/drivers')}}">@lang('dash.drivers')</a>
                </li>
                <li @if($dep == 'employers') class="active" @endif>
                    <a href="{{url('dashboard/employers')}}">@lang('dash.employers')</a>
                </li>
                <li @if($dep == 'users') class="active" @endif>
                    <a href="{{url('dashboard/users')}}">@lang('dash.users')</a>
                </li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
                <li @if($dep == 'maintenance') class="active" @endif>
                    <a href="{{url('dashboard/maintenance')}}">@lang('dash.za_maintenance')</a>
                </li>
                <li @if($dep == 'expenses') class="active" @endif>
                    <a href="{{url('dashboard/expenses')}}">@lang('dash.expenses')</a>
                </li>
                <li @if($dep == 'reports') class="active" @endif>
                    <a href="{{url('dashboard/reports')}}">@lang('dash.reports')</a>
                </li>
                <li @if($dep == 'branches') class="active" @endif>
                    <a href="{{url('dashboard/branches')}}">@lang('dash.branches')</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">




    <nav>
        <ul class="nav-list">
            <li class="nav-item">
                <a href="#" class="nav-item">
                    <span class="glyphicon glyphicon-home"></span>
                    <span class="title-text">الرئيسية</span>

                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item hamburger is-closed" data-toggle="offcanvas">
                    <span class="glyphicon glyphicon-dashboard"></span>
                    <span class="title-text" >لوحة التحكم</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">
                    <span class="glyphicon glyphicon-off"></span>
                    <span class="title-text">خروج</span>
                </a>
            </li>
        </ul>
    </nav>

</div>