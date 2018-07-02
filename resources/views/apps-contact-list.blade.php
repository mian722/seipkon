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
                                    <h3>Contact/Employee</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>Advance apps</li>
                                       <li>Contact/Employee</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Employee Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-3">
                                 <div class="add-employee-left">
                                    <div class="total-group-employee">
                                       <h3>total contacts <span>253</span></h3>
                                       <ul class="nav nav-tabs" role="tablist">
                                          <li role="presentation"   class="active">
                                             <a href="#company" aria-controls="company" role="tab" data-toggle="tab">company</a>
                                          </li>
                                          <li role="presentation">
                                             <a href="#Clients" aria-controls="Clients" role="tab" data-toggle="tab">Clients</a>
                                          </li>
                                          <li role="presentation">
                                             <a href="#staff" aria-controls="staff" role="tab" data-toggle="tab">staff</a>
                                          </li>
                                          <li role="presentation">
                                             <a href="#private" aria-controls="private" role="tab" data-toggle="tab">private</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="add-contact-lebel">
                                       <a class="btn btn-success" data-toggle="modal" data-target="#contactmodal" href="#">
                                       <i class="fa fa-plus"></i>
                                       Add Contact
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-9">
                                 <div class="employee-right">
                                    <div class="tab-content">
                                        
                                       <!-- Table Tab Panel Start -->
                                       <div role="tabpanel" class="tab-pane fade in active" id="company">
                                          <div class="table-responsive">
                                             <table id="employee-list" class="table table-striped contact-list-table">
                                                <thead>
                                                   <tr>
                                                      <th>No.</th>
                                                      <th>Photo</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>designation</th>
                                                      <th>Lebel</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>01</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>02</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>03</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>04</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>05</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>06</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>07</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>08</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>09</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>10</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>11</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>12</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Table Tab Panel End -->
                                        
                                       <!-- Table Tab Panel Start -->
                                       <div role="tabpanel" class="tab-pane fade" id="Clients">
                                          <div class="table-responsive">
                                             <table id="employee-clients-list" class="table table-striped contact-list-table">
                                                <thead>
                                                   <tr>
                                                      <th>No.</th>
                                                      <th>Photo</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>designation</th>
                                                      <th>Lebel</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>01</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>02</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>03</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>04</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>05</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>06</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>07</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>08</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>09</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>10</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>11</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>12</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Table Tab Panel End -->
                                        
                                       <!-- Table Tab Panel Start -->
                                       <div role="tabpanel" class="tab-pane fade" id="staff">
                                          <div class="table-responsive">
                                             <table id="employee-staff-list" class="table table-striped contact-list-table">
                                                <thead>
                                                   <tr>
                                                      <th>No.</th>
                                                      <th>Photo</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>designation</th>
                                                      <th>Lebel</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>01</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>02</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>03</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>04</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>05</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>06</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>07</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>08</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>09</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>10</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>11</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>12</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Table Tab Panel End -->
                                        
                                       <!-- Table Tab Panel Start -->
                                       <div role="tabpanel" class="tab-pane fade" id="private">
                                          <div class="table-responsive">
                                             <table id="employee-private-list" class="table table-striped contact-list-table">
                                                <thead>
                                                   <tr>
                                                      <th>No.</th>
                                                      <th>Photo</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>designation</th>
                                                      <th>Lebel</th>
                                                      <th>Action</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>01</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>02</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>03</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>04</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>05</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>06</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Zorita Serrano
                                                         </a>
                                                      </td>
                                                      <td>zorita@gmail.com</td>
                                                      <td>Super Admin</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>07</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>08</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>09</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-3.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Brenden Wagner
                                                         </a>
                                                      </td>
                                                      <td>brenden@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>10</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-4.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Bruno Nash
                                                         </a>
                                                      </td>
                                                      <td>bruno@gmail.com</td>
                                                      <td>web Developer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>11</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-1.png" alt="Employee" />
                                                         </a>
                                                      <td>
                                                         <a href="#">
                                                         Cedric Kelly
                                                         </a>
                                                      </td>
                                                      <td>kelly@gmail.com</td>
                                                      <td>Project manager</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td>12</td>
                                                      <td>
                                                         <a href="#">
                                                         <img src="assets/img/msg-2.png" alt="Employee" />
                                                         </a>
                                                      </td>
                                                      <td>
                                                         <a href="#">
                                                         Angelica Ramos
                                                         </a>
                                                      </td>
                                                      <td>angelica@gmail.com</td>
                                                      <td>web designer</td>
                                                      <td>company</td>
                                                      <td>
                                                         <a href="#" class="page-table-success" data-toggle="tooltip" title="View"><i class="fa fa-eye"></i></a>
                                                         <a href="#" class="page-table-info" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                         <a href="#" class="page-table-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <!-- Table Tab Panel End -->
                                        
                                    </div>
                                 </div>
                              </div>
                           </div>
                            
                           <!-- Start Modal -->
                           <div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="contactmodalModalLabel">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" id="contactmodalModalLabel">Add New Contact</h4>
                                    </div>
                                    <div class="modal-body">
                                       <div class="add_contact_form">
                                          <form>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <p>
                                                      <label>Name</label>
                                                      <input type="text" placeholder="Type Name" />
                                                   </p>
                                                </div>
                                                <div class="col-md-6">
                                                   <p>
                                                      <label>Email</label>
                                                      <input type="email" placeholder="Email Address">
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <p>
                                                      <label>Designation</label>
                                                      <input type="text" placeholder="Designation" />
                                                   </p>
                                                </div>
                                                <div class="col-md-6">
                                                   <p>
                                                      <label>Select Lebel</label>
                                                      <select class="selectpicker-contact-lebel select-pro">
                                                         <option>Company</option>
                                                         <option>Clients</option>
                                                         <option>Staff</option>
                                                         <option>private</option>
                                                      </select>
                                                   </p>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="product-upload btn btn-info">
                                                      <p>
                                                         <i class="fa fa-camera "></i>
                                                         Upload Contact Image
                                                      </p>
                                                      <input type="file">
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-success">Save changes</button>
                                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Modal End -->
                            
                        </div>
                     </div>
                  </div>
                  <!-- End Employee Row -->
                   
               </div>
            </div>
             
         @endsection