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
                              <div class="col-md-12">
                                 <div class="create-page-left">
                                    <form class="form-horizontal" method="post" action="{{ route('create-pool.store') }}">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                       <p>
                                          <label>Page Title</label>
                                          <input type="text" name="name" placeholder="Enter Page Title" />
                                       </p>
                                       <p>
                                          <label class="control-label">Status</label>
                                          <select class="form-control select2" name="status">
                                             <option selected="selected">Active</option>
                                             <option>Paused</option>
                                             
                                          </select>
                                       </p>
                                       <div class="page-editor-box">
                                          <label>Page Content</label>
                                          <textarea class="form-control" style="margin-bottom: 20px;" name="note" ></textarea>
                                       </div>
                                       <p>
                                          <button type="submit" class="btn btn-success" ><i class="fa fa-check"></i>publish pool</button>
                                       </p>
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
             