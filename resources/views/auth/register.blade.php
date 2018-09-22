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
                     <p>Already have an account? </p>
                     <a href="{{ route('login') }}">Sign in</a>
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
                  <div class="login-form-box">
                     <h3>Sign up to Seipkon</h3>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                <input id="fname" type="text" placeholder="First Name" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                <input id="lname" type="text" placeholder="Last Name" class="form-control" name="lname" value="{{ old('lname') }}" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('contactno') ? ' has-error' : '' }}">
                                <input id="contactno" type="text" placeholder="Phone Number" class="form-control" name="contactno" value="{{ old('contactno') }}" required >

                                @if ($errors->has('contactno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactno') }}</strong>
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
                        <div class="form-group">
                                <input id="password-confirm" placeholder="Re-Password" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        <div class="form-group{{ $errors->has('subdomain') ? ' has-error' : '' }}">
                          <div class="input-group">
                                <input id="subdomain" type="text" class="form-control" placeholder="Sub Domain" name="subdomain" value="{{ old('subdomain') }}" required ><span class="input-group-addon">.ytrk.us</span>

                                @if ($errors->has('imaccount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imaccount') }}</strong>
                                    </span>
                                @endif
                                </div>
                        </div>
                        <div class="form-group{{ $errors->has('imid') ? ' has-error' : '' }}">
                                <select class="form-control select2" name="imid" required>
                                                <option selected="selected" disabled="disabled">Select IM Type</option>
                                                <option value="skype">Skype</option>
                                                <option value="facebook">facebook</option>
                                             </select>
                                @if ($errors->has('imid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imid') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('imaccount') ? ' has-error' : '' }}">
                                <input id="imaccount" type="text" class="form-control" placeholder="IM Account" name="imaccount" value="{{ old('imaccount') }}" required >

                                @if ($errors->has('imaccount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imaccount') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="form-group form-checkbox">
                           <input type="checkbox" id="chk_2" required >
                           <label class="inline control-label" for="chk_2">I Accept <a href="#">Terms and Conditions</a></label>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-layout-submit">
                                    <button type="submit" >sign up</button>
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