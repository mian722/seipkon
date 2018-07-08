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
                           <li class="active" role="appearance"><a href="#appearance" role="tab" data-toggle="tab">Affiliate</a></li>
                           <li role="preferences"><a href="#preferences" role="tab" data-toggle="tab">Advertiser</a></li>
                           <li  role="message"><a href="#message" role="tab" data-toggle="tab">Offer</a>
                        </li>
                     </ul>
                     <div id="seipkkon_tab_content" class="tab-content">
                        <div id="appearance" class="tab-pane fade in active">

                           <div class="tabs-example custom-tab-wizard">
                              <div class="tabs-box-example horizontal-tab-example">
                                 <ul class="nav nav-tabs" id="service_pro" role="tablist">
                                    <li class="active" role="presentation"><a href="#signup" role="tab" data-toggle="tab"><span>1</span> Affiliate Sign Up</a>
                                    </li>
                                    <li role="presentation"><a href="#approval" role="tab" data-toggle="tab"><span>2</span> Affiliate Approval</a></li>
                                    <li role="presentation"><a href="#rejection" role="tab" data-toggle="tab"><span>3</span> Affiliate Rejection</a></li>
                                    <li role="presentation"><a href="#password" role="tab" data-toggle="tab"><span>4</span> Affiliate Password Re-setting</a></li>
                                 </ul>
                                 <div id="seipkkon_tab_content" class="tab-content">
                                    <div id="signup" class="tab-pane fade in active">
                                 <section>
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
                                    </div>
                                 </section>
                                    </div>
                                    <div id="approval" class="tab-pane fade in">
                                 <section>
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
                                    </div>
                                 </section>
                                    </div>
                                    <div id="rejection" class="tab-pane fade in">
                                 <section>
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
                                    </div>
                                 </section>
                                    </div>
                                    <div id="password" class="tab-pane fade in">
                                 <section>
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
                                    </div>
                                 </section>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>

                        <div id="preferences" class="tab-pane fade in">
                           <div class="tabs-example custom-tab-wizard">
                              <div class="tabs-box-example horizontal-tab-example">
                                 <ul class="nav nav-tabs" id="service_pro" role="tablist">
                                    <li class="active" role="presentation"><a href="#signup2" role="tab" data-toggle="tab"><span>1</span> Affiliate Sign Up</a>
                                    </li>
                                    <li role="presentation"><a href="#approval2" role="tab" data-toggle="tab"><span>2</span> Affiliate Approval</a></li>
                                    <li role="presentation"><a href="#rejection2" role="tab" data-toggle="tab"><span>3</span> Affiliate Rejection</a></li>
                                    <li role="presentation"><a href="#password2" role="tab" data-toggle="tab"><span>4</span> Affiliate Password Re-setting</a></li>
                                 </ul>
                                 <div id="seipkkon_tab_content" class="tab-content">
                                    <div id="signup2" class="tab-pane fade in active">
                                       <section>
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
                                          </div>
                                       </section>
                                    </div>
                                    <div id="approval2" class="tab-pane fade in">
                                       <section>
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
                                          </div>
                                       </section>
                                    </div>
                                    <div id="rejection2" class="tab-pane fade in">
                                       <section>
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
                                          </div>
                                       </section>
                                    </div>
                                    <div id="password2" class="tab-pane fade in">
                                       <section>
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
                                          </div>
                                       </section>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div id="message" class="tab-pane fade in">
                           <div class="tabs-example custom-tab-wizard">
                              <div class="tabs-box-example horizontal-tab-example">
                                 <ul class="nav nav-tabs" id="service_pro" role="tablist">
                                    <li class="active" role="presentation"><a href="#signup3" role="tab" data-toggle="tab"><span>1</span> Affiliate Sign Up</a>
                                    </li>
                                    <li role="presentation"><a href="#approval3" role="tab" data-toggle="tab"><span>2</span> Affiliate Approval</a></li>
                                    <li role="presentation"><a href="#rejection3" role="tab" data-toggle="tab"><span>3</span> Affiliate Rejection</a></li>
                                    <li role="presentation"><a href="#password3" role="tab" data-toggle="tab"><span>4</span> Affiliate Password Re-setting</a></li>
                                 </ul>
                                 <div id="seipkkon_tab_content" class="tab-content">
                                    <div id="signup3" class="tab-pane fade in active">
                                       <section>
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
                                          </div>
                                       </section>
                                    </div>
                                    <div id="approval3" class="tab-pane fade in">
                                       <section>
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
                                          </div>
                                       </section>
                                    </div>
                                    <div id="rejection3" class="tab-pane fade in">
                                       <section>
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
                                          </div>
                                       </section>
                                    </div>
                                    <div id="password3" class="tab-pane fade in">
                                       <section>
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
                                          </div>
                                       </section>
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