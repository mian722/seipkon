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
                                    <h3>Create Affiliates Payouts</h3>
                                 </div>
                              </div>
                              <div class="col-md-1 col-sm-1">
                                 <a class="btn btn-success btn-xs" href="{{ route('affiliatepayoutcreate') }}" >Create</a>
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
                                       <th>Create Time</th>
                                       <th>Offer</th>
                                       <th>Affiliate</th>
                                       <th>Currency</th>
                                       <th>Offer Payout</th>
                                       <th>Affiliate Payout</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($payouts as $payout)
                                    <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <td><a href="{{ route('offers-detail', $payout->offer_id) }}"> ({{ $payout->payout_type }}){{ $payout->offer_name }} </a></td>
                                       <td><a href="{{ route('affiliate.show', $payout->affiliate_id) }}"> {{ $payout->fname }} </a></td>
                                       <td>USD</td>
                                       <td>${{ $payout->revenue }}</td>
                                       <td>
                                          <form action="{{route('payout.edit')}}" method="post">
                                             {{csrf_field()}}
                                             $<a href="#" id="pool-name" class="pool-name" data-url="{{ route('payout.edit') }}" data-pk="{{ $payout->id }}" data-type="text"data-placement="bottom" data-title="Edit Comment">{{ $payout->rate }}</a>
                                          </form>  
                                       </td>
                                       <td>
                                          <a href="{{ route('payout.delete', $payout->id) }}" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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



<script>
    $(document).ready(function() {

      $('.pool-name').editable({
       });
        
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });

   });
    //make username editable
    id = $('.pool-name').data('pk');
    url = $('.pool-name').data('url');
    $('.pool-name').editable({
      url: url,
      pk: id,
      type:"text",
      validate:function(value){
        if($.trim(value) === '')
        {
          return 'This field is required';
        }
      },
       success: function(response) {
           Console.log('success'); //update backbone model
       }
    });


    </script>

         @endsection

