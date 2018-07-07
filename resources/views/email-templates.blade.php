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
                           
                           <div class="form-wrap">
                              <form id="form_wizard_1" class="step-wizard">
                                 <h3>Affiliate Sign Up</h3>
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
                                 <h3>Billing Information</h3>
                                 <section>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-6 col-sm-6">
                                             <label class="control-label" for="fullnam1">Full Name :</label>
                                             <input class="form-control" placeholder="Enter Your Full Name" id="fullnam1" type="text">
                                          </div>
                                          <div class="col-md-6 col-sm-6">
                                             <label class="control-label" for="email2">Email Address :</label>
                                             <input class="form-control" placeholder="Enter Your Email Address" id="email2" type="email">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-6 col-sm-6">
                                             <label class="control-label" for="country2">Choose Country :</label>
                                             <select class="form-control" id="country2">
                                                <option value="">Select Country</option>
                                                <option value="bangladesh">bangladesh</option>
                                                <option value="Amsterdam">India</option>
                                                <option value="Berlin">USA</option>
                                                <option value="Frankfurt">Dubai</option>
                                             </select>
                                          </div>
                                          <div class="col-md-6 col-sm-6">
                                             <label class="control-label" for="Town">Town / City :</label>
                                             <input class="form-control" placeholder="Enter Your Town / City" id="Town" type="text">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4">
                                             <label class="control-label" for="zip">zip code :</label>
                                             <input class="form-control" placeholder="Enter Your zip code" id="zip" type="text">
                                          </div>
                                          <div class="col-md-4 col-sm-4">
                                             <label class="control-label" for="Address">Address :</label>
                                             <input class="form-control" placeholder="Enter Your Full Address" id="Address" type="text">
                                          </div>
                                          <div class="col-md-4 col-sm-4">
                                             <label class="control-label" for="phn3">Phone :</label>
                                             <input class="form-control" placeholder="Enter Your Phone Number" id="phn3" type="text">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <label class="control-label" for="otdr">Order Note</label>
                                             <textarea class="form-control" id="otdr" placeholder="Write Here Additional Order Notes" ></textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <h3>Payment Details</h3>
                                 <section>
                                    <div class="row">
                                       <div class="col-md-6 col-md-offset-3">
                                          <div class="step-wizard-payment-details table-responsive">
                                             <table>
                                                <tbody>
                                                   <tr>
                                                      <td>Cart Subtotal</td>
                                                      <td>$180</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Shipping and Handling</td>
                                                      <td>Free Shipping</td>
                                                   </tr>
                                                   <tr>
                                                      <td>Order Total</td>
                                                      <td>$180</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                          <div class="step-wizard-payment">
                                             <div class="form-group form-radio">
                                                <input id="radio-5" name="radio" type="radio" />
                                                <label for="radio-5" class="inline control-label">Direct Bank Transfer</label>
                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.order won’t be shipped until the funds have cleared.</p>
                                             </div>
                                             <div class="form-group form-radio">
                                                <input id="radio-1" name="radio" type="radio" />
                                                <label for="radio-1" class="inline control-label">Cheque Payment</label>
                                             </div>
                                             <div class="form-group form-radio">
                                                <input id="radio-2" name="radio" type="radio" />
                                                <label for="radio-2" class="inline control-label">Credit Card</label>
                                                <img src="assets/img/master-card.jpg" alt="credit card"  />
                                             </div>
                                             <div class="form-group form-radio">
                                                <input id="radio-3" name="radio" type="radio" />
                                                <label for="radio-3" class="inline control-label">Paypal</label>
                                                <img src="assets/img/paypal.jpg" alt="credit card"  />
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                              </form>
                           </div>
                        </div>
                        <div id="preferences" class="tab-pane fade in">
                           sdfsadf
                        </div>
                        <div id="message" class="tab-pane fade in">
                           asdfasdf
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