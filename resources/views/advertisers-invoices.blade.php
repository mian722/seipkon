@extends('layouts.header')
         
         @section('content') 
        <!-- Right Side Content Start -->
         <!-- Right Side Content Start -->
         <section id="content" class="seipkon-content-wrapper">
            <div class="page-content">
               <div class="container-fluid">
                   
                  <!-- Breadcromb Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="breadcromb-area">
                           <div class="row">
                              <div class="col-md-11 col-sm-11">
                                 <div class="seipkon-breadcromb-left">
                                    <h3>Advertisers Invoices</h3>
                                 </div>
                              </div>
                              <div class="col-md-1 col-sm-1">
                                 <a class="btn btn-success btn-xs" href="{{ url('affiliate-create') }}" >Create</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Advance Table Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="advance-table">
                              <table id="responsive_datatables_example" class="table display table-striped table-bordered responsive nowrap">
                                 <thead>
                                    <tr>
                                       <th>Date</th>
                                       <th>Invoice No.</th>
                                       <th>Advertiser</th>
                                       <th>Manager</th>
                                       <th>Start Date</th>
                                       <th>End Date</th>
                                       <th>Due Date</th>
                                       <th>Total Amount</th>
                                       <th>Memo</th>
                                       <th>Action</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>2018-07-02</td>
                                       <td><a href="{{ asset('invoice') }}" style="color: #1CD2C9;">20180702-5-8623/amir</a></td>
                                       <td>adf #5</td>
                                       <td>Amir Ashraf</td>
                                       <td>2018-07-04</td>
                                       <td>2018-07-04</td>
                                       <td>2018-07-11</td>
                                       <td>0 USD</td>
                                       <td>advertiser</td>
                                       <td class="btn btn-rounded btn-success">Paid</td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>2018-07-02</td>
                                       <td><a href="{{ asset('invoice') }}" style="color: #1CD2C9;">20180702-5-8623/amir</a></td>
                                       <td>adf #5</td>
                                       <td>Amir Ashraf</td>
                                       <td>2018-07-04</td>
                                       <td>2018-07-04</td>
                                       <td>2018-07-11</td>
                                       <td>0 USD</td>
                                       <td>advertiser</td>
                                       <td><span class="btn btn-rounded btn-danger">Pending</span></td>
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
                  <!-- End Advance Table Row -->
                   
               </div>
            </div>
         </section> 
         <!-- End Right Side Content -->
         @endsection

