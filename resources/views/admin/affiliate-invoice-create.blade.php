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
                                    <h3>Create Affiliate Invoice </h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">Dashboard</a></li>
                                       <li>Affiliate Invoices</li>
                                       <li>Create Affiliate Invoice</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  
                  <!-- Add Invoice Layout Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="form-example add-product-form-group">
                              <h3>Details</h3>
                              <div class="form-wrap top-label-exapmple form-layout-page">
                                 <form class="form-horizontal" method="post" action="{{ route('affiliateaddinvoices') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="row">
                                       <div class="col-md-5">
                                          <p>
                                             <label>Affiliate</label>
                                             <select name="affiliate_id" class="form-control select2">
                                                   @foreach($affiliates as $affiliate)
                                                   <option value="{{ $affiliate->id }}">{{ $affiliate->fname }} {{ $affiliate->lname }}</option>
                                                   @endforeach
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-2">
                                          <p>
                                             <label>Status</label>
                                             <select name="status" class="form-control select2">
                                                <option selected="selected" value="0">Pending</option>
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-3">
                                          <p>
                                             <label>Currency</label>
                                             <select name="currency" class="form-control select2">
                                                @foreach($currencies as $currency)
                                                <option value="{{ $currency }}">{{ $currency }}</option>
                                                @endforeach
                                             </select>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-5">
                                          <p>
                                             <label>Timezone</label>
                                             <select name="timezone" class="form-control select2">
                                                @foreach($timezones as $timezone)
                                                <option value="{{ $timezone }}">{{ $timezone }}</option>
                                                @endforeach
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-4">
                                          <p>
                                             <label>Duration <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <input name="daterange" type="text" id="reservation" placeholder="Date" />
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label class="control-label">Memo</label>
                                          <textarea name="memo" placeholder="Memo" class="form-control"></textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-layout-submit" style="text-align: left;">
                                             <button type="button" class="btn btn-info" >Generate Invoice</button>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Add Invoice Layout Row -->


                  <!-- Invoice Generated Layout Row -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-6">
                                 <span><b>INVOICE NO.</b></span>
                                 <input placeholder="Invoice Number" value="" name="invoice_no" style="padding: 0 10px; border:1px solid #ccc;" />
                              </div>
                              <div class="col-md-6">
                                 <h3 class="pull-right">Sub Domain</h3>
                              </div>
                           </div>
                           <hr />
                           <div class="row">
                              <div class="col-sm-6 invoice-column">
                                 <p class="info-p"><b>Customer Information</b></p>
                                 <p class="info-p">Company:
                                    <b>shd</b>
                                 </p>
                                 <p class="info-p">Name:
                                    <b>Shahid Ashraf</b>
                                 </p>
                                 <p class="info-p">Address:
                                    <b></b>
                                 </p>
                                 <p class="info-p">Email:
                                    <b>mian722@hotmail.com</b>
                                 </p>
                              </div>
                              <div class="col-sm-6 invoice-column">
                                 <p class="info-p"><b>Contact Information</b></p>
                                 <p class="info-p">Name: 
                                    <b>Fadhel F</b>
                                 </p>
                                 <p class="info-p">Address:
                                    <b></b>
                                 </p>
                                 <p class="info-p">Phone:
                                    <b>+09988373737</b>
                                 </p>
                                 <p class="info-p">Email:
                                    <b>mian722@hotmail.com</b>
                                 </p>
                              </div>
                           </div>
                           <br />
                           <div class="row">
                              <div class="col-md-12">
                                 <h5><strong>Invoice Date Range: <b id="bill-range">2018-07-04 to 2018-07-04 (GMT -09:30)</b></strong></h5>
                              </div>
                           </div>
                           <div class="row" style="margin-top: 10px;">
                              <div class="col-md-12">
                                 <div class="table-responsive">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Name</th>
                                             <th>Clicks</th>
                                             <th>Conversions</th>
                                             <th>Amount</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody id="offerdetails">
                                       </tbody>
                                       <tfooter>
                                          <tr>
                                             <td>
                                                <select id="offers_select" name="offers[]" class="form-control select">
                                                   <option disabled="disabled" selected="selected">Select Offer</option>
                                                   @foreach($offers as $offer)
                                                   <option value="{{ $offer->id }}">{{ $offer->offer_name }}</option>
                                                   @endforeach
                                                </select>
                                             </td>
                                             <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                          </tr>
                                       </tfooter>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <label class="control-label">Note</label>
                                 <textarea name="note" placeholder="Note" class="form-control"></textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-layout-submit" style="text-align: left;">
                                    <button type="submit" name="submit" id="convert_json" value="1" class="btn btn-info" >Create</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                        </div>
                     </div>
                  </div>
                   
               </div>
            </div>
             


         <script type="text/javascript">

            $(document).ready(function() {

               $('#offers_select').on('change', function (e) {
                    var value = $(this).val();
                    $("#offers_select option:selected").attr('disabled','disabled');
                    e.preventDefault();
                    var token = "{{ csrf_token() }}";
                    $.ajax({
                        type: "POST",
                        url: '{{ route("affiliateoffersdetails") }}',
                        data: { "_token": token, "offerid": value},
                        success: function( response ) {
                           $("#offerdetails").append(response['msg']);
                                
                           $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                           });

                            //make username editable
                            $('.tclicks').editable({
                              url: $(this).data('url'),
                              pk: $(this).data('pk'),
                              type:"text",
                              validate:function(value){
                                if($.trim(value) === '')
                                {
                                  return 'This field is required';
                                }
                              },
                              success: function(response) {
                                 console.log(response);
                               }
                            });
                            $('.tsignup').editable({
                              url: $(this).data('url'),
                              pk: $(this).data('pk'),
                              type:"text",
                              validate:function(value){
                                if($.trim(value) === '')
                                {
                                  return 'This field is required';
                                }
                              },
                              success: function(response) {
                                 console.log(response);
                               }
                            });
                            $('.tamount').editable({
                              url: $(this).data('url'),
                              pk: $(this).data('pk'),
                              type:"text",
                              validate:function(value){
                                if($.trim(value) === '')
                                {
                                  return 'This field is required';
                                }
                              },
                              success: function(response) {
                                 console.log(response);
                               }
                            });


                           $('.deloffer').on('click', function(){
                              var id = $(this).find('input').val();
                              $(this).closest('tr').remove();
                              $("#offers_select option[value=" + id + "]").removeAttr('disabled');
                           });
                        }
                    });
                });

            });

      $(document).ready(function(){

            $('#convert_json').on('click', function(){
               // Loop through grabbing everything
               //alert();
               // var myRows = [];
               // var $headers = $("th");
               // var $rows = $("#offerdetails tr").each(function(index) {
               //   $cells = $(this).find("td");
               //   myRows[index] = {};
               //   $cells.each(function(cellIndex) {
               //     myRows[index][$($headers[cellIndex]).html()] = $(this).html();
               //   });    
               // });

               // var myObj = {};
               // myObj.myrows = myRows;
               // alert(JSON.stringify(myObj));​
            });
      });
         </script>
         @endsection

