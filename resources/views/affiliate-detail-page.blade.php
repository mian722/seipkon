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
                                       <li class="active" role="Custom Report1"><a href="#details_offer" role="tab" data-toggle="tab">Details & Offer List</a>
                                       </li>
                                       <li role="Custom Report2"><a href="#payout" role="tab" data-toggle="tab">Payout</a></li>
                                       <li role="Custom Report2"><a href="#postback" role="tab" data-toggle="tab">Postback</a></li>
                                       <li role="Custom Report2"><a href="#tracking_domain" role="tab" data-toggle="tab">Tracking Domain</a></li>
                                       <li role="Custom Report2"><a href="#sub_affiliate" role="tab" data-toggle="tab">Sub-Affiliate Blocked List</a></li>
                                       <li role="Custom Report2"><a href="#invoice_setting" role="tab" data-toggle="tab">Invoice Setting</a></li>
                                       <li role="Custom Report2"><a href="#alert_setting" role="tab" data-toggle="tab">Alert Setting</a></li>
                                    </ul>
                                    <div class="tab-content offer-detail-page">
                                       <div id="details_offer" class="tab-pane fade in active">

                                          <div class="">
                                             <h4><i class="fa fa-info-circle"></i> Details</h4><br />
                                             <table id="sameId" class="table display table-striped table-bordered responsive nowrap">
                                                <tbody>
                                                   <tr>
                                                      <th>ID</th>
                                                      <td>3</td>
                                                      <th>Country</th>
                                                      <td>Pakistan</td>
                                                      <th>Status</th>
                                                      <td>Active</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Company</th>
                                                      <td>asdf</td>
                                                      <th>First Name</th>
                                                      <td>Nancy</td>
                                                      <th>Last Name</th>
                                                      <td>Ortega</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Email</th>
                                                      <td>nancy@gmail.com</td>
                                                      <th>IM</th>
                                                      <td> Skype: kjj </td>
                                                      <th>Mobile NO.</th>
                                                      <td>+500-00000</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Website</th>
                                                      <td>http://asdf.com</td>
                                                      <th>Manager</th>
                                                      <td>Amir Ashraf<br />
                                                         amirali2418@gmail.com </td>
                                                      <th>Tier</th>
                                                      <td>asdfsadf</td>
                                                   </tr>
                                                   <tr><td colspan="6"><button type="button" class="btn btn-success">Login</button><button type="button" class="btn btn-default">Update</button></td></tr>
                                                </tbody>
                                             </table>
                                          </div>

                                          <div class="advance-table">
                                             <h4><i class="fa fa-list"></i> Approved & Caps</h4><br />
                                             <table id="responsive_datatables_example" class="table display table-striped table-bordered responsive nowrap">
                                                <thead>
                                                   <tr>
                                                      <th>Offer</th>
                                                      <th>Caps Type</th>
                                                      <th>Category</th>
                                                      <th>Clicks</th>
                                                      <th>Conversions</th>
                                                      <th>Budget</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td><a href="{{ asset('offers-detail-page') }}">offer test google #4</a></td>
                                                      <td>None1</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>
                                                         <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td><a href="{{ asset('offers-detail-page') }}">offer test google #4</a></td>
                                                      <td>None2</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>
                                                         <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                                      </td>
                                                   </tr>
                                                   

                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div id="payout" class="tab-pane fade in">
                                          <div class="advance-table">
                                             <h4><i class="fa fa-list"></i> Offer Payout</h4><br />
                                             <table id="responsive_datatables_example" class="table display table-striped table-bordered responsive nowrap">
                                                <thead>
                                                   <tr>
                                                      <th>ID</th>
                                                      <th>Event</th>
                                                      <th>Offer</th>
                                                      <th>Currency</th>
                                                      <th>Offer Payout</th>
                                                      <th>Affiliate Payout</th>
                                                      <th>Type</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td><a href="{{ asset('offers-detail-page') }}">offer test google #4</a></td>
                                                      <td>None1</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>not set</td>
                                                      <td>
                                                         <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div id="postback" class="tab-pane fade in">
                                       </div>
                                       <div id="tracking_domain" class="tab-pane fade in">
                                       </div>
                                       <div id="sub_affiliate" class="tab-pane fade in">
                                       </div>
                                       <div id="invoice_setting" class="tab-pane fade in">
                                       </div>
                                       <div id="alert_setting" class="tab-pane fade in">
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