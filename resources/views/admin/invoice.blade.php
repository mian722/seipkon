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
                                             <th>#ID</th>
                                             <th>Name</th>
                                             <th>Clicks</th>
                                             <th>Conversions</th>
                                             <th>Total</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Website Design</td>
                                             <td>Sed ut perspiciatis unde omnis iste natus error...</td>
                                             <td>2</td>
                                             <td>$150.00</td>
                                             <td>$300.00</td>
                                          </tr>
                                          <tr>
                                             <td>Firefox Plugin</td>
                                             <td>At vero eos et accusamus et iusto odio dignissimos ducimus qui...</td>
                                             <td>1</td>
                                             <td>$1,200.00</td>
                                             <td>$1,200.00</td>
                                          </tr>
                                          <tr>
                                             <td>iPhone App</td>
                                             <td>Et harum quidem rerum facilis est et expedita distinctio</td>
                                             <td>2</td>
                                             <td>$850.00</td>
                                             <td>$1,700.00</td>
                                          </tr>
                                          <tr>
                                             <td>Android App</td>
                                             <td>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet...</td>
                                             <td>3</td>
                                             <td>$850.00</td>
                                             <td>$2,550.00</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              <div class="invoice-footer-note">
                                 <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                       <div class="invoice-note">
                                          <h4>Note</h4>
                                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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