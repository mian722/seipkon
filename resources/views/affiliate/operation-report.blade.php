@extends('layouts.userheader')
         
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
                                    <h3>Operation Reports</h3>
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
                                       <li class="active" role="Custom Report2"><a href="#custom_r2" role="tab" data-toggle="tab">Offer</a></li>
                                       <li role="Custom Report4"><a href="#custom_r4" role="tab" data-toggle="tab">Smart Link</a></li>
                                    </ul>
                                    <div id="advertisers_tab_content" class="tab-content">
                                       <div id="custom_r2" class="tab-pane fade in active">
                                          <div class="table-responsive advance-table">
                                             <table id="c1" class="table display table-striped table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th>NO.</th>
                                                      <th>Offer</th>
                                                      <th>Clicks</th>
                                                      <th>Unique Clicks</th>
                                                      <th>Conversions</th>
                                                      <th>CR</th>
                                                      <th>Earning(USD)</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($offers_report as $offerreport)
                                                   <tr>
                                                      <td>{{ $loop->iteration }}</td>
                                                      <td><a href="{{ route('offers-detail', $offerreport->id) }}">{{ $offerreport->offer_name }}</a></td>
                                                      <td>{{ $offerreport->sumclicks }}</td>
                                                      <td>{{ $offerreport->uniquesumclicks }}</td>
                                                      <td>{{ $offerreport->sumsignup }}</td>
                                                      <td>{{ (($offerreport->sumsignup == 0) ? 0 : ($offerreport->sumsignup)/($offerreport->sumsignup)*100) }}%</td>
                                                      <td>${{ $offerreport->totalpayout }}</td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div id="custom_r4" class="tab-pane fade in">
                                          <div class="table-responsive advance-table">
                                             <table id="c3" class="table display table-striped table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th>NO.</th>
                                                      <th>Date</th>
                                                      <th>Smartlink</th>
                                                      <th>Clicks</th>
                                                      <th>Unique Clicks</th>
                                                      <th>Conversions</th>
                                                      <th>CR</th>
                                                      <th>Earning(USD)</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>1</td>
                                                      <td>2018-07-01</td>
                                                      <td><a href="#">sss #2</a></td>
                                                      <td>3</td>
                                                      <td>5</td>
                                                      <td>0</td>
                                                      <td>0.000%</td>
                                                      <td>0.000</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
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