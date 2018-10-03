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
                                       <th>Type</th>
                                       <th>Payout</th>
                                       @if( collect(request()->segments())->last() == 'approved-offers')
                                       <th>Status</th>
                                       @endif
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(!empty($offers))
                                    @foreach($offers as $offer)
                                    <tr>
                                       <td>{{ $offer->id }}</td>
                                       
                                       <td>{{ $offer->offer_name }}</td>
                                       @if( $offer['restrictions'] != null)
                                          <td><b>{{ $offer['restrictions']->geo_type }}:</b><br>{{ $offer['restrictions']->geo_targeting }}</td>
                                       @else
                                          <td>&nbsp;</td>
                                       @endif
                                       <td><a href="{{ $offer->preview_url }}" target="_blank">Preview</a></td>
                                       <td>{{ ($offer->offer_approval == 1)  ? 'Require Approval' : ( ($offer->offer_approval == 2) ? 'Public' : 'Private' ) }} </td>
                                       <td>{{ $offer->payout_type }}:${{ $offer->payout }}</td>
                                       @if( collect(request()->segments())->last() == 'approved-offers')
                                       <td>
                                          <span class="label label-{{ $offer->status == 1 ? 'success' : 'danger' }}">{{ $offer->status == 1 ? 'Active' : 'Deactive' }}</span>
                                       </td>
                                       @endif
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