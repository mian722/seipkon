@extends('layouts.userheader')
         
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
                                    <h3>my profile</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>profile page</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Profile Row Start -->
                  <div class="row">
                     
                     <div class="col-md-12">
                        @if(Session::has('fail'))
                           <div class="alert alert-danger alert-dismissible fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Danger!</strong> {{ Session::get('fail') }}.
                           </div>
                        @endif
                        @if(Session::has('success'))
                           <div class="alert alert-success alert-dismissible fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Success!</strong> {{ Session::get('success') }}.
                           </div>
                        @endif
                        <div class="profile-right">
                           <div class="tabs-box-example horizontal-tab-example">
                                 <ul class="nav nav-tabs" id="service_pro" role="tablist">
                                    <li class="active" role="presentation"><a href="#home" role="tab" data-toggle="tab">Personal Info</a>
                                    </li>
                                    @if(Auth::user()->roles_id == 5)
                                    <li role="presentation"><a href="#profile" role="tab" data-toggle="tab"> Payment Details</a></li>
                                    @endif
                                    <li role="presentation"><a href="#messages" role="tab" data-toggle="tab"> Change Password</a></li>
                                    <!-- <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">settings</a></li> -->
                                 </ul>
                                    <div id="seipkkon_tab_content" class="tab-content">
                                       <div id="home" class="tab-pane fade in active">
                                          <div class="form-wrap top-label-exapmple form-layout-page">
                                                <form data-parsley-validate  method="POST" action="{{ isset($affiliate) ? route('affiliate.profileupdate', [Auth::user()->fname, $affiliate->id]) : route('add-affliate.create') }}">
                                                   
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                         <div class="form-group">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                            <label class="control-label">First Name:</label>
                                                            <input type="text" name="fname" value="{{ isset($affiliate) ? $affiliate->fname : '' }}" class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Last Name:</label>
                                                            <input type="text" name="lname" value="{{ isset($affiliate) ? $affiliate->lname : '' }}" class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Email Address:</label>
                                                            <input type="email" name="email" value="{{ isset($affiliate) ? $affiliate->email : '' }}"  class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
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
                                                            <select name="country" class="form-control select2" required>
                                                               @foreach($countries as $key => $value)
                                                                  <option {{ (old('country', isset($affiliate) ? $affiliate->country : null) == $key) ? 'selected=selected' : '' }} value="{{ $key }}" >{{ $value[1] }}</option>
                                                               @endforeach
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
                                    <div id="profile" class="tab-pane fade in">
                                       <div class="form-wrap top-label-exapmple form-layout-page">
                                                <form data-parsley-validate  method="POST" action="{{ isset($payments) ? route('affiliate.paymentupdate', [Auth::user()->fname, $payments->user_id]) : route('paymentmethod.create', Auth::user()->fname) }}">
                                                   <div class="row">
                                                      <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Default Payment Method:</label>
                                                            <select name="default_method" class="form-control" required>
                                                                  <option {{ (old('default', isset($payments) ? $payments->default_method : null) == 'bank') ? 'selected=selected' : '' }} value="bank" >Bank</option>
                                                                  <option {{ (old('default', isset($payments) ? $payments->default_method : null) == 'paypal') ? 'selected=selected' : '' }} value="paypal" >paypal</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12 box-header with-border">
                                                        <h4 class="box-title"><i class="fa fa-bank"></i>Bank Transfer</h4>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                         <div class="form-group">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                            <label class="control-label">Account Name:</label>
                                                            <input type="text" name="accountname" value="{{ isset($payments) ? $payments->bank_account_name : '' }}" class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">IBAN:</label>
                                                            <input type="text" name="iban" value="{{ isset($payments) ? $payments->iban : '' }}" class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Bank Name:</label>
                                                            <input type="text" name="bankname" value="{{ isset($payments) ? $payments->bank_name : '' }}"  class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Branch Name:</label>
                                                            <input type="text" name="branchname"  value="{{ isset($payments) ? $payments->branch_name : '' }}" class="form-control" >
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Country:</label>
                                                            <select name="country" class="form-control" required>
                                                               @foreach($countries as $key => $value)
                                                                  <option {{ (old('country', isset($payments) ? $payments->country : null) == $key) ? 'selected=selected' : '' }} value="{{ $key }}" >{{ $value[1] }}</option>
                                                               @endforeach
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Zip Code:</label>
                                                            <input type="text" name="zipcode" value="{{ isset($payments) ? $payments->zipcode : '' }}" class="form-control">
                                                         </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Phone NO:</label>
                                                            <input type="text" name="phonenumber" value="{{ isset($payments) ? $payments->phone : '' }}" class="form-control" required>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-12 box-header with-border">
                                                        <h4 class="box-title"><i class="fa fa-paypal"></i>Paypal</h4>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Paypal Email:</label>
                                                            <input type="email" name="paypalemail" value="{{ isset($payments) ? $payments->paypal_email : '' }}" class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Account Name:</label>
                                                            <input type="text" name="paypalaccountname" value="{{ isset($payments) ? $payments->paypal_account_name : '' }}"  class="form-control" required>
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
                                    <div id="messages" class="tab-pane fade in">
                                       <div class="form-wrap top-label-exapmple form-layout-page">
                                                <form data-parsley-validate  method="POST" action="{{  route('affiliate.passwordupdate', Auth::user()->fname) }}">
                                                   <div class="row">
                                                      <div class="col-md-12 box-header with-border">
                                                        <h4 class="box-title"><i class="fa fa-lock"></i>Change Password</h4>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                         <div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
                                                                    <input id="oldpassword" type="password" placeholder="Old Password" class="form-control" name="oldpassword" required>

                                                                    @if(Session::has('fail'))
                                                                        <span class="help-block">
                                                                            <strong>{{ Session::get('fail') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                                                                    @if ($errors->has('password'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>

                                                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

                                                                    @if ($errors->has('password_confirmation'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                                        </span>
                                                                    @endif
                                                            </div>
                                                      </div>
                                                      
                                                   </div>
                                                   
                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                            <div class="row">
                                                               <div class="col-md-12">
                                                                  <div class="form-layout-submit" style="text-align: left;">
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
                                    <div id="settings" class="tab-pane fade in">
                                       Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque exLorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. 
                                    </div>
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Profile Row -->
                   
               </div>
            </div>
             
@endsection