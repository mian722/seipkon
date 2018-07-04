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
                                    <h3>Create Advertiser Invoice </h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">Dashboard</a></li>
                                       <li>Advertiser Invoices</li>
                                       <li>Create Advertiser Invoice</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  
                  <!-- Form Layout Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="form-example add-product-form-group">
                              <h3>Details</h3>
                              <div class="form-wrap top-label-exapmple form-layout-page">
                                 <form>
                                    <div class="row">
                                       <div class="col-md-5">
                                          <p>
                                             <label>Advertiser</label>
                                             <select class="form-control select2">
                                                <option selected="selected">sss #2</option>
                                                <option>adf #5</option>
                                                <option>MJ #6</option>
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-2">
                                          <p>
                                             <label>Status</label>
                                             <select class="form-control select2">
                                                <option selected="selected">Pending</option>
                                                <option>Approved</option>
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-3">
                                          <p>
                                             <label>Currency</label>
                                             <select class="form-control select2">
                                                <option selected="selected">Currency</option>
                                                <option>adf #5</option>
                                                <option>MJ #6</option>
                                             </select>
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-5">
                                          <p>
                                             <label>Timezone</label>
                                             <select class="form-control select2">
                                                <option selected="selected">(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                <option>(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                                <option>(GMT -11:00)Pacific/Midway,Niue,Pago_Pago</option>
                                             </select>
                                          </p>
                                       </div>
                                       <div class="col-md-4">
                                          <p>
                                             <label>Duration <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <input type="text" id="reservation" placeholder="Date" />
                                          </p>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Memo</label>
                                             <textarea placeholder="Your Present Address" class="form-control"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-layout-submit">
                                                      <button type="submit" class="btn btn-info" >Submit</button>
                                                      <button type="submit" class="btn btn-danger">cancel</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Form Layout Row -->
                   
               </div>
            </div>
             
            <!-- Footer Area Start -->
            <footer class="seipkon-footer-area">
               <p>Seipkon - Bootstrap Admin Template by <a href="#">Themescare</a></p>
            </footer>
            <!-- End Footer Area -->
             
         </section>
         <!-- End Right Side Content -->
         @endsection

