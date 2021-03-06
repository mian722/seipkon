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
                                    <h3>Create Role</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>forms</li>
                                       <li>form layouts</li>
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
                           <div class="form-example">
                              <div class="form-wrap top-label-exapmple form-layout-page">
                                 <form action="{{ route('storemanagerrole') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Name:</label>
                                             <input type="text" name="name" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label" for="message">Description:</label>
                                             <textarea class="form-control" name="description" id="message" placeholder=""></textarea>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3 col-sm-6">
                                          <label class="control-label" for="message">Permissions:</label>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" name="account_management"  id="chk_1"/>
                                             <label class="inline control-label" for="chk_1">Account Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" name="affiliate_management" id="chk_2"/>
                                             <label class="inline control-label" for="chk_2">Affiliate Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" name="global_management" id="chk_3"  />
                                             <label class="inline control-label" for="chk_3">Global Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" id="chk_4" name="setting_management"  />
                                             <label class="inline control-label"  for="chk_4">Setting Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-sm-6">
                                          <label class="control-label" for="message"></label>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" name="advertiser_management"  id="chk_5"/>
                                             <label class="inline control-label" for="chk_5">Advertiser Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" name="offer_management" id="chk_6"/>
                                             <label class="inline control-label" for="chk_6">Offer Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" name="report_management" id="chk_7"  />
                                             <label class="inline control-label" for="chk_7">Report Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                          <div class="form-group form-checkbox">
                                             <input type="checkbox" id="chk_8" name="smart_puller_management" />
                                             <label class="inline control-label" for="chk_8"> Smart Puller Management&nbsp;&nbsp;<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
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
            
             
         </section>
         <!-- End Right Side Content -->
         @endsection

