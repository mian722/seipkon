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
                                    <h3>Create a Page</h3>
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
                                          <form action="">
                                             <div class="col-md-12">
                                                <label>Add Offers <span data-toggle="tooltip" title="Hooray!"><i class="fa fa-question-circle" aria-hidden="true"></i></span></label>
                                                <select class="form-control select2" multiple="multiple" data-placeholder="Select Tags" name="offers[]" required="required">
                                                   <option value="2">Alabama</option>
                                                </select>
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
                                                      <th>Tag</th>
                                                      <th>Mobile Carrier</th>
                                                      <th>Status</th>
                                                      <th>Revenue</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>
                                                         <a href="#" class="product-table-danger" data-toggle="tooltip" title="Decline"><i class="fa fa-times"></i></a>
                                                      </td>
                                                      <td>#120342</td>
                                                      <td>
                                                         <span class="label label-success">Approve</span>
                                                      </td>
                                                      <td>#120342</td>
                                                      <td>#120342</td>
                                                      <td>Angelica Ramos</td>
                                                      <td>product title</td>
                                                      <td>22</td>
                                                      <td>22</td>
                                                      <td>09/08/2017</td>
                                                   </tr>
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
                                          <form action="{{route('create-pool.updatename', $pool->id)}}" method="post">
                                             {{csrf_field()}}
                                             <a href="#" id="pool-name" class="pool-name" data-url="{{ route('create-pool.updatename', $pool->id) }}" data-pk="{{ $pool->id }}" data-type="text"data-placement="bottom" data-title="Edit Comment">{{ $pool->name }}</a>
                                          </form>  
                                       </div>
                                       <div>
                                          <label>Status:</label>  
                                          <form action="{{route('create-pool.updatestatus', $pool->id)}}" method="post">
                                             {{csrf_field()}}
                                             <a href="#" id="pool-status" class="pool-status" data-type="select" data-pk="{{ $pool->id }}" data-url="{{ route('create-pool.updatestatus', $pool->id) }}" data-title="Select status" data-source="[{value:'1',text:'Active'},{value:'0',text:'Deactive'}]" data-placement="bottom">{{ ($pool->status == 1) ? "Active" : "Deactive" }}</a>
                                          </form>  
                                       </div>
                                       <div>
                                          <label>Note:</label>
                                          <form action="{{route('create-pool.updatenote', $pool->id)}}" method="post">
                                             {{csrf_field()}}
                                             <a href="#" id="pool-note" class="pool-note" data-url="{{ route('create-pool.updatenote', $pool->id) }}" data-pk="{{ $pool->id }}" data-type="text"data-placement="bottom" data-title="Edit Comment">{{ $pool->note }}</a>
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
             