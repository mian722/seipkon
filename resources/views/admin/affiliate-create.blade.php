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
                        <div class="page-box">
                           <div class="form-example">
                              <h3>Create Affliate</h3>
                              <div class="form-wrap top-label-exapmple form-layout-page">
                                 <form data-parsley-validate  method="POST" action="{{ route('add-affliate.create') }}">
                                    
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                             <label class="control-label">First Name:</label>
                                             <input type="text" name="fname" class="form-control" required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Last Name:</label>
                                             <input type="text" name="lname" class="form-control" required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Email Address:</label>
                                             <input type="email" name="email"  class="form-control" required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Mobile NO:</label>
                                             <input type="text" name="mobile" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label">IM:</label>
                                             <select class="form-control select2" name="imtype" required>
                                                <option selected="selected">IM</option>
                                                <option value="skype">Skype</option>
                                                <option value="facebook">facebook</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label">IM Account:</label>
                                             <input type="text" name="imaccount" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label">Country:</label>
                                             <select name="country" class="form-control select2" required>
                                                @foreach($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Website:</label>
                                             <input type="text" name="website" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Company:</label>
                                             <input type="text" name="company" class="form-control" required>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Manager:<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <select class="form-control select2" name="manager"  required>
                                                @foreach($managers as $manager)
                                                <option value="{{ $manager->id }}">{{ $manager->fname }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Status:</label>
                                             <select class="form-control select2" name="status">
                                                <option value="1" selected="selected">Active</option>
                                                <option value="2">Disable</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Password:</label>
                                             <input type="password" name="password" class="form-control" required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Tier:</label>
                                             <select name="tire" class="form-control select2" data-placeholder="Select a Tire">
                                                <option value="1">tire1</option>
                                                <option value="2">tire2</option>
                                                
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

