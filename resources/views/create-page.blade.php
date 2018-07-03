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
                                    <h3>Create a Page</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>page</li>
                                       <li>creare a page</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Create Page Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-9">
                                 <div class="create-page-left">
                                    <div class="table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Advertiser</th>
                                       <th>Offer</th>
                                       <th>Affiliate</th>
                                       <th>Manager</th>
                                       <th>Apply Time</th>
                                       <th>Accept Time</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#1</td>
                                       <td><img src="{{ asset('public/assets/img/product/pro-1.png') }}" alt="order image"  /></td>
                                       <td>#120342</td>
                                       <td>Angelica Ramos</td>
                                       <td>product title</td>
                                       <td>22</td>
                                       <td>09/08/2017</td>
                                       <td>
                                          <span class="label label-success">Approve</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Approve"><i class="fa fa-check"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Decline"><i class="fa fa-times"></i></a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="create-page-right">
                                    <form>
                                       <p>
                                          <label>Page Type</label>
                                          <select class="selectpicker-page-type">
                                             <option>Normal</option>
                                             <option>Main Page</option>
                                             <option>Post Page</option>
                                          </select>
                                       </p>
                                       <p>
                                          <label>Page Parent</label>
                                          <select class="selectpicker-page-type">
                                             <option>no parent</option>
                                             <option>normal page</option>
                                          </select>
                                       </p>
                                       <div class="page-img-upload">
                                          <label>Breadcromb Image <span>(optional)</span></label>
                                          <div class="product-upload btn btn-info">
                                             <i class="fa fa-upload"></i>
                                             Upload Image
                                             <input type="file">
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Create Page Row -->
                   
               </div>
            </div>         
            @endsection
             