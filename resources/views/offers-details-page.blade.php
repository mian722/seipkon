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
                                    <div class="tab-content">
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
                                                               <h3>offer test google</h3><br />
                                                               <div class="row base-info">
                                                                  <div class="col-sm-3">
                                                                     <button type="button" class="btn btn-success" name="">Upload Image</button>  
                                                                  </div>
                                                                  <div class="col-sm-9 col-md-9">
                                                                     <div class="row">
                                                                        <div class="col-xs-6">
                                                                           <p><label>Revenue: </label> RPA $2</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Payout: </label> CPA $1</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Currency: </label> USD</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Status: </label> <span class="label label-success">Active</span></p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Start Date:</label> 2018-07-01</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>End Date:</label> 2019-07-01</p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p>
                                                                              <label>Advertiser: </label>
                                                                              sss                        
                                                                           </p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p>
                                                                              <label>Manager: </label>
                                                                              <a title="amirali2418@gmail.com">Amir Ashraf</a>                        
                                                                           </p>
                                                                        </div>
                                                                        <div class="col-xs-6">
                                                                           <p><label>Type: </label> Require Approval</p>
                                                                        </div>
                                                                        <div class="col-xs-12">
                                                                           <p>
                                                                              <label>Preview Link:</label>
                                                                              <a href="http://google.com" target="_blank">http://google.com</a>
                                                                           </p>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row base-info">
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p>
                                                                        <label>Lead Traffic to Preview URL : </label>
                                                                        OFF                
                                                                     </p>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p><label>Conversion Protocol: </label> Postback URL</p>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p>
                                                                        <label>Conversions Need Approval : </label>
                                                                        Disable                
                                                                     </p>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <label>Tag : </label>
                                                                     <span class="not-set">not set</span>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p>
                                                                        <label>Hide Referral : </label>
                                                                        Default                
                                                                     </p>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-6">
                                                                     <p>
                                                                        <label>Advertiser's Offer ID : </label>
                                                                        <span class="not-set">not set</span>
                                                                     </p>
                                                                  </div>
                                                                  <div class="col-xs-12 col-sm-12">
                                                                     <p>
                                                                        <label>Application ID : </label>
                                                                        <span class="not-set">not set</span>
                                                                     </p>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="accordian-example">
                                                   <div class="panel-group" id="event_accordian" role="tablist" aria-multiselectable="true">
                                                      <div class="panel panel-default">
                                                         <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                               <a role="button" data-toggle="collapse" data-parent="#event_accordian" href="#event_accord" aria-expanded="true" aria-controls="event_accord">
                                                               <i class="fa fa-tags"></i> Event
                                                               </a>
                                                            </h4>
                                                         </div>
                                                         <div id="event_accord" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                               <div id="offer-event-box" >
                                                                  <div class="box-header with-border">
                                                                     <div class="row">
                                                                        <div class="col-md-5 col-xs-6">
                                                                           <form id="searchForm" role="form">
                                                                              <select class="form-control select2" multiple="multiple" data-placeholder="Select a State">
                                                                                 <option>Alabama</option>
                                                                                 <option>Alaska</option>
                                                                                 <option>California</option>
                                                                                 <option>Delaware</option>
                                                                                 <option>Tennessee</option>
                                                                                 <option>Texas</option>
                                                                                 <option>Washington</option>
                                                                              </select>
                                                                           </form>
                                                                        </div>
                                                                        <div class="col-xs-6 sm-margin-bottom pull-right">
                                                                           <a class="btn btn-success pull-right event-modal-remote" href="/adn/index.php?r=offer-event%2Fcreate&amp;id=4" data-pjax="0">Create</a>            
                                                                        </div>
                                                                     </div><br />
                                                                     <div id="w0" class="grid-view">
                                                                        <div class="box-body table-responsive">
                                                                           <table class="table table-hover">
                                                                              <thead>
                                                                                 <tr>
                                                                                    <th>ID</th>
                                                                                    <th>Event</th>
                                                                                    <th>Protocol</th>
                                                                                    <th>EndPoint</th>
                                                                                    <th>Private</th>
                                                                                    <th>Multiple</th>
                                                                                    <th>Need Approval</th>
                                                                                    <th>Revenue</th>
                                                                                    <th>Payout</th>
                                                                                    <th>Status</th>
                                                                                    <th class="action-column">Action</th>
                                                                                 </tr>
                                                                              </thead>
                                                                              <tbody>
                                                                                 <tr data-key="4">
                                                                                    <td>1</td>
                                                                                    <td>Initial Event</td>
                                                                                    <td>Postback URL</td>
                                                                                    <td>No</td>
                                                                                    <td>No</td>
                                                                                    <td>No</td>
                                                                                    <td>No</td>
                                                                                    <td>RPA: $2</td>
                                                                                    <td>CPA: $1</td>
                                                                                    <td>Active</td>
                                                                                    <td></td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                        <div class="box-footer clearfix">
                                                                           <div class="pull-left summary">Showing <b>1-1</b> of <b>1</b> item.</div>
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
                                                                           <b>Advertiser Total Cap</b>: 1 conversions (GMT +04:00)                
                                                                        </p>
                                                                     </div>
                                                                     <div class="col-sm-12">
                                                                        <p>
                                                                           <b>Affiliate Total Cap</b>: 1 conversions (GMT +04:00)                
                                                                        </p>
                                                                     </div>
                                                                     <div class="col-sm-12 desc-content">
                                                                        <p><strong>Description</strong> :</p>
                                                                        <p>sdgadasdga</p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-sm-12">
                                                                        <p>
                                                                           <strong>Redirect Offer
                                                                           <i class="fa fa-question-circle" title="Current offer will be redirected to this offer if paused, passed expiration date, or cap (offer cap &amp; affiliate cap) is exceeded." data-toggle="tooltip" data-html="true"></i>                    </strong>
                                                                           <a href="/adn/index.php?r=offer%2Fdetail&amp;id=3" target="_blank">dark link #3 </a>                
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-sm-12" style="word-break: break-all;word-wrap:break-word;">
                                                                        <p>
                                                                           <strong>Offer Pools
                                                                           <i class="fa fa-question-circle" title="A pool of offers in which traffic can be redirected to in the event that they don’t match Geo &amp; Platform targeting.You could multi-select more pools at the same time." data-toggle="tooltip" data-html="true"></i>                    </strong>
                                                                           None                
                                                                        </p>
                                                                     </div>
                                                                  </div>
                                                                  <div class="row">
                                                                     <div class="col-sm-12" style="word-break: break-all;word-wrap:break-word;">
                                                                        <p>
                                                                           <strong>Tracking Domain
                                                                           <i class="fa fa-question-circle" title="This allows you to host your offer tracking URLs on a custom domain." data-toggle="tooltip" data-html="true"></i>                    </strong>
                                                                           amir.offerstrack.net                
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
                                                                                 <div class="toggle toggle-modern"></div>
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
                                                                                 <div class="toggle toggle-modern"></div>
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
                                                                                 <table class="table table-bordered no-margin">
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <th>Countries (Exclude)</th>
                                                                                          <th>Cities</th>
                                                                                       </tr>
                                                                                       <tr>
                                                                                          <td>AD</td>
                                                                                          <td>All States and Cities</td>
                                                                                       </tr>
                                                                                       <tr>
                                                                                          <td>AE</td>
                                                                                          <td>All States and Cities</td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </td>
                                                                           </tr>
                                                                           <tr>
                                                                              <th style="text-align: center;vertical-align: middle">Device</th>
                                                                              <td>
                                                                                 <table class="table table-bordered no-margin">
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <th>Platform</th>
                                                                                          <th>OS Version</th>
                                                                                       </tr>
                                                                                       <tr>
                                                                                          <td>PC</td>
                                                                                          <td><strong>Windows</strong> (Windows XP, Windows Vista, Windows 7, Windows 8, Windows 8.1, Windows 10)<br></td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </td>
                                                                           </tr>
                                                                           <tr>
                                                                              <th style="width:110px;text-align: center;vertical-align: middle">Mobile Carrier</th>
                                                                              <td>
                                                                                 All mobile carriers.                    
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
                                                                     <textarea readonly="readonly" onclick="$(this).select()" class="form-control" rows="2" style="background-color:white">https://www.google.com.pk?as=</textarea>
                                                                     <br>
                                                                  </p>
                                                                  <div id="linkBox" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000" style="border-bottom: 1px solid #eee;margin-bottom:10px;">
                                                                     <div class="row">
                                                                        <div class="col-sm-12"><label>Event Postback :</label></div>
                                                                        <div class="col-sm-12">
                                                                           <select id="event_select" class="form-control select2-hidden-accessible" name="event" data-s2-options="s2options_d6851687" data-krajee-select2="select2_37946846" style="display:none" tabindex="-1" aria-hidden="true">
                                                                              <option value="">Event</option>
                                                                              <option value="1" selected="">Initial Event #1</option>
                                                                           </select>
                                                                           <span class="select2 select2-container select2-container--krajee" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-event_select-container"><span class="select2-selection__rendered" id="select2-event_select-container" title="Initial Event #1"><span class="select2-selection__clear">×</span>Initial Event #1</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>                    
                                                                        </div>
                                                                        <div class="col-sm-12" style="margin-top: 5px">
                                                                           <textarea id="event_link" readonly="readonly" onclick="$(this).select()" class="form-control" rows="2" placeholder="Select Event Firstly" style="background-color:white"></textarea>
                                                                        </div>
                                                                     </div>
                                                                     <br>
                                                                     <script></script>
                                                                  </div>
                                                                  <div id="trackingBox" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000">
                                                                     <div class="row">
                                                                        <div class="col-sm-12"><label>Tracking Link :</label></div>
                                                                        <div class="col-sm-12">
                                                                           <select id="aff_select" class="form-control select2-hidden-accessible" name="affiliate" data-s2-options="s2options_d6851687" data-krajee-select2="select2_f8bdd78e" style="display:none" tabindex="-1" aria-hidden="true">
                                                                              <option value="">Affiliate</option>
                                                                              <option value="1">james #1</option>
                                                                              <option value="3">asdf #3</option>
                                                                           </select>
                                                                           <span class="select2 select2-container select2-container--krajee" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-aff_select-container"><span class="select2-selection__rendered" id="select2-aff_select-container"><span class="select2-selection__placeholder">Affiliate</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>                    
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
                                                                           <td><input class="hidden-style" name="{country_id}" value="{country_id}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{aff_id}" value="{aff_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{adv_id}" value="{adv_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{adv_sub1}" value="{adv_sub1}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{adv_sub2}" value="{adv_sub2}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{adv_sub3}" value="{adv_sub3}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_sub1}" value="{aff_sub1}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_sub2}" value="{aff_sub2}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_sub3}" value="{aff_sub3}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{aff_sub4}" value="{aff_sub4}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{aff_sub5}" value="{aff_sub5}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{source_id}" value="{source_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{agent}" value="{agent}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{click_time}" value="{click_time}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{payout}" value="{payout}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{amount}" value="{amount}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{referer}" value="{referer}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{accept_lan}" value="{accept_lan}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{ip}" value="{ip}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{unique_click}" value="{unique_click}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{currency}" value="{currency}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{ios_idfa}" value="{ios_idfa}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{android_id}" value="{android_id}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{google_aid}" value="{google_aid}" readonly="" type="text"></td>
                                                                           <td><input class="hidden-style" name="{conversion_ip}" value="{conversion_ip}" readonly="" type="text"></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td><input class="hidden-style" name="{callback}" value="{callback}" readonly="" type="text"></td>
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
                                                                                    <td colspan="7">
                                                                                       <div class="empty">No results found.</div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                        </div>
                                                                        <div class="box-footer clearfix">
                                                                           <div class="row">
                                                                              <div class="col-sm-5"></div>
                                                                              <div class="col-sm-7">
                                                                                 <div class="dataTables_paginate"></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div id="payout-modal" class="fade modal" role="dialog">
                                                                  <div class="modal-dialog ">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="box box-default collapsed-box padding">
                                                                  <div class="box-header with-border">
                                                                     <h3 class="box-title" style="cursor: pointer"><i class="fa fa-files-o"></i> Creative Files</h3>
                                                                     <div class="box-tools pull-right">
                                                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                                                     </div>
                                                                     <!-- /.box-tools -->
                                                                  </div>
                                                                  <!-- /.box-header -->
                                                                  <div class="box-body table-responsive" style="display: none;">
                                                                     <table class="table table-hover creative-files">
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>ID</th>
                                                                              <th>Preview</th>
                                                                              <th>Size</th>
                                                                              <th>Link</th>
                                                                           </tr>
                                                                           <tr>
                                                                              <td colspan="4" align="center">No files.</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                                  <!-- /.creative box -->
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