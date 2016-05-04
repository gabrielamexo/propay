<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <link href="{{URL::to('src/css')}}/style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::to('src/css')}}/style/font-awesome.css">
  <link href="{{URL::to('src/css')}}/style/style.css" rel="stylesheet">
  
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{URL::to('src/css')}}/img/favicon/favicon.png">
</head>

<body>

<div class="admin-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Widget starts -->
            <div class="widget worange">
              <div class="widget-head">
                <i class="icon-lock"></i> Register 
              </div>
              <div class="widget-content">
                <div class="padd">
                  
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    <!-- Registration form starts -->
                    {!! csrf_field() !!}
                    <!-- Name -->
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="control-label col-lg-3" for="name">Name</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div> 


                    <!-- Email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-lg-3 control-label">E-Mail Address</label>

                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-lg-3 control-label">Password</label>

                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-lg-3 control-label">Confirm Password</label>

                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                  <!-- Buttons-->
                  <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                      <br />
                      <button type="submit" class="btn btn-primary">Register</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                  </div>
                <br />
                  </form>

                </div>
                </div>
                <div class="widget-foot">
                  Already Registred? <a href="{{ url('/login') }}">Login</a>
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
    
        

<!-- JS -->
<script src="{{URL::to('src/css')}}/js/jquery.js"></script>
<script src="{{URL::to('src/css')}}/js/bootstrap.js"></script>
</body>
</html>