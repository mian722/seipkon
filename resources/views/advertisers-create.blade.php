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
                                    <h3>Create Advertiser</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('/') }}">Dashboard</a></li>
                                       <li>Advertisers</li>
                                       <li>Create Advertiser</li>
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
                                 <form>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">First Name:</label>
                                             <input type="text" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Last Name:</label>
                                             <input type="text"  class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Email Address:</label>
                                             <input type="email"  class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Mobile NO:</label>
                                             <input type="email"  class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">IM:</label>
                                             <select class="form-control select2">
                                                <option selected="selected">IM</option>
                                                <option>Skype</option>
                                                <option>facebook</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">IM Account:</label>
                                             <input type="text"  class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Country:</label>
                                             <select class="form-control select2">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Manager:<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <select class="form-control select2" data-placeholder="Select a State">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Company:</label>
                                             <input type="email"  class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Website:</label>
                                             <input type="email" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Manager:<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <select class="form-control select2">
                                                <option selected="selected">IM</option>
                                                <option>Skype</option>
                                                <option>facebook</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Status:</label>
                                             <select class="form-control select2">
                                                <option selected="selected">Active</option>
                                                <option>Disable</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Password:</label>
                                             <input type="password" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Tier:</label>
                                             <select class="form-control select2" data-placeholder="Select a State">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                             </select>
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

