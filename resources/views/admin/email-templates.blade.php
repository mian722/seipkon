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
                        <div id="appearance" class="tab-pane fade in active">
                           <div class="tabbable boxed parentTabs">
                              <ul class="nav nav-tabs">
                                 <li class="active"><a href="#set1">Affiliate</a></li>
                                 <li><a href="#set2">Advertiser</a></li>
                                 <li><a href="#set3">Offer</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in custom-tab-wizard" id="set1">
                                    <div class="tabbable">
                                       <ul class="nav nav-tabs">
                                          <li class="active"><a href="#sub11"><span>1</span> Affiliate Sign Up</a></li>
                                          <li><a href="#sub12"><span>2</span> Affiliate Approval</a></li>
                                          <li><a href="#sub13"><span>3</span> Affiliate Rejection</a></li>
                                          <li><a href="#sub14"><span>4</span> Affiliate Password Re-setting</a></li>
                                       </ul>
                                       <div class="tab-content">
                                          <div class="tab-pane fade active in" id="sub11">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affsignup" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub12">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affapproval" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor1">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub13">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affrejection" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor2">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub14">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affpassreset" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor3">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade custom-tab-wizard" id="set2">
                                    <div class="tabbable">
                                       <ul class="nav nav-tabs">
                                          <li class="active"><a href="#sub21"><span>1</span> Advertiser Sign Up</a></li>
                                          <li><a href="#sub22"><span>2</span> Advertiser Approval</a></li>
                                          <li><a href="#sub23"><span>3</span> Advertiser Rejection</a></li>
                                          <li><a href="#sub24"><span>4</span> Advertiser Password Re-setting</a></li>
                                       </ul>
                                       <div class="tab-content">
                                          <div class="tab-pane fade active in" id="sub11">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advsignup" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor4">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub12">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advapproval" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor5">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub13">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advrejection" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor6">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub14">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advpassreset" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor7">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade custom-tab-wizard" id="set3">
                                    <div class="tabbable">
                                       <ul class="nav nav-tabs">
                                          <li class="active"><a href="#sub31"><span>1</span> Offers Approval</a></li>
                                          <li><a href="#sub32"><span>2</span> Offers Payout Change</a></li>
                                          <li><a href="#sub33"><span>3</span> Offers Status Change</a></li>
                                       </ul>
                                       <div class="tab-content">
                                          <div class="tab-pane fade active in" id="sub11">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="offerapproval" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor8">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub12">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="offerpayout" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor9">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub13">
                                             <form method="post" action="{{ route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="offerstatus" name="email_type">
                                                         <input class="form-control" name="email_subject" value="Notification of Account Registration" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor10">
                                                            @if(isset($affiliatetempalte))
                                                              {{ $affiliatetempalte->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;"><h3><b>Dear Partner,</b></h3><p><b><br></b></p><p>Thank you for registering&nbsp;as our affiliate.</p><p><br></p><p>Your account {emial} has been submitted for approval. You will receive an email notification on your application status soon.</p><p><br></p><p>Best Regards,</p><p>{network_name}&nbsp;</p>
                                                            </div>
                                                            @endif
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <h3>Short Codes <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></h3>
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
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">Save</button>
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
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<script type="text/javascript">
   $(document).ready(function(){

         $('#genratereport').on('submit', function(e){
            e.preventDefault();
            $.fn.serializeObject = function()
               {
                  var o = {};
                  var a = this.serializeArray();
                  $.each(a, function() {
                      if (o[this.name]) {
                          if (!o[this.name].push) {
                              o[this.name] = [o[this.name]];
                          }
                          o[this.name].push(this.value || '');
                      } else {
                          o[this.name] = this.value || '';
                      }
                  });
                  return o;
               };
            $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
            });
            var allform = JSON.stringify($(this).serializeObject());
            var token = "{{ csrf_token() }}";
            $.ajax({
               type: "POST",
               url: '{{ route("conversionreportgenerate") }}',
               data: { "_token": token, "allform": allform},
               success: function( response ) {
                  $('#report_response').html(response);
                      $('#button_datatables').DataTable( {
                          dom: 'Bfrtip',
                          buttons: [
                              'print',
                              'pdf',
                              'csv',
                              'copy',
                          ]
                      } );
                  $('.dt-buttons.btn-group > button').addClass('datatable-btn');
               }
           });
      });
   });      
</script>
@endsection