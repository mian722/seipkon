
@extends('layouts.landing')
         
         @section('content') 
<style type="text/css">
    .section-bottom { display: none; }
</style>

<div class="jumbotron signup-jumbotron">
    <div class="container">
        <div class="row" style="margin-top: 60px">
            <div class="col-sm-12 text-center">
                <h1 style="font-size: 30px;color: #ffffff">Sign Up and Get 30-days Free Trial</h1>
                <p style="font-size: 14px;color: #ffffff">
                    No credit card needed. Please make sure your information is entered correctly.
                    Our people will contact you within one working day.
                </p>

                <div class="center-block signup-form-container">
                    <form  method="post" action="{{ route('adminregister') }}">
                        {{ csrf_field() }}

                        <div class="row row-name">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                                <input id="fname" type="text" placeholder="First Name" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>
                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                        </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                                <input id="lname" type="text" placeholder="Last Name" class="form-control" name="lname" value="{{ old('lname') }}" required >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('imaccount') ? ' has-error' : '' }}">
                                <input id="imaccount" type="text" class="form-control" placeholder="Skype" name="imaccount" value="{{ old('imaccount') }}" required >

                                @if ($errors->has('imaccount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imaccount') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                                <input id="company" type="text" class="form-control" placeholder="Company" name="company" value="{{ old('company') }}" required >

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                                <input id="website" type="text" class="form-control" placeholder="Website" name="website" value="{{ old('website') }}" required >

                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
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


                        <div class="form-group">
                            <p style="font-size: 12px;color: #333333" class="text-left">
                                <input id="signup-check" type="checkbox" checked="checked">
                                I agree to the
                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                                and
                                <a href="msa.html" target="_blank">
                                    Master Services Agreement
                                </a>
                                and to receive email content from Offerslook.
                            </p>
                        </div>
                        <button type="submit"  class="btn btn-primary btn-block">Get Started</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-partners text-center">
    <ul class="list-inline">
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo01.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo02.png')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo03.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo04.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo05.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo06.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo07.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo08.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo09.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo10.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo11.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo12.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo13.jpg')}}" class="img-responsive"></li>
        <li class="text-center"><img src="{{ asset('public/assets/css/static/images/signup/sign_up_logo14.jpg')}}" class="img-responsive"></li>
    </ul>
</div>

<div class="bg-gray text-center">
    <footer class="footer text-center" style="padding: 15px 0 5px 0">
        <p class="copyright" style="color: #666666">&copy; Copyright
            <script>document.write(new Date().getFullYear())</script>
            MAAS PVT. LIMITED. All rights reserved.
        </p>
    </footer>
</div>
@endsection