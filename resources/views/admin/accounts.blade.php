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
                                    <h3>Accounts</h3>
                                 </div>
                              </div>
                              <div class="col-md-1 col-sm-1">
                                 <a class="btn btn-success btn-xs" href="{{ url('accounts-create') }}" >Create</a>
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
                                       <th>Email</th>
                                       <th>Mobile NO.</th>
                                       <th>Manager</th>
                                       <th>Create Time</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($accounts as $account)
                                    <tr>
                                       <td>#{{ $loop->iteration }}</td>
                                       <td>{{ $account->fname }} {{ $account->lname }}</td>
                                       <td>{{ $account->email }}</td>
                                       <td>{{ $account->contactno }}</td>
                                       <?php $manager = App\User::where('id', $account->managerid)->first(); ?>
                                       <td>{{ (!empty($manager->fname)) ? $manager->fname : '' }} {{ (!empty($manager->fname)) ? $manager->lname : '' }}</td>
                                       <td>{{ $account->created_at }}</td>
                                       <td>
                                          <a href="{{ route('account.edit', $account->id) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="{{ route('account.delete', $account->id) }}" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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

