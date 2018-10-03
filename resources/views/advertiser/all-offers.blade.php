@extends('layouts.userheader')
         
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
                                    <h3>{{ str_replace('-', ' ', collect(request()->segments())->last()) }}</h3>
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
                                       <th>Name</th>
                                       <th>GEO</th>
                                       <th>Preview</th>
                                       <th>Tag</th>
                                       <th>Payout</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(!empty($offers))
                                    @foreach($offers as $offer)
                                    <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       
                                       <td>#{{ $offer->id }} {{ $offer->offer_name }}<br />{{ $offer->restrictions->advertiser_caps_type }} Caps: {{ $offer->restrictions->advertiser_caps_value }}</td>
                                       <td>{{ $offer->restrictions->geo_targeting }}</td>
                                       <td><a href="{{ $offer->preview_url }}" target="_blank">Preview</a></td>
                                       <td>{{ ($offer->offer_approval == 1)  ? 'Require Approval' : ( ($offer->offer_approval == 2) ? 'Public' : 'Private' ) }} </td>
                                       <td>{{ $offer->payout_type }}:${{ $offer->payout }}</td>
                                       <td>
                                          @if($offer->status == 0)
                                             <span class="label label-warning">Pending</span>
                                          @elseif($offer->status == 1)
                                             <span class="label label-success">Active</span>
                                          @elseif($offer->status == 2)
                                             <span class="label label-info">Paused</span>
                                          @else
                                             <span class="label label-danger">Deleted</span>
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
         @endsection