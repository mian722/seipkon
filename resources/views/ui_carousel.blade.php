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
                                    <h3>Carousel</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>UI Elements</li>
                                       <li>Carousel</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Carousel Row Start -->
                  <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <div class="page-box">
                           <div class="carousel-example">
                              <h3>Default Carousel</h3>
                              <div id="carousel-example-generic" class="carousel default-carousel slide" data-ride="carousel">
                                 <!-- Indicators -->
                                 <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                 </ol>
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_1.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_2.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_3.png') }}" alt="Bootstrap Carousel">
                                    </div>
                                 </div>
                                 <!-- Controls -->
                                 <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                 <span class="sr-only">Previous</span>
                                 </a>
                                 <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="page-box">
                           <div class="carousel-example">
                              <h3>Carousel Without Controls</h3>
                              <div id="carousel-without-generic" class="carousel without-control-carousel slide" data-ride="carousel">
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_4.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_5.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_6.jpeg') }}" alt="Bootstrap Carousel">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Carousel Row -->
                   
                  <!-- Carousel Row Start -->
                  <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <div class="page-box">
                           <div class="carousel-example">
                              <h3>Carousel With Nav Controls</h3>
                              <div id="carousel-nav-generic" class="carousel  nav-carousel slide" data-ride="carousel">
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_6.jpeg') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_2.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_4.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                 </div>
                                 <!-- Controls -->
                                 <a class="left carousel-control" href="#carousel-nav-generic" role="button" data-slide="prev">
                                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                 <span class="sr-only">Previous</span>
                                 </a>
                                 <a class="right carousel-control" href="#carousel-nav-generic" role="button" data-slide="next">
                                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="page-box">
                           <div class="carousel-example">
                              <h3>Carousel With Dot Controls</h3>
                              <div id="carousel-dot-controls" class="carousel dot-carousel slide" data-ride="carousel">
                                 <!-- Indicators -->
                                 <ol class="carousel-indicators">
                                    <li data-target="#carousel-dot-controls" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-dot-controls" data-slide-to="1"></li>
                                    <li data-target="#carousel-dot-controls" data-slide-to="2"></li>
                                 </ol>
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_3.png') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_1.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_5.jpg') }}" alt="Bootstrap Carousel">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Carousel Row -->
                   
                  <!-- Carousel Row Start -->
                  <div class="row">
                     <div class="col-md-6 col-sm-6">
                        <div class="page-box">
                           <div class="carousel-example">
                              <h3>Carousel With Caption</h3>
                              <div id="carousel-caption-generic" class="carousel slide" data-ride="carousel">
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_2.jpg') }}" alt="Bootstrap Carousel">
                                       <div class="carousel-caption">
                                          <h3>First slide label</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_1.jpg') }}" alt="Bootstrap Carousel">
                                       <div class="carousel-caption">
                                          <h3>Second slide label</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_4.jpg') }}" alt="Bootstrap Carousel">
                                       <div class="carousel-caption">
                                          <h3>Third slide label</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Controls -->
                                 <a class="left carousel-control" href="#carousel-caption-generic" role="button" data-slide="prev">
                                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                 <span class="sr-only">Previous</span>
                                 </a>
                                 <a class="right carousel-control" href="#carousel-caption-generic" role="button" data-slide="next">
                                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="page-box">
                           <div class="carousel-example">
                              <h3>Carousel With Caption</h3>
                              <div id="carousel-caption2-generic" class="carousel slide" data-ride="carousel">
                                 <!-- Indicators -->
                                 <ol class="carousel-indicators">
                                    <li data-target="#carousel-caption2-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-caption2-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-caption2-generic" data-slide-to="2"></li>
                                 </ol>
                                 <!-- Wrapper for slides -->
                                 <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_1.jpg') }}" alt="Bootstrap Carousel">
                                       <div class="carousel-caption">
                                          <h3>First slide label</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_3.png') }}" alt="Bootstrap Carousel">
                                       <div class="carousel-caption">
                                          <h3>Second slide label</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                    </div>
                                    <div class="item">
                                       <img src="{{ asset('public/assets/img/carousel/Carousel_6.jpeg') }}" alt="Bootstrap Carousel">
                                       <div class="carousel-caption">
                                          <h3>Third slide label</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Carousel Row -->
                   
               </div>
            </div>
             
             @endsection