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
                                 <form id="genratereport" method="POST">
                                    
                                    <div id="advertisers_tab_content" class="tab-content">
                                       <div id="custom_r1" class="tab-pane fade in input-style active">
                                          <div class="row">
                                             <div class="col-md-1"><label>Duration</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-2 col-sm-2">
                                                   <div class="form-group form-radio">
                                                      <input id="checkbox1" checked="checked" name="coversiontime" type="checkbox">
                                                      <label for="checkbox1" class="inline control-label">Coversion Time</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-radio">
                                                      <input id="checkbox2" name="clicktime" checked="checked" type="checkbox">
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
                                                      <input  id="chk_1" name="advertiser" type="checkbox">
                                                      <label class="inline control-label" for="chk_1">Advertiser</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_2" name="affiliate" type="checkbox">
                                                      <label class="inline control-label" for="chk_2">Affiliate</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_3" name="advmanger" type="checkbox">
                                                      <label class="inline control-label" for="chk_3"> Advertiser Manager</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_4" name="affmanager" checked="checked" type="checkbox">
                                                      <label class="inline control-label" for="chk_4"> Affiliate Manager</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_5" name="smartlinkcheck" type="checkbox">
                                                      <label class="inline control-label" for="chk_5">SmartLink</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_6" name="offer" checked="checked" type="checkbox">
                                                      <label class="inline control-label" for="chk_6">Offer</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input  name="country" id="chk_7" type="checkbox">
                                                      <label class="inline control-label" for="chk_7">Country</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_9" name="sourceid" type="checkbox">
                                                      <label class="inline control-label" for="chk_9">Source ID</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_10" name="clicksid" type="checkbox">
                                                      <label class="inline control-label" for="chk_10">Clicks ID</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_11" name="clicksip" type="checkbox">
                                                      <label class="inline control-label" for="chk_11">Clicks IP</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_12" name="conversionip" type="checkbox">
                                                      <label class="inline control-label" for="chk_12">Conversions IP</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input checked="checked" id="chk_13" name="status" type="checkbox">
                                                      <label class="inline control-label" for="chk_13">Status</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input  id="chk_14" name="postback" type="checkbox">
                                                      <label class="inline control-label" for="chk_14">Postback</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_15" name="referurl" type="checkbox">
                                                      <label class="inline control-label" for="chk_15">Referer URL</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_16" name="revenue" type="checkbox">
                                                      <label class="inline control-label" for="chk_16">Revenue</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_17" checked="checked" name="payout" type="checkbox">
                                                      <label class="inline control-label" for="chk_17">Payout</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_18" name="amount" type="checkbox">
                                                      <label class="inline control-label" for="chk_18">Amount</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_19" name="profit" type="checkbox">
                                                      <label class="inline control-label" for="chk_19">Profit</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_20" name="advsub1" type="checkbox">
                                                      <label class="inline control-label" for="chk_20">Adv Sub 1</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_21" name="advsub2" type="checkbox">
                                                      <label class="inline control-label" for="chk_21">Adv Sub 2</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_22" name="advsub3" type="checkbox">
                                                      <label class="inline control-label" for="chk_22">Adv Sub 3</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input  id="chk_23" name="affsub1" type="checkbox">
                                                      <label class="inline control-label" for="chk_23">Aff Sub 1</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input  id="chk_24" name="affsub2" type="checkbox">
                                                      <label class="inline control-label" for="chk_24">Aff Sub 2</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input  id="chk_25" name="affsub3" type="checkbox">
                                                      <label class="inline control-label" for="chk_25">Aff Sub 3</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_26" name="affsub4" type="checkbox">
                                                      <label class="inline control-label" for="chk_26">Aff Sub 4</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input id="chk_27" name="affsub5" type="checkbox">
                                                      <label class="inline control-label" for="chk_27">Aff Sub 5</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input  id="chk_28" name="plateform" type="checkbox">
                                                      <label class="inline control-label" for="chk_28">Platform</label>
                                                   </div>
                                                </div>
                                                <div class="col-md-2">
                                                   <div class="form-group form-checkbox">
                                                      <input name="mobilcarrier" id="chk_29" type="checkbox">
                                                      <label class="inline control-label" for="chk_29">Mobile Carrier</label>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Filter</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="smartlinklist" multiple="multiple" data-placeholder="Select SmartLink">
                                                      <option>Alabama</option>
                                                      <option>Alaska</option>
                                                      <option>California</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="offerlist" multiple="multiple" data-placeholder="Select Offer">
                                                      @foreach($offers as $offer)
                                                      <option value="{{ $offer->id }}">{{ $offer->offer_name }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="countrylist" multiple="multiple" data-placeholder="Select Country">
                                                      @foreach($countries as $key => $value)
                                                         <option {{ isset($updatedata->restrictions) ? ((strpos($updatedata->restrictions->geo_targeting, $key) !== false) ? 'selected' : '') : '' }} value="{{ $key }}">{{ $value[1] }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="affiliatelist" multiple="multiple" data-placeholder="Select Affiliate">
                                                      @foreach($affiliates as $affiliate)
                                                      <option value="{{ $affiliate->id }}">{{ $affiliate->fname }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="affiliatemanager" multiple="multiple" data-placeholder="Select Affiliate Manager">
                                                      @foreach($aff_managers as $affman)
                                                      <option value="{{ $affman->id }}">{{ $affman->fname }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="advertiserlist" multiple="multiple" data-placeholder="Select Advertiser">
                                                      @foreach($advertisers as $advertiser)
                                                      <option value="{{ $advertiser->id }}">{{ $advertiser->fname }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="advertisermanager" multiple="multiple" data-placeholder="Select Advertiser Manager">
                                                      @foreach($adv_managers as $adv_manager)
                                                      <option value="{{ $adv_manager->id }}">{{ $adv_manager->fname }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="plateformlist" multiple="multiple" data-placeholder="Select Platform">
                                                      @foreach($getplatforms as $getplatform)
                                                      <option value="{{ $getplatform }}">{{ $getplatform }}</option>
                                                      @endforeach
                                                   </select>
                                                </div>
                                                <div class="col-md-4">
                                                   <select class="form-control select2" name="conversionstatus" data-placeholder="Approved & Pending Conversions">
                                                      <option value="all">All</option>
                                                      <option value="1">Approved</option>
                                                      <option value="0">Pending</option>
                                                      <option value="2">Rejected</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-md-1"><label>Timezone</label></div>
                                             <div class="col-md-11">
                                                <div class="col-md-6">
                                                   <select class="form-control select2" name="timezonelist">
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
                           <div class="table-responsive advance-table" id="report_response">
                              <table id="button_datatables_example" class="table display table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <th>NO.</th>
                                       <th>Coversion Time</th>
                                       <th>Click Time</th>
                                       <th>Affiliate</th>
                                       <th>Affiliate Manager</th>
                                       <th>Offer</th>
                                       <th>Source ID</th>
                                       <th>Clicks ID</th>
                                       <th>Clicks IP</th>
                                       <th>Status</th>
                                       <th>Payout</th>
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
               url: '{{ route("conversionreportgenerate") }}',
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