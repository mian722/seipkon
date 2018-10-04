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
                                    <h3>Edit Advertiser Invoice </h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">Dashboard</a></li>
                                       <li>Advertiser Invoices</li>
                                       <li>Edit Advertiser Invoice</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  
               <form class="form-horizontal" method="post" action="{{ route('affiliateupdateinvoices', $offeredit->id ) }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <!-- Add Invoice Layout Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="form-example add-product-form-group">
                              <h3>Details</h3>
                              <div class="form-wrap top-label-exapmple form-layout-page">
                                 
                                    <div class="row">
                                       <div class="col-md-5">
                                          <p>
                                             <label>Affiliate: </label>
                                             <p>

                                             <?php $user = null;
                                             if ($offeredit->affiliate_id != 0) {
                                                $user = App\User::select('*')->where('id', $offeredit->affiliate_id )->first();
                                             }  ?>
                                             {{ ($user != null) ? $user->fname : '&nbsp;' }} {{ ($user != null) ? $user->lname : '&nbsp;' }}</p>
                                          </p>
                                       </div>
                                       <div class="col-md-2">
                                          <p>
                                             <label>Status</label>
                                             <select name="status" class="form-control select2">
                                                <option selected="selected" value="0">Pending</option>
                                                <option value="1">Paid</option>
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-3">
                                          <p>
                                             <label>Currency</label>
                                             <p>{{ $offeredit->currency }}</p>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-5">
                                          <p>
                                             <label>Timezone</label>
                                             <p>{{ $offeredit->timezone }}</p>
                                          </p>
                                       </div>
                                       <div class="col-md-4">
                                          <p>
                                             <label>Duration: <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <p>{{ $offeredit->daterange }}</p>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <label class="control-label">Memo</label>
                                          <textarea name="memo" placeholder="Memo" class="form-control">{{ $offeredit->memo }}</textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-layout-submit" style="text-align: left;">
                                             <button type="button" id="generate_button" class="btn btn-info" >Generate Invoice</button>
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
                  <div class="row" id="generated">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-6">
                                 <span><b>INVOICE NO.</b></span>
                                 <input placeholder="Invoice Number" id="invoice_no" value="{{ $offeredit->invoiceno }}" name="invoice_no" style="padding: 0 10px; border:1px solid #ccc;" />
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
                                    <b id="companyname">{{ $user->company }}</b>
                                 </p>
                                 <p class="info-p">Name:
                                    <b id="username">{{ $user->fname }} {{ $user->lname }}</b>
                                 </p>
                                 <p class="info-p">Address:
                                    <b id="useraddress">{{ $user->country }}</b>
                                 </p>
                                 <p class="info-p">Email:
                                    <b id="useremail">{{ $user->email }}</b>
                                 </p>
                              </div>
                              <div class="col-sm-6 invoice-column">
                                 <p class="info-p"><b>Contact Information</b></p>
                                 <p class="info-p">Name: 
                                    <b id="adminname">{{ Auth::user()->fname }} {{ Auth::user()->lname }}</b>
                                 </p>
                                 <p class="info-p">Address:
                                    <b id="adminaddress">{{ Auth::user()->country }}</b>
                                 </p>
                                 <p class="info-p">Phone:
                                    <b id="admincontact">{{ Auth::user()->contactno }}</b>
                                 </p>
                                 <p class="info-p">Email:
                                    <b id="adminemail">{{ Auth::user()->email }}</b>
                                 </p>
                              </div>
                           </div>
                           <br />
                           <div class="row">
                              <div class="col-md-12">
                                 <h5><strong>Invoice Date Range: <b id="daterange">{{ $offeredit->daterange }}</b></strong></h5>
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
                                       <?php
                                          $offersnames = json_decode($offeredit->offer_names);
                                          $offersclicks = json_decode($offeredit->offer_clicks);
                                          $offerssignups = json_decode($offeredit->offer_signups);
                                          $offersamounts = json_decode($offeredit->offer_amounts);
                                       ?>
                                       <tbody id="offerdetails">
                                          @for($i = 0; $i<count($offersnames); $i++)
                                            <tr>
                                              <td><input type="hidden" class="name" name="name[]" value="{{ $offersnames[$i] }}" />
                                                <?php $offerdetail = App\Offer::where('id', $offersnames[$i])->first(); ?>
                                                {{ $offerdetail->offer_name }}
                                              </td>
                                             <td>
                                                   <input type="hidden" class="clicks" name="clicks[]" value="{{ $offersclicks[$i] }}" />
                                                     <a href="#" id="clicks" class="tclicks" data-url="{{ route('affiliateupdateclicks', $offersnames[$i]) }}" data-pk="{{ $offersnames[$i] }}" data-type="text" data-placement="top" data-title="Edit Comment">{{ $offersclicks[$i] }}</a>
                                             </td>
                                             <td>
                                                   <input type="hidden" class="signups" name="signup[]" value="{{ $offerssignups[$i] }}" />
                                                     <a href="#" id="signup" class="tsignup" data-url="{{ route('affiliateupdateclicks', $offersnames[$i]) }}" data-pk="{{ $offersnames[$i] }}" data-type="text" data-placement="top" data-title="Edit Comment">{{ $offerssignups[$i] }}</a>
                                             </td>
                                             <td>
                                                     <input type="hidden" class="amounts" name="amount[]" value="{{ $offersamounts[$i] }}" />
                                                     <a href="#" id="amount" class="tamount" data-url="{{ route('affiliateupdateclicks', $offersnames[$i]) }}" data-pk="{{ $offersnames[$i] }}" data-type="text" data-placement="top" data-title="Edit Comment">{{ $offersamounts[$i] }}</a>
                                             </td>
                                              <td><span id="deloffer" class="btn btn-danger deloffer"><input type="hidden" value="{{ $offersnames[$i] }}" /><i style="font-size: 18px;" class="fa fa-trash"></i></span></td>
                                            </tr>
                                          @endfor
                                       </tbody>
                                       <tfooter>
                                          <tr>
                                             <td>
                                                <select id="offers_select" name="offers[]" class="form-control select">
                                                  <option disabled="disabled" selected="selected">Select Offer</option>
                                                  <?php 
                                                  $offers = App\Offer::leftJoin('assignoffers', 'offers.id', '=', 'assignoffers.offer_id')
                                                                  ->where('assignoffers.user_id', $offeredit->affiliate_id)
                                                                  ->get(); ?>
                                                @foreach($offers as $offer)
                                                  <option value="{{$offer->offer_id}}" <?php if(in_array($offer->offer_id, $offersnames)) { echo 'disabled="disabled"'; } ?> >{{$offer->offer_name}}</option>
                                                @endforeach
                                                </select>
                                             </td>
                                             <td>&nbsp;</td>
                                             <td>&nbsp;</td>
                                             <td><b><h4>Total:</h4></b></td>
                                             <td><b><h4>$00.00</h4></b></td>
                                          </tr>
                                       </tfooter>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <label class="control-label">Note</label>
                                 <textarea name="note" placeholder="Note" class="form-control">{{ $offeredit->note }}</textarea>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-layout-submit" style="text-align: left;">
                                    <button type="submit" name="submit" id="convert_json" value="1" class="btn btn-info" >Update</button>
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


      $(document).ready(function(){
            xeditable();

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
                          xeditable();
                        }
                    });
                });


         $('#generate_button').on('click', function(){
            var value = $('#affiliate_id').val();
            var token = "{{ csrf_token() }}";
            $.ajax({
               type: "POST",
               url: '{{ route("affiliatedetail") }}',
               data: { "_token": token, "userid": value},
               success: function( response ) {
                  $('#companyname').html(response['user']['company']);
                  $('#username').html(response['user']['fname']+' '+response['user']['lname']);
                  $('#useraddress').html(response['user']['country']);
                  $('#useremail').html(response['user']['email']);
                  $('#offers_select').html(response['msg']);
                  $('#adminname').html('{{ Auth::user()->fname }} {{ Auth::user()->lname }}');
                  $('#adminaddress').html('{{ Auth::user()->country }}');
                  $('#admincontact').html('{{ Auth::user()->contactno }}');
                  $('#adminemail').html('{{ Auth::user()->email }}');
                  $('#offerdetails').html('');
                  var d = new Date();
                  var strDate = d.getFullYear() + "" + (d.getMonth()+1) + "" + d.getDate();
                  var random = Math.floor(1000 + Math.random() * 9000);
                  var invoice_no = strDate+"-"+value+"-"+random+"/fadhal";
                  $('#invoice_no').val(invoice_no);
                  $('#generated').show();
               }
           });
         });

      });

      function xeditable(){
        $(document).ready(function(){
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
               $(this).closest('td').find('input.clicks').val(response['value']);
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
               $(this).closest('td').find('input.signups').val(response['value']);
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
               $(this).closest('td').find('input.amounts').val(response['value']);
               console.log(response);
             }
          });


         $('.deloffer').on('click', function(){
            var id = $(this).find('input').val();
            $(this).closest('tr').remove();
            $("#offers_select option[value=" + id + "]").removeAttr('disabled');
         });
       });
      }
         </script>
         @endsection

