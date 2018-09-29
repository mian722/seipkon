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
                                    <h3>Advertisers</h3>
                                 </div>
                              </div>
                              <div class="col-md-1 col-sm-1">
                                 <a class="btn btn-success btn-xs" href="{{ url('advertisers-create') }}" >Create</a>
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
                                    @if(!empty($advertisers))
                                    @foreach($advertisers as $advertiser)
                                       <tr>
                                          <td>#{{ $loop->iteration }}</td>
                                          <td>{{ $advertiser->company }}</td>
                                          <td><a href="{{ route('advertiser.show', $advertiser->id) }}" >{{ $advertiser->fname }}  {{ $advertiser->lname }}</a></td>
                                          <td>{{ $advertiser->imid }}: {{ $advertiser->imaccount }}</td>
                                          <?php $manager = null;
                                          if ($advertiser->admin_id != 0) {
                                             $manager = App\User::select('fname')->where('id', $advertiser->admin_id)->first();
                                          }  ?>
                                          <td>{{ ($manager != null) ? $manager->fname : '&nbsp;' }}</td>
                                          <td>{{ $advertiser->country }}</td>
                                          <td>{{ $advertiser->website }}</td>

                                          <td>
                                             <span class="label {{ $advertiser->status == 0 ? "label-warning" : ($advertiser->status == 1 ? 'label-success' : 'label-danger') }} ">{{ $advertiser->status == 0 ? "Pending" : ($advertiser->status == 1 ? 'Active' : 'Blocked') }}</span>
                                          </td>
                                          <td>
                                                
                                             <a href="{{ route('advertiser.edit', $advertiser->id) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                             <a href="{{ route('advertiser.delete', $advertiser->id) }}" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                             @if($advertiser->status == 1)
                                             <a href="{{ route('advertiser.block', $advertiser->id) }}" class="product-table-danger" data-toggle="tooltip" title="Block"><i class="fa fa-lock"></i></a>
                                             @elseif($advertiser->status == 2)
                                             <a href="{{ route('advertiser.unblock', $advertiser->id) }}" class="product-table-danger" data-toggle="tooltip" title="UnBlock"><i class="fa fa-unlock"></i></a>
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

