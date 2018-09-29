@extends('layouts.landing')
         
         @section('content') 

<div id="index-banner-carousel" class="carousel slide  index-banner-box" data-ride="carousel">
  <!-- 轮播（Carousel）指标 -->
  <!--<ol class="carousel-indicators">-->
    <!--<li data-target="#index-banner-carousel" data-slide-to="0" class="active"></li>-->
    <!--<li data-target="#index-banner-carousel" data-slide-to="1"></li>-->
  <!--</ol>-->
  <!-- 轮播（Carousel）项目 -->
  <div class="carousel-inner">
    <div class="item active" style="background:url({{ asset('public/assets/css/static/images/index/banner4.jpg') }}) no-repeat center;">
      <div class="container carousel-caption index-banner-content">

        <h1 class="text-center">Performance Marketing Software</h1>
        <p class="text-center">Track, Analyze and Optimize your performance marketing result in an easy and smart way
        </p>
        <p class="text-center" style="margin-top: 50px">
          <a class="btn btn-outline btn-border-2x" href="pricing.html" role="button" style="margin-top: 10px; color: #fff;background-color: #749e40;border-color: #749e40;">Start Free Trial</a>
        </p>
      </div>
    </div>
    <!--
    <div class="item item-dmexco" onclick="location.href='mailto:marketing@offerslook.com'">
      <img src="static/images/index/slider/Dmexco-2017-sm.jpg?v=2" alt="Dmexco" class="visible-xs">
    </div>
    -->
  </div>
</div>

<section class="index-section-smart">
   <div class="container">
     <h1 class="text-center fade_in">Now with 50% More ROI by Offerslook</h1>
     <p class="text-center fade_in" style="color: #808080 !important;">
       Help performance marketers automate their work process and get the best profit with amazing smart features.
     </p>
     <div class="row smart-item">
       <div class="col-md-12">
         <div class="col-sm-4 col-xs-12 col-md-4">
            <div class="bg-gray smart-item-con">
              <img class="center-block img-responsive" src="{{ asset('public/assets/css/static/images/index/smart_01.png') }}" alt="Smart Puller" />
              <p class="text-center smart-item-title">Smart Puller</p>
              <p class="text-center p-grey">Automate Your Routine Work</p>
            </div>

         </div>
         <div class="col-sm-4 col-xs-12 col-md-4">
           <div class="bg-gray smart-item-con">
             <img class="center-block img-responsive" src="{{ asset('public/assets/css/static/images/index/smart_02.png') }}" alt="Email Marketing" />
             <p class="text-center smart-item-title">Smart Link</p>
             <p class="text-center p-grey">Get the Best Profit with Smart Link</p>
           </div>
         </div>
         <div class="col-sm-4 col-xs-12 col-md-4">
           <div class="bg-gray smart-item-con">
             <img class="center-block img-responsive" src="{{ asset('public/assets/css/static/images/index/smart_03.png') }}" alt="Smart Alert" />
             <p class="text-center smart-item-title">Smart Alert</p>
             <p class="text-center p-grey">Keep Your Performance Always High</p>
           </div>
         </div>
       </div>
     </div>

     <div class="row smart-list smart-list-1">
       <div class="col-sm-6 col-md-6 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 col-xs-12" >
         <img class="center-block img-responsive" src="{{ asset('public/assets/css/static/images/index/smart_puller.png') }}" alt="Smart Puller" />
       </div>
       <div class="col-md-6 col-sm-6 col-xs-12">
         <h3>Smart Puller</h3>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">Auto-grab Offers from Partners</p>
           <p class="fade_in s-l-content">Automatically grab as many offers from advertisers just by a few clicks.</p>
         </div>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">No Coding，No Development Cost</p>
           <p class="fade_in s-l-content">Only API Key and network name of the source system is required. No coding, no development cost.</p>
         </div>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">Improve Your Work Efficiency</p>
           <p class="fade_in s-l-content">Enjoy a free way to transfer your offers and no need to worry any errors and boring manually routine work.</p>
         </div>
       </div>
     </div>
     <div class="row smart-list smart-list-2" >
       <div class="col-md-6 col-sm-6 col-xs-12">
         <h3>Smart Link</h3>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">Auto-optimize Your Traffic</p>
           <p class="fade_in s-l-content">Create a single link for all offers dynamically direct users to the best offers that could maximize your ROI.</p>
         </div>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">Boost Your Revenue</p>
           <p class="fade_in s-l-content">Taking the highest EPC into consideration,turns affiliates into money makers with the advanced algorithm.</p>
         </div>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">User Experience Ensured</p>
           <p class="fade_in s-l-content">Giving the best possible experience by displaying the most suitable ads to users based on their device,GEO,and etc.</p>
         </div>
       </div>
       <div class="col-md-6 col-sm-6 col-xs-12" >
         <img class="center-block img-responsive" src="{{ asset('public/assets/css/static/images/index/smart_link.png') }}" alt="Smart Link" />
       </div>
     </div>

     <div class="row smart-list smart-list-1">
       <div class="col-sm-6 col-md-6 col-xs-12" >
         <img class="center-block img-responsive" src="{{ asset('public/assets/css/static/images/index/smart_alert.png') }}" alt="Smart Alert" />
       </div>
       <div class="col-md-6 col-sm-6 col-xs-12">
         <h3>Smart Alert</h3>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">Real-Time Alert</p>
           <p class="fade_in s-l-content">Providing deep insights into the health and performance of your Ads campaigns，alert the abnormal issues in real time during your business process.</p>
         </div>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">Alert Customization</p>
           <p class="fade_in s-l-content">Further customize your alerts for the metrics that meet your goal, including CR, postback, unique clicks and etc.</p>
         </div>
         <div class="smart-list-c">
           <p class="fade_in s-l-title">Auto-Process</p>
           <p class="fade_in s-l-content">Automatically handle the abnormal issues when the alert is triggered based on your setting.</p>
         </div>
       </div>
     </div>

   </div>
</section>

<section class="index-section-features bg-gray">
  <div class="container">

    <h1 class="text-center fade_in">You Have Everything to Build Your Network More Sustainable</h1>
    <p class="text-center fade_in">
      Offerslook scales with you.
      We offer a wide range of affiliate network management tools for businesses of all sizes.
    </p>

    <div class="feature-box">
      <div class="row up_fade">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>
            <img class="img-responsive pull-left" src="{{ asset('public/assets/css/static/images/index/network_01.png') }}" alt="Affiliate network Management" />
            Unlimited Clicks
          </h2>
          <p>
            Pay only for conversions, and get unlimited clicks. Drive down cost by 70+%.
          </p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>
            <img class="img-responsive pull-left" src="{{ asset('public/assets/css/static/images/index/network_05.png') }}" alt="Scalable" />
            Email-Marketing
          </h2>
          <p>
            Create and send emails to your affiliates, advertisers and employees.
          </p>
        </div>
      </div>
      <div class="row up_fade">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>
            <img class="img-responsive pull-left" src="{{ asset('public/assets/css/static/images/index/network_06.png') }}" alt="Customization" />
            Customization
          </h2>
          <p>
            Make it your own platform.
            Take advantage of our customization tools to make it reflect your unique brand and theme.
          </p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>
            <img class="img-responsive pull-left" src="{{ asset('public/assets/css/static/images/index/network_04.png') }}" alt="Robust API" />
            Intelligent Redirect
          </h2>
          <p>
            3 levels of redirections to ensure every click matches an offer at 99% chance. Reduce waste of traffic and increase ROI with affiliates.
          </p>
        </div>
      </div>
      <div class="row up_fade">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>
            <img class="img-responsive pull-left" src="{{ asset('public/assets/css/static/images/index/network_03.png') }}" alt="Reporting" />
            Reporting
          </h2>
          <p>
            Make instant decisions with real-time reporting.
            Get deeper insight with multi-functioned reports.
            Easy access to routine reports with report customization.
          </p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>
            <img class="img-responsive pull-left" src="{{ asset('public/assets/css/static/images/index/network_02.png') }}" alt="Anti-fraud" />
            Advanced Fraud Protection
          </h2>
          <p>
            FraudScore has shown its best in fraud detection which enables you to increase payouts for real traffic and stay ahead of the competition.
          </p>
        </div>
      </div>
    </div>


    <div class="btn-box text-center up_fade">
      <a href="features.html" class="btn btn-border-2x btn-outline" role="button" style="margin-top: 10px; color: #fff;background-color: #749e40;border-color: #749e40;">See All Our Features</a>
    </div>
  </div>
</section>

<section class="index-section-infra " style="background:url({{ asset('public/assets/css/static/images/index/amazon-bg.png') }}) no-repeat top center;">
  <div class="container">
    <h1 class="text-center">Infrastructure You Can Rely On</h1>
    <div class="row infra-item">
      <div class="col-md-5 col-sm-5 col-xs-12">
        <img  class="center-block img-responsive" src="{{ asset('public/assets/css/static/images/index/aws.png') }}" alt="Smart Alert" />
      </div>
      <div class="col-md-7 col-sm-7 col-xs-12" style="padding: 20px">
        <p class="fade_in">
          As a AWS SaaS Partner, Offerslook work closely with AWS to provide the most efficient and stable platform for customers. We can have 99.99% uptime around the globe. Our dedicated clusters on cloud can auto-scale to full-fill your traffic needs and be available during high traffic spikes.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="index-section-client ">
  <div class="container">
    <h1 class="text-center">Our Clients Love Us</h1>
    <p class="text-center">
      Over 1000 companies are using Offerslook to track their performance marketing campaigns in real-time,  <br/>gaining valuable insights into the channels and hence greatly increase their business ROI.
    </p>

    <div class="index-client-slider-container">
      <div id="index-client-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="quote-box">
              <div class="client-info text-center">
                <img class="img-circle client-pic" src="{{ asset('public/assets/css/static/images/index/client_pic_incentmobi.png') }}"/>
                <img class="center-block client-logo" src="{{ asset('public/assets/css/static/images/index/incentmobi_logo.jpg') }}" />
                <p><b>Hanna Ning</b> Vice President</p>
              </div>

              <div class="client-says">
                <p>
                  We've been using Offerslook for over one year,
                  and it will definitely become a big player in affiliate marketing industry.
                  Offerslook gives all the essential features and most importantly, their customer service is superb.
                </p>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="quote-box">
              <div class="client-info text-center">
                <img class="img-circle client-pic" src="{{ asset('public/assets/css/static/images/index/client_pic_vamosmedia.png') }}"/>
                <img class="center-block client-logo" src="{{ asset('public/assets/css/static/images/index/vamosmedia_logo.jpg') }}" />
                <p><b>Özgür Kayabey</b> Chief Executive Officer</p>
              </div>

              <div class="client-says">
                <p>
                  Using the Offerslook platform allows us to efficiently manage our platform, campaigns and publishers in real time.
                  With the all-in-one dashboard and customized reports, we are empowered to make instant and wise decisions,
                  hence generating better ROI.
                </p>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="quote-box">
              <div class="client-info text-center">
                <img class="img-circle client-pic" src="{{ asset('public/assets/css/static/images/index/client_pic_greenlight.png') }}"/>
                <img class="center-block client-logo" src="{{ asset('public/assets/css/static/images/index/greenlight_logo.jpg') }}" />
                <p><b>Bence Feigl</b> Head of Sales</p>
              </div>

              <div class="client-says">
                <p>
                  Offerslook delivers on every front.
                  Flexible pricing model, extremely responsive support and a constantly developing stable platform.
                  We had ZERO downtime so far for multiple times cheaper $/click than any other competitor on the market.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#index-client-carousel" role="button" data-slide="prev">
          <span class="carousel-span-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#index-client-carousel" role="button" data-slide="next">
          <span class="carousel-span-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>

    <div class="row index-client-footer">
      <div class="col-in-2 center-block">
        <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/client_vamosmedia_logo2.png') }}"/>
      </div>
      <div class="col-in-2 center-block">
        <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/client_wangxiangmedia_logo.png') }}"/>
      </div>
      <div class="col-in-2 center-block">
        <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/client_digit.png') }}"/>
      </div>
      <div class="col-in-2 center-block">
        <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/client_eptonic.png') }}"/>
      </div>
      <div class="col-in-2 center-block">
        <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/client_adpototo.png') }}"/>
      </div>
    </div>
  </div>
</section>

<section class="section-index-partner bg-gray">
  <div class="container">
    <div class="text-center">
      <h1>Strategic Partners</h1>
      <p>
        Offerslook works with leading digital agencies,
        platforms and tech partners, <br/>extending the power of Offerslook
        to more tools/platforms your team uses to manage a more efficient network.
      </p>
    </div>
    <div class="section-index-partner-bottom row">
      <div class="col-in-2 center-block" >
        <a href="https://clickky.biz/" target="_blank">
          <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/partner/clickky.png') }}" />
        </a>
      </div>
      <div class="col-in-2 center-block" >
        <a href="https://www.kochava.com/" target="_blank">
          <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/partner/kochava.png') }}"/>
        </a>
      </div>
      <div class="col-in-2 center-block" >
        <a href="http://en.yeahmobi.com/" target="_blank">
          <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/partner/mobi.png') }}"/>
        </a>
      </div>
      <div class="col-in-2 center-block" >
        <a href="https://www.appsflyer.com/" target="_blank">
          <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/partner/flyer.png') }}"/>
        </a>
      </div>
      <div class="col-in-2 center-block" >
        <a href="https://apsalar.com/" target="_blank">
          <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/index/partner/apsalar.png') }}"/>
        </a>
      </div>

    </div>
  </div>
</section>

<section class="index-section-signup ">
  <div class="container">
    <div class="index-trail">
      <h1 class="text-center">Sign up for a free trial today</h1>
      <p class="text-center">
        Get 1 month free trial with unlimited clicks.
      </p>

      <div class="btn-box text-center">
        <a href="pricing.html" class="btn btn-outline btn-border-2x" style="margin-top: 10px; color: #fff;background-color: #749e40;border-color: #749e40;">Get Started Now</a>
      </div>
    </div>
  </div>
</section>
@endsection



