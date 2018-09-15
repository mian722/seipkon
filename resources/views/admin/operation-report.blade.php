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
                                       <li class="active" role="Custom Report1"><a href="#custom_r1" role="tab" data-toggle="tab">Advertiser</a>
                                       </li>
                                       <li role="Custom Report2"><a href="#custom_r2" role="tab" data-toggle="tab">Offer</a></li>
                                       <li role="Custom Report3"><a href="#custom_r3" role="tab" data-toggle="tab">Affiliate</a></li>
                                       <li role="Custom Report4"><a href="#custom_r4" role="tab" data-toggle="tab">Smart Link</a></li>
                                    </ul>
                                    <div id="advertisers_tab_content" class="tab-content">
                                       <div id="custom_r1" class="tab-pane fade in active">
                                          <div class="table-responsive advance-table">
                                             <table id="button_datatables_example" class="table display table-striped table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th>NO.</th>
                                                      <th>Advertiser</th>
                                                      <th>Click</th>
                                                      <th>Unique Clicks</th>
                                                      <th>Conversions</th>
                                                      <th>CR</th>
                                                      <th>Revenue(USD)</th>
                                                      <th>Payout(USD)</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($advreports as $advreport)
                                                      <tr>
                                                         <td>{{ $loop->iteration }}</td>
                                                         <td><a href="{{ route('advertiser.show', $advreport->id) }}">{{ $advreport->fname }}</a></td>
                                                         <td>{{ $advreport->sumclicks }}</td>
                                                         <td>{{ $advreport->uniquesumclicks }}</td>
                                                         <td>{{ $advreport->sumsignup }}</td>
                                                         <?php $cr = 00.0;
                if ($advreport->sumclicks != 0) {
                  $cr = round((($advreport->sumsignup / $advreport->sumclicks) * 100), 1);
                } ?>
                                                         <td>{{ $cr }}%</td>
                                                         <td>{{ $advreport->revenue }}</td>
                                                         <td>{{ $advreport->payout }}</td>
                                                      </tr>
                                                   @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div id="custom_r2" class="tab-pane fade in">
                                          <div class="table-responsive advance-table">
                                             <table id="c1" class="table display table-striped table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th>NO.</th>
                                                      <th>Date</th>
                                                      <th>Offer</th>
                                                      <th>Clicks</th>
                                                      <th>Unique Clicks</th>
                                                      <th>Conversions</th>
                                                      <th>CR</th>
                                                      <th>Revenue(USD)</th>
                                                      <th>Payout(USD)</th>
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
                                                      <td>0.000</td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div id="custom_r3" class="tab-pane fade in">
                                          <div class="table-responsive advance-table">
                                             <table id="c2" class="table display table-striped table-bordered">
                                                <thead>
                                                   <tr>
                                                      <th>NO.</th>
                                                      <th>Date</th>
                                                      <th>Affiliate</th>
                                                      <th>Clicks</th>
                                                      <th>Unique Clicks</th>
                                                      <th>Conversions</th>
                                                      <th>CR</th>
                                                      <th>Revenue(USD)</th>
                                                      <th>Payout(USD)</th>
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
                                                      <td>0.000</td>
                                                   </tr>
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
                                                      <th>Revenue(USD)</th>
                                                      <th>Payout(USD)</th>
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