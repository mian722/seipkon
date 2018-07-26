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
                                    <h3>Affiliates</h3>
                                 </div>
                              </div>
                              <div class="col-md-1 col-sm-1">
                                 <a class="btn btn-success btn-xs" href="{{ url('affiliate-create') }}" >Create</a>
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
                                       <th>IM</th>
                                       <th>Manager</th>
                                       <th>Country</th>
                                       <th>Website</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($affilates as $affilate)
                                       <tr>
                                          <td>#{{ $loop->iteration }}</td>
                                          <td>{{ $affilate->company }}</td>
                                          <td><a href="{{ url('/affiliate-detail/'.$affilate->id) }}" >{{ $affilate->fname }}  {{ $affilate->lname }}</a></td>
                                          <td>{{ $affilate->imid }}: {{ $affilate->imaccount }}</td>
                                          <?php $manager = null;
                                          if ($affilate->admin_id != 0) {
                                             $manager = App\User::select('fname')->where('id', $affilate->admin_id)->first();
                                          }  ?>
                                          <td>{{ ($manager != null) ? $manager->fname : '&nbsp;' }}</td>
                                          <td>{{ $affilate->country }}</td>
                                          <td>{{ $affilate->website }}</td>

                                          <td>
                                             <span class="label {{ $affilate->status == 1 ? 'label-success' : 'label-warning' }} ">{{ $affilate->status == 1 ? "Active" : "Deactive" }}</span>
                                          </td>
                                          <td>
                                             <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                             <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                             <a href="#" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
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

