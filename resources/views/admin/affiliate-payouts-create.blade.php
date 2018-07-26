@extends('layouts.header')
         
         @section('content') 
        <!-- Right Side Content Start -->
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
                                    <h3>Create Affiliate Payout</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>forms</li>
                                       <li>form validation</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Validation Form Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>Affiliate Payout</h3>
                              <div class="form-validation-box">
                                 <div class="form-wrap">
                                    <form data-parsley-validate >
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="control-label">Offers:</label>
                                                <div id="slWrapper" class="parsley-select wd-250">
                                                   <select class="form-control" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer"  required>
                                                      <option label="Choose one"></option>
                                                      <option value="India">India</option>
                                                      <option value="America">America</option>
                                                      <option value="Indoneshia">Indoneshia</option>
                                                      <option value="Pakistan">Pakistan</option>
                                                      <option value="Bangladesh Explorer">Bangladesh</option>
                                                   </select>
                                                   <div id="slErrorContainer"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="control-label">Affiliate:</label>
                                                <div id="slWrapper" class="parsley-select wd-250">
                                                   <select class="form-control" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer"  required>
                                                      <option label="Choose one"></option>
                                                      <option value="India">India</option>
                                                      <option value="America">America</option>
                                                      <option value="Indoneshia">Indoneshia</option>
                                                      <option value="Pakistan">Pakistan</option>
                                                      <option value="Bangladesh Explorer">Bangladesh</option>
                                                   </select>
                                                   <div id="slErrorContainer"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <div id="slWrapper" class="parsley-select wd-250">
                                                   </br>
                                                   <label class="control-label">Payout Type
                                          : CPA</label></br>
                                                   <label class="control-label">Offer Payout
                                          : $1</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="control-label">Affiliate Payout:</label>
                                                <div id="slWrapper" class="parsley-select wd-250">
                                                    <input type="text" placeholder="Value" class="form-control" required >
                                                   <div id="slErrorContainer"></div>
                                                </div>
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
                  </div>
                  <!-- End Validation Form Row -->
                   
               </div>
            </div>
             
             
         </section>
         <!-- End Right Side Content -->
         @endsection

