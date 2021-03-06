@extends('layouts.userheader')
         
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
                              <div class="col-md-11 col-sm-11">
                                 <div class="seipkon-breadcromb-left">
                                    <h3>Postback</h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Advance Table Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="advance-table">
                              <table id="responsive_datatables_example" class="table display table-striped table-bordered responsive nowrap">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Type</th>
                                       <th>Protocol</th>
                                       <th>Code</th>
                                       <th>Create Time</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody class="dis-none">
                                    @foreach($postbacks as $postback)
                                    <tr>
                                       <td>#{{ $loop->iteration }}</td>
                                       <td>@if(!empty($postback->offer_id)) {{ $postback->offer_name }} offer @elseif(!empty($postback->smartlink_id)) {{ $postback->offer_name }} smart
                                       @else All offer
                                       @endif</td>
                                       <td>{{ $postback->postback_type }}</td>
                                       <td>{{ $postback->postback_protocol }}</td>
                                       <td><a href="#" id="username" class="username" data-type="textarea" data-pk="1" data-url="/post" data-value="{{ $postback->postbacklink }}">View</a></td>
                                       <td>{{ $postback->created_at }}</td>
                                       <td><label class="label {{ ($postback->status == 1) ? 'label-success' : 'label-danger' }}">{{ ($postback->status == 1) ? 'Approved' : 'Disable' }}</label></td>
                                       <td><a class="btn btn-success btn-xs" href="{{ route('affiliate.createpostback' , [Auth::user()->fname, 'id'=> $postback->id]) }}" >{{ ( $postback->postbacklink != '' ? 'Update' : 'Create') }}</a></td>
                                       
                                    </tr>
                                 @endforeach 
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Advance Table Row -->
                   
               </div>
            </div>
         </section> 
         <!-- End Right Side Content -->
         @endsection

