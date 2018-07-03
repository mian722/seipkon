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
                                 <form action="">
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
                                                   <img src="{{ asset('public/assets/img/msg-1.png') }}" alt="profile">
                                                </div>
                                             </div>
                                             <div class="col-md-9">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <p>
                                                         <label>Product Name</label>
                                                         <input type="text" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Advertiser</label>
                                                         <input type="text" placeholder="Advertiser">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Tag <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" multiple="multiple" data-placeholder="Select a State">
                                                            <option>Alabama</option>
                                                            <option>Alaska</option>
                                                            <option>California</option>
                                                            <option>Delaware</option>
                                                            <option>Tennessee</option>
                                                            <option>Texas</option>
                                                            <option>Washington</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Advertiser's Offer ID</label>
                                                         <input type="text" placeholder="Advertiser's Offer ID">
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Duration <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <input type="text" id="reservation" placeholder="Date" />
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Status <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2">
                                                            <option selected="selected">Active</option>
                                                            <option>Paused</option>
                                                            <option>Pending</option>
                                                            <option>Deleted</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Currency <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2">
                                                            <option selected="selected">United States, Dollars(USD)</option>
                                                            <option>Euro(EUR)</option>
                                                            <option>Australia, Dollars(AUD)</option>
                                                            <option>Brazil, Reais(BRL)</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="col-md-12">
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Revenue Type</label>
                                                      <select class="form-control select2">
                                                         <option selected="selected">RPA</option>
                                                         <option>RPS</option>
                                                         <option>RPA+RPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Revenue</label>
                                                      <input type="text" placeholder="Tags">
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                      <p>
                                                         <label>Offer Approval <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2">
                                                            <option selected="selected">Require Approval</option>
                                                            <option>Public</option>
                                                            <option>Private</option>
                                                         </select>
                                                      </p>
                                                </div>
                                                <div class="col-md-3">&nbsp;</div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Payout Type</label>
                                                      <select class="form-control select2">
                                                         <option selected="selected">CPA</option>
                                                         <option>CPS</option>
                                                         <option>CPA+CPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Payout</label>
                                                      <input type="text" placeholder="Tags">
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                      <p>
                                                         <label>Affiliate Payout Tiers <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2">
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
                                                      <input type="text" placeholder="Tags">
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <p>
                                                      <label>Destination URL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <input type="text" placeholder="Tags">
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
                                                      <select class="form-control select2">
                                                         <option selected="selected">Postback URL</option>
                                                         <option>CPS</option>
                                                         <option>CPA+CPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Conversions Need Approval <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <select class="form-control select2">
                                                         <option selected="selected">Disable</option>
                                                         <option>Enable</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Hide Referral <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <select class="form-control select2">
                                                         <option selected="selected">Default</option>
                                                         <option>Enable</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Application ID</label>
                                                      <input type="text" placeholder="Application ID">
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <p>
                                                      <label>Description <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
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
                                                   </p>
                                                   <button type="submit" class="pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                       <div id="Restriction" class="tab-pane fade in">

                                       </div>
                                       <div id="Targeting" class="tab-pane fade in">

                                       </div>
                                       <div id="Creative" class="tab-pane fade in">

                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>





                           <!-- <div class="col-md-6 col-sm-6">
                              <div class="add-product-form-group">
                                 <h3>Product Info</h3>
                                 <form>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <p>
                                             <label>Product Name</label>
                                             <input type="text" placeholder="Enter Product Name">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <p>
                                             <label>Brand Name</label>
                                             <input type="text" placeholder="Enter Brand Name">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <p>
                                             <label>Category</label>
                                             <select class="selectpicker-product select-pro">
                                                <option>Category 1</option>
                                                <option>Category 2</option>
                                                <option>Category 3</option>
                                                <option>Category 4</option>
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-6">
                                          <p>
                                             <label>Size</label>
                                             <select class="selectpicker-product select-pro">
                                                <option>XX</option>
                                                <option>XL</option>
                                                <option>M</option>
                                                <option>XXL</option>
                                                <option>L</option>
                                                <option>SM</option>
                                             </select>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <p>
                                             <label>Price</label>
                                             <input type="text" placeholder="Enter Price">
                                          </p>
                                       </div>
                                       <div class="col-md-6">
                                          <p>
                                             <label>Discount</label>
                                             <input type="text" placeholder="Enter Discount as Percentage">
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <p>
                                             <label>Description</label>
                                             <textarea placeholder="Write Product Description Here" ></textarea>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <p>
                                             <button type="submit" class="btn btn-success" >
                                             <i class="fa fa-check"></i>
                                             Save Info
                                             </button>
                                             <button type="submit" class="btn btn-danger" >
                                             <i class="fa fa-times"></i>
                                             Cancel
                                             </button>
                                          </p>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                              <div class="add-product-image-upload">
                                 <h3>Product Thumb</h3>
                                 <form>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="product-upload-image">
                                             <img src="{{ asset('public/assets/img/product/pro-1.png') }}" alt="image" />
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="product-upload-action">
                                             <div class="product-upload btn btn-info">
                                                <p>
                                                   <i class="fa fa-upload"></i>
                                                   Upload Another Image
                                                </p>
                                                <input type="file" >
                                             </div>
                                             <button type="submit" class="btn btn-danger" >
                                             <i class="fa fa-trash"></i>
                                             Delete Image
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div> -->
                        </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Add Product Area -->
                   
               </div>
            </div>
         @endsection