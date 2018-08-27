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
                   
                  <div class="row">
                     <div class="col-md-12">
                        @if(Session::has('failed'))
                           <div class="alert alert-danger alert-dismissible">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong>Warning!</strong> {{ Session::get('failed') }}
                           </div>
                        @endif
                        @if(Session::has('success'))
                           <div class="alert alert-danger alert-dismissible">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong>Success!</strong> {{ Session::get('success') }}
                           </div>
                        @endif
                     </div>
                  </div>

                  <!-- Validation Form Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>Affiliate Payout</h3>
                              <div class="form-validation-box">
                                 <div class="form-wrap">
                                    <form data-parsley-validate method="POST" action="{{ route('affiliatepayoutsave') }}">
                                       {{ csrf_field() }}
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="control-label">Offers:</label>
                                                <div id="slWrapper" class="parsley-select wd-250">
                                                   <select class="form-control" name="offerid" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" id="offerrate" required>
                                                      <option label="Choose one"></option>
                                                      @foreach($offers as $offer)
                                                      <option value="{{ $offer->id }}">{{ $offer->offer_name }}</option>
                                                      @endforeach
                                                   </select>
                                                   <div id="slErrorContainer"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="control-label">Affiliate:</label>
                                                <div id="slWrapper" class="parsley-select wd-250">
                                                   <select class="form-control" name="affiliateid" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer"  required>
                                                      <option label="Choose one"></option>
                                                      @foreach($affiliates as $affiliate)
                                                      <option value="{{ $affiliate->id }}">{{ $affiliate->fname }} {{ $affiliate->lname }}</option>
                                                      @endforeach
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
                                                   <div id="offerResponse">
                                                   
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <label class="control-label">Affiliate Payout:</label>
                                                <div id="slWrapper" class="parsley-select wd-250">
                                                    <input type="text" name="payout" placeholder="Value" class="form-control" required >
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
         <script type="text/javascript">
            $(document).ready(function() {
                $('#offerrate').on('change', function (e) {
                    e.preventDefault();
                    var offerid  = $(this).val();
                    var token = "{{ csrf_token() }}";
                    $.ajax({
                        type: "POST",
                        url: '{{ route("offerrate") }}',
                        data: { "_token": token, "offerid": offerid},
                        success: function( response ) {
                            $("#offerResponse").html("</br>"+response['msg']);
                        }
                    });
                });
            });
         </script>
         <!-- End Right Side Content -->
         @endsection

