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
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub12">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub13">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor2">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub14">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor3">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
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
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor4">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub12">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor5">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub13">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor6">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub14">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor7">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
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
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor8">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub12">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor9">
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
                                                         <button type="button" class="btn btn-success">Save</button>
                                                      </div>
                                                   </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sub13">
                                                <div class="form-group">
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <input class="form-control" value="Notification of Account Registration" placeholder="Enter Your First Name" id="firstnam1" type="text">
                                                      </div>
                                                   </div><br />
                                                   <div class="row">
                                                      <div class="col-md-12 col-sm-12">
                                                         <div id="page-editor10">
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
                                                         <button type="button" class="btn btn-success">Save</button>
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
@endsection