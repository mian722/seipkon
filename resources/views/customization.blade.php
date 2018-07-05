@extends('layouts.header')
@section('content')
<!-- Right Side Content Start -->
<section id="content" class="seipkon-content-wrapper">
   <div class="page-content">
      <div class="container-fluid">
         
         <!-- Breadcromb Row Start -->
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-area">
                  <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <div class="seipkon-breadcromb-left">
                           <h3>Customization</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="seipkon-breadcromb-right">
                           <ul>
                              <li><a href="index-2.html">home</a></li>
                              <li>forms</li>
                              <li>form layouts</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Breadcromb Row -->
         
         <!-- Tabs Row Start -->
         <div class="row">
            <div class="col-md-12">
               <div class="page-box">
                  <div class="tabs-example">
                     <div class="tabs-box-example horizontal-tab-example">
                        <ul class="nav nav-tabs" id="service_pro" role="tablist">
                           <li class="active" role="appearance"><a href="#appearance" role="tab" data-toggle="tab">Appearance</a></li>
                           <li role="preferences"><a href="#preferences" role="tab" data-toggle="tab">Preferences</a></li>
                           <li role="smtp"><a href="#smtp" role="tab" data-toggle="tab">SMTP</a></li>
                           <li  role="message"><a href="#message" role="tab" data-toggle="tab">Message</a>
                        </li>
                        <li role="signup-questions"><a href="#signupquestions" role="tab" data-toggle="tab">Signup Questions</a>
                     </li>
                     <li role="domain"><a href="#domain" role="tab" data-toggle="tab">Domain</a>
                  </li>
                  <li role="api"><a href="#api" role="tab" data-toggle="tab">API</a>
               </li>
               <li role="Terms&Conditions"><a href="#TermsConditions" role="tab" data-toggle="tab">Terms&Conditions</a>
            </li>
         </ul>
         <div id="seipkkon_tab_content" class="tab-content">
            <div id="appearance" class="tab-pane fade in active">
               <div class="box-body">
                  <div class="row">
                     <section class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                           <label class="col-sm-4 control-label">
                              Network Name
                           <i class="fa fa-question-circle" title="" data-toggle="tooltip" data-html="true" data-original-title="Allows you to set Network Name which will appear in system notification and email/message signature."></i>                    </label>
                           <div class="col-sm-6">
                              <div class="without-form-group field-appearance-network_name required">
                                 <input type="text" id="appearance-network_name" class="form-control" name="Appearance[network_name]" value="amir" maxlength="80" data="amir" aria-required="true">
                                 <p class="help-block help-block-error"></p>
                              </div>                    </div>
                              <div class="col-sm-2">
                              <button type="submit" id="save-name" class="btn btn-primary" style="display:none">Save</button>                    </div>
                           </div>
                        </section>
                        <section class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">
                                    Network Logo
                                    <i class="fa fa-question-circle" title="Allows you to add logo of your network, which will be visible on the upper left corner of your account interface and of your affiliates’ interface." data-toggle="tooltip" data-html="true"></i>
                                 </label>
                                 <div class="col-sm-8">
                                    
                                    <div class="product-upload btn btn-info">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          Upload Another Image
                                       </p>
                                       <input type="file" >
                                    </div>
                                    <p style="color:#ccc">Logo size: 200*40px; Format: jpg, png</p>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                     <div class="row">
                        <section class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">
                                    Favicon
                                 <i class="fa fa-question-circle" title="Adds a favicon that will appear on the browser tab." data-toggle="tooltip" data-html="true"></i>                    </label>
                                 <div class="col-sm-8">
                                    <div class="product-upload btn btn-info">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          Upload Another Image
                                       </p>
                                       <input type="file" >
                                    </div>
                                    <p style="color:#ccc">Icon size: 16*16px / 32*32px; Format: icon, png</p>
                                 </div>
                              </div>
                           </div>
                        </section>
                        <section class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">
                                    Login Logo
                                 <i class="fa fa-question-circle" title="" data-toggle="tooltip" data-html="true" data-original-title="Adds a logo that will be shown on the page of your network’s log-in portal."></i>                    </label>
                                 <div class="col-sm-8">
                                    
                                    <div class="product-upload btn btn-info">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          Upload Another Image
                                       </p>
                                       <input type="file" >
                                    </div>
                                    
                                    <p style="color:#ccc">Logo size: 200*40px; Format: jpg, png</p>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                     <div class="row">
                        <section class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-4 control-label">
                                    Login Background Color
                                 </label>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <div id="cp3" class="input-group colorpicker-component" title="Using horizontal option">
                                          <input type="text" class="form-control"/>
                                          <span class="input-group-addon"><i></i></span>
                                       </div>
                                    </div>
                                    <p style="color:#ccc">Set background color of login page, registration page and password reset page.</p>
                                 </div>
                                 <div class="col-sm-2">
                                 <button type="submit" id="save-lb" class="btn btn-primary" style="display:none">Save</button>                    </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
               <div id="preferences" class="tab-pane fade in">
                  <form>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-offer_status">
                              <label class="control-label col-md-5" for="systemconfig-offer_status">Offer Status <i class="fa fa-question-circle" title="In creating a new Offer, set the default offer status." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-offer_status" class="form-control" name="SystemConfig[offer_status]">
                                    <option value="1">Active</option>
                                    <option value="2">Paused</option>
                                    <option value="3" selected="">Pending</option>
                                    <option value="4">Deleted</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-caps_percent">
                              <label class="control-label col-md-5" for="systemconfig-caps_percent">Offer Caps Approaching <i class="fa fa-question-circle" title="Notifications and emails will be automatically sent when system detects offer caps to reach the alert value." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-caps_percent" class="form-control" name="SystemConfig[caps_percent]">
                                    <option value="0.9">90%</option>
                                    <option value="0.8">80%</option>
                                    <option value="0.7">70%</option>
                                    <option value="0.6">60%</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-conversion_due">
                              <label class="control-label col-md-5" for="systemconfig-conversion_due">Conversion Lifespan <i class="fa fa-question-circle" title="Set the valid lifespan of conversion, those conversions exceeding lifespan will be rejected." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-conversion_due" class="form-control" name="SystemConfig[conversion_due]">
                                    <option value="60">60 days</option>
                                    <option value="30" selected="">30 days</option>
                                    <option value="14">14 days</option>
                                    <option value="7">7 days</option>
                                    <option value="3">3 days</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-conversion_protocol">
                              <label class="control-label col-md-5" for="systemconfig-conversion_protocol">Enforce Conversion Protocol <i class="fa fa-question-circle" title="Disable multiple conversion tracking types per offer and only allow conversions that match the offer’s type of conversion tracking. All other conversions will be set to rejected." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-conversion_protocol" class="form-control" name="SystemConfig[conversion_protocol]">
                                    <option value="1" selected="">Enabled</option>
                                    <option value="0">Disabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-click_lifespan">
                              <label class="control-label col-md-5" for="systemconfig-click_lifespan">Click Cookie Lifespan <i class="fa fa-question-circle" title="If pixel fires after the click cookie has exceeded lifespan, offerslook will not track a conversion." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-click_lifespan" class="form-control" name="SystemConfig[click_lifespan]">
                                    <option value="1">1 days</option>
                                    <option value="7">7 days</option>
                                    <option value="30" selected="">30 days</option>
                                    <option value="60">60 days</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-offer_payout_tiers">
                              <label class="control-label col-md-5" for="systemconfig-offer_payout_tiers">Affiliate Payout Tiers <i class="fa fa-question-circle" title="Switch of Affiliate Payout Tiers features" data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-offer_payout_tiers" class="form-control" name="SystemConfig[offer_payout_tiers]">
                                    <option value="0" selected="">Disabled</option>
                                    <option value="1">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-system_currency required">
                              <label class="control-label col-md-5" for="systemconfig-system_currency">System Currency <i class="fa fa-question-circle" title="Set the system currency symbol, after setting a currency symbol, the system will display the amount of data related to the current setting currency symbol." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-offer_payout_tiers" class="form-control" name="SystemConfig[offer_payout_tiers]">
                                    <option value="0" selected="">Disabled</option>
                                    <option value="1">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-offer_approval">
                              <label class="control-label col-md-5" for="systemconfig-offer_approval">Offer Approval Type <i class="fa fa-question-circle" title="In creating a new Offer, set this Offer default application type." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-offer_approval" class="form-control" name="SystemConfig[offer_approval]">
                                    <option value="1" selected="">Require Approval</option>
                                    <option value="2">Public</option>
                                    <option value="3">Private</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-offerglobalconfig-enforce_redirect">
                              <label class="control-label col-md-5" for="offerglobalconfig-enforce_redirect">Enforce Global Redirect <i class="fa fa-question-circle" title="Enable Global Redirect for all offers, each rejected clicks will be redirected to global url/offer which you aim for global redirect." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="offerglobalconfig-enforce_redirect" class="form-control" name="OfferGlobalConfig[enforce_redirect]">
                                    <option value="0">Disabled</option>
                                    <option value="1">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-hide_referral">
                              <label class="control-label col-md-5" for="systemconfig-hide_referral">Hide Referrals <i class="fa fa-question-circle" title="Enabling this setting removes the referral URL from affiliates' traffic before sending it to the advertisers offer." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-hide_referral" class="form-control" name="SystemConfig[hide_referral]">
                                    <option value="0" selected="">Disabled</option>
                                    <option value="1">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-offerglobalconfig-type">
                              <label class="control-label col-md-5" for="offerglobalconfig-type">Global Redirect <i class="fa fa-question-circle" title="Set up a global redirect offer for a certain offer, when the redirect action cannot find a relevant offer link for a certain offer, it will redirect to the global redirect offer." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="offerglobalconfig-type" class="form-control" name="OfferGlobalConfig[type]">
                                    <option value="1">Offer URL</option>
                                    <option value="2">External URL</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-offerglobalconfig-url">
                              <div class="col-sm-10 col-sm-offset-0">
                                 <input type="text" id="offerglobalconfig-url" class="form-control" name="OfferGlobalConfig[url]" maxlength="1024">
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-postback_approval">
                              <label class="control-label col-md-5" for="systemconfig-postback_approval">Postback Approval <i class="fa fa-question-circle" title="Set as require approval, the Affiliate postback requires permission to be active; Set as none,  the Affiliate postback does not need permission to be active." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-postback_approval" class="form-control" name="SystemConfig[postback_approval]">
                                    <option value="0">None</option>
                                    <option value="1" selected="">Require Approval</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-affiliate_tier">
                              <label class="control-label col-md-5" for="systemconfig-affiliate_tier">Affiliate Tier on Affiliate Panel <i class="fa fa-question-circle" title="Setting whether affiliate tier display in the affiliate panel." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-affiliate_tier" class="form-control" name="SystemConfig[affiliate_tier]">
                                    <option value="0" selected="">Disabled</option>
                                    <option value="1">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-affiliate_referer">
                              <label class="control-label col-md-5" for="systemconfig-affiliate_referer">Affiliate Referrer Commission</label>
                              <div class="col-md-5">
                                 <select id="systemconfig-affiliate_referer" class="form-control" name="SystemConfig[affiliate_referer]">
                                    <option value="0" selected="">Disabled</option>
                                    <option value="1">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-reject_caps_reached">
                              <label class="control-label col-md-5" for="systemconfig-reject_caps_reached">Rejecting Cap Exceeded</label>
                              <div class="col-md-5">
                                 <select id="systemconfig-reject_caps_reached" class="form-control" name="SystemConfig[reject_caps_reached]">
                                    <option value="0" selected="">Disabled</option>
                                    <option value="1">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="form-group field-systemconfig-send_redirect_conversion">
                              <label class="control-label col-md-5" for="systemconfig-send_redirect_conversion">Redirection Conversion <i class="fa fa-question-circle" title="Select enabled to approve affiliate the redirection conversion." data-toggle="tooltip" data-html="true"></i></label>
                              <div class="col-md-5">
                                 <select id="systemconfig-send_redirect_conversion" class="form-control" name="SystemConfig[send_redirect_conversion]">
                                    <option value="0">Disabled</option>
                                    <option value="1" selected="">Enabled</option>
                                 </select>
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" style="margin-top: 16px">
                        <div class="col-sm-offset-2 col-sm-2">
                           <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div id="smtp" class="tab-pane fade in">
                  <form >
                     <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group field-smtpconfig-smtp_server required">
                              <label class="control-label col-sm-3" for="smtpconfig-smtp_server">SMTP Server</label>
                              <div class="col-sm-9">
                                 <input type="text" id="smtpconfig-smtp_server" class="form-control" name="SmtpConfig[smtp_server]" maxlength="255" aria-required="true">
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="row">
                              <div class="col-sm-9">
                                 <div class="form-group field-smtpconfig-security_type required">
                                    <label class="control-label col-sm-4" for="smtpconfig-security_type">Security Type</label>
                                    <div class="col-sm-7">
                                       <select id="smtpconfig-security_type" class="form-control" name="SmtpConfig[security_type]" aria-required="true">
                                          <option value="1">None</option>
                                          <option value="2">SSL/TLS</option>
                                          <option value="4">SSL/TLS(Accept all Certificates)</option>
                                          <option value="3">STARTTLS</option>
                                          <option value="5">STARTTLS(Accept all Certificates)</option>
                                       </select>
                                       <div class="help-block help-block-error "></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="form-group field-smtpconfig-port required">
                                    <label class="control-label col-sm-4" for="smtpconfig-port">Port</label>
                                    <div class="col-sm-8">
                                       <input type="text" id="smtpconfig-port" class="form-control" name="SmtpConfig[port]" value="25" aria-required="true">
                                       <div class="help-block help-block-error "></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group field-smtpconfig-username required has-success">
                              <label class="control-label col-sm-3" for="smtpconfig-username">SMTP Username</label>
                              <div class="col-sm-9">
                                 <input type="text" id="smtpconfig-username" class="form-control" name="SmtpConfig[username]" maxlength="255" aria-required="true" aria-invalid="false">
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group field-smtpconfig-password required has-success">
                              <label class="control-label col-sm-3" for="smtpconfig-password">Password</label>
                              <div class="col-sm-9">
                                 <input type="password" id="smtpconfig-password" class="form-control" name="SmtpConfig[password]" maxlength="255" aria-required="true" aria-invalid="false">
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group field-smtpconfig-nickname required">
                              <label class="control-label col-sm-3" for="smtpconfig-nickname">From Email Name<i data-original-title="Email name will be shown in the mail." data-toggle="tooltip" class="fa fa-question-circle"></i></label>
                              <div class="col-sm-9">
                                 <input type="text" id="smtpconfig-nickname" class="form-control" name="SmtpConfig[nickname]" maxlength="255" aria-required="true">
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group field-smtpconfig-email required">
                              <label class="control-label col-sm-3" for="smtpconfig-email">Email<i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="Email address will be shown in the mail."></i></label>
                              <div class="col-sm-9">
                                 <input type="text" id="smtpconfig-email" class="form-control" name="SmtpConfig[email]" maxlength="255" aria-required="true">
                                 <div class="help-block help-block-error "></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div style="height: 20px;border-top: 1px solid #D2D6DE"></div>
                     <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="form-horizontal">
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">
                                    Send Test Mail To
                                 </label>
                                 <div class="col-sm-7">
                                    <div class="w field-smtpconfig-testmail">
                                       <div class="col-sm-12 no-padding col-sm-offset-0">
                                          <input type="text" id="smtpconfig-testmail" class="form-control" name="SmtpConfig[testMail]">
                                          <div class="help-block help-block-error "></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-2">
                                    <span class="btn btn-success" id="send-test">Send Mail</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="test-info"></div>
                     <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                           <div class="row">
                              <div class="col-sm-3"></div>
                              <div class="col-sm-6">
                                 <button type="submit" id="save-smtp" class="btn btn-primary">Save</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div id="message" class="tab-pane fade in">
                        <div class="page-box">
                           <div class="accordian-example">
                              <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingOne">
                                       <h4 class="panel-title">
                                          <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseOne" aria-expanded="true" aria-controls="list_table_collapseOne">
                                          Message Of Affiliate Information 
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="list_table_headingOne">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered">
                                              <tr>
                                                  <td rowspan="2">Event</td>
                                                  <td colspan="3">Notification</td>
                                              </tr>
                                              <tr>
                                                  <td>Affiliate Manager</td>
                                                  <td>Administrator</td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Sign Up</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Sign Up Approval</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Sign Up Rejection</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingTwo" >
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseTwo" aria-expanded="false" aria-controls="list_table_collapseTwo">
                                          Message Of Affiliate Postback Information
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="list_table_headingTwo">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered">
                                              <tr>
                                                  <td rowspan="2">Event</td>
                                                  <td colspan="2">Email</td>
                                                  <td colspan="3">Notification</td>
                                              </tr>
                                              <tr>
                                                  <td>Affiliate</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Affiliate</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Administrator</td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Sign Up</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Sign Up Approval</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Sign Up Rejection</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingThree">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseThree" aria-expanded="false" aria-controls="list_table_collapseThree">
                                          Message Of Advertiser Information
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="list_table_headingThree">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered">
                                              <tr>
                                                  <td rowspan="2">Event</td>
                                                  <td colspan="3">Notification</td>
                                              </tr>
                                              <tr>
                                                  <td>Advertiser Manager</td>
                                                  <td>Administrator</td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Advertiser Sign Up</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Advertiser Sign Up Approval</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Advertiser Sign Up Rejection</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingFour">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#list_table_headingFour" aria-expanded="false" aria-controls="list_table_headingFour">
                                          Message Of Offer Application Information
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="list_table_headingThree">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered">
                                              <tr>
                                                  <td rowspan="2">Event</td>
                                                  <td colspan="2">Email</td>
                                                  <td colspan="3">Notification</td>
                                              </tr>
                                              <tr>
                                                  <td>Affiliate</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Administrator</td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Offer Application</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Offer Application Approval</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Offer Application Denied</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingTwo" >
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseTwo" aria-expanded="false" aria-controls="list_table_collapseTwo">
                                          Message Of Affiliate Tier Information
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="list_table_headingTwo">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered">
                                              <tr>
                                                  <td rowspan="2">Event</td>
                                                  <td colspan="2">Email</td>
                                                  <td colspan="3">Notification</td>
                                              </tr>
                                              <tr>
                                                  <td>Affiliate</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Affiliate</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Administrator</td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Tier Changed</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Volume Based Tiers Changed</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingTwo" >
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseTwo" aria-expanded="false" aria-controls="list_table_collapseTwo">
                                          Message Of Offer Information 
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="list_table_headingTwo">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered">
                                              <tr>
                                                  <td rowspan="2">Event</td>
                                                  <td colspan="2">Email</td>
                                                  <td colspan="5">Notification</td>
                                              </tr>
                                              <tr>
                                                  <td>Affiliate</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Affiliate</td>
                                                  <td>Advertiser</td>
                                                  <td>Affiliate Manager</td>
                                                  <td>Advertiser Manager</td>
                                                  <td>Administrator</td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Offer Payout Changed</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Offer Status Changed</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Offer Expiration</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Total Affiliate Caps Approaching</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Total Affiliate Caps Reached</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Caps Approaching</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Affiliate Caps Reached</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Advertiser Caps Approaching</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td rowspan="2">Advertiser Caps Reached</td>
                                                  <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                                <td rowspan="2"><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                              <tr>
                                                  <td><div class="form-group">
                                                   <div class="toggle toggle-modern"></div>
                                                </div></td>
                                              </tr>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
               </div>
               <div id="signupquestions" class="tab-pane fade in">
                  Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque exLorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi.
               </div>
               <div id="domain" class="tab-pane fade in">
                  Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque exLorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi.
               </div>
               <div id="api" class="tab-pane fade in">
                  Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque exLorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi.
               </div>
               <div id="TermsConditions" class="tab-pane fade in">
                  Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque exLorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi.
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!-- End Tabs Row -->
</div>
</div>
<!-- Footer Area Start -->
<footer class="seipkon-footer-area">
<p>Seipkon - Bootstrap Admin Template by <a href="#">Themescare</a></p>
</footer>
<!-- End Footer Area -->
</section>
<!-- End Right Side Content -->
@endsection