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
                                    <h3>{{ isset($advertiser) ? 'Update' : 'Create' }} Advertiser</h3>
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
                                 <form data-parsley-validate  method="POST" action="{{ isset($advertiser) ? route('advertiser.update', $advertiser->id) : route('advertiser.create') }}">
                                    <div class="row">
                                       <div class="col-md-3">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                          <div class="form-group">
                                             <label class="control-label">First Name:</label>
                                             <input type="text" name="fname" value="{{ isset($advertiser) ? $advertiser->fname : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Last Name:</label>
                                             <input type="text" name="lname" value="{{ isset($advertiser) ? $advertiser->lname : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Email Address:</label>
                                             <input type="email" name="email" value="{{ isset($advertiser) ? $advertiser->email : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Mobile NO:</label>
                                             <input type="text" name="mobile" value="{{ isset($advertiser) ? $advertiser->contactno : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">IM:</label>
                                             <select name="imtype" class="form-control select2">
                                                <option {{ (old('imid', isset($advertiser->imid) ? $advertiser->imid : null) == 'IM') ? 'selected=selected' : '' }}>IM</option>
                                                <option {{ (old('imid', isset($advertiser->imid) ? $advertiser->imid : null) == 'Skype') ? 'selected=selected' : '' }}>Skype</option>
                                                <option {{ (old('imid', isset($advertiser->imid) ? $advertiser->imid : null) == 'Facebook') ? 'selected=selected' : '' }}>Facebook</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">IM Account:</label>
                                             <input type="text" name="imaccount" value="{{ isset($advertiser) ? $advertiser->imaccount : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Country:</label>
                                             <select name="country" class="form-control select2">
                                                @foreach($countries as $key => $value)
                                                   <option {{ (old('country', isset($advertiser) ? $advertiser->country : null) == $key) ? 'selected=selected' : '' }} value="{{ $key }}" >{{ $value[1] }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Manager:<span data-toggle="tooltip" title="" data-original-title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                             <select name="manager" class="form-control select2" data-placeholder="Select a State">
                                                <option value="&nbsp;" selected="">&nbsp;</option>
                                                @foreach($managers as $manager)
                                                <option {{ (old('manager', isset($advertiser) ? $advertiser->managerid : null) == $manager->id) ? 'selected=selected' : '' }} value="{{ $manager->id }}">{{ $manager->fname }} {{ $manager->lname }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Company:</label>
                                             <input type="text" name="company" value="{{ isset($advertiser) ? $advertiser->company : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Website:</label>
                                             <input type="text" name="website" value="{{ isset($advertiser) ? $advertiser->website : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Status:</label>
                                             <select name="status" class="form-control select2">
                                                <option {{ (old('status', isset($advertiser) ? $advertiser->status : null) == 1) ? 'selected=selected' : '' }} value="1">Active</option>
                                                <option {{ (old('status', isset($advertiser) ? $advertiser->status : null) == 0) ? 'selected=selected' : '' }} value="0">Disable</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Password:</label>
                                             <input type="password" name="password" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-2">
                                          <div class="form-group">
                                             <label class="control-label">Security Code:</label>
                                             <select name="security" name="co" class="form-control select2" data-placeholder="Select a State">
                                                <option {{ (old('status', isset($advertiser) ? $advertiser->securitycode : null) != null) ? 'selected=selected' : '' }} value="yes">yes</option>
                                                <option {{ (old('status', isset($advertiser) ? $advertiser->securitycode : null) == null) ? 'selected=selected' : '' }} value="no">no</option>
                                                
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label">&nbsp;</label>
                                             <input name="scode" value="{{ (old('status', isset($advertiser) ? $advertiser->securitycode : null) != null) ? $advertiser->securitycode : '' }}" type="text" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-layout-submit">
                                                      <button type="submit" class="btn btn-info" >{{ isset($advertiser) ? 'Update' : 'Submit' }}</button>
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

