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
                                    <h3>Conversion Report</h3>
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
                                       <li class="active" role="Custom Report1"><a href="#custom_r1" role="tab" data-toggle="tab">Custom Report1</a>
                                       </li>
                                       <li role="Custom Report2"><a href="#custom_r2" role="tab" data-toggle="tab">Custom Report2</a></li>
                                       <li role="Custom Report3"><a href="#custom_r3" role="tab" data-toggle="tab">Custom Report3</a></li>
                                       <li role="Custom Report4"><a href="#custom_r4" role="tab" data-toggle="tab">Custom Report4</a></li>
                                    </ul>
                                    <div id="advertisers_tab_content" class="tab-content">
                                       <div id="custom_r1" class="tab-pane fade in input-style active">
                                          <div class="row">
                                             <div class="col-md-1"><label>Duration</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-2 col-sm-2">
                                                   <div class="form-group form-radio">
                                                      <input id="checkbox1" checked="" name="check1" type="checkbox">
                                                      <label for="checkbox1" class="inline control-label">Coversion Time</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-radio">
                                                      <input id="checkbox2" name="check2" type="checkbox">
                                                      <label for="checkbox2" class="inline control-label">Click Time</label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
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
                                                      <input id="chk_2" type="checkbox">
                                                      <label class="inline control-label" for="chk_2"> Advertiser Manager</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_21" type="checkbox">
                                                      <label class="inline control-label" for="chk_21"> Affiliate Manager</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_3" type="checkbox">
                                                      <label class="inline control-label" for="chk_3">Offer</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_5" type="checkbox">
                                                      <label class="inline control-label" for="chk_5"> Non-Private Event</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_6" type="checkbox">
                                                      <label class="inline control-label" for="chk_6">Smartlink</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_8" type="checkbox">
                                                      <label class="inline control-label" for="chk_8">Currency</label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Filter</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select SmartLink">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Offer">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Affiliate">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Affiliate Manager">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Advertiser">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Advertiser Manager">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Currency</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-8">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Currency">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Timezone</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-6">
                                                   <select class="form-control select2">
                                                      <option selected="selected">(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                      <option>Paused</option>
                                                      <option>Pending</option>
                                                      <option>Deleted</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Range</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-2">
                                                   <select class="form-control select2">
                                                      <option>Today</option>
                                                      <option>Yesterday</option>
                                                      <option selected="selected">Last 7 Dayes</option>
                                                      <option>This Month</option>
                                                      <option>Last Month</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                         <input type="text" class="form-control" id="reservation" placeholder="Date" />
                                                </div>
                                                <div class="col-md-6">
                                                   <button class="btn btn-success">Generate Report</button>
                                                   <button class="btn btn-default">Export to CSV</button>
                                                   <button class="btn btn-default">Save Custom Report</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="custom_r2" class="tab-pane fade in">

                                       </div>
                                       <div id="custom_r3" class="tab-pane fade in">

                                       </div>
                                       <div id="custom_r4" class="tab-pane fade in">

                                       </div>
                                    </div>
                                 </form>                                 
                              </div>
                           </div>
                        </div>


                        <div class="page-box">
                           <div class="table-responsive advance-table">
                              <table id="button_datatables_example" class="table display table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <th rowspan="2">NO.</th>
                                       <th rowspan="2">Date</th>
                                       <th rowspan="2">Advertiser</th>
                                       <th rowspan="2">Affiliate</th>
                                       <th rowspan="2">Offer</th>
                                       <th colspan="3" style="text-align: center;">Approved Conversions</th>
                                       <th colspan="3" style="text-align: center;">Pending Conversions</th>
                                       <th colspan="3" style="text-align: center;">Reject Conversions</th>
                                       <th rowspan="2">Effect Revenue</th>
                                       <th rowspan="2">Effect Payout</th>
                                       <th rowspan="2">Profit</th>
                                    </tr>
                                    <tr>
                                       <th>Quantity</th>
                                       <th>Revenue</th>
                                       <th>Payout</th>
                                       <th>Quantity</th>
                                       <th>Revenue</th>
                                       <th>Payout</th>
                                       <th>Quantity</th>
                                       <th>Revenue</th>
                                       <th>Payout</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>No Result Found</tr>
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