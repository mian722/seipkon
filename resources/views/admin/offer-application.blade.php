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
                                    <h3>Order List</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>e-Commerce</li>
                                       <li>Product order list</li>
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
                                       <th>Advertiser</th>
                                       <th>Offer</th>
                                       <th>Affiliate</th>
                                       <th>Manager</th>
                                       <th>Apply Time</th>
                                       <th>Accept Time</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($offerapplications as $offerapplication)
                                    <tr>
                                       <td>{{ $loop->iteration }}</td>
                                       <?php $advertiser = null;
                                       if ($offerapplication->affiliate_id != 0) {
                                          $advertiser = App\User::select('fname', 'lname')->where('id', $offerapplication->adv_id)->first();
                                       }  ?>
                                       <td>{{ ($advertiser != null) ? $advertiser->fname : '&nbsp;' }} {{ ($advertiser != null) ? $advertiser->lname : '&nbsp;' }}</td>
                                       <td>{{ $offerapplication->offer_name }}</td>
                                       <td>{{ $offerapplication->fname }} {{ $offerapplication->lname }}</td>
                                       <?php $advertiser = null;
                                       if ($offerapplication->managerid != 0) {
                                          $advertiser = App\User::select('fname', 'lname')->where('id', $offerapplication->managerid)->first();
                                       }  ?>
                                       <td>{{ ($advertiser != null) ? $advertiser->fname : '&nbsp;' }} {{ ($advertiser != null) ? $advertiser->lname : '&nbsp;' }}</td>
                                       <td>{{ $offerapplication->created_at }}</td>
                                       <td>{{ $offerapplication->updated_at }}</td>
                                       <td>
                                          <span class="label label-{{ $offerapplication->status == 1 ? 'success' : 'warning' }}">{{ $offerapplication->status == 1 ? 'Active' : 'pending' }}</span>
                                       </td>
                                       <td>
                                          <?php echo $offerapplication->status == 1 ? '' : '<a href="'.route("approveapplication", $offerapplication->id) .'" class="product-table-info" data-toggle="tooltip" title="Approve"><i class="fa fa-check"></i></a>' ?>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Decline"><i class="fa fa-times"></i></a>
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
         @endsection