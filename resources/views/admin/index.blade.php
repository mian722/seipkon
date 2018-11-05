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
                              <div class="col-md-6  col-sm-6">
                                 <div class="seipkon-breadcromb-left">
                                    <h3>Dashboard</h3>
                                 </div>
                              </div>
                              <!-- <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <div class="form-group">
                                       <div class="input-group daterange_btn">
                                          <button type="button" class="form-control" id="daterange_btn">
                                          <span>
                                          <i class="fa fa-calendar"></i> Date range picker
                                          </span>
                                          <i class="fa fa-caret-down"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Widget Row Start -->
                  <div class="row">
                     <div class="col-md-3">
                        <div id="clock" class="widget_card alert">
                           <div class="widget_card_header">
                              <span class="widget_close" data-toggle="tooltip" title="Remove" data-dismiss="alert" aria-label="close">
                              <i class="fa fa-times"></i>
                              </span>
                           </div>
                           <div class="widget_card_body">
                              <div class="widget_icon">
                                 <i class="fa fa-eye"></i>
                              </div>
                              <div class="widget_text">
                                 <h3 class="count" >{{ $allclicks }}</h3>
                                 <p>Clicks</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Col -->
                     <div class="col-md-3">
                        <div id="widget_visitor" class="widget_card alert">
                           <div class="widget_card_header">
                              <span class="widget_close" data-toggle="tooltip" title="Remove" data-dismiss="alert" aria-label="close">
                              <i class="fa fa-times"></i>
                              </span>
                           </div>
                           <div class="widget_card_body">
                              <div class="widget_icon">
                                 <i class="fa fa-eye"></i>
                              </div>
                              <div class="widget_text">
                                 <h3 class="count" >{{ $allsignups }}</h3>
                                 <p>Conversions</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Col -->
                     <div class="col-md-3">
                        <div id="widget_user" class="widget_card alert">
                           <div class="widget_card_header">
                              <span class="widget_close" data-toggle="tooltip" title="Remove" data-dismiss="alert" aria-label="close">
                              <i class="fa fa-times"></i>
                              </span>
                           </div>
                           <div class="widget_card_body">
                              <div class="widget_icon">
                                 <i class="fa fa-money" aria-hidden="true"></i>
                              </div>
                              <div class="widget_text">
                                 <h3><span class="count">{{ $activeoffers }}</span></h3>
                                 <p>Active Offers</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Col -->
                     <div class="col-md-3">
                        <div id="widget_profits" class="widget_card alert">
                           <div class="widget_card_header">
                              <span class="widget_close" data-toggle="tooltip" title="Remove" data-dismiss="alert" aria-label="close">
                              <i class="fa fa-times"></i>
                              </span>
                           </div>
                           <div class="widget_card_body">
                              <div class="widget_icon">
                                 <i class="fa fa-flask"></i>
                              </div>
                              <div class="widget_text">
                                  <h3><span class="count">{{ $pendingoffers }}</span></h3>
                                 <p>Pending Offers</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Col -->
                  </div>
                  <!-- End Widget Row -->
                   
                  <!-- Widget Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="widget_card_two alert">
                           <div class="widget_card_header" style="border: none;">
                              <div class="col-md-8  col-sm-6">
                                 <div class="seipkon-breadcromb-left" style="text-align: left;">
                                    <h3 style="line-height: 38px;">Volume Report</h3>
                                 </div>
                              </div>
                              <div class="col-md-4 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <div class="form-group">
                                       <div class="input-group daterange_btn">
                                          <button type="button" class="form-control" id="daterange_btn">
                                          <span>
                                          <i class="fa fa-calendar"></i> Date range picker
                                          </span>
                                          <i class="fa fa-caret-down"></i>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- <h3></h3>
                              <ul>
                                 <li>
                                    <a class="widget_card_accordion" data-toggle="collapse" href="#chart_1" role="button" aria-expanded="false" aria-controls="chart_1"></a>
                                 </li>
                                 <li>
                                    <a href="#" class="widget_close_two" data-toggle="tooltip" title="Remove" data-dismiss="alert" aria-label="close">
                                    <i class="fa fa-times"></i>
                                    </a>
                                 </li>
                              </ul> -->
                           </div>

                           <div class="widget_card_body collapse in" id="chart_1">
                              <div class="chart">
                                 <!-- <div id="sales_chart"></div> -->
                                 <div id="container1"></div>
                              </div>
                              <ul class="earning_chart">
                                    <li>
                                       <h4>CLICKS</h4>
                                       <p id="tclicks">{{ $tclicks }}</p>
                                    </li>
                                    <li>
                                       <h4>CONVERSIONS</h4>
                                       <p id="tsignups">{{ $tsignups }}</p>
                                    </li>
                                    <li>
                                       <h4>REVENUE</h4>
                                       <p id="tearning">${{ $tearning }}</p>
                                    </li>
                                    <li>
                                       <h4>PAYOUT</h4>
                                       <p id="tpayout">${{ $tpayout }}</p>
                                    </li>
                                    <li>
                                       <h4>PROFIT</h4>
                                       <p id="tprofit">${{ $tearning - $tpayout }}</p>
                                    </li>
                                 </ul>
                           </div>
                        </div>
                     </div>
                     <!-- End Col -->
                  </div>
                  <!-- End Widget Row -->
                   
                  <!-- Widget Row Start -->
                  <div class="row">
                     
                     <div class="col-md-8">
                        <div class="widget_card_two alert">
                           <div class="widget_card_header">
                              <h3>Top 10 Offers</h3>
                              <ul>
                                 <li>
                                    <a class="widget_card_accordion" data-toggle="collapse" href="#Earnings" role="button" aria-expanded="false" aria-controls="Earnings"></a>
                                 </li>
                                 <li>
                                    <a  href="#" class="widget_close_two" data-toggle="tooltip" title="Remove" data-dismiss="alert" aria-label="close">
                                    <i class="fa fa-times"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="widget_card_body collapse in" id="Earnings">
                              <div class="table-responsive">
                                 <table id="offer-list" class="table display table-hover">
                                    <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>Offer Name</th>
                                          <th>Revenue</th>
                                          <th>Payout</th>
                                          <th>Converstions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($topoffers as $topoffer)
                                       <tr>
                                          <td>#{{ $topoffer->id }}</td>
                                          <td>{{ $topoffer->offer_name }}</td>
                                          <td>${{ $topoffer->revenue }}</td>
                                          <td>${{ $topoffer->payout }}</td>
                                          <td>{{ $topoffer->count }}</td>
                                       </tr>
                                       @endforeach
                                       
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Col -->
                     <div class="col-md-4">
                        <div class="widget_card_two alert">
                           <div class="widget_card_header">
                              <h3>Top 10 Affiliates</h3>
                              <ul>
                                 <li>
                                    <a class="widget_card_accordion" data-toggle="collapse" href="#invoice_statement" role="button" aria-expanded="false" aria-controls="invoice_statement"></a>
                                 </li>
                                 <li>
                                    <a  href="#" class="widget_close_two" data-toggle="tooltip" title="Remove" data-dismiss="alert" aria-label="close">
                                    <i class="fa fa-times"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="widget_card_body collapse in" id="invoice_statement">
                              <div class="table-responsive">
                                 <table id="invoice-list" class="table display table-hover">
                                    <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>Affiliate</th>
                                          <th>Email</th>
                                          <th>Earning</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($topaffiliates as $topaffiliate)
                                       <tr>
                                          <td>#{{ $topaffiliate->id }}</td>
                                          <td>{{ $topaffiliate->fname }}</td>
                                          <td>{{ $topaffiliate->email }}</td>
                                          <td>${{ $topaffiliate->earning }}</td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End Col -->
                  </div>
                  <!-- End Widget Row -->
                   
               </div>
            </div>
            <script type="text/javascript">
         
         $(document).ready(function(){
            Highcharts.chart('container1', {
                        title: {
                                text: ''
                            },
                            xAxis: {
                                        categories: <?php echo json_encode($date); ?>
                                    },
                            yAxis: {
                                     categories: [0,1,2,3,4,5,6,7,8,9],
                                   allowDecimals: false,
                                  min: '0',
                                  title: {
                                    text: 'Clicks / Conversions'
                                  },
                                    labels: {
                                        formatter: function () {
                                            return this.value;
                                        }
                                    }
                                },
                          
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            },

                            series: [{
                                name: 'Clicks',
                                data: <?php echo $clicks; ?>
                            }, {
                                name: 'Conversions',
                                data: <?php echo $signups; ?>
                            }, {
                                name: 'Earning',
                                data: <?php echo $earning; ?>
                            }, {
                                name: 'Payout',
                                data: <?php echo $payout; ?>
                            }, {
                                name: 'Profit',
                                data: <?php echo $profit; ?>
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
            $('#daterange_btn').daterangepicker({
            
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
         },
         function (start, end) {
            $('#daterange_btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
               $.ajax({
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               type: 'post',
               url:"{{ route('daterangepicker3',Auth::user()->fname )}}",
               data: {from: start.format('YYYY-MM-DD'), to: end.format('YYYY-MM-DD')},
               dataType: 'json',
               success:function(result) {
                  $('#tclicks').html(result[4]);
                  $('#tsignups').html(result[5]);
                  $('#tearning').html('$'+(result[6]));
                  $('#tpayout').html('$'+(result[9]));
                  var profit = '$'+(result[6] - result[9]);
                  $('#tprofit').html(profit);
                  //alert(result);
                    Highcharts.chart('container1', {
                        title: {
                                text: ''
                            },
                            xAxis: {
                                        categories: result[2]
                                    },
                            yAxis: {
                                     categories: [0,1,2,3,4,5,6,7,8,9],
                                   allowDecimals: false,
                                  min: '0',
                                  title: {
                                    text: 'Clicks / Conversions'
                                  },
                                    labels: {
                                        formatter: function () {
                                            return this.value;
                                        }
                                    }
                                },
                          
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            },

                            series: [{
                                name: 'Clicks',
                                data: result[0]
                            }, {
                                name: 'Conversions',
                                data: result[1]
                            }, {
                                name: 'Earning',
                                data: result[3]
                            }, {
                                name: 'Payout',
                                data: result[8]
                            }, {
                                name: 'Profit',
                                data: result[7]
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
               }
           });
         });
      });
      </script>
             @endsection
            