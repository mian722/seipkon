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
                                    <h3>My Offers</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="{{ asset('add-offer') }}" class="btn btn-success">Create</a></li>
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
                                       <th>Photo</th>
                                       <th>Title</th>
                                       <th>Tag</th>
                                       <th>Advertiser</th>
                                       <th>GEO</th>
                                       <th>Cap</th>
                                       <th>Revenue</th>
                                       <th>Payout</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(!empty($offers))
                                    @foreach($offers as $offer)
                                    <tr>
                                       <td>{{ $offer->id }}</td>
                                       <td><img src="<?php echo url('/'); ?>/public/offerimages/{{ ($offer->offer_image != null) ? $offer->offer_image : 'default.png' }}" alt="order image"  /></td>
                                       <td><a href="{{ route('offers-detail', $offer->id) }}"> {{ $offer->offer_name }}</a></td>
                                       <td>{{ $offer->tags }}</td>
                                       <td>{{ $offer->fname }}</td>
                                       @if( $offer['restrictions'] != null)
                                          <td>{{ $offer['restrictions']->geo_targeting }}</td>
                                          <td>{{ $offer['restrictions']->advertiser_caps_value }}</td>
                                       @else
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                       @endif
                                       <td>{{ $offer->revenue }}</td>
                                       <td>{{ $offer->payout }}</td>
                                       <td>
                                          <span class="label label-{{ $offer->status == 1 ? 'success' : 'danger' }}">{{ $offer->status == 1 ? 'Active' : 'Deactive' }}</span>
                                       </td>
                                       <td>
                                          <a href="{{ route('edit-offer',$offer->id) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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