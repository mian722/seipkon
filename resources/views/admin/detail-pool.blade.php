@extends('layouts.header')
         
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
                                    <h3>Offer Pool Detail Page</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>page</li>
                                       <li>creare a page</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Create Page Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-9">
                                 <div class="create-page-left">
                                    <div class="row" style="margin-bottom: 20px;">
                                       <div class="add-offers">
                                          <form action="{{ route('detail.addoffer') }}">
                                             <div class="col-md-12">
                                                <label style="display: block;">Add Offers <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                <select style="width: 88%; margin-right: 2%;" class="form-control select2" multiple="multiple" data-placeholder="Select Tags" name="offers[]" required="required">
                                                   @foreach($alloffer as $offer)
                                                   <?php 
                                                   $poolid = $pool['0']->id;
                                                      $check = DB::table('offers')
                                                       ->select('offers.id')
                                                       ->leftjoin('pool_relation', 'pool_relation.offerspool_id', '=', 'offers.id')
                                                       ->where('pool_relation.offerspool_id', $poolid)
                                                       ->where('pool_relation.offer_id', $offer->id)
                                                       ->first();
                                                   ?>
                                                   <option value="{{ $offer->id }}" {{ !empty($check) ? 'disabled="disabled"':'' }}>{{ $offer->offer_name }}</option>
                                                   @endforeach
                                                </select>
                                                <input type="hidden" name="poolid" value="{{ $pool['0']->id }}">
                                                <button class="btn btn-success" type="submit" style="width: 10%; height: 40px;">Add</button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="table-responsive">
                                             <table class="table">
                                                <thead>
                                                   <tr>
                                                      <th>Action</th>
                                                      <th>Name</th>
                                                      <th>Period</th>
                                                      <th>GEO</th>
                                                      <th>Platform</th>
                                                      <th>Caps</th>
                                                      <th>Mobile Carrier</th>
                                                      <th>Status</th>
                                                      <th>Revenue</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach($pool['0']->offers as $offer)
                                                   <tr>
                                                      <td>
                                                         <a href="{{ route('detail.deleteoffer', [$offer->id, $pool['0']->id]) }}" class="product-table-danger" data-toggle="tooltip" title="Decline"><i class="fa fa-times"></i></a>
                                                      </td>
                                                      <td>{{ $offer->offer_name }}</td>
                                                      <td>{{ $offer->duration }}</td>
                                                      <td>{{ $offer->restrictions['geo_targeting'] }}</td>
                                                      <td>{{ $offer->restrictions['platform_targeting'] }}</td>
                                                      <td>{{ $offer->restrictions['affiliate_caps_type'] }} : {{ $offer->restrictions['affiliate_caps_value'] }}</td>
                                                      <td>{{ $offer->restrictions['mobile_carrier_targeting'] }}</td>
                                                      <td>
                                                         <span class="label label-{{ ($offer->offer_name == 1) ? 'success': 'warning' }}">
                                                            {{ ($offer->offer_name == 1) ? 'Approve': 'Pending' }}</span>
                                                      </td>
                                                      <td>{{ $offer->revenue_type }} : {{ $offer->revenue }}</td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="create-page-right">
                                       <div>
                                          <label>Name:</label>
                                          <form action="{{route('create-pool.updatename', $pool['0']->id)}}" method="post">
                                             {{csrf_field()}}
                                             <a href="#" id="pool-name" class="pool-name" data-url="{{ route('create-pool.updatename', $pool['0']->id) }}" data-pk="{{ $pool['0']->id }}" data-type="text"data-placement="bottom" data-title="Edit Comment">{{ $pool['0']->name }}</a>
                                          </form>  
                                       </div>
                                       <div>
                                          <label>Status:</label>  
                                          <form action="{{route('create-pool.updatestatus', $pool['0']->id)}}" method="post">
                                             {{csrf_field()}}
                                             <a href="#" id="pool-status" class="pool-status" data-type="select" data-pk="{{ $pool['0']->id }}" data-url="{{ route('create-pool.updatestatus', $pool['0']->id) }}" data-title="Select status" data-source="[{value:'1',text:'Active'},{value:'0',text:'Deactive'}]" data-placement="bottom">{{ ($pool['0']->status == 1) ? "Active" : "Deactive" }}</a>
                                          </form>  
                                       </div>
                                       <div>
                                          <label>Note:</label>
                                          <form action="{{route('create-pool.updatenote', $pool['0']->id)}}" method="post">
                                             {{csrf_field()}}
                                             <a href="#" id="pool-note" class="pool-note" data-url="{{ route('create-pool.updatenote', $pool['0']->id) }}" data-pk="{{ $pool['0']->id }}" data-type="text"data-placement="bottom" data-title="Edit Comment">{{ $pool['0']->note }}</a>
                                          </form>   
                                       </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Create Page Row -->
                   
               </div>
            </div>   


<script>
    $(document).ready(function() {

      $('.pool-name').editable({
       });
      $('.pool-status').editable({
       });
      $('.pool-note').editable({
       });
        
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });

   });
    //make username editable
    rating_id = $('.pool-name').data('pk');
    url = $('.pool-name').data('url');
    $('.pool-name').editable({
      url: url,
      pk: rating_id,
      type:"text",
      validate:function(value){
        if($.trim(value) === '')
        {
          return 'This field is required';
        }
      }
    });
    rating_id = $('.pool-status').data('pk');
    url = $('.pool-status').data('url');
    $('.pool-status').editable({
      url: url,
      pk: rating_id,
      value: 1,
      source: [
              {value: 0, text: 'Deactive'},
              {value: 1, text: 'Active'}
           ],
      validate:function(value){
        if($.trim(value) === '')
        {
          return 'This field is required';
        }
      }
    });
    rating_id = $('.pool-note').data('pk');
    url = $('.pool-note').data('url');
    $('.pool-note').editable({
      url: url,
      pk: rating_id,
      type:"text",
      validate:function(value){
        if($.trim(value) === '')
        {
          return 'This field is required';
        }
      }
    });


    </script>

            @endsection
             