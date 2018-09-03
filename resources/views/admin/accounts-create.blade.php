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
                                    <h3>{{ isset($account) ? 'Update' : 'Create' }} Account</h3>
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
                                 <form action="{{ isset($account) ? route('account.update', $account->id) : route('storeaccount') }}"  method="post">
                                     {{ csrf_field() }}
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">First Name:</label>
                                             <input type="text" name="fname" value="{{ isset($account) ? $account->fname : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Last Name:</label>
                                             <input type="text"  name="lname" value="{{ isset($account) ? $account->lname : '' }}"  class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Email Address:</label>
                                             <input type="email" name="email" value="{{ isset($account) ? $account->email : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Password:</label>
                                             <input type="password" name="password" class="form-control" >
                                          </div>
                                       </div>
                                       
                                    </div>
                                    <div class="row">
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">IM:</label>
                                             <select name="imid" class="form-control select2">
                                                <option {{ (old('imid', isset($account->imid) ? $account->imid : null) == 'IM') ? 'selected=selected' : '' }}>IM</option>
                                                <option {{ (old('imid', isset($account->imid) ? $account->imid : null) == 'Skype') ? 'selected=selected' : '' }}>Skype</option>
                                                <option {{ (old('imid', isset($account->imid) ? $account->imid : null) == 'Facebook') ? 'selected=selected' : '' }}>Facebook</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">IM Account:</label>
                                             <input type="text" name="imaccount" value="{{ isset($account) ? $account->imaccount : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Mobile NO:</label>
                                             <input type="text" name="contactno" value="{{ isset($account) ? $account->contactno : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                          <div class="form-group">
                                             <label class="control-label">Country:</label>
                                             <select name="country" class="form-control select2">
                                                @if(!isset($account))
                                                   <option selected="selected">Select Country</option>
                                                @endif
                                                @foreach($countries as $key => $value)
                                                   <option {{ (old('country', isset($account) ? $account->country : null) == $key) ? 'selected=selected' : '' }} value="{{ $key }}" >{{ $value[1] }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                       
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Manager:</label>
                                             <select name="manager" class="form-control select2">
                                                @if(!isset($account))
                                                   <option selected="selected">Select Manager</option>
                                                @endif
                                                @foreach($managers as $manager)
                                                <option {{ (old('manager', isset($account) ? $account->managerid : null) == $manager->id) ? 'selected=selected' : '' }} value="{{ $manager->id }}">{{ $manager->fname }} {{ $manager->lname }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Address:</label>
                                             <input name="address" type="text" value="{{ isset($account) ? $account->address : '' }}" class="form-control" >
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-layout-submit">
                                                      <button type="submit" name="submit" class="btn btn-info" >{{ isset($account) ? 'Update' : 'Submit' }}</button>
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

