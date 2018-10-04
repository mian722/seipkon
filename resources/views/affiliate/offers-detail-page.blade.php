@extends('layouts.userheader')
         
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
                        <div class="page-box" style="padding: 0;">
                           <div class="tabs-example">
                              <div class="tabs-box-example horizontal-tab-example">
                                 <form action="">
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
                                                                        <div class="col-xs-12">
                                                                           <p><label>Payout: </label> {{ $offer->payout_type }} ${{ $offer->payout }}</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Currency: </label> USD</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Status: </label> <span class="label label-{{ ($offer->status == 1) ? 'success': 'warning'  }}">{{ ($offer->status == 1) ? 'Active': 'Paused'  }}</span></p>
                                                                        </div>
                                                                        <?php $offerlink = explode(" - ",$offer->duration); ?>
                                                                        <div class="col-xs-12">
                                                                           <p><label>End Date:</label> {{ $offerlink[1] }}</p>
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
                                                               @if(!empty($users))
                                                               <div class="box-body">
                                                                   @if( $users->status == 1 )
                                                                  <p style="border-bottom: 1px solid #eee;">
                                                                     <label>Tracking Link : </label><br>
                                                                     <textarea readonly="readonly" onclick="$(this).select()" class="form-control" rows="2" style="background-color:white">{{ $users->usertracklink }}</textarea>
                                                                     <br>
                                                                  </p>
                                                                  <div id="linkBox" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000" style="border-bottom: 1px solid #eee;margin-bottom:10px;">
                                                                     <div class="row">
                                                                        <div class="col-sm-12"><label>Postback Link :</label></div>
                                                                        @if( !empty($users->postbacklink))
                                                                           <div class="col-sm-12" style="margin-top: 5px">
                                                                           <textarea id="event_link" readonly="readonly" onclick="$(this).select()" class="form-control" rows="2" placeholder="Select Event Firstly" style="background-color:white">{{ $users->postbacklink }}</textarea>
                                                                        </div>
                                                                        @endif
                                                                        <div class="col-sm-12 " style="margin-top: 5px; text-align: right;">
                                                                           <a class="btn btn-success" href="{{ route('affiliate.createpostback' , [Auth::user()->fname, 'id'=> $users->id]) }}">Add Postback</a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               @else 
                                                               <div class="col-sm-12 " style="margin-top: 5px; text-align: right;">
                                                                           <a class="btn btn-success" href="{{ $offer->preview_url }}" target="_blank">Preview Offer</a>
                                                                           <a class="btn btn-warning" href="#
                                                                           ">Pending Approval</a>
                                                                        </div>
                                                               @endif
                                                               @else
                                                                     <div class="col-sm-12 " style="margin-top: 5px; text-align: right;">
                                                                           <a class="btn btn-success" href="{{ $offer->preview_url }}" target="_blank">Preview Offer</a>
                                                                           <a class="btn btn-danger" href="
                                                                           {{ route('applyoffer' , [Auth::user()->fname, 'id'=> $offer->id]) }}
                                                                           ">Apply Offer</a>
                                                                        </div>
                                                                  @endif
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
                                             </section>
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



