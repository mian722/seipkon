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
                                    <h3>Pending Affiliates</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>e-Commerce</li>
                                       <li>Product order list</li>
                                    </ul>
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
                                    @if(!empty($affiliates))
                                    @foreach($affiliates as $affiliate)
                                    <tr>
                                       <td>#{{ $loop->iteration }}</td>
                                       <td>{{ $affiliate->company }}</td>
                                       <td>{{ $affiliate->fname }} {{ $affiliate->lname }}</td>
                                       <td>{{ $affiliate->website }}</td>
                                       <td>{{ $affiliate->imid }} {{ $affiliate->imaccount }}</td>
                                       <td>{{ $affiliate->geo }}</td>
                                       <td>{{ $affiliate->contactno }}</td>
                                       <td>{{ $affiliate->created_at }}</td>
                                       <td>
                                          <span class="label {{ $affiliate->status == 0 ? 'label-warning' : 'label-danger' }} ">{{ $affiliate->status == 0 ? "Pending" : "Rejected" }}</span>
                                       </td>
                                       <td>
                                          <a href="{{ route('approve.affiliate', $affiliate->id) }}" class="product-table-info" data-toggle="tooltip" title="Approve"><i class="fa fa-check"></i></a>
                                          @if($affiliate->status != 3)
                                          <a href="{{ route('affiliate.reject', $affiliate->id) }}" class="product-table-danger" data-toggle="tooltip" title="Decline"><i class="fa fa-times"></i></a>
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

