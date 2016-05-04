<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="{{URL::to('src/css')}}/style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/prettyPhoto.css">   
  <!-- Star rating -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/bootstrap-datetimepicker.min.css">
  <!-- jQuery Gritter -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/jquery.gritter.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/jquery.cleditor.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/bootstrap-toggle-buttons.css">
  <!-- Main stylesheet -->
  <link href="{{URL::to('src/css')}}/style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="{{URL::to('src/css')}}/style/widgets.css" rel="stylesheet">   
 
  
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{URL::to('src/css')}}/img/favicon/favicon.png">
  @yield('extra_top')
</head>

<body>

@include('include.navbar')

<div class="content">

  @include('include.sidebar')

    <!-- Main bar -->
    <div class="mainbar">
      
      <div class="page-head">
        <!-- Page heading -->
          <h2 class="pull-left">@yield('page_name') 
        <!-- page meta -->
        <span class="page-meta">@yield('page_description')</span>
      </h2>


      <!-- Breadcrumb -->
      <div class="bread-crumb pull-right">
        <a href="{{route('home')}}"><i class="icon-home"></i> Home</a> 
      </div>

      <div class="clearfix"></div>

      </div>



    <div class="matter">
            <div class="container">
              <!-- Today status. jQuery Sparkline plugin used. -->

              <div class="row">
                


                  @yield('content')
                  
                
              </div>
            </div>
    </div>

</div>

<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->
<script src="{{URL::to('src/css')}}/js/jquery.js"></script> <!-- jQuery -->
<script src="{{URL::to('src/css')}}/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="{{URL::to('src/css')}}/js/jquery-ui-1.10.2.custom.min.js"></script> <!-- jQuery UI -->


@yield('extra_bottom')

</body>
</html>