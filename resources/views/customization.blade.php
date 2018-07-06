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
                                                        <p><b>Terms &amp; Conditions</b></p>

<p>This Affiliate Program Operating Agreement (the
"Agreement") is made and entered into by and between amir
("amir " or "we"), and you, ("you" or
"Affiliate") the party submitting an application to become a
amir affiliate). The terms and conditions contained in this
Agreement apply to your participation with amir.offerslook.com ("Affiliate
Program"). Each Affiliate Program offer (an "Offer") may be for
any offering by amir or a third party (each such third party a
"Client") and may link to a specific web site for that particular
Offer ("Program Web Site"). Furthermore, each Offer may have
additional terms and conditions on pages within the Affiliate Program and are
incorporated as part of this Agreement. By submitting an application or
participating in an Offer, you expressly consent to all the terms and
conditions of this Agreement.</p>

<p><b>1. &nbsp; &nbsp; Sign up as an Affiliate</b></p>

<p>You must submit an Affiliate Program application from our
website. You must accurately complete the application to become an affiliate
(and provide us with future updates) and not use any aliases or other means to
mask your true identity or contact information. After we review your application,
we will notify you of your acceptance or rejection to the Affiliate Program,
generally within two (2) business days. We may accept or reject your
application at our sole discretion for any reason.</p>

<p><b>2. &nbsp; &nbsp; Obligations of both Parties</b></p>

<p>Subject to our acceptance of you as an affiliate and your
continued compliance with the terms and conditions of this Agreement,
amir agrees as follows:</p>

<p>&nbsp; &nbsp; I. &nbsp; We will make available to you via
the Affiliate Program graphic and textual links to the Program Web Site and/or
other creative materials (collectively, the "Links") which you may
display on web sites owned or controlled by you, in emails sent by you and
clearly identified as coming from you and in online advertisements
(collectively, "Media"). The Links will serve to identify you as a
member of our Affiliate Program and will establish a link from your Media to
the Program Web Site.</p>

<p>&nbsp; &nbsp; II. &nbsp; We will pay Affiliate for each
Qualified Action (the "Commission"). A "Qualified Action"
means an individual person who (i) accesses the Program Web Site via the Link,
where the Link is the last link to the Program Web Site, (ii) is not a computer
generated user, such as a robot, spider, computer script or other automated,
artificial or fraudulent method to appear like an individual, real live person,
(iii) is not using pre-populated fields (iv) completes all of the information
required for such action within the time period allowed by amir and
(v) is not later determined by amir to be fraudulent, incomplete,
unqualified or a duplicate.</p>

<p>&nbsp; III. &nbsp; We will pay you any Commissions earned
monthly, provided that your account is currently greater than $50. Accounts
with a balance of less than $50 will roll over to the next month, and will
continue to roll over monthly until $50 is reached. We reserve the right to
charge back to your account any previously paid Qualified Actions that are
later determined to have not met the requirements to be a Qualified Action.</p>

<p>&nbsp; IV. &nbsp; Payment for Commissions is dependent upon
Clients providing such funds to amir, and therefore, you agree that
amir shall only be liable to you for Commissions to the extent that
amir has received such funds from the Clients. You hereby release
amir from any claim for Commissions if amir has not
received such funds from the Clients.</p>

<p>&nbsp; V. &nbsp; amir shall automatically
generate an invoice on behalf of Affiliate for all Commissions payable under
this Agreement and shall remit payment to Affiliate based upon that invoice.
All tracking of Links and determinations of Qualified Actions and Commissions
shall be made by amir in its sole discretion. In the event that
Affiliate disputes in good faith any portion of an invoice, Affiliate must
submit that dispute to amir in writing and in sufficient detail
within thirty (30) days of the date on the invoice. If Affiliate does not
dispute the invoice as set forth herein, then Affiliate agrees that it
irrevocably waives any claims based upon that invoice. In the event that
Affiliate is also tracking Qualified Actions and Affiliate claims a
discrepancy, Affiliate must provide amir with Affiliate's reports
within three (3) days after 30th day of the calendar month, and if amir
and Affiliate's reported statistics vary by more than 10% and amir
reasonably determines that Affiliate has used generally accepted industry
methods to track Qualified Actions, then amir and Affiliate agree to
make a good faith effort to arrive at a reconciliation. If the parties are
unable to arrive at a reconciliation, then amir numbers shall
govern.</p>

<p>&nbsp; VI. &nbsp; If Affiliate has an outstanding balance
due to amir under this Agreement or any other agreement between the
Affiliate and amir, whether or not related to the Affiliate Program,
Affiliate agrees that amir may offset any such amounts due to
amir from amounts payable to Affiliate under this Agreement.</p>

<p>Affiliate also agrees to:</p>

<p>I. &nbsp; Have sole responsibility for the development,
operation, and maintenance of, and all content on or linked to, your Media.</p>

<p>II. &nbsp; Ensure that all materials posted on your Media
or otherwise used in connection with the Affiliate Program (i) are not illegal,
(ii) do not infringe upon the intellectual property or personal rights of any
third party and (iii) do not contain or link to any material which is harmful,
threatening, defamatory, obscene, sexually explicit, harassing, promotes
violence, promotes discrimination (whether based on sex, religion, race,
ethnicity, nationality, disability or age), promotes illegal activities (such
as gambling), contains profanity or otherwise contains materials that
amir informs you that it considers objectionable (collectively,
"Objectionable Content").</p>

<p>III. &nbsp; Not make any representations, warranties or
other statements concerning amir or Client or any of their
respective products or services, except as expressly authorized herein.</p>

<p>IV. Make sure that your Media does not copy or resemble the
look and feel of the Program Web Site or create the impression that your Media
is endorsed by amir or Clients or a part of the Program Web Site,
without prior written permission from us.</p>

<p>V. &nbsp; Comply with all (i) obligations, requirements and
restrictions under this Agreement and (ii) laws, rules and regulations as they
relate to your business, your Media or your use of the Links.</p>

<p>VI. Comply with the terms, conditions, guidelines and
policies of any third party services used by Affiliate in connection with the
Affiliate Program, including but not limited to, email providers, social
networking services and ad networks.</p>

<p>VII. Always prominently post and make available to
end-users, including prior to the collection of any personally identifiable
information, a privacy policy in compliance with all applicable laws that
clearly and thoroughly discloses all information collection, use and sharing
practices, including providing for the collection of such personally
identifiable information in connection with the Affiliate Program and the
provision of such personally identifiable information to amir and
Clients for use as intended by amir and Clients.</p>

<p>VIII. &nbsp; &nbsp; Always prominently post and make
available to end-users any terms and conditions in connection with the Offer
set forth by amir or Client, or as required by applicable laws
regarding such Offers.</p>

<p>IX. Make sure to not place amir ads on any
online auction platform (i.e. eBay, Amazon, Taobao, etc).</p>

<p>The following additional program-specific terms shall apply
to any promotional programs set forth below:</p>

<p>I. &nbsp; &nbsp; Email Campaigns. For all email campaigns,
Affiliate must download the "Suppression List" from the Offers section
of amir. Affiliate shall filter its email list by removing any
entries appearing on the Suppression List and will only send emails to the
remaining addresses on its email list. amir will provide an opt-out
method in all Links, however, if any opt-out requests come directly to
Affiliate, Affiliate shall immediately forward them to amir at
amirali2418@gmail.com. Affiliate's emails containing the Links may not include any
content other than the Links, except as required by applicable law.</p>

<p>A. &nbsp; &nbsp; Affiliate agrees that failure to download
the Suppression List and remove all emails from the database before mailing may
result in Commission withholdings, removal or suspension from all or part of
the Affiliate Program, possible legal action and any other rights or remedies
available to amir pursuant to this Agreement or otherwise. Affiliate
further agrees that it will not mail or market to any suppression files
generated through the amir network, and that doing so may result in
Commission withholdings, removal or suspension from the Affiliate Program,
possible legal action and any other rights or remedies available to
amir pursuant to this Agreement or otherwise.</p>

<p>II. &nbsp; Advertising Campaigns. No Links can appear to be
associated with or be positioned on chat rooms or bulletin boards unless
otherwise agreed by amir in writing. Any pop-ups/unders used for the
Affiliate Program shall be clearly identified as Affiliate served in the title
bar of the window and any client-side ad serving software used by Affiliate
shall only have been installed on an end-user's computer if the function of the
software is clearly disclosed to end-users prior to installation, the
installation is pursuant to an affirmatively accepted and plain-english end
user license agreement and the software be easily removed according to
generally accepted methods.</p>

<p>III. &nbsp; Affiliate Network Campaigns. For all
Affiliate's that maintain their own affiliate networks, Affiliate agrees to
place the Links in its affiliate network (the "Network") for access
and use by those affiliates in Affiliate's Network (each a "Third Party
Affiliate"). Affiliate agrees that it will expressly forbid any Third
Party Affiliate to modify the Links in any way. Affiliate agrees to maintain
its Network according to the highest industry standards. Affiliate shall not
permit any party to be a Third Party Affiliate whose web site or business model
involves content containing Objectionable Content. All Third Party Affiliates
must be in good standing with Affiliate. Affiliate must require and confirm
that all Third Party Affiliates affirmatively accept, through verifiable means,
this Agreement prior to obtaining access to the Links. Affiliate shall promptly
terminate any Third Party Affiliate who takes, or could reasonably be expected
to take, any action that violates the terms and conditions of this Agreement.
In the event that either party suspects any wrongdoing by a Third Party
Affiliate with respect to the Links, Affiliate shall promptly disclose to
amir the identity and contact information for such Third Party
Affiliate. Affiliate shall promptly remove any Third Party Affiliate from the
Affiliate Program and terminate their access to future Offers of amir
in the Network upon written notice from amir. Unless amir
has been provided with all truthful and complete contact information for a
Third Party Affiliate and such Third Party Affiliate has affirmatively accepted
this Agreement as recorded by amir, Affiliate shall remain liable
for all acts or omissions of any Third Party Affiliate.</p>

<p><b>3. &nbsp; &nbsp; Consensus of Confidentiality</b></p>

<p>Except as otherwise provided in this Agreement or with the
consent of amir, you agree that all information, including, without
limitation, the terms of this Agreement, business and financial information,
customer and vendor lists, and pricing and sales information, concerning us or
any of our affiliates provided by or on behalf of any of them shall remain
strictly confidential and secret and shall not be utilized, directly or
indirectly, by you for any purpose other than your participation in the
Affiliate Program, except and solely to the extent that any such information is
generally known or available to the public through a source other than you.
Affiliate shall not use any information obtained from the Affiliate Program to
develop, enhance or operate a service that competes with the Affiliate Program,
or assist another party to do the same.</p>

<p><b>4. &nbsp; &nbsp; Limited License &amp; Intellectual
Property</b></p>

<p>We grant you a nonexclusive, nontransferable, revocable
right to use the Links and to access our web site through the Links solely in
accordance with the terms of this Agreement, for the sole purpose of
identifying your Media as a participant in the Affiliate Program and assisting
in increasing sales through the Program Web Site.</p>

<p>You may not alter, modify, manipulate or create derivative
works of the Links or any amir graphics, creative, copy or other
materials owned by, or licensed to, amir in any way. You are only
entitled to use the Links to the extent that you are a member in good standing
of the Affiliate Program. We may revoke your license anytime by giving you
written notice. Except as expressly stated herein, nothing in this Agreement is
intended to grant you any rights to any of amir’s trademarks,
service marks, copyrights, patents or trade secrets. You agree that
amir may use any suggestion, comment or recommendation you choose to
provide to amir without compensation. All rights not expressly
granted in this Agreement are reserved by amir.</p>

<p><b>5. &nbsp; &nbsp; Termination</b></p>

<p>This Agreement shall commence on the date of our approval
of your Affiliate Program application and shall continue thereafter until
terminated as provided herein. You may terminate your participation in the
Affiliate Program at any time by removing all Links from your Media, deleting
all copies of the Links. We may terminate your participation in one or more
Offers or this Agreement at any time and for any reason which we deem
appropriate with or without prior notice to you by disabling the Links or
providing you with a written notice. Upon termination of your participation in
one or more Offers or this Agreement for any reason, you will immediately cease
all use of and delete all Links, plus all amir or Client
intellectual property, and will cease representing yourself as a
amir or Client affiliate for such one or more Offers. All rights to
validly accrued payments, causes of action and any provisions, which by their
terms are intended to survive termination, shall survive any termination.</p>

<p><b>6. &nbsp; &nbsp; Amendments</b></p>

<p>In addition to any other rights and remedies available to
us under this Agreement amir reserves the right to delete any
actions submitted through your Links and withhold and freeze any unpaid Commissions
or charge back paid Commissions to your account if (i) amir
determines that you have violated this Agreement, (ii) amir receives
any complaints about your participation in the Affiliate Program which
amir reasonably believes to violate this Agreement or (iii) any
Qualified Action is later determined to have not met the requirements set forth
in this Agreement or on the Affiliate Program. Such withholding or freezing of
Commissions, or charge backs for paid Commissions, shall be without regard as
to whether or not such Commissions were earned as a result of such breach. In
the event of a material breach of this Agreement, amir reserves the
right to disclose your identity and contact information to appropriate law
enforcement or regulatory authorities or any third party that has been directly
damaged by your actions.</p>

<p><b>7. &nbsp; &nbsp; Counter-Spam Policy</b></p>

<p>You must strictly comply with the federal CAN-SPAM Act of
2003 (the "Act"). All emails sent in connection with the Affiliate
Program must include the appropriate party's opt-out link. From time to time,
we may request - prior to your sending emails containing linking or referencing
the Affiliate Program that you submit the final version of your email to
amir for approval by sending it to your amir
representative and upon receiving written approval from amir of your
email the email may be transmitted to third parties.</p>

<p>It is solely your obligation to ensure that the email
complies with the Act. You agree not to rely upon amir’s approval of
your email for compliance with the Act, or assert any claim that you are in
compliance with the Act based upon amir’s approval.</p>

<p><b>8. &nbsp; &nbsp; About Fraud</b></p>

<p>You are expressly prohibited from using any persons, means,
devices or arrangements to commit fraud, violate any applicable law, interfere
with other affiliates or falsify information in connection with referrals
through the Links or the generation of Commissions or exceed your permitted access
to the Affiliate Program. Such acts include, but are in no way limited to,
using automated means to increase the number of clicks through the Links or
completion of any required information, using spyware, using stealware,
cookie-stuffing and other deceptive acts or click-fraud. amir shall
make all determinations about fraudulent activity in its sole discretion.</p>

<p><b>9. &nbsp; &nbsp; Representations and Warranties</b></p>

<p>You hereby represent and warrant that this Agreement
constitutes your legal, valid, and binding obligation, enforceable against you
in accordance with its terms and that you have the authority to enter into this
Agreement. Subject to the other terms and conditions of this Agreement,
amir represents and warrants that it shall not knowingly violate any
law, rule or regulation which is applicable to amir’s own business
operations or amir’s proprietary products or services.</p>

<p><b>10. Modifications</b></p>

<p>In addition to any notice permitted to be given under this
Agreement, we may modify any of the terms and conditions of this Agreement at
any time by providing you with a notification by email. The changes will become
effective ten (10) business days after such notice. If the modifications are
unacceptable to you, you may terminate this Agreement without penalty solely on
the account of such termination within such ten (10) business day period. Your
continued participation in this Affiliate Program ten (10) business days after
a change notice has been posted will constitute your acceptance of such change.
In addition, amir may change, suspend or discontinue any aspect of
an Offer or Link or remove, alter, or modify any tags, text, graphic or banner
ad in connection with a Link. Affiliate agrees to promptly implement any request
from amir to remove, alter or modify any Link, graphic or banner ad
that is being used by Affiliate as part of the Affiliate Program.</p>

<p><b>11. Independent Investigation</b></p>

<p>You acknowledge that you have read this Agreement and agree
to all its terms and conditions. You have independently evaluated the
desirability of participating in the Affiliate Program and each Offer and are
not relying on any representation, guarantee or statement other than as set
forth in this Agreement or on the Affiliate Program.</p>

<p><b>12. Mutual Indemnification</b></p>

<p>Affiliate hereby agrees to indemnify, defend and hold
harmless amir and Clients and their respective subsidiaries,
affiliates, partners and licensors, directors, officers, employees, owners and
agents against any and all claims, actions, demands, liabilities, losses,
damages, judgments, settlements, costs, and expenses (including reasonable
attorneys' fees and costs) based on (i) any failure or breach of this
Agreement, including any representation, warranty, covenant, restriction or
obligation made by Affiliate herein, (ii) any misuse by Affiliate, or by a
party under the reasonable control of Affiliate or obtaining access through
Affiliate, of the Links, Offers or amir or Client intellectual
property, or (iii) any claim related to your Media, including but not limited
to, the content contained on such Media (except for the Links).</p>

<p>amir hereby agrees to indemnify, defend and hold
harmless Affiliate and its subsidiaries, affiliates, partners, and their
respective directors, officers, employees, owners and agents against any and
all claims, actions, demands, liabilities, losses, damages, judgments,
settlements, costs, and expenses (including reasonable attorneys' fees and
costs) based on a claim that amir is not authorized to provide you
with the Links.</p>

<p><b>13. Disclaimers</b></p>

<p>THE AFFILIATE PROGRAM AND LINKS, AND THE PRODUCTS AND
SERVICES PROVIDED IN CONNECTION THEREWITH, ARE PROVIDED TO AFFILIATE "AS
IS". EXCEPT AS EXPRESSLY SET FORTH HEREIN, AMIR EXPRESSLY
DISCLAIMS ALL WARRANTIES, EXPRESS, IMPLIED OR STATUTORY, INCLUDING BUT NOT
LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE, AND NONINFRINGEMENT, AND ANY WARRANTIES ARISING OUT OF COURSE OF
DEALING, USAGE, OR TRADE. AMIR DOES NOT WARRANT THAT THE
AFFILIATE PROGRAM OR LINKS WILL MEET AFFILIATE'S SPECIFIC REQUIREMENTS OR THAT
THE OPERATION OF THE AFFILIATE PROGRAM OR LINKS WILL BE COMPLETELY ERROR- FREE
OR UNINTERRUPTED. AMIR EXPRESSLY DISCLAIMS ANY LIABILITY FOR
ANY ACT OR OMISSION OF A CLIENT OR THEIR PRODUCTS OR SERVICES. AMIR
DOES NOT GUARANTEE THAT AFFILIATE WILL EARN ANY SPECIFIC AMOUNT OF COMMISSIONS.</p>

<p><b>14. Limitation of Liability</b></p>

<p>IN NO EVENT SHALL AMIR BE LIABLE FOR ANY
UNAVAILABILITY OR INOPERABILITY OF THE LINKS, PROGRAM WEB SITES, TECHNICAL
MALFUNCTION, COMPUTER ERROR, CORRUPTION OR LOSS OF INFORMATION, OR OTHER
INJURY, DAMAGE OR DISRUPTION OF ANY KIND BEYOND THE REASONABLE CONTROL OF AMIR.
IN NO EVENT WILL AMIR BE LIABLE FOR ANY INDIRECT, INCIDENTAL,
CONSEQUENTIAL, PERSONAL INJURY / WRONGFUL DEATH, SPECIAL OR EXEMPLARY DAMAGES,
INCLUDING BUT NOT LIMITED TO, LOSS OF PROFITS OR LOSS OF BUSINESS OPPORTUNITY,
EVEN IF SUCH DAMAGES ARE FORESEEABLE AND WHETHER OR NOT AMIR
HAS BEEN ADVISED OF THE POSSIBILITY THEREOF. AMIR'S CUMULATIVE
LIABILITY TO AFFILIATE, FROM ALL CAUSES OF ACTION AND ALL THEORIES OF LIABILITY,
WILL BE LIMITED TO AND WILL NOT EXCEED THE AMOUNTS PAID TO AFFILIATE BY AMIR
IN COMMISSIONS DURING THE SIX (6) MONTHS IMMEDIATELY PRIOR TO SUCH CLAIM.</p>

<p><b>15. Governing Law &amp; Miscellaneous</b></p>

<p>Affiliate shall be responsible for the payment of all
attorneys fees and expenses incurred by amir to enforce the terms of
this Agreement. This Agreement contains the entire agreement between
amir and Affiliate with respect to the subject matter hereof, and
supersedes all prior and/or contemporaneous agreements or understandings,
written or oral. Affiliate agrees that amir shall not be subject to
or bound by any Affiliate insertion order or online terms and conditions that
amend, conflict with or supplement this Agreement, regardless of whether
amir "clicks through" or otherwise indicates its
acceptance thereof. Affiliate may not assign all or any part of this Agreement
without amir prior written consent. amir may assign this
Agreement at any time with notice to Affiliate. This Agreement will be binding
on and will inure to the benefit of the legal representatives, successors and
valid assigns of the parties hereto. The provisions of Section 3, 4(b), 6, 7,
8, 12-15 and any accrued payment obligations shall survive the termination of
this Agreement. Except as set forth in the "Modifications" section
above, this Agreement may not be modified without the prior written consent of
both parties. If any provision of this Agreement is held to be void, invalid or
inoperative, the remaining provisions of this Agreement shall continue in
effect and the invalid portion of any provision shall be deemed modified to the
least degree necessary to remedy such invalidity while retaining the original
intent of the parties. Each party to this Agreement is an independent
contractor in relation to the other party with respect to all matters arising
under this Agreement. Nothing herein shall be deemed to establish a
partnership, joint venture, association or employment relationship between the
parties. No course of dealing nor any delay in exercising any rights hereunder
shall operate as a waiver of any such rights. No waiver of any default or
breach shall be deemed a continuing waiver or a waiver of any other breach or
default.</p>

<p>By submitting and application to Affiliate Program, you
affirm and acknowledge that you have read this Agreement in its entirety and
agree to be bound by all of its terms and conditions. If you do not wish to be
bound by this Agreement, you should not submit an application to Affiliate
Program. If an individual is accessing this Agreement on behalf of a business
entity, by doing so, such individual represents that they have the legal
capacity and authority to bind such business entity to this Agreement. This
Agreement was last revised on 20-06-2016.</p><p></p>
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