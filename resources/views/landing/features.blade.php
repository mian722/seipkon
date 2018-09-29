@extends('layouts.landing')
         
         @section('content') 
         <style type="text/css">
            .features-nav { background: rgb(255, 255, 255) !important; border-top: none !important; border-right: none !important; border-bottom: 1px solid rgb(231, 231, 231) !important; border-left: none !important; border-image: initial !important;     color: #333 !important; }
            .navbar-a-color { color: #333 !important; }
         </style>
<div class="jumbotron feature-jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1>Everything you need to build an ad network more sustainable</h1>
        <p><a class="btn btn-outline btn-border-2x" href="pricing.html">Start Free Trial</a></p>
      </div>
    </div>
  </div>
</div>

<section class="section-feature-tabs">
  <div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-feature nav-justified" role="tablist">
      <li role="presentation" class="active">
        <a href="#offers-setting" aria-controls="offers-setting" role="tab" data-toggle="tab">
          Offers Management
        </a>
      </li>
      <li role="presentation">
        <a href="#fraud" aria-controls="fraud" role="tab" data-toggle="tab">
          Counter-Fraud & Alert
        </a>
      </li>
      <li role="presentation">
        <a href="#affiliate" aria-controls="affiliate" role="tab" data-toggle="tab">
          Affiliate Management
        </a>
      </li>
      <li role="presentation">
        <a href="#billing" aria-controls="billing" role="tab" data-toggle="tab">
          Billing & Invoice
        </a>
      </li>
      <li role="presentation">
        <a href="#report" aria-controls="report" role="tab" data-toggle="tab">
          Reporting
        </a>
      </li>
      <li role="presentation">
        <a href="#network" aria-controls="network" role="tab" data-toggle="tab">
          Network Management
        </a>
      </li>
      <li role="presentation">
        <a href="#scalability" aria-controls="scalability" role="tab" data-toggle="tab">
          Scalability & Reliability
        </a>
      </li>
    </ul>
  </div>
</section>

<section class="section-feature-tabs-panes bg-gray">
  <div class="container">
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active fade_in" id="offers-setting">

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Offers-Management_icon01.png') }}" />
              <div class="item-text">
                <span class="title">Caps Management</span>
                Manage caps based on conversions, revenue and payouts,
                by offers or by affiliates. You can also set private caps and assign to specific affiliates.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Offers-Management_icon02.png') }}" />
              <div class="item-text">
                <span class="title">Offer Access</span>
                Authorize affiliates' access to offers by setting status - Private, Public or Require Approval.
                You have full control on matching offers to the right affiliates.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Offers-Management_icon03.png') }}" />
              <div class="item-text">
                <span class="title">Offer Category</span>
                Customize categories for offers to enable Advertiser Managers to manage
                and view performance by categories, and enable Affiliate Managers to match offers easily.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Offers-Management_icon04.png') }}" />
              <div class="item-text">
                <span class="title">Intelligent Redirect</span>
                3 levels of redirections to ensure every click matches an offer at 99% chance.
                Reduce waste of traffic and increase ROI with affiliates.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Offers-Management_icon05.png') }}" />
              <div class="item-text">
                <span class="title">Targeting Control</span>
                Accurately find the right users by multi-layered targeting settings,
                from targeting geographies to specific devices and operating systems.
                Campaigns are optimized more effectively.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Offers-Management_icon06.png') }}" />
              <div class="item-text">
                <span class="title">Multiple Payout Models</span>
                Multiple payout models including CPI, CPA, CPS & CPC.
                Easily select the right performance measurement and deploy multiple business models on one platform.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade fade_in" id="fraud">

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Counter-Fraud%26Alert_icon01.png') }}" />
              <div class="item-text">
                <span class="title">Advanced Fraud Protection</span>
                FraudScore has shown its best in fraud detection which enables you to increase payouts for real traffic and stay ahead of the competition.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Counter-Fraud%26Alert_icon02.png') }}" />
              <div class="item-text">
                <span class="title">Alert & Notification</span>
                Automatically & Instantly alert affiliates for critical status changes.
                Alerts can be customized and only those in need can be turned on.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Counter-Fraud%26Alert_icon03.png') }}" />
              <div class="item-text">
                <span class="title">Block Unwanted Partners</span>
                Save time in managing offended affiliates.
                Freeze their account or block them with just one click.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Counter-Fraud%26Alert_icon04.png') }}" />
              <div class="item-text">
                <span class="title">Advertiser Security Code</span>
                Authenticate each conversion with a unique security code.
                It enforces all conversions to require security codes to be passed for authentication,
                preventing affiliates from affiliates trying to force-fire any postback URLs.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade fade_in" id="affiliate">

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Affiliate_Management_icon01.png') }}" />
              <div class="item-text">
                <span class="title">Affiliate Tagging</span>
                Manage affiliates more efficiently by tagging.
                Customize tags on thousands of affiliates, matching affiliates and offers a lot easier.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Affiliate_Management_icon02.png') }}" />
              <div class="item-text">
                <span class="title">Affiliate SignUp</span>
                Facilitate affiliate SignUp process by using our hosted and easy-to-use SignUp form.
                Customize questions for deeper affiliate due intelligence.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Affiliate_Management_icon03.png') }}" />
              <div class="item-text">
                <span class="title">Affiliate API</span>
                Empower your affiliates to integrate their software and automate their own workflow through their own API.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade fade_in" id="billing">

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Billing%26Invoice_icon01.png') }}" />
              <div class="item-text">
                <span class="title">Billing Facilitation</span>
                Store billing information of advertisers and affiliates in the platform,
                and save the trouble of losing key financial fact.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Billing%26Invoice_icon02.png') }}" />
              <div class="item-text">
                <span class="title">Auto-Generate Invoices</span>
                Easily generate invoices manually or even automatically with just a few clicks' setting.
                Store financial information conveniently.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Billing%26Invoice_icon03.png') }}" />
              <div class="item-text">
                <span class="title">Invoice Adjustment</span>
                Easily adjust invoices and billings to reflect final accounting number after reconciliation,
                deduction and write-off.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade fade_in" id="report">

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Reporting_icon01.png') }}" />
              <div class="item-text">
                <span class="title">All-in-One Dashboard</span>
                Monitor all marketing data and business metrics in one place.
                Save time reviewing health of your business and make better decisions.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Reporting_icon02.png') }}" />
              <div class="item-text">
                <span class="title">Real-Time Data</span>
                Make instant decisions with real-time reporting system.
                Evaluate performance of every offer and affiliate by length of minute.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Reporting_icon03.png') }}" />
              <div class="item-text">
                <span class="title">Multi-Functioned Reports</span>
                Access to a variety of reports to solve all business needs --
                general report, conversion report, test report, server log, and fraud report.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Reporting_icon04.png') }}" />
              <div class="item-text">
                <span class="title">Custom Reports</span>
                Easily customize reports with frequently-used data points,
                and access your routine reports with just one click.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Reporting_icon05.png') }}" />
              <div class="item-text">
                <span class="title">CSV Analysis</span>
                Export all the data to CSV files and  run deeper analysis for better insight.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade fade_in" id="network">

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Network_Management_icon01.png') }}" />
              <div class="item-text">
                <span class="title">Brand Customization</span>
                Customize your platform with white-label interfaces.
                Tailor-make the platform with your own brand name, logo, favicon, colors, etc.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Network_Management_icon02.png') }}" />
              <div class="item-text">
                <span class="title">Custom Domain</span>
                While your network is hosted by Offerslook, you own the name.
                Let it be your own domain and let partners recognize you immediately.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Network_Management_icon03.png') }}" />
              <div class="item-text">
                <span class="title">Custom Email Servers</span>
                Set customized email servers, and communicate with your advertisers,
                affiliates and employees from your own email servers.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Network_Management_icon04.png') }}" />
              <div class="item-text">
                <span class="title">Flexible Team Management</span>
                Manage your organization more flexibly.
                Give your team members customized access to different functions of the platform.
                Have more than 2 levels of team structures.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Network_Management_icon01.png') }}" />
              <div class="item-text">
                <span class="title">Domain Masking</span>
                Convert offer URLs and other creative code with your tracking domain so as to protect the origin from affiliates.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div role="tabpanel" class="tab-pane fade fade_in" id="scalability">

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="static/images/feature/Scalability%26Reliability_icon01.png') }}" />
              <div class="item-text">
                <span class="title">Robust API</span>
                Seamlessly integrate your own software and applications to run on top of our platform.
                Empower your team and affiliates to automate workflow through API.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Scalability%26Reliability_icon02.png') }}" />
              <div class="item-text">
                <span class="title">Scalable</span>
                Global infrastructure and geographically distributed content delivery networks for high performance
                and flexibility for teams of all sizes.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Scalability%26Reliability_icon03.png') }}" />
              <div class="item-text">
                <span class="title">Secure</span>
                SSL encrypted servers with 99.9% availability, redundant backups and DDoS mitigation to take care of your data.
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Scalability%26Reliability_icon04.png') }}" />
              <div class="item-text">
                <span class="title">Stable</span>
                99.9% uptime and strive for lower risks. Software upgrades,
                maintenance and bug fixes every week to keep you out of trouble.
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="feature-item">
              <img src="{{ asset('public/assets/css/static/images/feature/Scalability%26Reliability_icon05.png') }}" />
              <div class="item-text">
                <span class="title">Compatible</span>
                Integrated with most attribution analytics tools, large networks and advertisers.
                Super easy and compatible!
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


@endsection
