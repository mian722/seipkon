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
                                    <h3>Server Log</h3>
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
                           <div class="row">
                              <div class="col-md-1"><label>Indicator</label></div>
                              <div class="col-md-11">
                                 <div class="col-md-2">
                                    <div class="form-group form-checkbox">
                                       <input checked="checked" id="chk_1" type="checkbox">
                                       <label class="inline control-label" for="chk_1">Advertiser</label>
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="form-group form-checkbox">
                                       <input checked="checked" id="chk_11" type="checkbox">
                                       <label class="inline control-label" for="chk_11">Affiliate</label>
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="form-group form-checkbox">
                                       <input checked="checked" id="chk_4" type="checkbox">
                                       <label class="inline control-label" for="chk_4">Source ID</label>
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="form-group form-checkbox">
                                       <input id="chk_5" type="checkbox">
                                       <label class="inline control-label" for="chk_5">Smartlink</label>
                                    </div>
                                 </div>
                                 <div class="col-md-2">
                                    <div class="form-group form-checkbox">
                                       <input checked="checked" id="chk_6" type="checkbox">
                                       <label class="inline control-label" for="chk_6">Offer</label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-1"><label>Month</label></div>
                              <div class="col-md-11">
                                 <div class="col-md-2">
                                    <select class="form-control select2">
                                       <option selected="selected">2018-07</option>
                                    </select>
                                 </div>
                                 <div class="col-md-6">
                                    <button class="btn btn-success">Generate Report</button>
                                    <button class="btn btn-default">Export to CSV</button>
                                 </div>
                              </div>
                           </div>


                        <div class="page-box">
                           <div class="table-responsive advance-table">
                              <table id="button_datatables_example" class="table display table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO.</th>
                                       <th>Date</th>
                                       <th>Action</th>
                                       <th>Code</th>
                                       <th>Message</th>
                                       <th>Quantity</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>2018-07-06</td>
                                       <td>Reject Click</td>
                                       <td>Offer Not Found</td>
                                       <td><a href="{{ asset('log-detail') }}">Details</a></td>
                                       <td>1</td>
                                    </tr>
                                    <tr>
                                       <td>2</td>
                                       <td>2018-07-06</td>
                                       <td>Reject Click</td>
                                       <td>Offer Not Found</td>
                                       <td><a href="{{ asset('log-detail') }}">Details</a></td>
                                       <td>1</td>
                                    </tr>
                                    <tr>
                                       <td>3</td>
                                       <td>2018-07-06</td>
                                       <td>Reject Click</td>
                                       <td>Offer Not Found</td>
                                       <td><a href="{{ asset('log-detail') }}">Details</a></td>
                                       <td>3</td>
                                    </tr>
                                    <tr>
                                       <td>Total</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>5</td>
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