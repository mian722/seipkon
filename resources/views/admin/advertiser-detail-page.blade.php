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
                                    <h3>Advertiser Details #{{ $advertiser->id }} </h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('') }}">Dashboard</a></li>
                                       <li>Advertiser</li>
                                       <li>Advertiser Details #{{ $advertiser->id }}</li>
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
                                       <li class="active" role="Custom Report1"><a href="#details_offer" role="tab" data-toggle="tab">Details</a>
                                       </li>
                                       <li role="Custom Report2"><a href="#payout" role="tab" data-toggle="tab">Invoice Settings</a></li>
                                    </ul>
                                    <div class="tab-content offer-detail-page">
                                       <div id="details_offer" class="tab-pane fade in active">

                                          <div class="">
                                             <h4><i class="fa fa-info-circle"></i> Details</h4><br />
                                             <table id="sameId" class="table display table-striped table-bordered responsive nowrap">
                                                <tbody>
                                                   <tr>
                                                      <th>ID</th>
                                                      <td>{{ $advertiser->id }}</td>
                                                      <th>First Name</th>
                                                      <td>{{ $advertiser->fname }}</td>
                                                      <th>Last Name</th>
                                                      <td>{{ $advertiser->lname }}</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Email</th>
                                                      <td>{{ $advertiser->email }}</td>
                                                      <th>IM</th>
                                                      <td>{{ $advertiser->imid }}: {{ $advertiser->imaccount }}</td>
                                                      <th>Mobile NO.</th>
                                                      <td>{{ $advertiser->contactno }}</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Company</th>
                                                      <td>{{ $advertiser->company }}</td>
                                                      <th>Country</th>
                                                      <td>{{ $advertiser->country }}</td>
                                                      <th>Status</th>
                                                      <td>{{ $advertiser->status == 1 ? "Active" : "Deactive" }}</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Manager</th>
                                                      <td>{{ $managers->fname }} {{ $managers->lname }} </td>
                                                   </tr>
                                                   <tr>
                                                      <th>Global Postback URL</th>
                                                      <td colspan="5">{{ $offer->offer_postback }}</td>
                                                   </tr>
                                                   <tr>
                                                      <th>Website</th>
                                                      <td colspan="5">{{ $advertiser->website }}</td>
                                                   </tr>
                                                   <tr><td colspan="6"><button type="button" class="btn btn-success">Login</button><a href="{{ route('advertiser.edit', $advertiser->id) }}" class="btn btn-default">Update</a></td></tr>
                                                </tbody>
                                             </table>


                                          </div>
                                       </div>

                                       <div id="payout" class="tab-pane fade in">
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