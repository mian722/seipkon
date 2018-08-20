<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
      <meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
      <meta name="author" content="Themescare">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Title -->
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/favicon/favicon-32x32.png') }}">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/animate.min.css') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap/bootstrap.min.css') }}">
      <!-- Font awesome CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/font-awesome/font-awesome.min.css') }}">
      <!-- Themify Icon CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/themify-icons/themify-icons.css') }}">
      <!-- Perfect Scrollbar CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
      <!-- Main CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/seipkon.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
   </head>
   <body class="body_white_bg">
       
      <!-- Start Page Loading -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- End Page Loading -->
       
      <!-- Login Page Header Area Start -->
      <div class="seipkon-login-page-header-area">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4">
                  <div class="login-page-logo">
                     <a href="index-2.html">
                     <img src="{{ asset('public/assets/img/logo.png') }}" alt="Seipkon Logo" />
                     </a>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8">
                  <div class="login-page-logo-right">
                     <p>New to Seipkon?</p>
                     <a href="{{ route('register') }}">Sign up</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Login Page Header Area End -->
        <!-- Login Form Start -->
      <div class="seipkon-login-form-area">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-md-offset-4">
                  <div class="login-form-box forgot-password">
                     <h3>Forgot Your Password?</h3>
                     <p>Enter your e-mail address below to reset your password.</p>
                     <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" placeholder="Enter your Email" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-layout-submit">
                                    <button type="submit" >Reset Password</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Login Form End -->   
      <script src="{{ asset('public/assets/js/jquery-3.1.0.min.js') }}"></script>
      <!-- Bootstrap JS -->
      <script src="{{ asset('public/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
      <!-- Perfect Scrollbar JS -->
      <script src="{{ asset('public/assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js') }}"></script>
      <!-- Custom JS -->
      <script src="{{ asset('public/assets/js/seipkon.js') }}"></script>
   </body>
</html>
