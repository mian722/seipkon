@extends('layouts.landing')
         
         @section('content') 
<style type="text/css">
            
            .navbar-a-color { color: #333 !important; }
         </style>
<div id="carousel-customers" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators hidden">
    <li data-target="#carousel-customers" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-customers" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active item-customer1">
      <div class="container">
        <div class="caption">
          <div class="col-sm-6 col-xs-10">
            <p><img src="{{ asset('public/assets/css/static/images/customer/customer_bannerlogo01.png') }}" /></p>
            <h1>
              <img src="{{ asset('public/assets/css/static/images/customer/Customer_icon01.png') }}"><br/>
              Offerslook is a truly trust-worthy and reliable platform and it makes it easy for us to streamline all business needs.
              <br/>
              <img src="{{ asset('public/assets/css/static/images/customer/Customer_icon02.png') }}" class="pull-right">
              <br/>
            </h1>
            <p class="text-right">
              <span class="pull-right">Mac Deng</span>
              <br/>
              <span class="pull-right small">COO</span>
            </p>
            <p><a class="btn btn-outline btn-border-2x btn-vpadding-2x" href="case-study-adunite.html">Read the Story</a> </p>
          </div>
        </div>
      </div>
    </div>
    <div class="item item-customer2">
      <div class="container">
        <div class="caption">
          <div class="col-sm-6 col-xs-10">
            <p><img src="{{ asset('public/assets/css/static/images/customer/customer_bannerlogo02.png') }}" /></p>
            <h1>
              <img src="{{ asset('public/assets/css/static/images/customer/Customer_icon01.png') }}"><br/>
              Moving to Offerslook, we have saved 60% tracking cost and achieve tracking reliability.
              <br/>
              <img src="{{ asset('public/assets/css/static/images/customer/Customer_icon02.png') }}" class="pull-right">
              <br/>
            </h1>
            <p class="text-right">
              <span class="pull-right">Ozgur</span>
              <br/>
              <span class="pull-right small">CEO</span>
            </p>
            <p><a class="btn btn-outline btn-border-2x btn-vpadding-2x" href="case-study-vamos-media.html">Read the Story</a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-customers" role="button" data-slide="prev" style="background: none">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-customers" role="button" data-slide="next" style="background: none">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="main-list">
  <div class="container">
    <h1 class="text-center">Don't take our word for it.</h1>
    <h1 class="text-center" style="margin-bottom: 30px">Here's what our customers say about us.</h1>

    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="card-customer">
          <div class="customer-logo">
            <img src="{{ asset('public/assets/css/static/images/customer/customer_card_logo01.png') }}" class="center-block"/>
          </div>
          <div class="customer-words">
            <p class="text-center">
              Thanks to Offerslook's pay-as-you-go pricing approach,
              we are able to enjoy better cash flow and further scale up our business.
            </p>
          </div>
          <div class="customer-info">
            <p class="customer-name text-center">Marina Tkalenko</p>
            <p class="customer-title text-center">Chief Executive Officer</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card-customer">
          <div class="customer-logo">
            <img src="{{ asset('public/assets/css/static/images/customer/customer_card_logo02.png') }}" class="center-block"/>
          </div>
          <div class="customer-words">
            <p class="text-center">
              Offerslook has real time tracking and reporting.
              It also offers some features to analyze and optimize the offers.
              We really like the platform.
            </p>
          </div>
          <div class="customer-info">
            <p class="customer-name text-center">Benjamin Wong</p>
            <p class="customer-title text-center">Chief Executive Officer</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card-customer">
          <div class="customer-logo">
            <img src="{{ asset('public/assets/css/static/images/customer/customer_card_logo03b78e.png?v=20180419') }}" class="center-block"/>
          </div>
          <div class="customer-words">
            <p class="text-center">
              Offerslook is best place which aid in planning, managing, reviewing and optimizing performance.
              Our first preference ever! Special thanks to valued support team! Your dedication is incredible!
            </p>
          </div>
          <div class="customer-info">
            <p class="customer-name text-center">Mahima Shree / Rahul Sharma</p>
            <p class="customer-title text-center">Director of Performance Marketing</p>
          </div>
        </div>
      </div>
<!--    </div>

    <div class="row">-->
      <div class="col-sm-6 col-md-4">
        <div class="card-customer">
          <div class="customer-logo">
            <img src="{{ asset('public/assets/css/static/images/customer/customer_card_logo04.png') }}" class="center-block"/>
          </div>
          <div class="customer-words">
            <p class="text-center">
              The interface is very intuitive and easy to use. It helps to understand how effective the advertising is.
            </p>
          </div>
          <div class="customer-info">
            <p class="customer-name text-center">Özgür Kayabey</p>
            <p class="customer-title text-center">Chief Executive Officer</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card-customer">
          <div class="customer-logo">
            <img src="{{ asset('public/assets/css/static/images/customer/customer_card_logo05b78e.png?v=20180419') }}" class="center-block"/>
          </div>
          <div class="customer-words">
            <p class="text-center">
              Offerslook equips us with some very powerful tools and functionalities to ease and optimize our business needs at a value for money cost!
              Like the way they are constantly working on taking feedback and meeting our needs further.
            </p>
          </div>
          <div class="customer-info">
            <p class="customer-name text-center">Haresh Bilakhia</p>
            <p class="customer-title text-center">Director</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card-customer">
          <div class="customer-logo">
            <img src="{{ asset('public/assets/css/static/images/customer/customer_card_logo06.png') }}" class="center-block"/>
          </div>
          <div class="customer-words">
            <p class="text-center">
              The platform provides powerful solution to manage our hundreds of offers and publishers at the same time with almost very least work load.
              I am very well pleased with it.
            </p>
          </div>
          <div class="customer-info">
            <p class="customer-name text-center">Zeeshan Shah</p>
            <p class="customer-title text-center">Chief Executive Officer</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="other-list bg-gray">
  <div class="container">
    <h1 class="text-center">We're proud to be part of our customers' success.</h1>

    <div class="customer-icon-list">
      <div class="row">
        <div class="col-lg-offset-1 col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/gorilla.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo01.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 ">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo02.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo03.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo04.png') }}" />
        </div>

        <div class="col-lg-offset-1 col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo06.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo07.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo08.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo10.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo12.png') }}" />
        </div>

        <div class="col-lg-offset-1 col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo13.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/customer_logo15.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/adotize.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/affloop.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/digital_river.png') }}" />
        </div>

        <div class="col-lg-offset-1 col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/epom.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/eptonic.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/leanmobi.png') }}') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/performics.png') }}" />
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
          <img src="{{ asset('public/assets/css/static/images/customer/square_hd.png') }}" />
        </div>
      </div>
    </div>

    <h1 class="bottom-header">
      Join our 1000+ happy customers across the globe!
      <a class="btn btn-outline btn-border-2x btn-vpadding-2x" href="pricing.html">Sign up for free trial</a>
    </h1>
  </div>
</section>

@endsection
