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
                                    <h3>Pending Advertisers</h3>
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
                                       <th>Company</th>
                                       <th>Name</th>
                                       <th>Website</th>
                                       <th>IM</th>
                                       <th>GEO</th>
                                       <th>Mobile NO.</th>
                                       <th>Register Time</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(!empty($advertisers))
                                    @foreach($advertisers as $advertiser)
                                    <tr>
                                       <td>#{{ $loop->iteration }}</td>
                                       <td>{{ $advertiser->company }}</td>
                                       <td>{{ $advertiser->fname }} {{ $advertiser->lname }}</td>
                                       <td>{{ $advertiser->website }}</td>
                                       <td>{{ $advertiser->imid }} {{ $advertiser->imaccount }}</td>
                                       <td>{{ $advertiser->geo }}</td>
                                       <td>{{ $advertiser->contactno }}</td>
                                       <td>{{ $advertiser->created_at }}</td>
                                       <td>
                                             <span class="label {{ $advertiser->status == 0 ? "label-warning" : ($advertiser->status == 1 ? 'label-success' : 'label-danger') }} ">{{ $advertiser->status == 0 ? "Pending" : ($advertiser->status == 1 ? 'Active' : 'Rejected') }}</span>
                                       </td>
                                       <td>
                                          <a href="{{ route('advertiser.approve', $advertiser->id) }}" class="product-table-info" data-toggle="tooltip" title="Approve"><i class="fa fa-check"></i></a>
                                          @if($advertiser->status != 3)
                                          <a href="{{ route('affiliate.reject', $advertiser->id) }}" class="product-table-danger" data-toggle="tooltip" title="Decline"><i class="fa fa-times"></i></a>
                                          @endif
                                       </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    

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

