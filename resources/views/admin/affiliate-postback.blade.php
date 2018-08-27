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
                              <div class="col-md-11 col-sm-11">
                                 <div class="seipkon-breadcromb-left">
                                    <h3>Postback</h3>
                                 </div>
                              </div>
                              <div class="col-md-1 col-sm-1">
                                 <a class="btn btn-success btn-xs" href="{{ url('postback-create') }}" >Create</a>
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
                                       <th>Affiliate</th>
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
                                       <td><a href="{{ url('/affiliate-detail/'.$postback->user_id ) }}"> {{ $postback->fname }}</a></td>
                                       <td>{{ $postback->offer_name }}</td>
                                       <td>{{ $postback->postback_type }}</td>
                                       <td>{{ $postback->postback_protocol }}</td>
                                       <td><a href="#" id="username" class="username" data-type="textarea" data-pk="1" data-url="/post" data-value="{{ $postback->postbacklink }}">View</a></td>
                                       <td>{{ $postback->created_at }}</td>
                                       <td><label class="label {{ ($postback->status == 1) ? 'label-success' : 'label-danger' }}">{{ ($postback->status == 1) ? 'Approved' : 'Disable' }}</label></td>
                                       <td>
                                          <a href="{{ url('/postbackcreate/'.$postback->user_id.'/edit' ) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
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

