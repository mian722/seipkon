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
                                    <h3>Conversion Status Report</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('') }}">home</a></li>
                                       <li>reports</li>
                                       <li>conversion status report</li>
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
                                                      <input id="chk_6" name="offer" checked="checked" type="checkbox">
                                                      <label class="inline control-label" for="chk_6">Offer</label>
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
                                                      <input checked="checked" id="chk_8" type="checkbox" name="currency">
                                                      <label class="inline control-label" for="chk_8">Currency</label>
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
                                      <th rowspan="2">NO.</th>
                                      <th rowspan="2">Affiliate</th>
                                      <th rowspan="2">Affiliate Manager</th>
                                      <th rowspan="2">Offer</th>
                                      <th rowspan="2">Currency</th>
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
                                    <tr colspan="100">No Result Found</tr>
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
               url: '{{ route("conversionstatusreportgenerate") }}',
               data: { "_token": token, "allform": allform},
               success: function( response ) {
                  $('#report_response').html(response);
                  //     $('#button_datatables_example').DataTable( {
                  //         dom: 'Bfrtip',
                  //         buttons: [
                  //             'print',
                  //             'pdf',
                  //             'csv',
                  //             'copy',
                  //         ]
                  //     } );
                  // $('.dt-buttons.btn-group > button').addClass('datatable-btn');
               }
           });
      });
   });      
</script>
         @endsection