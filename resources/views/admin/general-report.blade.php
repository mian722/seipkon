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
                                    <h3>General Reports</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('') }}">home</a></li>
                                       <li>Reports</li>
                                       <li>General Reports</li>
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
                                    <div id="advertisers_tab_content" class="tab-content">
                                       <div id="custom_r1" class="tab-pane fade in active">
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
                                                      <input id="chk_22" type="checkbox">
                                                      <label class="inline control-label" for="chk_22">SmartLink</label>
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
                                                      <input checked="checked" id="chk_6" type="checkbox">
                                                      <label class="inline control-label" for="chk_6">Clicks</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_7" type="checkbox">
                                                      <label class="inline control-label" for="chk_7">Unique Clicks</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_8" type="checkbox">
                                                      <label class="inline control-label" for="chk_8">Conversions</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_81" type="checkbox">
                                                      <label class="inline control-label" for="chk_81">Country</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_82" type="checkbox">
                                                      <label class="inline control-label" for="chk_82">Source ID</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_9" type="checkbox">
                                                      <label class="inline control-label" for="chk_9">Currency</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_10" type="checkbox">
                                                      <label class="inline control-label" for="chk_10">Revenue</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_11" type="checkbox">
                                                      <label class="inline control-label" for="chk_11">Payout</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_12" type="checkbox">
                                                      <label class="inline control-label" for="chk_12">Amount</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_13" type="checkbox">
                                                      <label class="inline control-label" for="chk_13">Profit</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_13" type="checkbox">
                                                      <label class="inline control-label" for="chk_13">Platform</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_13" type="checkbox">
                                                      <label class="inline control-label" for="chk_13">Mobile Carrier</label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Calculation</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="CR" type="checkbox">
                                                      <label class="inline control-label" for="CR">CR</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="EPC" type="checkbox">
                                                      <label class="inline control-label" for="EPC">EPC</label>
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
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Event">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Country">
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
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Currency">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Platform">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Approved & Pending Conversions">
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
                                                </div>
                                             </div>
                                          </div>
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
                                       <th>NO.</th>
                                       <th>Date</th>
                                       <th>Clicks</th>
                                       <th>Conversions</th>
                                       <th>CR</th>
                                       <th>Revenue(USD)</th>
                                       <th>Payout(USD)</th>
                                       <th>Profit(USD)</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>2018-07-01</td>
                                       <td>5</td>
                                       <td>0</td>
                                       <td>0.000%</td>
                                       <td>0.000</td>
                                       <td>0.000</td>
                                       <td>0.000</td>
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