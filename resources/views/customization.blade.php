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
                     <li role="domain"><a href="#domain" role="tab" data-toggle="tab">Domain</a>
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
                                          <td rowspan="2">Affiliate Postback Created</td>
                                          <td rowspan="2"></td>
                                          <td rowspan="2"><div class="form-group">
                                             <div class="toggle toggle-modern"></div>
                                          </div></td>
                                          <td rowspan="2"></td>
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
                                          <td rowspan="2">Affiliate Postback Approved</td>
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
                                          <td rowspan="2">Affiliate Postback Rejected</td>
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
                                          <td rowspan="2"></td>
                                          <td rowspan="2"><div class="form-group">
                                             <div class="toggle toggle-modern"></div>
                                          </div></td>
                                          <td rowspan="2"></td>
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
                                          <td rowspan="2"></td>
                                       </tr>
                                       <tr>
                                          <td><div class="form-group">
                                             <div class="toggle toggle-modern"></div>
                                          </div></td>
                                       </tr>
                                       <tr>
                                          <td rowspan="2">Advertiser Caps Approaching</td>
                                          <td rowspan="2"></td>
                                          <td rowspan="2"></td>
                                          <td rowspan="2"></td>
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
                                          <td rowspan="2"></td>
                                          <td rowspan="2"></td>
                                          <td rowspan="2"></td>
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
            <div id="domain" class="tab-pane fade in">
               <form id="app-domain-setting" action="" method="post" data-pjax="">
                     <div class="col-sm-12">
                        <p><b>Customize Application Domain</b></p>
                        <p>This allows you to host your affiliate network on a custom domain.
                           Example: affiliates.yourcompany.com.
                           Before specifying a custom application domain to use, you will need to update the DNS for the domain.
                           Add the following CNAME:
                           <b>amir.offerslook.com</b>
                        </p>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-horizontal">
                           <div class="form-group">
                              <label class="control-label col-sm-4" style="width: auto;text-align: left">
                                 Application Domain
                              </label>
                              <div class="col-sm-6">
                                 <div class="form-group field-applicationdomainform-domain">
                                    <input type="text" id="applicationdomainform-domain" class="form-control" name="ApplicationDomainForm[domain]" value="" maxlength="255">
                                    <p class="help-block help-block-error"></p>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                              <button type="submit" class="btn btn-primary">Update</button>                    </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="row" style="margin-bottom: 5px;">
                     <div class="col-sm-12">
                        <p><b>Customize Tracking Domain</b></p>
                        <p>
                           Before specifying a custom tracking domain to use, you will need to update the DNS for the domain.
                           Add the following CNAME:
                           <b>amir.offerstrack.net</b>
                        </p>
                        <p class="text-red">Note: If you want to set up SSL for a custom domain, please contact your account
                        manager.</p>
                     </div>
                     
                  </div>
                  <div class="row" style="border-top: 2px solid #333;">
                     <div class="col-md-12">
                        <div class="advance-table">
                           <h4><i class="fa fa-list"></i> Approved & Caps<a class="btn btn-success btn-xs pull-right" href="{{ url('affiliate-create') }}" >Create</a></h4><br />
                           <table width="100%" id="responsive_datatables_example" class="table display table-striped table-bordered responsive nowrap">
                              <thead>
                                 <tr>
                                    <th>NO.</th>
                                    <th>Tracking Domain</th>
                                    <th>SSL</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Default</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>offer test google #4</td>
                                    <td>None1</td>
                                    <td>not set</td>
                                    <td>not set</td>
                                    <td>
                                       <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                       <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                    </td>
                                    <td><span class="label label-success">default</span></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            <div id="TermsConditions" class="tab-pane fade in">
               <div class="col-md-12">
                        <div class="page-box">
                           <div class="tabs-example">
                              <h3>Terms and Conditions  <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
                              <div class="tabs-box-example vertical-tab-example">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <ul class="nav nav-tabs" id="service_pro2" role="tablist">
                                          <li class="active" role="presentation"><a href="#v_home" aria-controls="v_home" role="tab" data-toggle="tab">Advertiser</a>
                                          </li>
                                          <li role="presentation"><a href="#v_profile"  aria-controls="v_profile" role="tab" data-toggle="tab">Affiliate</a></li>
                                          
                                       </ul>
                                    </div>
                                    <div class="col-md-9">
                                       <div id="seipkkon_tab_content2" class="tab-content">
                                          <div id="v_home" class="tab-pane fade in active">
                                             <div class="col-md-12">
                                                   <p>
                                                      
                                                      <div id="page-editor">
                                                        <p><b>Terms &amp; Conditions</b></p><p>This amir Affiliate Network Advertiser Agreement ("Advertiser Agreement"), shall govern the relationship between amir Affiliate Network (" amir Affiliate Network" or "we") and the Advertiser ("Advertiser"), whereby Advertiser may obtain access to the Affiliate Network (" amir Affiliate Network") of registered third party affiliates ("Affiliates") and publishers ("Publishers"), and related technology and software (" amir Affiliate Network Ad Server"), to market customized advertisements and links provided by Advertiser and/or amir Affiliate Network ("Ads," as further defined below). The amir Affiliate Network, as well as the services provided by amir Affiliate Network in connection therewith ("Services"), are further described in the Insertion Order ("IO") attached hereto and incorporated herein by reference (the IO, together with this Advertiser Agreement, the "Agreement"). The terms of the IO shall supersede all contrary terms set forth in this Advertiser Agreement, unless expressly set forth to the contrary. In any instance where Advertiser is an agency entering into the Agreement on behalf of a client, any reference to "Advertiser" shall refer jointly to Advertiser as well as the applicable underlying client.</p><p><b>1.amir Affiliate Network/Services</b><b><br></b></p><p>&nbsp;&nbsp;&nbsp;&nbsp; Advertiser agrees to accept and pay for, and amir Affiliate Network agrees to provide, the Services identified and set forth in the Agreement. In connection with the Services, amir Affiliate Network shall undertake marketing campaigns with Advertiser (each an "Ad Campaign") whereby amir Affiliate Network will distribute Advertiser's proprietary advertising materials including, without limitation, banners, buttons, text-links, clicks, co-registrations, pop-ups, pop-unders, e-mail, graphic files and similar online media (collectively, "Advertiser Ads") and/or, where applicable, amir Affiliate Network Ads (as defined below) through the amir Affiliate Network either:<br>Upon the execution of the Agreement, Advertiser must register on the amir Affiliate Network website and create a unique, password-protected account ("Account"). Advertiser will be responsible for safeguarding and maintaining the confidentiality of its Account and associated password. Advertiser shall remain fully and solely responsibility for any and all actions taken under Advertiser's Account, whether authorized by Advertiser or not. Advertiser must immediately notify amir Affiliate Network of any unauthorized use of Advertiser's Account. Advertiser is responsible for keeping its Account information current, complete and accurate, and Advertiser acknowledges and agrees that amir Affiliate Network will have no responsibility or liability, directly or indirectly, for failure to deliver notices as a result of inaccurate Account information.<b><br></b></p><p><b>2.Account</b><br></p><p>&nbsp; Upon the execution of the Agreement, Advertiser must register on the amir Affiliate Network website and create a unique, password-protected account ("Account"). Advertiser will be responsible for safeguarding and maintaining the confidentiality of its Account and associated password. Advertiser shall remain fully and solely responsibility for any and all actions taken under Advertiser's Account, whether authorized by Advertiser or not. Advertiser must immediately notify amir Affiliate Network of any unauthorized use of Advertiser's Account. Advertiser is responsible for keeping its Account information current, complete and accurate, and Advertiser acknowledges and agrees that amir Affiliate Network will have no responsibility or liability, directly or indirectly, for failure to deliver notices as a result of inaccurate Account information.</p><p><b>3.Ads</b><br></p><p>Advertiser shall develop all aspects of the Advertiser Ads, other than where the parties agree that amir Affiliate Network shall assist in the development of Ads. The parties understand and agree that Advertiser is the sole owner of any and all intellectual property rights associated with any Advertiser Ads; other than those portions that amir Affiliate Network prepares on Advertiser's behalf (such portions hereinafter referred to as, the "amir Affiliate Network Ads" and together with the Advertiser Ads, the "Ads"). The parties understand and agree that amir Affiliate Network is the sole owner of any and all intellectual property rights associated with the amir Affiliate Network Ads, other than Advertiser's trademarks, logos, copyrights and other pre-existing Advertiser intellectual property incorporated in the amir Affiliate Network Ads. Under no circumstances shall amir Affiliate Network be authorized to use the Ads other than in connection with Advertiser's Ad Campaigns as set forth in the IO(s). Advertiser shall submit all Advertiser Ads to amir Affiliate Network for approval prior to the commencement of the subject Ad Campaign set forth in the applicable IO. Advertiser shall not alter, modify or otherwise change the Ads, or any other Ads-related feature, in any manner whatsoever, without obtaining amir Affiliate Network's prior express written consent, after the applicable Ad has been approved by amir Affiliate Network. Notwithstanding the foregoing, amir Affiliate Network shall have sole discretion with respect to the creation of the "subject" and "from" lines used in its e-mailing of any Ads. amir Affiliate Network reserves the right, in its sole discretion and without liability, to: change any of its Ad Guidelines at any time; and to reject, omit, exclude or terminate any Ad for any reason at any time, with subsequent notice to the Advertiser, whether or not such Ad was previously acknowledged, accepted or published by amir Affiliate Network. Such reasons for rejection, omission or exclusion of Ads include, but are not limited to, where amir Affiliate Network deems, in its sole discretion, that the Ads, including the applicable products and/or services promoted by such Ads ("Advertiser Products"), and any website linked to from such Ads, are in violation of any applicable law, rule, regulation or other judicial or administrative order or where the content thereof may tend to bring disparagement, ridicule or scorn upon amir Affiliate Network or any of its Publishers and/or Affiliates. Advertiser reserves the right to reject, omit, exclude, terminate or request a change to the Ads at any time and amir Affiliate Network shall, subject to the provisions set forth herein, comply with such request as soon as practical but in no event later than three (3) business days after its receipt thereof. Advertiser may cancel or suspend a CPM-based Ad Campaign, or an Ad associated with such a CPM-based Ad Campaign, effective within approximately twenty-four (24) business hours of amir Affiliate Network's receipt of Advertiser's cancellation notice, which Advertiser can deliver by logging into its Account and following the instructions on the applicable menu.</p><p><b>4.Placement</b><br></p><p>The positioning, placement, frequency and other editorial decisions related to Ads shall be made by amir Affiliate Network and/or its Affiliates and Publishers, as applicable, in their respective sole discretion. The applicable IO may set forth the particular place(s) where Ads may appear and/or be distributed. Advertiser agrees that in a case where no points of placement or distributions are set forth in the applicable IO or, in cases where "Run of Affiliate Network" or similar designation is specified in the applicable IO, the Ads may appear at any point of placement and/or distribution that amir Affiliate Network and/or its Affiliates and Publishers may determine, in their respective sole discretion.</p><p><b>5.Ad Codes</b><br></p><p>Unless otherwise stated in writing by amir Affiliate Network, each Ad used by amir Affiliate Network in connection with an Ad Campaign must include, in unaltered form, the special transaction tracking computer code provided by amir Affiliate Network ("Ad Codes"). Advertiser will not knowingly modify, circumvent, impair, disable or otherwise interfere with any Ad Codes and/or other technology and/or methodology required or made available by amir Affiliate Network to be used in connection with any and all Ads. In connection with CPA-based Ad Campaigns, Advertiser agrees to payamir Affiliate Network a default payment of Fifty Cents ($0.50) CPM on a net thirty (30) day basis in instances where conversion data cannot be supplied due to a failure of the Ad Codes and Advertiser's inability to provide such information, in the alternative. All determinations made by amir Affiliate Network in connection with the Ads, Actions and any associated fees invoiced to Advertiser shall be final and binding on Advertiser. Notwithstanding the foregoing, amir Affiliate Network's Services do not involve investigating or resolving any claim or dispute involving Advertiser and any Publisher, Affiliate or other third party.</p><p><b>6.E-mail Marketing</b><br></p><p>I.&nbsp;&nbsp; The following terms apply to all Ad Campaigns transmitted via e-mail by amir Affiliate Network's Affiliates on behalf of Advertiser. Any and all e-mail based Ads:</p><p>II.&nbsp;&nbsp; shall comply with all applicable federal and state laws including, but not limited to, the CAN-SPAM Act of 2003 ("CAN-SPAM") and any and all Federal Trade Commission implementing regulations;</p><p>III.&nbsp;&nbsp; must not infringe, misappropriate or otherwise violate any copyright, patent, trademark, trade secret or other similar intellectual property right, or otherwise violate or breach any duty toward, or rights of, any person or entity including, without limitation, rights of privacy and publicity; and</p><p>IV.&nbsp;&nbsp; must not result in any consumer fraud, product liability or breach of contract to which Advertiser is a party or cause injury to any third party. Advertiser shall cause a valid physical postal address for Advertiser to appear in each e-mail Ad, along with a functioning unsubscribe link (such unsubscribe link must remain active for at least thirty (30) days after e-mail delivery). amir Affiliate Network may make available, at a amir Affiliate Network-designated FTP site ("FTP Site"), a suppression list (and associated login information), updated on a regular basis, generated from e-mail Ad Campaigns transmitted by amir Affiliate Network's Affiliates for Advertiser under applicable IO(s). Advertiser shall upload its own list of suppressed e-mail addresses to the FTP Site, if one is provided by amir Affiliate Network, or send its suppressed e-mail addresses to amir Affiliate Network via e-mail no less than daily. If no such suppressed e-mail addresses are supplied by Advertiser, then amir Affiliate Network may conclude that no such addresses exist. The suppression list and login provided by amir Affiliate Network are deemed to be Confidential Information of amir Affiliate Network, as defined hereinbelow. Suppression lists may not be used by Advertiser for any purpose other than to comply with applicable laws regulating e-mail transmissions. Advertiser agrees to process any unsubscribe requests within seven (7) days of being posted at the FTP Site.</p><p><b>7.Payments</b><br></p><p>The rates for Actions shall be set forth in the applicable IO(s). amir Affiliate Network will invoice Advertiser twice monthly. Unless otherwise set forth in the applicable IO, payment will be due to amir Affiliate Network within thirty (30) days of the date appearing on each invoice. If payment is not made in a timely manner, amir Affiliate Network may, at its option, immediately terminate the Agreement and/or any applicable IO(s). Interest will accrue on any past due amounts at the rate equal to the lesser of one and one half percent (1.5 per month or the maximum amount permitted by law. In addition, Advertiser shall be liable to amir Affiliate Network for all attorneys' fees and other costs of collection incurred in collecting such unpaid amounts. Advertiser agrees and acknowledges that it shall be fully responsible for any and all taxes, whether state or local, and related fees, costs and penalties incurred by amir Affiliate Network and/or any of its Publishers or Affiliates pursuant to Chapter 57 of the Laws of 2008 amending the New York State Tax Law.</p><p><b>8.Leads/CPA/Unaccepted Actions</b><br></p><p>&nbsp; I.&nbsp;&nbsp; In connection with Leads and CPA-based Ad Campaigns, Advertiser will pay amir Affiliate Network for all Actions generated; provided, however, that Advertiser shall have no obligation to pay for any Lead/CPA-based Action that:</p><p>&nbsp; II.&nbsp;&nbsp; it rejects within five (5) days of its receipt thereof; and</p><p>&nbsp; III.&nbsp;&nbsp; both parties determine is not a Valid Action (as defined below). Where amir Affiliate Network determines that such Action is a Valid Action, Advertiser must pay for same. A "Valid Action" means an individual person that:</p><p>&nbsp; IV.&nbsp;&nbsp; is not a computer generated user, such as a robot, spider, computer script or other automated, artificial or fraudulent method designed to appear like an individual, real live person;</p><p>&nbsp; V.&nbsp;&nbsp; in the case of CPA-based Campaign, is a valid sale that is not fraudulent, cancelled, charged back or otherwise nullified; and</p><p>&nbsp; VI.&nbsp;&nbsp; in the case of Leads-based Campaigns, has submitted information that meets all of Advertiser's criteria as set forth in the applicable IO. The data associated with any and all Lead/CPA-based Actions ("Action Data") that are not both accepted and paid for by Advertiser shall be deemed the Confidential Information of amir Affiliate Network, subject to any and all restrictions set forth herein ("Unaccepted Action Data"). Upon Advertiser's acceptance of a Lead/CPA-based Action (and payment to amir Affiliate Network therefor in accordance with payment terms set forth herein and in the applicable IO), amir Affiliate Network shall grant to Advertiser joint ownership and the full right to use such Action Data. Where Advertiser does not accept Leads/CPA-based Actions, where Advertiser fails to make payments for same in accordance with the payment terms herein and in the applicable IO and/or where such Leads/CPA-based Actions are later determined not to be Valid Actions, Advertiser shall have no rights in and to such Action Data, and such Action Data shall be considered and treated as Unaccepted Action Data. Without limiting the generality of the confidentiality obligations set forth herein, Advertiser agrees that it:</p><p>VII.&nbsp; will not transfer, export, display, forward or otherwise share information contained in the Unaccepted Action Data to/with any third party;</p><p>VIII.&nbsp; will not use the information contained in the Unaccepted Action Data on its own behalf in any manner not expressly authorized by amir Affiliate Network;</p><p>&nbsp;IX.&nbsp; will not use the information contained in the Unaccepted Action Data to create any interactive on-line, CD-ROM or other derivative product;</p><p>&nbsp;X.&nbsp;&nbsp; will not publicly display the information contained in the Unaccepted Action Data on the Internet; and</p><p>&nbsp;XI.&nbsp; will notify amir Affiliate Network as soon as it learns of any actual or suspected unauthorized use of or access to the information contained in the Unaccepted Action Data and provide reasonable assistance to amir Affiliate Network in the investigation and prosecution of any such unauthorized use or disclosure.</p><p><b>9.Term/Termination</b><br></p><p>I.&nbsp; The Agreement shall continue for the term set forth in any underlying IO, provided that either party may terminate the Agreement and/or any IO at any time, upon five (5) business days' prior written notice. Upon termination or expiration of the Agreement for any reason:</p><p>II.&nbsp; Advertiser will pay amir Affiliate Network all amounts then due and owing as of the termination date within thirty (30) days as set forth in Section 7 hereinabove;</p><p>III.&nbsp; any and all licenses and rights granted to either party in connection with the Agreement shall immediately cease and terminate; and<br>IV.any and all Confidential Information or proprietary information of either party that is in the other party's possession or control must be immediately returned or destroyed. Notwithstanding any termination of the Agreement, any provisions of the Agreement that may reasonably be expected to survive termination of the Agreement, shall survive and remain in effect in accordance with their terms.</p><p><b>10.Warranty/Limitation of Liability</b><br></p><p>THE amir Affiliate Network, SERVICES, amir Affiliate Network ADS, AD GUIDELINES, ACTIONS AND AD CODES PROVIDED By amir Affiliate Network UNDER THE AGREEMENT AND/OR ANY APPLICABLE IO ARE SUPPLIED ON AN "AS IS" AND "AS AVAILABLE" BASIS. TO THE FULLEST EXTENT OF THE LAW, amir Affiliate Network MAKES NO WARRANTIES (INCLUDING IMPLIED WARRANTIES OF PURPOSE AND NON-INFRINGEMENT), GUARANTEES, REPRESENTATIONS, EXPRESS, IMPLIED, ORAL OR OTHERWISE. WITHOUT LIMITING THE GENERALITY OF THE FOREGOING, amir Affiliate Network DOES NOT WARRANT OR GUARANTY ACTIONS, CONVERSION RATES AND/OR RESPONSE RATES. The amir Affiliate Network, SERVICES, amir Affiliate Network ADS, AD GUIDELINES, ACTIONS AND/OR AD CODES MAY CONTAIN BUGS, ERRORS, PROBLEMS OR OTHER LIMITATIONS. amir Affiliate Network HAS NO LIABILITY, WHATSOEVER, TO ADVERTISER OR ANY THIRD PARTY, FOR ANY OTHER PARTY'S SECURITY METHODS AND PRIVACY PROTECTION PROCEDURES AND amir Affiliate Network DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS AND IMPLIED, THAT ANY OTHER PARTY'S SECURITY METHODS AND PRIVACY PROTECTION PROCEDURES WILL BE UNINTERRUPTED OR ERROR-FREE. amir Affiliate Network HAS NO LIABILITY FOR ADVERTISER'S USE OF, OR INABILITY TO USE, THE AD GUIDELINES OR APPLICABLE ACTIONS AND amir Affiliate Network DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS AND/OR IMPLIED, THAT ADVERTISER'S USE OF THE amir Affiliate Network, SERVICES, amir Affiliate Network ADS, AD GUIDELINES AND/OR ACTIONS WILL BE UNINTERRUPTED OR ERROR-FREE. amir Affiliate Network MAKES NO GUARANTEES, AND ACCEPTS NO RESULTING LIABILITY, FOR FAILURE TO MEET SCHEDULED DELIVERY DATES. IN NO EVENT SHALL amir Affiliate Network BE RESPONSIBLE FOR ANY CONSEQUENTIAL, SPECIAL, PUNITIVE OR OTHER INDIRECT DAMAGES INCLUDING, WITHOUT LIMITATION, LOST REVENUE OR PROFITS, EVEN IFamir Affiliate Network HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. amir Affiliate Network WILL NOT BE LIABLE, OR CONSIDERED IN BREACH OF THE AGREEMENT, ON ACCOUNT OF A DELAY OR FAILURE TO PERFORM UNDER THE AGREEMENT AND/OR ANY IO AS A RESULT OF CAUSES OR CONDITIONS THAT ARE BEYONDamir Affiliate Network'S CONTROL. NOTWITHSTANDING ANYTHING CONTAINED HEREIN TO THE CONTRARY, amir Affiliate Network'S LIABILITY UNDER ANY CAUSE OF ACTION SHALL BE LIMITED TO THE AMOUNTS PAID To amir Affiliate Network BY ADVERTISER DURING THE PRIOR SIX (6) MONTH PERIOD PURSUANT TO THE AGREEMENT. amir Affiliate Network SHALL NOT BE HELD LIABLE OR RESPONSIBLE FOR ANY ACTIONS OR INACTIONS OF PUBLISHERS AND/OR AFFILIATES.</p><p><b>11.Representation and Warranties</b><br></p><p>I.&nbsp;&nbsp; Advertiser represents and warrants that:</p><p>II.&nbsp; it has the power and authority to enter into and perform its obligations under the Agreement;</p><p>III.&nbsp; at all times, the Ads (and their transmission), the Advertiser Products, any Advertiser website linked to from the Ads and Advertiser itself will comply with all applicable foreign, federal, state or local laws, rules, regulations and ordinances including, without limitation, the Gramm-Leach Bliley Act, the Fair Credit Reporting Act, the Federal Trade Commission Act, CAN-SPAM, the Telephone Consumer Protection Act, the Fair Debt Collection Practices Act, the Federal Communications Act, and all rules and regulations promulgated under any of the foregoing, as well as all applicable state laws including, without limitation, the California Financial Privacy Act and the Vermont Consumer Protection Act, and all rules and regulations promulgated under such state laws (collectively, "Laws");</p><p>IV.&nbsp; it owns and/or has any and all rights to permit the use of the Advertiser Ads and, where approved, amir Affiliate Network Ads, by amir Affiliate Network, its Publishers and Affiliates, as contemplated by the Agreement;</p><p>V.&nbsp; at all times, the Ads (and their transmission), the Advertiser Products, any Advertiser website linked to from the Ads and Advertiser itself will not violate any applicable rights of any third party including, but not limited to, infringement or misappropriation of any copyright, patent, trademark, trade secret or other proprietary, property or other intellectual property right;</p><p>VI.&nbsp; it will not disable "back" browser functionality to prohibit end-users from returning to the website from which the Ad was selected, if applicable;</p><p>VII.&nbsp; Advertiser has a reasonable basis for any and all claims made within the Ads and possesses appropriate documentation to substantiate such claims;</p><p>VIII.&nbsp; for CPA and Leads Campaigns, the Ads, and/or the landing page from each Ad where an Action is completed (for example, Advertiser's website page where an end-user is directed when such end-user clicks on the Ad, fills in a registration form or takes a similar action in connection with the Ad) contains a prominent link to Advertiser's privacy policy, which policy provides, at a minimum, adequate notice, disclosure and choices to end users regarding Advertiser's use, collection and disclosure of their personal information;</p><p>IX. Advertiser shall fulfill all commitments made in the Ads;</p><p>X.&nbsp; no Ad is targeted to end-users under the age of eighteen (18);</p><p>XI. prior to loading any computer program onto an individual's computer including, without limitation, programs commonly referred to as adware and/or spyware, but excluding cookies (provided that cookies are disclosed in Advertiser's privacy policy and end-users are instructed on how to disable such cookies), Advertiser shall provide clear and conspicuous notice to, and shall obtain the express consent of, such individual to install such computer program;</p><p>XII. the Ads, Advertiser Products, any Advertiser website linked to from the Ads do not:</p><p>XIII. contain any misrepresentations or content that is defamatory;</p><p>XIV. contain content that is violent, obscene, offensive, including content that contains nudity or implied nudity or content that is morally or ethically offensive or sexually suggestive;</p><p>XV.&nbsp; promote or support gambling or sweepstakes or contests; or</p><p>XVI. contain any "worm," "virus" or other device that could impair or injure any person or entity;</p><p>XVII. Advertiser is not, nor is Advertiser acting on behalf of any person or entity that is, prohibited from engaging in transactions with U.S. citizens, nationals or entities under applicable U.S. law and regulation including, but not limited to, regulations issued by the U.S. Office of Foreign Assets Control ("OFAC"); and (m) Advertiser is not, nor is Advertiser acting on behalf of any person or entity that is, a Specially Designated National ("SDN"), as OFAC may so designate from time to time.</p><p><b>12.Indemnification</b><br></p><p>I.&nbsp; Advertiser shall irrevocably defend, indemnify and hold amir Affiliate Network, its Publishers, Affiliates and each of their respective employees, officers, directors, members, managers, shareholders, contractors and agents harmless from and against any and all liability, loss, damage or expense (including, without limitation, reasonable attorneys' fees, costs and expenses) arising out of or related to any allegation, claim or cause of action, involving:</p><p>II.&nbsp; Advertiser's breach of the Agreement, any and all applicable IO(s) or any representation or warranty contained therein;</p><p>III.the Ads, Advertiser Products and/or Advertiser websites; and/or</p><p>IV. any claim that amir Affiliate Network is obligated to pay any taxes in connection with Advertiser's participation hereunder.</p><p><b>13.Confidentiality</b></p><p>I.&nbsp; For purposes of the Agreement, "Confidential Information" shall mean all data and information, of a confidential nature or otherwise, disclosed during the term of the Agreement by one party ("Disclosing Party") to the other party ("Receiving Party"), as well as information that the Receiving Party knows or should know that the Disclosing Party regards as confidential including, but not limited to:</p><p>II.&nbsp; a party's business plans, strategies, know how, marketing plans, suppliers, sources of materials, finances, business relationships, personally identifiable end-user information, pricing, technology, employees, trade secrets and other non-public or proprietary information whether written, oral, recorded on tapes or in any other media or format;</p><p>III.&nbsp; the material terms of the Agreement and/or any associated IO(s);</p><p>IV.&nbsp; with respect to amir Affiliate Network, the Unaccepted Action Data and suppression lists; and</p><p>V.&nbsp;&nbsp; any information marked or designated by the Disclosing Party as confidential. The Receiving Party agrees to hold all Confidential Information in trust and confidence and, except as may be authorized by the Disclosing Party in writing, shall not use such Confidential Information for any purpose other than as expressly set forth in the Agreement or disclose any Confidential Information to any person, company or entity, except to those of its employees and professional advisers:</p><p>VI.&nbsp; who need to know such information in order for the Receiving Party to perform its obligations hereunder; and</p><p>VII.&nbsp; who have entered into a confidentiality agreement with the Receiving Party with terms at least as restrictive as those set forth herein. Confidential information shall not include any information that the Receiving Party can verify with substantial proof that:</p><p>VIII.&nbsp; is generally available to or known to the public through no wrongful act of the receiving party;</p><p>IX.&nbsp; was independently developed by the Receiving Party without the use of Confidential Information; or</p><p>X.&nbsp; was disclosed to the Receiving Party by a third party legally in possession of such Confidential Information and under no obligation of confidentiality to the Disclosing Party. The Receiving Party agrees that monetary damages for breach of confidentiality may not be adequate and that the disclosing party shall be further entitled to injunctive relief, without the requirement to post bond.</p><p><b>14.Non-Circumvention</b><br></p><p>I.&nbsp; Advertiser recognizes that amir Affiliate Network has proprietary relationships with its Publishers and Affiliates. Advertiser agrees not to circumvent amir Affiliate Network's relationship with such Publishers and Affiliates, or to otherwise solicit, purchase, contract for or obtain services similar to the Services performed by amir Affiliate Network hereunder from any Publisher and/or Affiliate that is known, or should reasonably be known, by Advertiser to have such a relationship with amir Affiliate Network, during the term of the Agreement and for six (6) months following termination or expiration of the Agreement. Notwithstanding the foregoing, to the extent that Advertiser can show that any such Publishers and Affiliates already provided such services to Advertiser prior to the date of the first IO executed by the parties, then Advertiser shall not be prohibited from continuing such relationship. Advertiser agrees that monetary damages for its breach, or threatened breach, of this Section 14 will not be adequate and that amir Affiliate Network shall be entitled to:</p><p>II.&nbsp;&nbsp; injunctive relief (including temporary and preliminary relief) without the requirement to post a bond;.</p><p>III.&nbsp; liquidated damages from Advertiser in the amount equal to one hundred percent (100%) of the fees paid by Advertiser to the subject Publisher and/or Affiliate, as applicable, for the prior twelve (12) month period; and</p><p>IV.&nbsp; any and all other remedies available to amir Affiliate Network at law or in equity.</p><p><b>15.Force Majeure</b><br></p><p>Other than with respect to payment obligations arising hereunder, neither party will be liable, or be considered to be in breach of this Agreement, on account of such party's delay or failure to perform as required under the terms of this Agreement as a result of any causes or conditions that are beyond such party's reasonable control and that such party is unable to overcome through the exercise of commercially reasonable diligence (a "Force Majeure Event"). If any such Force Majeure Event occurs including, without limitation, acts of God, fires, explosions, telecommunications, Internet or Affiliate Network failure, results of vandalism or computer hacking, storm or other natural occurrences, national emergencies, acts of terrorism, insurrections, riots, wars, strikes or other labor difficulties, or any act or omission of any other person or entity, the affected party will give the other party notice and will use commercially reasonable efforts to minimize the impact of any such event.</p><p><b>16.Miscellaneous</b><br></p><p>I.&nbsp; Assignment. Neither party may assign, transfer or delegate any of its rights or obligations under the Agreement or any IO without the prior written consent of the other party, and any attempts to do so shall be null and void; provided, however, that either party may assign the Agreement, any IO or any portion hereof/thereof, to:</p><p>II.&nbsp; an acquirer of all or substantially all of such party's equity, business or assets;</p><p>III.&nbsp; a successor in interest whether by merger, reorganization or otherwise; or</p><p>IV.&nbsp; any entity controlling or under common control with such party.</p><p>V.&nbsp; Choice of Law/Venue. The Agreement shall be construed in accordance with and governed by the laws of the State of New York. In the event that any suit, action or other legal proceeding shall be instituted against either party in connection with the Agreement, each hereby submits to the jurisdiction of either the United States District Court for the Southern District of New York or any New York State court of competent jurisdiction, located in New York County, and further agrees to comply with all the requirements necessary to give such court jurisdiction.</p><p>VI.&nbsp; Modification. The Agreement, any exhibits attached hereto and any and all applicable IO(s) represent the complete and entire expression of the agreement between the parties, and shall supersede any and all other agreements, whether written or oral, between the parties. The Agreement, any exhibits attached hereto and any and all applicable IO(s) may be amended only by a written agreement executed by an authorized representative of each party. To the extent that anything in or associated with any IO is in conflict or inconsistent with the Agreement, the IO shall take precedence.</p><p>VII.&nbsp; Non-Waiver/Severability. No waiver of any breach of any provision of the Agreement shall constitute a waiver of any prior, concurrent or subsequent breach of the same or any other provisions hereof, and no waiver shall be effective unless made in writing and signed by an authorized representative of the waiving party. If any provision contained in the Agreement is determined to be invalid, illegal or unenforceable in any respect under any applicable law, then such provision will be severed and replaced with a new provision that most closely reflects the real intention of the parties, and the remaining provisions of the Agreement will remain in full force and effect.</p><p>VIII.&nbsp; Relationship of the Parties. The parties hereto are independent contractors. There is no relationship of partnership, agency, employment, franchise or joint venture between the parties. Neither party has the authority to bind the other, or incur any obligation on its behalf; provided, however, that amir Affiliate Network acts as a limited agent of Advertiser for the sole purpose of performing the Services set forth in applicable IO(s).<br><br>IN WITNESS WHEREOF, amir Affiliate Network and Advertiser have caused this Advertiser Agreement to be executed by their duly authorized representatives.<br></p>
                                                      </div>
                                                   </p>
                                                   <button type="submit" class="pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                                </div>
                                          </div>
                                          <div id="v_profile" class="tab-pane fade in">
                                             <div class="col-md-12">
                                                   <p>
                                                      <div id="page-editor1">
                                                         &nbsp;
                                                         <br />
                                                         &nbsp;
                                                         <br />
                                                         &nbsp;
                                                         <br />
                                                         &nbsp;
                                                         <br />
                                                         &nbsp;
                                                         <br />
                                                         &nbsp;
                                                         <br />
                                                      </div>
                                                   </p>
                                                   <button type="submit" class="pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                                </div>
                                          </div>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
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