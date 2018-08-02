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
                                    <h3>Invoice</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>Additional Pages</li>
                                       <li>Invoice</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Invoice Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="invoice-box">
                              <style type="text/css">
                                 .pending { background: #f0ad4e; }
                                 .pending::after {  border-color: #f0ad4e transparent; }
                              </style>
                              <h4 class="invoice-status {{ ($invoice->status == 1 ) ? '' : 'pending' }}" >{{ ($invoice->status == 1 ) ? 'Paid' : 'Pending' }}</h4>
                              <div class="invoice-head">
                                 <h2>Invoice: #{{ $invoice->invoiceno }}</h2>
                              </div>
                              <div class="invoice-address">
                                 <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                       <div class="invoice-company-address">
                                          <h3>Customer Information.</h3>
                                          <p class="info-p">Company:
                                             <b id="companyname">{{ $user->company }}</b>
                                          </p>
                                          <p class="info-p">Name:
                                             <b id="username">{{ $user->fname }} {{ $user->lname }}</b>
                                          </p>
                                          <p class="info-p">Address:
                                             <b id="useraddress">{{ $user->address }}</b>
                                          </p>
                                          <p class="info-p">Email:
                                             <b id="useremail">{{ $user->email }}</b>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                       <div class="billed-to-address">
                                          <h3>Contact Information</h3>
                                          <p class="info-p">Name: 
                                             <b id="adminname">{{ $admin->fname }} {{ $admin->lname }}</b>
                                          </p>
                                          <p class="info-p">Address:
                                             <b id="adminaddress">{{ $admin->address }}</b>
                                          </p>
                                          <p class="info-p">Phone:
                                             <b id="admincontact">{{ $admin->contactno }}</b>
                                          </p>
                                          <p class="info-p">Email:
                                             <b id="adminemail">{{ $admin->email }}</b>
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="invoice-table">
                                 <div class="table-responsive">
                                    <table class="table table-bordered">
                                       <thead>
                                          <tr>
                                             <th>Name</th>
                                             <th>Clicks</th>
                                             <th>Conversions</th>
                                             <th>Total</th>
                                          </tr>
                                       </thead>
                                       <?php
                                          $offersnames = json_decode($invoice->offer_names);
                                          $offersclicks = json_decode($invoice->offer_clicks);
                                          $offerssignups = json_decode($invoice->offer_signups);
                                          $offersamounts = json_decode($invoice->offer_amounts);
                                       ?>
                                       <tbody id="offerdetails">
                                          @for($i = 0; $i<count($offersnames); $i++)
                                            <tr>
                                              <td><input type="hidden" class="name" name="name[]" value="{{ $offersnames[$i] }}" />{{ $offersnames[$i] }}</td>
                                             <td>
                                                     <input type="hidden" class="clicks" name="clicks[]" value="{{ $offersclicks[$i] }}" />
                                                  <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                                     
                                                     <a href="#" id="clicks" class="tclicks" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">{{ $offersclicks[$i] }}</a>
                                                  </form>
                                             </td>
                                             <td>
                                                     <input type="hidden" class="signups" name="signup[]" value="{{ $offerssignups[$i] }}" />
                                                  <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                                     
                                                     <a href="#" id="signup" class="tsignup" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">{{ $offerssignups[$i] }}</a>
                                                  </form>
                                             </td>
                                             <td>
                                                     <input type="hidden" class="amounts" name="amount[]" value="{{ $offersamounts[$i] }}" />
                                                  <form action="'.route('affiliateupdateclicks', $request->offerid).'" method="post">
                                                     <a href="#" id="amount" class="tamount" data-url="'.route('affiliateupdateclicks', $request->offerid).'" data-pk="'.$request->offerid.'" data-type="text" data-placement="top" data-title="Edit Comment">{{ $offersamounts[$i] }}</a>
                                                  </form>
                                             </td>
                                            </tr>
                                          @endfor
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="invoice-footer-note">
                                 <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                       <div class="invoice-note">
                                          <h4>Note</h4>
                                          <p>{{ $invoice->note }}</p>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                       <div class="invoice-subtotal">
                                          <p><span>Sub-Total:</span> $3,627.50</p>
                                          <p><span>discount:</span> -$150.00</p>
                                          <p><span>VAT:</span> 14.5%</p>
                                          <h3>$3,627.50</h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="invoice-action">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <ul>
                                          <li><a href="#" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></a></li>
                                          <li><a href="#" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Invoice Row -->
                   
               </div>
            </div>
             
         @endsection