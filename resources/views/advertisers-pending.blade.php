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
                                    <h3>Pending Advertisers</h3>
                                 </div>
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
                                       <th>ID</th>
                                       <th>Company</th>
                                       <th>Name</th>
                                       <th>IM</th>
                                       <th>Manager</th>
                                       <th>Country</th>
                                       <th>Mobile No.</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#1</td>
                                       <td><img src="{{ asset('public/assets/img/product/pro-1.png') }}" alt="order image"  /></td>
                                       <td>Angelica Ramos</td>
                                       <td>22</td>
                                       <td>product title</td>
                                       <td>Pak</td>
                                       <td>+92878324782</td>
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

