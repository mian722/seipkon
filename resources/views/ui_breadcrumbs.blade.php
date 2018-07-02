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
                                    <h3>breadcrumbs</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>UI Elements</li>
                                       <li>breadcrumbs</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Breadcromb Row Start -->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="breadcrumb-example">
                              <h3>Basic breadcrumbs</h3>
                              <nav>
                                 <ol class="breadcrumb">
                                    <li class="active">Home</li>
                                 </ol>
                              </nav>
                              <nav>
                                 <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Library</li>
                                 </ol>
                              </nav>
                              <nav>
                                 <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li class="active">Data</li>
                                 </ol>
                              </nav>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="breadcrumb-example">
                              <div class="breadcrumb-example-heading">
                                 <h3>Custom breadcrumbs</h3>
                                 <p>Use Class <code>.custom-breadcrumb </code></p>
                              </div>
                              <nav>
                                 <ol class="custom-breadcrumb">
                                    <li class="active">Home</li>
                                 </ol>
                              </nav>
                              <nav>
                                 <ol class="custom-breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Library</li>
                                 </ol>
                              </nav>
                              <nav>
                                 <ol class="custom-breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Library</a></li>
                                    <li class="active">Data</li>
                                 </ol>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Breadcromb Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="breadcrumb-example">
                              <div class="breadcrumb-example-heading">
                                 <h3>full width breadcrumb</h3>
                                 <p>Use Class <code>.full-width-breadcrumb </code></p>
                              </div>
                              <div class="full-width-breadcrumb">
                                 <div class="full-width-breadcrumb-heading">
                                    <h3>Home</h3>
                                 </div>
                                 <div class="full-width-breadcrumb-list">
                                    <nav>
                                       <ol class="custom-breadcrumb">
                                          <li><a href="#">Home</a></li>
                                          <li class="active">Library</li>
                                       </ol>
                                    </nav>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Breadcromb Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="breadcrumb-example">
                              <div class="breadcrumb-example-heading">
                                 <h3>breadcrumb with icon</h3>
                                 <p>Use Class <code>.full-width-breadcrumb </code></p>
                              </div>
                              <div class="full-width-breadcrumb">
                                 <div class="full-width-breadcrumb-heading">
                                    <h3><i class="fa fa-home"></i>Home</h3>
                                 </div>
                                 <div class="full-width-breadcrumb-list">
                                    <nav>
                                       <ol class="custom-breadcrumb">
                                          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                                          <li class="active">Library</li>
                                       </ol>
                                    </nav>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
               </div>
            </div>
             
             @endsection

