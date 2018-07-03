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
                   
                  <!-- Product Table Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="table-responsive">
                              <table id="product-order" class="table table-hover">
                                 <thead>
                                    <tr>
                                       <th>Photo</th>
                                       <th>Order ID</th>
                                       <th>Customer</th>
                                       <th>Title</th>
                                       <th>Quantity</th>
                                       <th>date</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-1.png" alt="order image"  />
                                       </td>
                                       <td>#120342</td>
                                       <td>Angelica Ramos</td>
                                       <td>product title</td>
                                       <td>22</td>
                                       <td>09/08/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-2.png" alt="order image"  />
                                       </td>
                                       <td>#120343</td>
                                       <td>Brenden Wagner</td>
                                       <td>product title</td>
                                       <td>13</td>
                                       <td>08/08/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-3.png" alt="order image"  />
                                       </td>
                                       <td>#120344</td>
                                       <td>Bruno Nash</td>
                                       <td>product title</td>
                                       <td>15</td>
                                       <td>12/08/2017</td>
                                       <td>
                                          <span class="label label-danger">due</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-4.png" alt="order image"  />
                                       </td>
                                       <td>#120351</td>
                                       <td>Cedric Kelly</td>
                                       <td>product title</td>
                                       <td>16</td>
                                       <td>13/09/2017</td>
                                       <td>
                                          <span class="label label-danger">due</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-4.png" alt="order image"  />
                                       </td>
                                       <td>#120353</td>
                                       <td>Brenden Wagner</td>
                                       <td>product title</td>
                                       <td>18</td>
                                       <td>12/09/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-2.png" alt="order image"  />
                                       </td>
                                       <td>#120356</td>
                                       <td>Ashton Cox</td>
                                       <td>product title</td>
                                       <td>44</td>
                                       <td>18/09/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-1.png" alt="order image"  />
                                       </td>
                                       <td>#120357</td>
                                       <td>Zorita Serrano</td>
                                       <td>product title</td>
                                       <td>07</td>
                                       <td>19/09/2017</td>
                                       <td>
                                          <span class="label label-info">pending</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-3.png" alt="order image"  />
                                       </td>
                                       <td>#120357</td>
                                       <td>Zorita Serrano</td>
                                       <td>product title</td>
                                       <td>07</td>
                                       <td>19/09/2017</td>
                                       <td>
                                          <span class="label label-info">pending</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-1.png" alt="order image"  />
                                       </td>
                                       <td>#120342</td>
                                       <td>Angelica Ramos</td>
                                       <td>product title</td>
                                       <td>22</td>
                                       <td>09/08/2017</td>
                                       <td>
                                          <span class="label label-danger">due</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-2.png" alt="order image"  />
                                       </td>
                                       <td>#120343</td>
                                       <td>Brenden Wagner</td>
                                       <td>product title</td>
                                       <td>13</td>
                                       <td>08/08/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-1.png" alt="order image"  />
                                       </td>
                                       <td>#120342</td>
                                       <td>Angelica Ramos</td>
                                       <td>product title</td>
                                       <td>22</td>
                                       <td>09/08/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-2.png" alt="order image"  />
                                       </td>
                                       <td>#120343</td>
                                       <td>Brenden Wagner</td>
                                       <td>product title</td>
                                       <td>13</td>
                                       <td>08/08/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-3.png" alt="order image"  />
                                       </td>
                                       <td>#120344</td>
                                       <td>Bruno Nash</td>
                                       <td>product title</td>
                                       <td>15</td>
                                       <td>12/08/2017</td>
                                       <td>
                                          <span class="label label-danger">due</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-4.png" alt="order image"  />
                                       </td>
                                       <td>#120351</td>
                                       <td>Cedric Kelly</td>
                                       <td>product title</td>
                                       <td>16</td>
                                       <td>13/09/2017</td>
                                       <td>
                                          <span class="label label-danger">due</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-3.png" alt="order image"  />
                                       </td>
                                       <td>#120344</td>
                                       <td>Bruno Nash</td>
                                       <td>product title</td>
                                       <td>15</td>
                                       <td>12/08/2017</td>
                                       <td>
                                          <span class="label label-danger">due</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-4.png" alt="order image"  />
                                       </td>
                                       <td>#120351</td>
                                       <td>Cedric Kelly</td>
                                       <td>product title</td>
                                       <td>16</td>
                                       <td>13/09/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-4.png" alt="order image"  />
                                       </td>
                                       <td>#120353</td>
                                       <td>Brenden Wagner</td>
                                       <td>product title</td>
                                       <td>18</td>
                                       <td>12/09/2017</td>
                                       <td>
                                          <span class="label label-danger">due</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-2.png" alt="order image"  />
                                       </td>
                                       <td>#120356</td>
                                       <td>Ashton Cox</td>
                                       <td>product title</td>
                                       <td>44</td>
                                       <td>18/09/2017</td>
                                       <td>
                                          <span class="label label-success">paid</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-1.png" alt="order image"  />
                                       </td>
                                       <td>#120357</td>
                                       <td>Zorita Serrano</td>
                                       <td>product title</td>
                                       <td>07</td>
                                       <td>19/09/2017</td>
                                       <td>
                                          <span class="label label-info">pending</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <img src="assets/img/product/pro-3.png" alt="order image"  />
                                       </td>
                                       <td>#120357</td>
                                       <td>Zorita Serrano</td>
                                       <td>product title</td>
                                       <td>07</td>
                                       <td>19/09/2017</td>
                                       <td>
                                          <span class="label label-info">pending</span>
                                       </td>
                                       <td>
                                          <a href="#" class="product-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                          <a href="#" class="product-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Product Table Row End -->
                   
               </div>
            </div>
             
         @endsection