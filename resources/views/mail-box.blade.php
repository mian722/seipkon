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
                                    <h3>Mail Box</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <button type="button" class="btn btn-success pull-right">Start New Email</button>
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
                           <div class="table-responsive advance-table">
                              <table id="button_datatables_example" class="table display table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO.</th>
                                       <th>Subject</th>
                                       <th>Status</th>
                                       <th>Sender</th>
                                       <th>Create Time</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Amir Ashraf#1</td>
                                       <td>Admin</td>
                                       <td>2018-07-07 08:52:00</td>
                                       <td>39.53.226.213</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>Amir Ashraf#1</td>
                                       <td>Admin</td>
                                       <td>2018-07-07 08:52:00</td>
                                       <td>39.53.226.213</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Add Product Area -->
                   
               </div>
            </div>
         @endsection