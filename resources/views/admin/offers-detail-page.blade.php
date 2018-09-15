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
                                    <h3>Add Offer</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('') }}">home</a></li>
                                       <li>All-Offers</li>
                                       <li>Add Offer</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Add Product Area Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="tabs-example">
                              <div class="tabs-box-example horizontal-tab-example">
                                 <form action="">
                                    <ul class="nav nav-tabs" id="service_pro" role="tablist">
                                       <li class="active" role="Custom Report1"><a href="#custom_r1" role="tab" data-toggle="tab">Details</a>
                                       </li>
                                       <li role="Custom Report2"><a href="#custom_r2" role="tab" data-toggle="tab">Approved & Caps</a></li>
                                    </ul>
                                    <div class="tab-content offer-detail-page">
                                       <div id="custom_r1" class="tab-pane fade in active">
                                          <div class="row">
                                             <section class="col-xs-12 col-sm-12 col-md-7">
                                                <div class="accordian-example">
                                                   <div class="panel-group" id="detail" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#detail" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                               <i class="fa fa-list-alt"></i> Details
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                               <h3>{{ $offer->offer_name }}</h3><br />
                                                               <div class="row base-info">
                                                                  <div class="col-sm-3">
                                                                     <img src="<?php echo url('/'); ?>/public/offerimages/{{ $offer->offer_image }}" alt="order image"  />  
                                                                  </div>
                                                                  <div class="col-sm-9 col-md-9">
                                                                     <div class="row">
                                                                        <div class="col-xs-6">
                                                                           <p><label>Revenue: </label> {{ $offer->revenue_type }} ${{ $offer->revenue }}</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Payout: </label> {{ $offer->payout_type }} ${{ $offer->payout }}</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Currency: </label> USD</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Status: </label> <span class="label label-{{ ($offer->status == 1) ? 'success': 'warning'  }}">{{ ($offer->status == 1) ? 'Active': 'Paused'  }}</span></p>
                                                                        </div>
                                                                        <?php $offerlink = explode(" - ",$offer->duration); ?>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Start Date:</label> {{ $offerlink[0] }}</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>End Date:</label> {{ $offerlink[1] }}</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p>
                                                                              <label>Advertiser: </label>
                                                                              <?php $advertiser = App\User::find($offer->adv_id); 
                                                                              echo $advertiser->fname; ?>                      
                                                                           </p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p>
                                                                              <label>Manager: </label>
                                                                              <a href="#"><?php $manager = App\User::find($advertiser->managerid); 
                                                                                 echo $manager->fname; ?>  </a>                        
                                                                           </p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Type: </label> {{ $offer->offer_approval }}</p>
                                                                        </div>
                                                                        <div class="col-xs-12">
                                                                           <p>
                                                                              <label>Preview Link:</label>
                                                                              <a href="{{ $offer->preview_url }}" target="_blank">{{ $offer->preview_url }}</a>
                                                                           </p>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row base-info">
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p>
                                                                        <label>Lead Traffic to Preview URL : </label>
                                                                        {{ ($offer->restrictions->lead_traffic_preview_url == 1) ? 'On' : 'Off' }}                
                                                                     </p>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p><label>Conversion Protocol: </label> {{ $offer->signup_protocol }}</p>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p>
                                                                        <label>Conversions Need Approval : </label>
                                                                        {{ $offer->signup_need_approval }}               
                                                                     </p>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="accordian-example">
                                                   <div class="panel-group" id="restriction" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#restriction" href="#restrictions" aria-expanded="true" aria-controls="restrictions">
                                                               <i class="fa fa-filter"></i> Restriction
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="restrictions" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">

                                                               <div class="box-body">
                                                                  <div class="row">
                                                                     <div class="col-sm-12">
                                                                        <p>
                                                                           <b>Advertiser Total Cap</b>: @if($offer->restrictions->advertiser_caps_value != null)
                                                                           {{ $offer->restrictions->advertiser_caps_type }} {{ $offer->restrictions->advertiser_caps_value }}
                                                                           @else
                                                                              No
                                                                           @endif         
                                                                        </p>
                                                                     </div>
                                                                     <div class="col-sm-12">
                                                                        <p>
                                                                           <b>Affiliate Total Cap</b>: @if($offer->restrictions->advertiser_caps_value != null)
                                                                           {{ $offer->restrictions->advertiser_caps_type }} {{ $offer->restrictions->advertiser_caps_value }}
                                                                           @else
                                                                              No
                                                                           @endif            
                                                                        </p>
                                                                     </div>
                                                                     <div class="col-sm-12 desc-content">
                                                                        <p><strong>Description</strong> :</p>
                                                                        <p>{{ $offer->description }}</p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-sm-12">
                                                                        <p>
                                                                           <strong>Redirect Offer
                                                                           <i class="fa fa-question-circle" title="Current offer will be redirected to this offer if paused, passed expiration date, or cap (offer cap &amp; affiliate cap) is exceeded." data-toggle="tooltip" data-html="true"></i></strong>
                                                                           <?php 
                                                                           if ($offer->restrictions->redirect_offer != null) {
                                                                              $redirectoffer = App\Offer::find($offer->restrictions->redirect_offer);
                                                                              echo '<a href="#" target="_blank">'.$redirectoffer->offer_name.'</a>';
                                                                           }
                                                                           ?>
                                                                                         
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-sm-12" style="word-break: break-all;word-wrap:break-word;">
                                                                        <p>
                                                                           <strong>Offer Pools
                                                                           <i class="fa fa-question-circle" title="A pool of offers in which traffic can be redirected to in the event that they don’t match Geo &amp; Platform targeting.You could multi-select more pools at the same time." data-toggle="tooltip" data-html="true"></i>                    </strong>
                                                                           <?php 
                                                                           if ($offer->restrictions->offer_pool != null) {
                                                                              $offerpool = App\OffersPool::find($offer->restrictions->offer_pool);
                                                                              //echo $offer->restrictions->offer_pool;
                                                                              //print_r($offerpool);
                                                                              if (!empty($offerpool)) {
                                                                                 echo '<a href="#" target="_blank">'.$offerpool->name.'</a>';
                                                                              }
                                                                           }
                                                                           ?>          
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-sm-12" style="word-break: break-all;word-wrap:break-word;">
                                                                        <p>
                                                                           <strong>Tracking Domain
                                                                           <i class="fa fa-question-circle" title="This allows you to host your offer tracking URLs on a custom domain." data-toggle="tooltip" data-html="true"></i>                    </strong>
                                                                           {{ $offer->restrictions->tracking_domain }}               
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row" style="margin-bottom: 10px">
                                                                     <div class="col-sm-12">
                                                                        <div>
                                                                           <strong class="pull-left">SSL
                                                                           <i class="fa fa-question-circle" title="Enforce SSL by generating affiliate tracking link and advertiser postback with https instead of http." data-toggle="tooltip" data-html="true"></i>                    </strong>
                                                                           <div class="form-wrap toggle-switches-flex">
                                                                              <div class="form-group">
                                                                                 <input {{ ($offer->restrictions->ssl == 1) ? 'checked':'' }} class="ssl_toggle" name="ssl" data-toggle="toggle" type="checkbox">
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row clickip-content" style="margin-bottom: 10px">
                                                                     <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="pull-left" style="padding-left: 0px">
                                                                           <strong class="pull-left">Unique IP Tracking <i class="fa fa-question-circle" title="When you turn on the button, the system will filter the part of clicks out of the allowed repetition of independent IPs." data-toggle="tooltip" data-html="true"></i></strong>
                                                                           <div class="form-wrap toggle-switches-flex">
                                                                              <div class="form-group">
                                                                                 <input {{ ($offer->restrictions->unique_ip_tracking == 1) ? 'checked':'' }} class="ssl_toggle" name="unique_ip_tracking" data-toggle="toggle" type="checkbox">
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                        <div class="pull-left  hidden">
                                                                           <strong style="float: left">Only </strong>
                                                                           <div style="float: left;padding-right: 5px;padding-left: 15px;">
                                                                              <select id="click_ip_count" class="form-control select2-hidden-accessible" name="click_ip_count" data-s2-options="s2options_d6851687" data-krajee-select2="select2_7fc2f6f0" style="display:none" tabindex="-1" aria-hidden="true">
                                                                                 <option value=""></option>
                                                                                 <option value="1">1</option>
                                                                                 <option value="2">2</option>
                                                                                 <option value="3">3</option>
                                                                                 <option value="4">4</option>
                                                                                 <option value="5">5</option>
                                                                                 <option value="6">6</option>
                                                                                 <option value="7">7</option>
                                                                                 <option value="8">8</option>
                                                                                 <option value="9">9</option>
                                                                                 <option value="10">10</option>
                                                                              </select>
                                                                              <span class="select2 select2-container select2-container--krajee" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-click_ip_count-container"><span class="select2-selection__rendered" id="select2-click_ip_count-container"><span class="select2-selection__placeholder"></span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>                    
                                                                           </div>
                                                                           <strong style="padding-left: 4px">Times Allowed</strong>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-sm-12" style="word-break: break-all;word-wrap:break-word;">
                                                                        <p>
                                                                           <strong>Alert Setting
                                                                           <i class="fa fa-question-circle" title="Setting different metrics for alert, including CR, postback, unique clicks and etc." data-toggle="tooltip" data-html="true"></i>                        </strong>
                                                                           None                    
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="accordian-example">
                                                   <div class="panel-group" id="targetings" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#targetings" href="#targeting" aria-expanded="true" aria-controls="targeting">
                                                               <i class="fa fa-globe"></i>  Targeting
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="targeting" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">

                                                               <!-- /.box-header -->
                                                               <div class="box-body no-padding">
                                                                  <div class="table-responsive">
                                                                     <table class="table no-margin">
                                                                        <tbody>
                                                                           <tr>
                                                                              <th style="text-align: center;vertical-align: middle">Geo</th>

                                                                              <td>
                                                                                 @if($offer->restrictions->geo_targeting != null)
                                                                                 <table class="table table-bordered no-margin">
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <th>Countries (Exclude)</th>
                                                                                       </tr>

                                                                                       <tr>
                                                                                          <td>
                                                                                             <?php $geos = json_decode($offer->restrictions->geo_targeting); ?>
                                                                                             @foreach($geos as $geo)
                                                                                                {{ $geo }},
                                                                                             @endforeach
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                                 @else
                                                                                 All Countries.
                                                                                 @endif  
                                                                              </td>
                                                                           </tr>
                                                                           <tr>
                                                                              <th style="text-align: center;vertical-align: middle">Device</th>
                                                                              <td>
                                                                                 @if($offer->restrictions->platform_targeting != null)
                                                                                 <table class="table table-bordered no-margin">
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <th>Mobile Carrier Targeting</th>
                                                                                       </tr>
                                                                                       <tr>
                                                                                          <td>
                                                                                             <?php $mobiles = json_decode($offer->restrictions->platform_targeting); ?>
                                                                                             @foreach($mobiles as $mobile)
                                                                                                {{ $mobile }},
                                                                                             @endforeach
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                                 @else
                                                                                 All Devices.
                                                                                 @endif  
                                                                              </td>
                                                                           </tr>
                                                                           <tr>
                                                                              <th style="width:110px;text-align: center;vertical-align: middle">Mobile Carrier</th>
                                                                              <td>
                                                                                 @if($offer->restrictions->mobile_carrier_targeting != null)
                                                                                 <table class="table table-bordered no-margin">
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <th>Mobile Carrier Targeting</th>
                                                                                       </tr>
                                                                                       <tr>
                                                                                          <td>
                                                                                             <?php $mobiles = json_decode($offer->restrictions->mobile_carrier_targeting); ?>
                                                                                             @foreach($mobiles as $mobile)
                                                                                                {{ $mobile }},
                                                                                             @endforeach
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                                 @else
                                                                                 All mobile carriers.
                                                                                 @endif                    
                                                                              </td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>



                                                <div class="box box-default">
                                                   <div class="box-header with-border">
                                                      
                                                   </div>
                                                </div>
                                             </section>
                                             <section class="col-xs-12 col-sm-12 col-md-5">


                                                <div class="accordian-example">
                                                   <div class="panel-group" id="links_dest" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#links_dest" href="#links" aria-expanded="true" aria-controls="links">
                                                               <i class="fa fa-link"></i> Links
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="links" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                               <!-- /.box-header -->
                                                               <div class="box-body">
                                                                  <p style="border-bottom: 1px solid #eee;">
                                                                     <label>Destination URL: </label><br>
                                                                     <textarea readonly="readonly" onclick="$(this).select()" class="form-control" rows="2" style="background-color:white">{{ $offer->destination_url }}</textarea>
                                                                     <br>
                                                                  </p>
                                                                  <div id="linkBox" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000" style="border-bottom: 1px solid #eee;margin-bottom:10px;">
                                                                     <div class="row">
                                                                        <div class="col-sm-12"><label>Event Postback :</label></div>
                                                                        <div class="col-sm-12" style="margin-top: 5px">
                                                                           <textarea id="event_link" readonly="readonly" onclick="$(this).select()" class="form-control" rows="2" placeholder="Select Event Firstly" style="background-color:white">{{ $offer->offer_postback }}</textarea>
                                                                        </div>
                                                                     </div>
                                                                     <br>
                                                                     <script></script>
                                                                  </div>
                                                                  <div id="trackingBox" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000">
                                                                     <div class="row">
                                                                        <div class="col-sm-12"><label>Tracking Link :</label></div>
                                                                        <div class="col-sm-12">
                                                                           <select class="form-control select2" id="tracking_link" data-placeholder="Select Affiliate" name="tracking_link" required="required">
                                                                              <option disabled="disabled" selected="selected">Please Select. . .</option>
                                                                              @if(!empty($users))
                                                                                 @foreach($users as $user)
                                                                                    <option value="{{ $user->usertracklink }}">{{ $user->fname }}</option>
                                                                                 @endforeach
                                                                              @endif
                                                                           </select>                    
                                                                        </div>
                                                                        <div class="col-sm-12" style="margin-top: 5px">
                                                                           <textarea id="aff_tracking" readonly="readonly" onclick="$(this).select()" class="form-control" rows="2" placeholder="Please select an affiliate." style="background-color:white"></textarea>
                                                                        </div>
                                                                     </div>
                                                                     <script></script>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>





                                                <div class="accordian-example">
                                                   <div class="panel-group" id="tracking_param" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#tracking_param" href="#tracking_parameter" aria-expanded="true" aria-controls="tracking_parameter">
                                                               <i class="fa fa-server"></i> Tracking Parameters
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="tracking_parameter" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">

                                                               <!-- /.box-header -->
                                                               <div class="box-body table-responsive">
                                                                  <table class="table table-bordered" id="tracking-params-box">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{click_id}" value="{click_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{offer_id}" value="{offer_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{event_id}" value="{event_id}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{country_id}" value="{country_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_id}" value="{aff_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{adv_id}" value="{adv_id}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{adv_sub1}" value="{adv_sub1}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{adv_sub2}" value="{adv_sub2}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{adv_sub3}" value="{adv_sub3}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{aff_sub1}" value="{aff_sub1}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_sub2}" value="{aff_sub2}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_sub3}" value="{aff_sub3}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{aff_sub4}" value="{aff_sub4}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_sub5}" value="{aff_sub5}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{source_id}" value="{source_id}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{agent}" value="{agent}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{click_time}" value="{click_time}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{payout}" value="{payout}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{amount}" value="{amount}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{referer}" value="{referer}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{accept_lan}" value="{accept_lan}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{ip}" value="{ip}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{unique_click}" value="{unique_click}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{currency}" value="{currency}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{ios_idfa}" value="{ios_idfa}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{android_id}" value="{android_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{google_aid}" value="{google_aid}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{conversion_ip}" value="{conversion_ip}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{callback}" value="{callback}" readonly="" type="text"></td>
                                                                           <td></td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>



                                                <div class="accordian-example">
                                                   <div class="panel-group" id="affiliate_pay" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#affiliate_pay" href="#affiliate_payout" aria-expanded="true" aria-controls="affiliate_payout">
                                                               <i class="fa fa-usd"></i> Affiliate Payout
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="affiliate_payout" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">

                                                               <div class="box box-default">
                                                                  <div id="affiliate-payout-box" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000">
                                                                     <div id="w0" class="grid-view">
                                                                        <div class="box-body no-padding table-responsive">
                                                                           <table class="table table-hover table-striped" role="grid">
                                                                              <colgroup>
                                                                                 <col width="50">
                                                                                 <col>
                                                                                 <col>
                                                                                 <col>
                                                                                 <col width="155px">
                                                                                 <col width="60">
                                                                                 <col width="50">
                                                                              </colgroup>
                                                                              <thead>
                                                                                 <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Event</th>
                                                                                    <th>Affiliate</th>
                                                                                    <th>Currency</th>
                                                                                    <th>Payout</th>
                                                                                    <th>Type</th>
                                                                                    <th class="action-column">Action</th>
                                                                                 </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>




                                                <div class="accordian-example">
                                                   <div class="panel-group" id="affiliate_pay" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#affiliate_pay" href="#affiliate_payout" aria-expanded="true" aria-controls="affiliate_payout">
                                                               <i class="fa fa-files-o"></i> Creative Files
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="affiliate_payout" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">

                                                               <div class="box box-default">
                                                                  <div id="affiliate-payout-box" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000">
                                                                     <div id="w0" class="grid-view">
                                                                        <div class="box-body no-padding table-responsive">
                                                                           <table class="table table-hover table-striped" role="grid">
                                                                              <thead>
                                                                                 <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Preview</th>
                                                                                    <th>Size</th>
                                                                                    <th>Link</th>
                                                                                 </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                    <td colspan="4" align="center">No files.</td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                             </section>
                                          </div>




                                       </div>
                                       <div id="custom_r2" class="tab-pane fade in">
                                          <div class="advance-table">
                                             <table id="responsive_datatables_example" class="table display table-striped table-bordered responsive nowrap">
                                                <thead>
                                                   <tr>
                                                      <th>Affiliate</th>
                                                      <th>Caps Type</th>
                                                      <th>Category</th>
                                                      <th>Clicks</th>
                                                      <th>Conversions</th>
                                                      <th>Budget</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td><a href="{{ asset('affiliate-detail-page') }}">asdf #3</a></td>
                                                      <td>None</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>
                                                         <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td><a href="{{ asset('affiliate-detail-page') }}">asdf #3</a></td>
                                                      <td>None</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>
                                                         <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                                      </td>
                                                   </tr>
                                                   

                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </form>                                 
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Add Product Area -->
                   
               </div>
            </div>
         @endsection



