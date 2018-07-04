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
                                    <h3>form layouts</h3>
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
                        <div class="col-md-6">
                        <div class="page-box">
                           <div class="form-example">
                              <div class="form-wrap">
                                 <form>
                                    <div class="form-group">
                                       <label class="control-label">Basic Select</label>
                                       <select class="form-control select2">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Disabled Select</label>
                                       <select class="form-control select2" disabled="disabled">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Multiple Select</label>
                                       <select class="form-control select2" multiple="multiple" data-placeholder="Select a State">
                                          <option>Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Disabled Result</label>
                                       <select class="form-control select2">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option disabled="disabled">California (disabled)</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>select 2 elements</h3>
                              <div class="form-wrap">
                                 <form>
                                    <div class="form-group">
                                       <label class="control-label">Basic Select</label>
                                       <select class="form-control select2">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Disabled Select</label>
                                       <select class="form-control select2" disabled="disabled">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Multiple Select</label>
                                       <select class="form-control select2" multiple="multiple" data-placeholder="Select a State">
                                          <option>Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Disabled Result</label>
                                       <select class="form-control select2">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option disabled="disabled">California (disabled)</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                 </form>
                              </div>
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

