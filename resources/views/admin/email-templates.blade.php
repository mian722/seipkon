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
                                             <form method="post" action="{{ isset($affsignup) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affsignup" name="email_type">
                                                         @if(isset($affsignup))
                                                         <input type="hidden" value="{{ $affsignup->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($affsignup) ? $affsignup->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor">
                                                            @if(isset($affsignup))
                                                              {{ $affsignup->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{affiliate_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($affsignup) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub12">
                                             <form method="post" action="{{ isset($affapproval) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affapproval" name="email_type">
                                                         @if(isset($affapproval))
                                                         <input type="hidden" value="{{ $affapproval->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($affapproval) ? $affapproval->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor1">
                                                            @if(isset($affapproval))
                                                              {{ $affapproval->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{affiliate_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($affapproval) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub13">
                                             <form method="post" action="{{ isset($affrejection) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affrejection" name="email_type">
                                                         @if(isset($affrejection))
                                                         <input type="hidden" value="{{ $affrejection->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($affrejection) ? $affrejection->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor2">
                                                            @if(isset($affrejection))
                                                              {{ $affrejection->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{affiliate_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($affrejection) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub14">
                                             <form method="post" action="{{ isset($affpassreset) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="affpassreset" name="email_type">
                                                         @if(isset($affpassreset))
                                                         <input type="hidden" value="{{ $affpassreset->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($affpassreset) ? $affpassreset->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor3">
                                                            @if(isset($affpassreset))
                                                              {{ $affpassreset->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{affiliate_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($affpassreset) ? 'Update' : 'Save' }}</button>
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
                                             <form method="post" action="{{ isset($advsignup) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advsignup" name="email_type">
                                                         @if(isset($advsignup))
                                                         <input type="hidden" value="{{ $advsignup->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($advsignup) ? $advsignup->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor4">
                                                            @if(isset($advsignup))
                                                              {{ $advsignup->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{advertiser_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($advsignup) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub12">
                                             <form method="post" action="{{ isset($advapproval) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advapproval" name="email_type">
                                                         @if(isset($advapproval))
                                                         <input type="hidden" value="{{ $advapproval->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($advapproval) ? $advapproval->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor5">
                                                            @if(isset($advapproval))
                                                              {{ $advapproval->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{advertiser_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($advapproval) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub13">
                                             <form method="post" action="{{ isset($advrejection) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advrejection" name="email_type">
                                                         @if(isset($advrejection))
                                                         <input type="hidden" value="{{ $advrejection->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($advrejection) ? $advrejection->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor6">
                                                            @if(isset($advrejection))
                                                              {{ $advrejection->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{advertiser_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($advrejection) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub14">
                                             <form method="post" action="{{ isset($advpassreset) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="advpassreset" name="email_type">
                                                         @if(isset($advpassreset))
                                                         <input type="hidden" value="{{ $advpassreset->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($advpassreset) ? $advpassreset->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor7">
                                                            @if(isset($advpassreset))
                                                              {{ $advpassreset->emailstring }}
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
                                                                     <td>{first_name}</td>
                                                                     <td>{last_name}</td>
                                                                     <td>{email}</td>
                                                                     <td>{advertiser_id}</td>
                                                                     <td>{company}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{company_website}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($advpassreset) ? 'Update' : 'Save' }}</button>
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
                                             <form method="post" action="{{ isset($offerapproval) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="offerapproval" name="email_type">
                                                         @if(isset($offerapproval))
                                                         <input type="hidden" value="{{ $offerapproval->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($offerapproval) ? $offerapproval->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor8">
                                                            @if(isset($offerapproval))
                                                              {{ $offerapproval->emailstring }}
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
                                                                     <td>{offer_id}</td>
                                                                     <td>{offer_payout}</td>
                                                                     <td>{offer_previous_payout}</td>
                                                                     <td>{offer_pricing_type}</td>
                                                                     <td>{offer_status}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{offer_previous_status}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($offerapproval) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub12">
                                             <form method="post" action="{{ isset($offerpayout) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="offerpayout" name="email_type">
                                                         @if(isset($offerpayout))
                                                         <input type="hidden" value="{{ $offerpayout->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($offerpayout) ? $offerpayout->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor9">
                                                            @if(isset($offerpayout))
                                                              {{ $offerpayout->emailstring }}
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
                                                                     <td>{offer_id}</td>
                                                                     <td>{offer_payout}</td>
                                                                     <td>{offer_previous_payout}</td>
                                                                     <td>{offer_pricing_type}</td>
                                                                     <td>{offer_status}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{offer_previous_status}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($offerpayout) ? 'Update' : 'Save' }}</button>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="tab-pane fade" id="sub13">
                                             <form method="post" action="{{ isset($offerstatus) ? route('affiliateupdate') : route('affiliatestore') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input type="hidden" value="offerstatus" name="email_type">
                                                         @if(isset($offerstatus))
                                                         <input type="hidden" value="{{ $offerstatus->id }}" name="tem_id">
                                                         @endif
                                                         <input class="form-control" name="email_subject" value="{{ isset($offerstatus) ? $offerstatus->email_subject : '' }}" placeholder="Enter Your Email Subject" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <textarea cols="10" rows="10" name="emailstring" id="page-editor10">
                                                            @if(isset($offerstatus))
                                                              {{ $offerstatus->emailstring }}
                                                           @else 
                                                           <div style="width:60%; margin:0 auto;">
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
                                                                     <td>{offer_id}</td>
                                                                     <td>{offer_payout}</td>
                                                                     <td>{offer_previous_payout}</td>
                                                                     <td>{offer_pricing_type}</td>
                                                                     <td>{offer_status}</td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td>{offer_previous_status}</td>
                                                                     <td>{network_name}</td>
                                                                     <td>{datetime}</td>
                                                                     <td>{login_url}</td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <button type="submit" class="btn btn-success">{{ isset($offerstatus) ? 'Update' : 'Save' }}</button>
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
@endsection