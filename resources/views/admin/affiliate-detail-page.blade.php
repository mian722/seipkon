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
                                    <h3>Affiliate Details #{{ $affilates->id }} </h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('') }}">Dashboard</a></li>
                                       <li>Affiliates</li>
                                       <li>Affiliate Details #{{ $affilates->id }}</li>
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
                                                      <td>{{ $affilates->id }}</td>
                                                      <th>Country</th>
                                                      <td>{{ $affilates->country }}</td>
                                                      <th>Status</th>
                                                      <td>{{ $affilates->status == 1 ? "Active" : "Deactive" }}</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Company</th>
                                                      <td>{{ $affilates->company }}</td>
                                                      <th>First Name</th>
                                                      <td>{{ $affilates->fname }}</td>
                                                      <th>Last Name</th>
                                                      <td>{{ $affilates->lname }}</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Email</th>
                                                      <td>{{ $affilates->email }}</td>
                                                      <th>IM</th>
                                                      <td>{{ $affilates->imid }}: {{ $affilates->imaccount }}</td>
                                                      <th>Mobile NO.</th>
                                                      <td>{{ $affilates->contactno }}</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Website</th>
                                                      <td>{{ $affilates->webiste }}</td>
                                                      <th>Manager</th>
                                                      <td>{{ $managers->imid }}: {{ $managers->imaccount }}<br />
                                                         {{ $managers->email }} </td>
                                                      <th>Tier</th>
                                                      <td>{{ $affilates->tire }}</td>
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
                                                      <th>Offer</th>
                                                      <th>Currency</th>
                                                      <th>Offer Payout</th>
                                                      <th>Affiliate Payout</th>
                                                      <th>Type</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($payouts->assignoffers as $payout)
                                                   <tr>
                                                      <td>{{ $payout->id }}</td>
                                                      <td><a href="{{ asset('offers-detail-page') }}">{{ $payout->offer_name }}</a></td>
                                                      <td>USD</td>
                                                      <td>${{ $payout->revenue }}</td>
                                                      <td>${{ $payout->payout }}</td>
                                                      <td>{{ $payout->revenue_type }}</td>
                                                     
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div id="postback" class="tab-pane fade in">
                                          <div class="advance-table">
                                             <h4><i class="fa fa-list"></i> Offer Postback</h4><br />
                                             <table id="responsive_datatables_example" class="table display table-striped table-bordered responsive nowrap">
                                                <thead>
                                                   <tr>
                                                      <th>ID</th>
                                                      <th>Affiliate</th>
                                                      <th>Name</th>
                                                      <th>Type</th>
                                                      <th>Protocol</th>
                                                      <th>Code</th>
                                                      <th>Create Time</th>
                                                      <th>Status</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($postbacks as $postback)
                                                   <tr>
                                                      <td>{{ $postback->offer_id }}</td>
                                                      <td><a href="{{ asset('affiliate-detail-page') }}">{{ $postback->fname }} {{ $postback->lname }}</a></td>
                                                      <td><a href="{{ asset('offers-detail-page') }}">{{ $postback->offer_name }}</a></td>
                                                      <td>{{ $postback->postback_type }}</td>
                                                      <td>{{ $postback->postback_protocol }}</td>
                                                      <td><a href="#" id="username" class="username" data-type="textarea" data-pk="1" data-url="/post" data-value="{{ $postback->postbacklink }}">View</a></td>
                                                      <td>{{ $postback->created_at }}</td>
                                                      <td><label class="label {{ ($postback->status == 1) ? 'label-success' : 'label-danger' }}">{{ ($postback->status == 1) ? 'Approved' : 'Disable' }}</label></td>
                                                      <td>
                                                         <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                                      </td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div id="tracking_domain" class="tab-pane fade in">
                                          <div class="advance-table">
                                             <h4><i class="fa fa-list"></i> Tracking Domain <button class="btn btn-success pull-right">Create</button></h4><br />
                                             <table width="100%" id="postback_table" class="table display table-striped table-bordered responsive nowrap">
                                                <thead>
                                                   <tr>
                                                      <th>ID</th>
                                                      <th>Offer</th>
                                                      <th>Tracking Domain</th>
                                                      <th>SSL</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>4</td>
                                                      <td><a href="{{ asset('affiliate-detail-page') }}">asdf #3</a></td>
                                                      <td><a href="{{ asset('offers-detail-page') }}">offer test google #4</a></td>
                                                      <td>SSL</td>
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
                                       <div id="sub_affiliate" class="tab-pane fade in">
                                          <div class="advance-table">
                                             <h4><i class="fa fa-list"></i> Sub-Affiliate Blocked List <button class="btn btn-success pull-right">Create</button></h4><br />
                                             <table width="100%" id="sub_affiliate_block_list" class="table display table-striped table-bordered responsive nowrap">
                                                <thead>
                                                   <tr>
                                                      <th>ID</th>
                                                      <th>Create Time</th>
                                                      <th>Offer</th>
                                                      <th>Value</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>4</td>
                                                      <td><a href="{{ asset('affiliate-detail-page') }}">asdf #3</a></td>
                                                      <td><a href="{{ asset('offers-detail-page') }}">offer test google #4</a></td>
                                                      <td>SSL</td>
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
                                       <div id="invoice_setting" class="tab-pane fade in input-style">
                                          <div class="invoice-setting">
                                             <h4><i class="fa fa-list-alt"></i> Financial Details</h4>
                                             <form action="">
                                                <div class="row">
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>First Name</label>
                                                         <input type="text" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Last Name</label>
                                                         <input type="text" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Email</label>
                                                         <input type="text" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Phone NO.</label>
                                                         <input type="text" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Company</label>
                                                         <input type="text" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <p>
                                                         <label>Address</label>
                                                         <input type="text" placeholder="Enter Product Name">
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row" style="margin-top: 20px;">
                                                   <div class="col-md-12">
                                                      <button class="btn btn-success">Save</button>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="invoice-setting">
                                             <form action="">
                                                <h4><i class="fa fa-credit-card"></i> Payment Details</h4>
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <p>
                                                         <label style="display: block;">Default Payment Method</label>
                                                         <select class="form-control select2" style="width: 30%;" data-placeholder="Select Method">
                                                            <option>Bank Transfer</option>
                                                            <option>PayPal</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   
                                                </div>
                                                <h4><i class="fa fa-bank"></i> Bank Transfer</h4>
                                                <div class="row">
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label style="display: block;">Currency</label>
                                                         <select class="form-control select2" style="width: 100%;" data-placeholder="Select Currency">
                                                            <option>United States, Dollars(USD)</option>
                                                            <option>PayPal</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Account Name</label>
                                                         <input type="text">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Phone NO.</label>
                                                         <input id="phoneMask" type="text" class="form-control" placeholder="(999) 999-9999">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      &nbsp;
                                                   </div>
                                                   
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>IBAN</label>
                                                         <input type="text">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Swift Code</label>
                                                         <input type="text">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Zip Code</label>
                                                         <input type="text">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label style="display: block;">Country</label>
                                                         <select class="form-control select2" style="width: 100%;" data-placeholder="Select Currency">
                                                            <option>United States</option>
                                                            <option>Pakistan</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Bank Name</label>
                                                         <input type="text">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Branch Name</label>
                                                         <input type="text">
                                                      </p>
                                                   </div>
                                                </div>
                                                <h4><i class="fa fa-paypal"></i> PayPal</h4>
                                                <div class="row">
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label style="display: block;">Currency</label>
                                                         <select class="form-control select2" style="width: 100%;" data-placeholder="Select Currency">
                                                            <option>United States, Dollars(USD)</option>
                                                            <option>PayPal</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Account Name</label>
                                                         <input type="text">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Paypal Email</label>
                                                         <input id="phoneMask" type="text" class="form-control" placeholder="(999) 999-9999">
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      &nbsp;
                                                   </div>
                                                   
                                                </div>
                                                <div class="row" style="margin-top: 20px;">
                                                   <div class="col-md-12">
                                                      <button class="btn btn-success">Save</button>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="invoice-setting">
                                             <h4><i class="fa fa-link"></i>  Invoice Automation Setting</h4>
                                             <form action="">
                                                <div class="row">
                                                   <div class="col-md-2">
                                                      <p>
                                                         <label>Invoice Frequency</label>
                                                         <select class="form-control select2" style="width: 100%;" data-placeholder="Select one Option">
                                                            <option>Enable</option>
                                                            <option>Disable</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      <p>
                                                         <label>Bill Interval</label>
                                                         <select class="form-control select2" style="width: 100%;" data-placeholder="Select Bill Interval">
                                                            <option>Weekly</option>
                                                            <option>Bi-Weekly</option>
                                                            <option>Monthly</option>
                                                            <option>Bi-Monthly</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-4">
                                                      <p>
                                                         <label>Timezone </label>
                                                         <select class="form-control select2" style="width: 100%;" data-placeholder="Select Timezone">
                                                            <option>(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                            <option>(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                         </select>
                                                      </p>
                                                   </div>
                                                   <div class="col-md-3">
                                                      &nbsp;
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <p>
                                                         <label style="width: 100%;">Account Name</label>
                                                         <textarea rows="6" class="form-control"></textarea>
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="row" style="margin-top: 20px;">
                                                   <div class="col-md-12">
                                                      <button class="btn btn-success">Save</button>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                       <div id="alert_setting" class="tab-pane fade in input-style">
                                          <form action="">  
                                          <div class="row">
                                             <div class="col-md-3">
                                                <p>
                                                   <input type="text" placeholder="Keyword" name="kayword" />
                                                </p>
                                             </div>
                                             <div class="col-md-3">
                                                <p>
                                                   <select class="form-control select2" style="width: 100%;" data-placeholder="Offer">
                                                      <option>(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                      <option>(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                   </select>
                                                </p>
                                             </div>
                                             <div class="col-md-6">
                                                <p><button type="button" class="btn btn-success">Search</button></p>
                                             </div>
                                          </div>
                                          </form>
                                          <div class="row" style="margin-top: 20px;">
                                             <div class="col-md-12">
                                                <table class="table display table-striped table-bordered responsive nowrap">
                                                   <thead>
                                                      <tr>
                                                         <th>Offer</th>
                                                         <th>Alert Setting</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <td colspan="2">No results found.</td>
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
                        </div>
                     </div>
                  </div>
                  <!-- End Add Product Area -->
                   

               </div>
            </div>
         @endsection