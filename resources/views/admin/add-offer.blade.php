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
                                <form class="form-horizontal" method="POST" action="{{ route('add-offer.store') }}">
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
                                                   <img src="{{ asset('public/assets/img/msg-1.png') }}" alt="profile">
                                                </div>
                                             </div>
                                             <div class="col-md-9">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <p>
                                                         <label>Product Name</label>
                                                         <input type="text" name="offer_name" required="required" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Advertiser</label>
                                                         <select class="form-control select2" data-placeholder="Select Tags" name="adv_id" required="required">
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
                                                         <label>Tag <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" multiple="multiple" data-placeholder="Select Tags" name="tags[]" required="required">
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
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Duration <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <input type="text" name="duration" required="required" id="reservation" placeholder="Date" />
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Status <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" name="status" required="required">
                                                            <option selected="selected">Active</option>
                                                            <option>Paused</option>
                                                            <option>Pending</option>
                                                            <option>Deleted</option>
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
                                                         <option selected="selected">RPA</option>
                                                         <option>RPS</option>
                                                         <option>RPA+RPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Revenue</label>
                                                      <input type="text" placeholder="Revenue" name="revenue" required="required">
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                      <p>
                                                         <label>Offer Approval <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" name="offer_approval" required="required">
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
                                                      <select class="form-control select2" name="payout_type" required="required">
                                                         <option selected="selected">CPA</option>
                                                         <option>CPS</option>
                                                         <option>CPA+CPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Payout</label>
                                                      <input type="text" placeholder="Payout" name="" required="required">
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                      <p>
                                                         <label>Affiliate Payout Tiers <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                         <select class="form-control select2" name="payout" required="required">
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
                                                      <input type="text" placeholder="Preview URL" name="preview_url" required="required">
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <p>
                                                      <label>Destination URL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <input type="text" placeholder="Destination URL" name="destination_url" required="required">
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
                                                         <option selected="selected">Postback URL</option>
                                                         <option>CPS</option>
                                                         <option>CPA+CPS</option>
                                                      </select>
                                                   </p>
                                                </div>
                                                <div class="col-md-3">
                                                   <p>
                                                      <label>Conversions Need Approval <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <select class="form-control select2" name="signup_need_approval" required="required">
                                                         <option selected="selected">Disable</option>
                                                         <option>Enable</option>
                                                      </select>
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="col-md-12">
                                                <div class="col-md-12">
                                                   <p>
                                                      <label>Description <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                      <div id="page-editor" name="description">
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
                                                   <button type="button" class="pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                       <div id="Restriction" class="tab-pane fade in">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Advertiser Caps Type <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2">
                                                      <option selected="selected">None</option>
                                                      <option>Total</option>
                                                      <option>Daily</option>
                                                      <option>Revenue</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Affiliate Caps Type <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2">
                                                      <option selected="selected">None</option>
                                                      <option>Total</option>
                                                      <option>Daily</option>
                                                      <option>Revenue</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Caps Timezone <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" style="width: 60%;">
                                                      <option selected="selected">(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                      <option>(GMT -10:00)Pacific/Honolulu,Rarotonga</option>
                                                      <option>(GMT -09:30)Pacific/Marquesas</option>
                                                      <option>(GMT -09:00)America/Adak</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Redirect Offer <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" style="width: 60%;">
                                                      <option selected="selected">test offer #1</option>
                                                      <option>test offer #2</option>
                                                      <option>test offer #3</option>
                                                      <option>test offer #4</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Offer Pool <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 60%;">
                                                      <option>Offer 1</option>
                                                      <option>Offer 2</option>
                                                      <option>Offer 3</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Tracking Domain <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" style="width: 40%;">
                                                      <option selected="selected">test offer #1</option>
                                                      <option>test offer #2</option>
                                                      <option>test offer #3</option>
                                                      <option>test offer #4</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>SSL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="form-wrap toggle-switches-flex">
                                                      <div class="form-group">
                                                         <div class="toggle toggle-modern"></div>
                                                      </div>
                                                   </div>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Lead Traffic to Preview URL <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="form-wrap toggle-switches-flex">
                                                      <div class="form-group">
                                                         <div class="toggle toggle-modern"></div>
                                                      </div>
                                                   </div>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Unique IP Tracking <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <div class="form-wrap toggle-switches-flex">
                                                      <div class="form-group">
                                                         <div class="toggle toggle-modern"></div>
                                                      </div>
                                                   </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="Targeting" class="tab-pane fade in">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Geo Targeting <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 60%;">
                                                      <option>Offer 1</option>
                                                      <option>Offer 2</option>
                                                      <option>Offer 3</option>
                                                   </select>
                                                   <select class="form-control select2">
                                                      <option selected="selected">Include</option>
                                                      <option>Exclude</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Mobile Carrier Targeting <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 60%;">
                                                      <option>Offer 1</option>
                                                      <option>Offer 2</option>
                                                      <option>Offer 3</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-12">
                                                <p>
                                                   <label>Platform Targeting <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 30%;">
                                                      <option>Offer 1</option>
                                                      <option>Offer 2</option>
                                                      <option>Offer 3</option>
                                                   </select>
                                                </p>
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
                                                      <div class="product-upload btn btn-info">
                                                         <p>
                                                            <i class="fa fa-upload"></i>
                                                            Upload Image
                                                         </p>
                                                         <input type="file">
                                                      </div>
                                                      <!-- <button type="submit" class="btn btn-danger">
                                                      <i class="fa fa-trash"></i>
                                                      Delete Image
                                                      </button> -->
                                                   </div>
                                                </p>
                                                <p>
                                                   <div class="pull-right">
                                                      <button type="button" class="pull-right btn btn-success" ><i class="fa fa-check"></i>Next</button>
                                                   </div>
                                                </p>
                                             </div>
                                          </div>
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