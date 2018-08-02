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
                                    <h3>Affiliate Invoices</h3>
                                 </div>
                              </div>
                              <div class="col-md-1 col-sm-1">
                                 <a class="btn btn-success btn-xs" href="{{ url('affiliate-invoice-create') }}" >Create</a>
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
                                       <th>Date</th>
                                       <th>Invoice NO.</th>
                                       <th>Affiliate</th>
                                       <th>Manager</th>
                                       <th>Start Date</th>
                                       <th>End Date</th>
                                       <th>Total Amount</th>
                                       <th>Memo</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @if(!empty($invoices))
                                    @foreach($invoices as $invoice)
                                    <tr>
                                       <td>#{{ $loop->iteration }}</td>
                                       <td><a href="{{ url('/invoice/'.$invoice->id) }}" style="color: #1CD2C9;">{{ $invoice->invoiceno }}</a></td>
                                       <?php $user = null;
                                       if ($invoice->affiliate_id != 0) {
                                          $user = App\User::select('fname', 'lname', 'managerid')->where('id', $invoice->affiliate_id)->first();
                                       }  ?>
                                       <td>{{ ($user != null) ? $user->fname : '&nbsp;' }} {{ ($user != null) ? $user->lname : '&nbsp;' }}</td>
                                       <?php $manager = null;
                                       if ($invoice->affiliate_id != 0) {
                                          $manager = App\User::select('fname', 'lname')->where('id', ($user != null) ? $user->managerid : '&nbsp;')->first();
                                       }  ?>
                                       <td>{{ ($manager != null) ? $manager->fname : '&nbsp;' }} {{ ($manager != null) ? $manager->lname : '&nbsp;' }}</td>

                                       <?php $date = explode('-',$invoice->daterange) ?>
                                       <td><?php echo $date[0]; ?></td>
                                       <td><?php echo $date[1]; ?></td>
                                       <td>tamount</td>
                                       <?php
                                       $text = $invoice->memo;
                                       $limit = 10;
                                       if (str_word_count($text, 0) > $limit) {
                                           $words = str_word_count($text, 2);
                                           $pos = array_keys($words);
                                           $text = substr($text, 0, $pos[$limit]) . '...';
                                       }
                                       ?>
                                       <td><?php echo $text; ?></td>
                                       <td>
                                          <span class="label label-{{ $invoice->status == '1' ? 'success' : 'warning'}}">{{ $invoice->status == '1' ? 'Paid' : 'Pending'}}</span>
                                       </td>
                                       <td>
                                          <a href="{{ route('affiliateinvoicesedit',$invoice->id) }}" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
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
         <!-- End Right Side Content -->
         @endsection

