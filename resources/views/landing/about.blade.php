@extends('layouts.landing')
         
         @section('content') 
         <style type="text/css">
            .features-nav { background: rgb(255, 255, 255) !important; border-top: none !important; border-right: none !important; border-bottom: 1px solid rgb(231, 231, 231) !important; border-left: none !important; border-image: initial !important;     color: #333 !important; }
            .navbar-a-color { color: #333 !important; }
         </style>
<div class="about-banner jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-9">
                <h1>About Offerslook</h1>
                <p>Offerslook drives performance marketing to a new level</p>
            </div>
        </div>
    </div>
</div>

<section class="section-about-weare">
    <div class="container text-center">
         <h1>Who We Are</h1>
        <hr/>
        <p>A one-stop solution to build your own performance advertising network</p>
        <p>A white-label platform(with your brand) to track,measure & analyze your performance marketing campaigns</p>
        <p>A smart solution to make network management an easier job</p>
        <p>A modernly designed platform with great visualization into your data to get quicker & deeper analysis</p>
        <p>An ever cost-effective solution to bring down high technology cost for ad networks</p>
    </div>
</section>

<section class="bg-gray section-about-wedo">
    <div class="container ">
        <div class="text-center">
            <h1>What We Do</h1>
            <hr />
        </div>
      <div class="wedo-content">
        <img src="{{ asset('public/assets/css/static/images/about/about_pic.jpg') }}"  class="img-responsive pull-right"  alt=""/>
        <p>
          Offerslook has emerged as the new standard of fine performance marketing software
          because it has set a new example for providing a great product to revolutionize from product design to cost model.
          We realized the pains of advertising networks to grow more sustainable,
          and helped hundreds of them to enormously cut down cost,
          improve effciency and boost earning capability.
        </p>
        <p>
          Mobile advertising will grow exponentially, and to catch up with the dynamic marketing needs,
          advertising networks will need better infrastructure to power the growth.
          Offerslook will continue to help advertising networks evolve with the best technology.
        </p>
      </div>

    </div>
</section>
<section class="section-about-summary">
     <div class="container text-center">
         <h1>Offerslook by the Numbers</h1>
         <div class="row">
             <div class="col-sm-3 col-xs-12 no-padding about-data">
                 <h2 class="text-center">1000+</h2>
                 <h3 class="text-center">AD networks using</h3>
             </div>
             <div class="col-sm-3 col-xs-12 no-padding about-data">
                 <h2 class="text-center">2</h2>
                 <h3 class="text-center">Years since founded</h3>
             </div>
             <div class="col-sm-3 col-xs-12 no-padding about-data">
                 <h2 class="text-center">70%+</h2>
                 <h3 class="text-center">Saved cost for clients</h3>
             </div>
             <div class="col-sm-3 col-xs-12 no-padding about-data">
                 <h2 class="text-center">99.97%</h2>
                 <h3 class="text-center">System uptime</h3>
             </div>
         </div>
       <div class="about-maps">
         <img class="img-responsive center-block" src="{{ asset('public/assets/css/static/images/about/about_pic2.jpg') }}"  />
       </div>


       <div class="follow-box">
         <div class="follow-line">
           <span class="follow-text">Follow Us</span>
           <hr>
         </div>
         <div class="follow-social">
           <ul class="list-inline social-links-large">
             <li>
               <a class="social-facebook" target="_blank" href="https://www.facebook.com/offerslooksaas/"></a>
             </li>
             <li>
               <a class="social-twitter" target="_blank" href="https://twitter.com/OfferslookSaaS"></a>
             </li>
             <li>
               <a class="social-linkedin" target="_blank" href="https://www.linkedin.com/company/offerslook"></a>
             </li>
             <li>
               <a class="social-youtube" target="_blank" href="https://www.youtube.com/channel/UCoV3ovcRvTfwRzi0AFs_jkg"></a>
             </li>
           </ul>
         </div>
       </div>

         <p class="about-contact">
             <a class="btn btn-outline btn-border-2x"  href="contact.html" target="_blank">Contact us</a>
         </p>
     </div>
</section>

@endsection