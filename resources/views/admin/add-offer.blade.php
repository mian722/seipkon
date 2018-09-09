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
                           <div class="tabs-example add-product-form-group">
                              <div class="tabs-box-example horizontal-tab-example">
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('add-offer.store') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <ul class="nav nav-tabs" id="service_pro" role="tablist">
                                       <li class="active" role="presentation"><a href="#Details" role="tab" data-toggle="tab">Details</a>
                                       </li>
                                       <li role="presentation"><a href="#Restriction" role="tab" data-toggle="tab">Restriction</a></li>
                                       <li role="presentation"><a href="#Targeting" role="tab" data-toggle="tab">Targeting</a></li>
                                       <li role="presentation"><a href="#Creative" role="tab" data-toggle="tab">Creative Files</a></li>
                                    </ul>
                                    <div id="seipkkon_tab_content" class="tab-content">
                                       <div id="Details" class="tab-pane fade in active">
                                          <div class="row">
                                             <div class="col-md-3">
                                                <div class="profile-widget-img">
                                                   <img src="{{ asset('public/assets/img/msg-1.png') }}" id="img_display" alt="profile">
                                                      <div class="product-upload btn btn-info">
                                                         <p>
                                                            <i class="fa fa-upload"></i>
                                                            Upload Image
                                                         </p>
                                                         <input type="file" name="offer_image" onchange="readURL(this);">
                                                      </div>
                                                </div>
                                             </div>
                                             <div class="col-md-9">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <p>
                                                         <label>Product Name</label>
                                                         <input type="text" name="offer_name" required="required" placeholder="Enter Product Name" value="{{ (isset($updatedata) ? $updatedata->offer_name : null)}}">
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Advertiser</label>
                                                         <select class="form-control select2" data-placeholder="Select Advertiser" name="adv_id" required="required">
                                                            @foreach($users as $user)
                                                               <option value="{{ $user->id }}" {{ ((isset($updatedata->adv_id) ? $updatedata->adv_id : null) == $user->id) ? 'selected' : '' }}>{{ $user->fname }} {{ $user->lname }}</option>
                                                            @endforeach
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Tag <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" multiple="multiple" data-placeholder="Select Tags" name="tags[]" required="required">
                                                            <option {{ isset($updatedata->tags) ? ((strpos($updatedata->tags, 'Alabama') !== false) ? 'selected' : '') : '' }}>Alabama</option>
                                                            <option {{ isset($updatedata->tags) ? ((strpos($updatedata->tags, 'Alaska') !== false) ? 'selected' : '') : '' }}>Alaska</option>
                                                            <option {{ isset($updatedata->tags) ? ((strpos($updatedata->tags, 'California') !== false) ? 'selected' : '') : '' }}>California</option>
                                                            <option {{ isset($updatedata->tags) ? ((strpos($updatedata->tags, 'Delaware') !== false) ? 'selected' : '') : '' }}>Delaware</option>
                                                            <option {{ isset($updatedata->tags) ? ((strpos($updatedata->tags, 'Tennessee') !== false) ? 'selected' : '') : '' }}>Tennessee</option>
                                                            <option {{ isset($updatedata->tags) ? ((strpos($updatedata->tags, 'Texas') !== false) ? 'selected' : '') : '' }}>Texas</option>
                                                            <option {{ isset($updatedata->tags) ? ((strpos($updatedata->tags, 'Washington') !== false) ? 'selected' : '') : '' }}>Washington</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Duration <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <input type="text" name="duration" required="required" id="reservation" placeholder="Date" value="{{ (isset($updatedata->duration)) ? $updatedata->duration : '' }}" />
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Status <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" name="status" required="required">
                                                            <option selected="selected" value="1" {{ ((isset($updatedata->status) ? $updatedata->status : null) == 1) ? 'selected' : '' }}>Active</option>
                                                            <option value="2" {{ ((isset($updatedata->status) ? $updatedata->status : null) == 2) ? 'selected' : '' }}>Paused</option>
                                                            <option value="0" {{ ((isset($updatedata->status) ? $updatedata->status : null) == 0) ? 'selected' : '' }}>Pending</option>
                                                            <option value="3" {{ ((isset($updatedata->status) ? $updatedata->status : null) == 3) ? 'selected' : '' }}>Deleted</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Revenue Type</label>
                                                      <select class="form-control select2" name="revenue_type" required="required">
                                                         <option {{ ((isset($updatedata->revenue_type) ? $updatedata->revenue_type : null) == 'RPA') ? 'selected' : '' }}>RPA</option>
                                                         <option {{ ((isset($updatedata->revenue_type) ? $updatedata->revenue_type : null) == 'RPS') ? 'selected' : '' }}>RPS</option>
                                                         <option {{ ((isset($updatedata->revenue_type) ? $updatedata->revenue_type : null) == 'RPA+RPS') ? 'selected' : '' }}>RPA+RPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Revenue</label>
                                                      <input type="text" placeholder="Revenue" name="revenue" required="required" value="{{ (isset($updatedata->revenue)) ? $updatedata->revenue : '' }}">
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                      <p>
                                                         <label>Offer Approval <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" name="offer_approval" required="required">
                                                            <option value="1" {{ ((isset($updatedata->offer_approval) ? $updatedata->offer_approval : null) == 1) ? 'selected' : '' }}>Require Approval</option>
                                                            <option value="2" {{ ((isset($updatedata->offer_approval) ? $updatedata->offer_approval : null) == 2) ? 'selected' : '' }}>Public</option>
                                                            <option value="3" {{ ((isset($updatedata->offer_approval) ? $updatedata->offer_approval : null) == 3) ? 'selected' : '' }}>Private</option>
                                                         </select>
                                                      </p>
                                                </div>
                                                <div class="col-md-3">&nbsp;</div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Payout Type</label>
                                                      <select class="form-control select2" name="payout_type" required="required">
                                                         <option {{ ((isset($updatedata->payout_type) ? $updatedata->payout_type : null) == 'CPA') ? 'selected' : '' }}>CPA</option>
                                                         <option {{ ((isset($updatedata->payout_type) ? $updatedata->payout_type : null) == 'CPS') ? 'selected' : '' }}>CPS</option>
                                                         <option {{ ((isset($updatedata->payout_type) ? $updatedata->payout_type : null) == 'CPA+CPS') ? 'selected' : '' }}>CPA+CPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Payout</label>
                                                      <input type="text" placeholder="Payout" name="payout" required="required" value="{{ (isset($updatedata->payout)) ? $updatedata->payout : '' }}">
                                                   </p>
                                                </div>
                                                <div class="col-md-3" style="display: none;">
                                                      <p>
                                                         <label>Affiliate Payout Tiers <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" >
                                                            <option selected="selected">Disable</option>
                                                            <option>Enable</option>
                                                         </select>
                                                      </p>
                                                </div>
                                                <div class="col-md-3">&nbsp;</div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <p>
                                                      <label>Preview URL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <input type="text" placeholder="Preview URL" name="preview_url" required="required" value="{{ (isset($updatedata->preview_url)) ? $updatedata->preview_url : '' }}">
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <p>
                                                      <label>Destination URL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <input type="text" placeholder="Destination URL" name="destination_url" required="required" value="{{ (isset($updatedata->destination_url)) ? $updatedata->destination_url : '' }}">
                                                   </p>
                                                </div>
                                             </div>

                                             <div style="clear: both; width: 100%; display: block; overflow: hidden;margin-bottom: 30px;"></div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <h3>Tracking Parameters <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>

                                                   <div class="table-responsive">
                                                      <table class="table">
                                                         <tbody>
                                                            <tr>
                                                               <td>{click_id}</td>
                                                               <td>{offer_id}</td>
                                                               <td>{event_id}</td>
                                                               <td>{country_id}</td>
                                                               <td>{aff_id}</td>
                                                            </tr>
                                                            <tr>
                                                               <td>{adv_id}</td>
                                                               <td>{adv_sub1}</td>
                                                               <td>{adv_sub2}</td>
                                                               <td>{adv_sub3}</td>
                                                               <td>{aff_sub1}</td>
                                                            </tr>
                                                            <tr>
                                                               <td>{aff_sub2}</td>
                                                               <td>{aff_sub3}</td>
                                                               <td>{aff_sub4}</td>
                                                               <td>{aff_sub5}</td>
                                                               <td>{source_id}</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Conversion Protocol <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <select class="form-control select2" name="signup_protocol" required="required">
                                                         <option value="postbackurl" {{ ((isset($updatedata->signup_protocol) ? $updatedata->signup_protocol : null) == 'postbackurl') ? 'selected' : '' }}>Postback URL</option>
                                                         <option value="cps" {{ ((isset($updatedata->signup_protocol) ? $updatedata->signup_protocol : null) == 'cps') ? 'selected' : '' }}>CPS</option>
                                                         <option value="cpa+cps" {{ ((isset($updatedata->signup_protocol) ? $updatedata->signup_protocol : null) == 'cpa+cps') ? 'selected' : '' }}>CPA+CPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Conversions Need Approval <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <select class="form-control select2" name="signup_need_approval" required="required">
                                                         <option value="0" {{ ((isset($updatedata->signup_need_approval) ? $updatedata->signup_need_approval : null) == 0) ? 'selected' : '' }}>Disable</option>
                                                         <option value="1" {{ ((isset($updatedata->signup_need_approval) ? $updatedata->signup_need_approval : null) == 1) ? 'selected' : '' }}>Enable</option>
                                                      </select>
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <p>
                                                      <label>Description <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <textarea id="page-editor" name="description" rows="6">
                                                      {{ (isset($updatedata->description)) ? $updatedata->description : '' }}</textarea>
                                                   </p>
                                                   <button type="submit" onclick="return false;" class="changetabbutton pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                       <div id="Restriction" class="tab-pane fade in">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Advertiser Caps Type <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="col-md-2">
                                                      <select class="form-control select2" name="advertiser_caps_type" required="required">
                                                         <option value="none" {{ ((isset($updatedata->restrictions->advertiser_caps_type) ? $updatedata->restrictions->advertiser_caps_type : null) == 'none') ? 'selected' : '' }}>None</option>
                                                         <option value="total" {{ ((isset($updatedata->restrictions->advertiser_caps_type) ? $updatedata->restrictions->advertiser_caps_type : null) == 'total') ? 'selected' : '' }}>Total</option>
                                                         <option value="Daily" {{ ((isset($updatedata->restrictions->advertiser_caps_type) ? $updatedata->restrictions->advertiser_caps_type : null) == 'Daily') ? 'selected' : '' }}>Daily</option>
                                                         <option value="revenue" {{ ((isset($updatedata->restrictions->advertiser_caps_type) ? $updatedata->restrictions->advertiser_caps_type : null) == 'revenue') ? 'selected' : '' }}>Revenue</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <input type="text" name="advertiser_caps_value" class="form-control"  placeholder="Enter Product Name">
                                                   </div>
                                                   <div class="col-md-3">
                                                      <input type="text" name="advertiser_caps_value" class="form-control" required="required" placeholder="Enter Product Name" value="{{ (isset($updatedata->restrictions->advertiser_caps_value)) ? $updatedata->restrictions->advertiser_caps_value : '' }}">
                                                   </div>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Affiliate Caps Type <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="col-md-2">
                                                      <select class="form-control select2" name="affiliate_caps_type" required="required">
                                                         <option value="none" {{ ((isset($updatedata->restrictions->affiliate_caps_type) ? $updatedata->restrictions->affiliate_caps_type : null) == 'none') ? 'selected' : '' }}>None</option>
                                                         <option value="total" {{ ((isset($updatedata->restrictions->affiliate_caps_type) ? $updatedata->restrictions->affiliate_caps_type : null) == 'total') ? 'selected' : '' }}>Total</option>
                                                         <option value="Daily" {{ ((isset($updatedata->restrictions->affiliate_caps_type) ? $updatedata->restrictions->affiliate_caps_type : null) == 'Daily') ? 'selected' : '' }}>Daily</option>
                                                         <option value="revenue" {{ ((isset($updatedata->restrictions->affiliate_caps_type) ? $updatedata->restrictions->affiliate_caps_type : null) == 'revenue') ? 'selected' : '' }}>Revenue</option>
                                                      </select>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <input type="text" name="affiliate_caps_value" class="form-control" placeholder="Enter Product Name">
                                                   </div>
                                                   <div class="col-md-3">
                                                      <input type="text" name="affiliate_caps_value" class="form-control" required="required" placeholder="Enter Product Name" value="{{ (isset($updatedata->restrictions->affiliate_caps_value)) ? $updatedata->restrictions->affiliate_caps_value : '' }}">
                                                   </div>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Caps Timezone <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" style="width: 60%;" name="caps_timezone" required="required">
                                                         <option value="" disabled="disabled" {{ (isset($updatedata)) ? '' : 'selected' }}>Please Select</option>
                                                      @foreach($timezones as $timezone)
                                                         <option value="{{ $timezone }}" {{ ((isset($updatedata->restrictions->caps_timezone) ? $updatedata->restrictions->caps_timezone : null) == $timezone) ? 'selected' : '' }}>{{ $timezone }}</option>
                                                      @endforeach
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Redirect Offer <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" style="width: 60%;" name="redirect_offer">
                                                         <option value="" disabled="disabled" {{ (isset($updatedata)) ? '' : 'selected' }}>Please Select</option>
                                                      @foreach($offers as $offer)
                                                         <option value="{{ $offer->id }}" {{ ((isset($updatedata->restrictions->redirect_offer) ? $updatedata->restrictions->redirect_offer : null) == $offer->id) ? 'selected' : '' }}>{{ $offer->offer_name }}</option>
                                                      @endforeach
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Offer Pool <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" data-placeholder="Select a Pool" style="width: 60%;" name="offer_pool" >
                                                      <option value="0" {{ (isset($updatedata)) ? '' : 'selected' }}>None</option>
                                                      @foreach($offerspools as $offerspool)
                                                         <option value="{{ $offerspool->id }}" {{ ((isset($updatedata->restrictions->offer_pool) ? $updatedata->restrictions->offer_pool : null) == $offerspool->id) ? 'selected' : '' }}>{{ $offerspool->name }}</option>
                                                      @endforeach
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Tracking Domain <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" style="width: 40%;" name="   tracking_domain">
                                                      <option selected="selected">test offer #1</option>
                                                      <option>test offer #2</option>
                                                      <option>test offer #3</option>
                                                      <option>test offer #4</option>
                                                      <option {{ ((isset($updatedata) ? $updatedata->restrictions->tracking_domain : null) == $offer->tracking_domain) ? 'selected' : '' }}>{{ (isset($updatedata) ? $updatedata->restrictions->tracking_domain : null)}}</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>SSL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="form-wrap toggle-switches-flex">
                                                      <div class="form-group">
                                                         <input {{ ((isset($updatedata) ? $updatedata->restrictions->ssl : null) == 1) ? 'checked' : '' }}  class="ssl_toggle" name="ssl" data-toggle="toggle" type="checkbox">
                                                      </div>
                                                   </div>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Lead Traffic to Preview URL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="form-wrap toggle-switches-flex">
                                                      <div class="form-group">
                                                         <input {{ ((isset($updatedata) ? $updatedata->restrictions->lead_traffic_preview_url : null) == 1) ? 'checked' : '' }} class="ssl_toggle" name="lead_traffic_preview_url" data-toggle="toggle" type="checkbox">
                                                      </div>
                                                   </div>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Unique IP Tracking <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="form-wrap toggle-switches-flex">
                                                      <div class="form-group">
                                                         <input {{ ((isset($updatedata) ? $updatedata->restrictions->unique_ip_tracking : null) == 1) ? 'checked' : '' }} class="ssl_toggle" name="unique_ip_tracking" data-toggle="toggle" type="checkbox">
                                                      </div>
                                                   </div>
                                                </p>
                                                   <button type="button" class="changetabbutton pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="Targeting" class="tab-pane fade in">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Geo Targeting <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" name="geo_targeting[]" style="width: 60%;">
                                                      @foreach($countries as $key => $value)
                                                         <option {{ isset($updatedata->restrictions) ? ((strpos($updatedata->restrictions->geo_targeting, $key) !== false) ? 'selected' : '') : '' }} value="{{ $key }}">{{ $value[1] }}</option>
                                                      @endforeach
                                                   </select>
                                                   <select class="form-control select2" name="geo_type">
                                                      <option {{ ((isset($updatedata) ? $updatedata->restrictions->geo_type : 'Include') == 1) ? 'checked' : '' }}>Include</option>
                                                      <option {{ ((isset($updatedata) ? $updatedata->restrictions->geo_type : 'Exclude') == 1) ? 'checked' : '' }}>Exclude</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Mobile Carrier Targeting <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 60%;" name="mobile_carrier_targeting[]">
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->mobile_carrier_targeting, 'computer') !== false) ? 'selected' : '') : '' }} value="computer">Computer</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->mobile_carrier_targeting, 'tablet') !== false) ? 'selected' : '') : ''  }} value="tablet">Tablet</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->mobile_carrier_targeting, 'mobile') !== false) ? 'selected' : '') : ''  }} value="mobile">Mobile</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Platform Targeting <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 30%;" name="platform_targeting[]">
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'windows') !== false) ? 'selected' : '') : '' }} value="windows">Windows</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'mac') !== false) ? 'selected' : '') : '' }} value="mac">Mac</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'linux') !== false) ? 'selected' : '') : '' }} value="linux">Linux</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'ubuntu') !== false) ? 'selected' : '') : '' }} value="ubuntu">Ubuntu</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'iphone') !== false) ? 'selected' : '') : '' }} value="iphone">iPhone</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'ipad') !== false) ? 'selected' : '') : '' }} value="ipad">iPod</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'android') !== false) ? 'selected' : '') : '' }} value="android">Android</option>
                                                      <option {{ isset($updatedata) ? ((strpos($updatedata->restrictions->platform_targeting, 'blackberry') !== false) ? 'selected' : '') : '' }} value="blackberry">BlackBerry</option>
                                                   </select>
                                                </p>
                                                   <button type="button" class="changetabbutton pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="Creative" class="tab-pane fade in">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="col-md-4" style="padding: 0;"><label>Maximum files: </label><span>10</span></div>
                                                <div class="col-md-4" style="padding: 0;"><label>Supported formats:</label><span>zip, jpeg, jpg, png, gi</span></div>
                                                <div class="col-md-4" style="padding: 0;"><label>Maximum size per file: </label><span>20M</span></div>
                                                <p>
                                                   <label>Image Pixel between 50 to 3200 in both length and width. </label>
                                                   <div class="product-upload-action" style="text-align: left;">
                                                      <input type="file" name="gallery[]" id="" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                                      <!-- <button type="submit" class="btn btn-danger">
                                                      <i class="fa fa-trash"></i>
                                                      Delete Image
                                                      </button> -->
                                                   </div>
                                                </p>
                                                <p>
                                                   <div class="pull-right">
                                                      <button type="submit" class="pull-right btn btn-success"><i class="fa fa-check"></i>Finish</button>
                                                   </div>
                                                </p>
                                             </div>
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