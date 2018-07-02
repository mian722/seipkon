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
                                    <h3>Edit Page</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>page</li>
                                       <li>Edit page</li>
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
                                    <form>
                                       <p>
                                          <label>Page Title</label>
                                          <input type="text" placeholder="Enter Page Title" value="Home Page" >
                                       </p>
                                       <div class="page-editor-box">
                                          <label>Page Content</label>
                                          <div id="page-editor">
                                             <h3>It was popularised in the 1960s</h3>
                                             with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versionsIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
                                          </div>
                                       </div>
                                       <p>
                                          <button type="submit" class="btn btn-success" ><i class="fa fa-check"></i>publish page</button>
                                          <button type="submit" class="btn btn-default" ><i class="fa fa-ban"></i>save draft</button>
                                       </p>
                                    </form>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="create-page-right">
                                    <form>
                                       <p>
                                          <label>Page Type</label>
                                          <select class="selectpicker-page-type">
                                             <option>Normal</option>
                                             <option selected>Main Page</option>
                                             <option>Post Page</option>
                                          </select>
                                       </p>
                                       <p>
                                          <label>Page Parent</label>
                                          <select class="selectpicker-page-type">
                                             <option>no parent</option>
                                             <option selected>normal page</option>
                                          </select>
                                       </p>
                                       <div class="page-img-upload">
                                          <label>Breadcromb Image <span>(optional)</span></label>
                                          <img src="assets/img/breadcromb.jpg" alt="Breadcromb" />
                                          <div class="product-upload btn btn-info">
                                             <i class="fa fa-upload"></i>
                                             Upload Image
                                             <input type="file">
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Create Page Row -->
                   
               </div>
            </div>
             
         @endsection