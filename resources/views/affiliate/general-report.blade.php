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
                                 <form id="genratereport" method="POST">
                                    <div id="advertisers_tab_content" class="tab-content">
                                       <div id="custom_r1" class="tab-pane fade in active">
                                          <div class="row">
                                             <div class="col-md-1"><label>Indicator</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_5" type="checkbox" name="smartlink">
                                                      <label class="inline control-label" for="chk_5">SmartLink</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_6" type="checkbox" name="offer">
                                                      <label class="inline control-label" for="chk_6">Offer</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_7" type="checkbox" name="clicks">
                                                      <label class="inline control-label" for="chk_7">Clicks</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_8" type="checkbox" name="unique_clicks">
                                                      <label class="inline control-label" for="chk_8">Unique Clicks</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_9" type="checkbox" name="conversions">
                                                      <label class="inline control-label" for="chk_9">Conversions</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_10" type="checkbox" name="country">
                                                      <label class="inline control-label" for="chk_10">Country</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_11" type="checkbox" name="sub_id">
                                                      <label class="inline control-label" for="chk_11">Source ID</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_12" type="checkbox" name="currency">
                                                      <label class="inline control-label" for="chk_12">Currency</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_14" type="checkbox" name="payout">
                                                      <label class="inline control-label" for="chk_14">Payout</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_15" type="checkbox" name="amount">
                                                      <label class="inline control-label" for="chk_15">Amount</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_17" type="checkbox" name="platform">
                                                      <label class="inline control-label" for="chk_17">Platform</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_18" type="checkbox" name="mobile_carrier">
                                                      <label class="inline control-label" for="chk_18">Mobile Carrier</label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Calculation</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="CR" type="checkbox" name="click_rate">
                                                      <label class="inline control-label" for="CR">CR</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="EPC" type="checkbox" name="earn_per_click">
                                                      <label class="inline control-label" for="EPC">EPC</label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Filter</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select SmartLink" name="smartlink_id">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Offer" name="offers_id">
                                                      @foreach($offers as $offer)
                                                         <option value="{{ $offer->id }}">{{ $offer->offer_name }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" name="geo_targeting">
                                                      @foreach($countries as $key => $value)
                                                         <option {{ isset($updatedata->restrictions) ? ((strpos($updatedata->restrictions->geo_targeting, $key) !== false) ? 'selected' : '') : '' }} value="{{ $key }}">{{ $value[1] }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" multiple="multiple" data-placeholder="Select Platform" name="platform_name">
                                                      <option value="windows">Windows</option>
                                                      <option value="mac">Mac</option>
                                                      <option value="linux">Linux</option>
                                                      <option value="ubuntu">Ubuntu</option>
                                                      <option value="iphone">iPhone</option>
                                                      <option value="ipad">iPod</option>
                                                      <option value="android">Android</option>
                                                      <option value="blackberry">BlackBerry</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Timezone</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-6">
                                                   <select class="form-control select2" name="timezone">
                                                      <option selected="" value="null">None</option>
                                                      @foreach($timezones as $timezone)
                                                      <option value="{{ $timezone }}">{{ $timezone }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Range</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-6">
                                                   <input type="text" name="daterange" class="form-control" id="reservation" placeholder="Date" />
                                                </div>
                                                <div class="col-md-4">&nbsp;</div>
                                                <div class="col-md-2">
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
                           <div class="table-responsive advance-table" id="report_response">
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
                                       <td colspan="9" style="text-align: center;">No Result</td>
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

<script type="text/javascript">
   $(document).ready(function(){


         $(function() {
           $('#reservation').daterangepicker({
             timePicker: true,
             startDate: moment().startOf('week'),
             endDate: moment().endOf('week'),
             locale: {
               format: 'YYYY-MM-DD'
             }
           });
         });

         $('#genratereport').on('submit', function(e){
            e.preventDefault();
            $.fn.serializeObject = function()
               {
                  var o = {};
                  var a = this.serializeArray();
                  $.each(a, function() {
                      if (o[this.name]) {
                          if (!o[this.name].push) {
                              o[this.name] = [o[this.name]];
                          }
                          o[this.name].push(this.value || '');
                      } else {
                          o[this.name] = this.value || '';
                      }
                  });
                  return o;
               };
            $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
            });
            var allform = JSON.stringify($(this).serializeObject());
            var token = "{{ csrf_token() }}";
            $.ajax({
               type: "POST",
               url: '{{ route("affgeneralreportgenerate", Auth::user()->fname) }}',
               data: { "_token": token, "allform": allform},
               success: function( response ) {
                  $('#report_response').html(response);
                      $('#button_datatables_example').DataTable( {
                          dom: 'Bfrtip',
                          buttons: [
                              'print',
                              'pdf',
                              'csv',
                              'copy',
                          ]
                      } );
                  $('.dt-buttons.btn-group > button').addClass('datatable-btn');
                      
               }
           });
      });
   });      
</script>
         @endsection