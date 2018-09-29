@extends('layouts.landing')
         
         @section('content') 
         <style type="text/css">
            .features-nav { background: rgb(255, 255, 255) !important; border-top: none !important; border-right: none !important; border-bottom: 1px solid rgb(231, 231, 231) !important; border-left: none !important; border-image: initial !important;     color: #333 !important; }
            .navbar-a-color { color: #333 !important; }
            .section-bottom { display: none; }
         </style>

<section  class="section-thankyou-body">
    <div class="text-center">
        <div class="thankyou-top">
            <div  class="thankyou-top-t">
                <img src="{{ asset('public/assets/css/static/images/signup/email.jpg') }}" />
            </div>
            <div class="thankyou-top-c">
                <h3>Thanks!</h3>
                <h3>Your signup has been submitted.</h3>
            </div>
            <div class="thankyou-top-b">
                <p>We have sent an email to <span id="email" ></span></p>
                <p>Please click on the confirmation link to activate your account and start your 30-days free trial.</p>
            </div>
        </div>
        <div class="thankyou-bottom">
            <div class="col-md-12">
                <p class="copyright">&copy; Copyright <script>document.write(new Date().getFullYear())</script> MAAS PVT. LIMITED. All rights reserved.</p>
            </div>
        </div>
    </div>
</section>
@endsection