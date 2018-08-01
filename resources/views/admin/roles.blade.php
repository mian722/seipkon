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
                                 <a class="btn btn-success btn-xs" href="{{ url('roles-create') }}" >Create</a>
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
                                       <th>Description</th>
                                       <th>Type</th>
                                       
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($managers as $manager)
                                    <tr>
                                       <td>#{{ $manager->id }}</td>
                                       <td>{{ $manager->name }}</td>
                                       <td>{{ $manager->description }}</td>
                                       <td>Global</td>
                                       <td>
                                          <a href="#" data-pk="{{ $manager->id }}" class="product-table-info viewbtn" data-toggle="tooltip" title="View"><i class="fa fa-search"></i></a>
                                          
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
                   <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" style="display: inline-block;">Role Details</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" id="detailtable">
                          
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> 
      <script >
         $(document).ready(function(){
            $('.viewbtn').on('click', function(){
            var id = $(this).data('pk');
            var token = "{{ csrf_token() }}";
            $.ajax({
               type: "POST",
               url: '{{ route("getmanagerrole") }}',
               data: { "_token": token, "id": id},
               success: function( data ) {
                 $('#detailtable').html(data);
                 $('#exampleModal').modal();
               }
           });
         });
         });
         
      </script>
         <!-- End Right Side Content -->
         @endsection

