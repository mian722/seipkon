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
                                 <form method="post" action="{{ (isset($assignoffers) ? route('affiliate.userpostbackupdate', [Auth::user()->fname, $assignoffers->id]) : route('affiliate.savepostback', Auth::user()->fname)) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                       <label class="control-label" style="width: 100%">Type</label>
                                       <div class="form-group form-radio col-md-4">
                                          <input id="radio-1" name="postback_type" type="radio" value="offer" {{ (old('postback_type', isset($assignoffers->postback_type) ? $assignoffers->postback_type : null) == 'offer') ? 'checked' : '' }}  />
                                          <label for="radio-1" class="inline control-label">Offer</label>
                                       </div>
                                       <div class="form-group form-radio col-md-4">
                                          <input id="radio-2" name="postback_type" value="smartlink" type="radio" 
                                          {{ (old('postback_type', isset($assignoffers->postback_type) ? $assignoffers->postback_type : null) == 'smartlink') ? 'checked' : '' }}  />
                                          <label  for="radio-2" class="inline control-label">SmartLink</label>
                                       </div>
                                       <div class="form-group form-radio col-md-4">
                                          <input id="radio-3" name="postback_type" value="global" type="radio" {{ (old('postback_type', isset($assignoffers->postback_type) ? $assignoffers->postback_type : null) == 'global') ? 'checked' : '' }}  />
                                         <label  for="radio-3" class="inline control-label">Global</label>
                                       </div>
                                    </div>
                                    <div class="form-group smartlinklist" >
                                       <label class="control-label">Smartlink</label>
                                       <select class="form-control" name="smartlink_id">
                                          <option disabled="disabled">Select Smartlink</option>
                                          @foreach($offers as $offer)
                                          <option value="{{ $offer->id }}" {{ (old('offer_id', isset($assignoffers->smartlink_id) ? $assignoffers->smartlink_id : null) == $offer->id) ? 'selected' : '' }}>{{ $offer->offer_name }}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                    <div class="form-group offerlist" >
                                       <label class="control-label">Offer</label>
                                       <select class="form-control" name="offer_id">
                                          <option disabled="disabled">Select Offer</option>
                                          @foreach($offers as $offer)
                                          <option value="{{ $offer->id }}" {{ (old('offer_id', isset($assignoffers->offer_id) ? $assignoffers->offer_id : null) == $offer->id) ? 'selected' : '' }}>{{ $offer->offer_name }}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Protocol</label>
                                       <select class="form-control select2" name="postback_protocol">
                                          <option  value="postbackurl" {{ ((isset($assignoffers->user_id) ? $assignoffers->postback_protocol : null) == 'postbackurl') ? 'selected' : '' }}>Postback Url</option>
                                          <option value="smartlink" {{ ((isset($assignoffers->postback_protocol) ? $assignoffers->postback_protocol : null) == 'smartlink') ? 'selected' : '' }}>Smart Link</option>
                                          <option value="imagepixel" {{ ((isset($assignoffers->postback_protocol) ? $assignoffers->postback_protocol : null) == 'imagepixel') ? 'selected' : '' }}>Image Pixel</option>
                                       </select>
                                    </div>
                                    @if(isset($assignoffers->user_id))
                                    <div class="form-group">
                                       <label class="control-label">Status</label>
                                       <select class="form-control select2" name="status">
                                          <option  value="1" {{ ($assignoffers->status == 1) ? 'selected' : '' }}>Approved</option>
                                          <option  value="0" {{ ($assignoffers->status == 0) ? 'selected' : '' }}>Rejected</option>
                                       </select>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                       <label class="control-label">Code</label>
                                       <textarea class="form-control" id="message" name="postbacklink" placeholder="Textarea">{{ (isset($assignoffers->user_id) ? $assignoffers->postbacklink : null)}}</textarea>
                                    </div>
                                    <div class="form-group">
                                       <button class="btn btn-success btn-lg">{{ (isset($assignoffers) ? 'Update' : 'Create') }}</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="accordian-example">
                              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                       <h4 class="panel-title">
                                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                           Tracking Parameters <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                       <div class="panel-body">
                                          <div class="table-responsive">
                                                      <table class="table">
                                                         <tbody>
                                                            <tr>
                                                               <td>{click_id}</td>
                                                               <td>{offer_id}</td>
                                                               <td>{event_id}</td>
                                                               <td>{country_id}</td>
                                                               <td>{aff_id}</td>
                                                            </tr>
                                                            <tr>
                                                               <td>{adv_id}</td>
                                                               <td>{adv_sub1}</td>
                                                               <td>{adv_sub2}</td>
                                                               <td>{adv_sub3}</td>
                                                               <td>{aff_sub1}</td>
                                                            </tr>
                                                            <tr>
                                                               <td>{aff_sub2}</td>
                                                               <td>{aff_sub3}</td>
                                                               <td>{aff_sub4}</td>
                                                               <td>{aff_sub5}</td>
                                                               <td>{source_id}</td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
                  <!-- End Form Layout Row -->
                   
               </div>
            </div>
            <script type="text/javascript">
               $(document).ready(function () { 
                  if($("#radio-1").attr("checked") == 'checked'){
                     $(".smartlinklist").hide();
                     $(".offerlist").show();
                  }
                  if($("#radio-2").attr("checked") == 'checked'){
                     $(".smartlinklist").show();
                     $(".offerlist").hide();
                  }
                  if($("#radio-3").attr("checked") == 'checked'){
                    $(".smartlinklist").hide();
                     $(".offerlist").hide();
                  }
                  $("#radio-2").click(function() {
                     $(".smartlinklist").show();
                     $(".offerlist").hide();
                   });
                  $("#radio-1").click(function() {
                     $(".smartlinklist").hide();
                     $(".offerlist").show();
                   });
                  $("#radio-3").click(function() {
                     $(".smartlinklist").hide();
                     $(".offerlist").hide();
                   });
               });
            </script>
             
         </section>
         <!-- End Right Side Content -->
         @endsection

