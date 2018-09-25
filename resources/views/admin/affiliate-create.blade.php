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
                                    <h3>{{ isset($affiliate) ? 'Update' : 'Create' }} Affiliate</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('/') }}">Dashboard</a></li>
                                       <li>Affiliates</li>
                                       <li>Create Affiliate</li>
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
                                 <form data-parsley-validate  method="POST" action="{{ isset($affiliate) ? route('affiliate.update', $affiliate->id) : route('add-affliate.create') }}">
                                    
                                    <div class="row">
                                       <div class="col-md-3">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                          <div class="form-group">
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                             <label class="control-label">First Name:</label>
                                             <input type="text" name="fname" value="{{ isset($affiliate) ? $affiliate->fname : '' }}" class="form-control" required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Last Name:</label>
                                             <input type="text" name="lname" value="{{ isset($affiliate) ? $affiliate->lname : '' }}" class="form-control" required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Email Address:</label>
                                             <input type="email" name="email" value="{{ isset($affiliate) ? $affiliate->email : '' }}"  class="form-control" required>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Mobile NO:</label>
                                             <input type="text" name="mobile"  value="{{ isset($affiliate) ? $affiliate->contactno : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label">IM:</label>
                                             <select class="form-control select2" name="imtype" required>
                                                <option {{ (old('imid', isset($affiliate->imid) ? $affiliate->imid : null) == 'IM') ? 'selected=selected' : '' }}>IM</option>
                                                <option {{ (old('imid', isset($affiliate->imid) ? $affiliate->imid : null) == 'Skype') ? 'selected=selected' : '' }}>Skype</option>
                                                <option {{ (old('imid', isset($affiliate->imid) ? $affiliate->imid : null) == 'Facebook') ? 'selected=selected' : '' }}>Facebook</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label">IM Account:</label>
                                             <input type="text" name="imaccount" value="{{ isset($affiliate) ? $affiliate->imaccount : '' }}" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label">Country:</label>
                                             <select name="country" class="form-control select2" required>
                                                @foreach($countries as $key => $value)
                                                   <option {{ (old('country', isset($affiliate) ? $affiliate->country : null) == $key) ? 'selected=selected' : '' }} value="{{ $key }}" >{{ $value[1] }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Website:</label>
                                             <input type="text" name="website" value="{{ isset($affiliate) ? $affiliate->website : '' }}" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Company:</label>
                                             <input type="text" name="company" value="{{ isset($affiliate) ? $affiliate->company : '' }}" class="form-control" required>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Manager:<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <select class="form-control select2" name="manager"  required>
                                                @foreach($managers as $manager)
                                                <option {{ (old('manager', isset($affiliate) ? $affiliate->managerid : null) == $manager->id) ? 'selected=selected' : '' }} value="{{ $manager->id }}">{{ $manager->fname }} {{ $manager->lname }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Status:</label>
                                             <select class="form-control select2" name="status">
                                                <option {{ (old('status', isset($affiliate) ? $affiliate->status : null) == 1) ? 'selected=selected' : '' }} value="1">Active</option>
                                                <option {{ (old('status', isset($affiliate) ? $affiliate->status : null) == 0) ? 'selected=selected' : '' }} value="0">Disable</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Password:</label>
                                             <input type="password" name="password" class="form-control" {{ isset($affiliate) ? '' : 'required' }}>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-layout-submit">
                                                      <button type="submit" class="btn btn-info" >{{ isset($affiliate) ? 'Update' : 'Submit' }}</button>
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

