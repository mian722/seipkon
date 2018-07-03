<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from themescare.com/demos/seipkon-admin-template/advance-components.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 07:50:47 GMT -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
      <meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>Seipkon - Bootstrap Admin Template</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png') }}">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/animate.min.css') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap/bootstrap.min.css') }}">
      <!-- Font awesome CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/font-awesome/font-awesome.min.css') }}">
      <!-- Themify Icon CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/themify-icons/themify-icons.css') }}">
      <!-- Perfect Scrollbar CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
      <!-- Daterange CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/daterangepicker/css/daterangepicker.css') }}">
      <!-- Toggles CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/jquery-toggle/css/toggles-full.css') }}">
      <!-- Select2 CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}">
      <!-- Color Picker CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
      <!-- Main CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/seipkon.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
   </head>
   <body>
       
      <!-- Start Page Loading -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- End Page Loading -->
       
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Main Header Start -->
         <header class="main-header">
             
            <!-- Logo Start -->
            <div class="seipkon-logo">
               <a href="index-2.html">
               <img src="assets/img/logo.png" alt="logo">
               </a>
            </div>
            <!-- Logo End -->
             
            <!-- Header Top Start -->
            <nav class="navbar navbar-default">
               <div class="container-fluid">
                  <div class="header-top-section">
                     <div class="pull-left">
                         
                        <!-- Collapse Menu Btn Start -->
                        <button type="button" id="sidebarCollapse" class=" navbar-btn">
                        <i class="fa fa-bars"></i>
                        </button>
                        <!-- Collapse Menu Btn End -->
                         
                        <!-- Header Top Search Start -->
                        <div class="header-top-search">
                           <form>
                              <input type="search" placeholder="Search..." >
                              <button type="submit" ><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                        <!-- Header Top Search End -->
                         
                     </div>
                     <div class="header-top-right-section pull-right">
                        <ul class="nav nav-pills nav-top navbar-right">
                            
                           <!-- Full Screen Btn Start -->
                           <li>
                              <a href="#"  id="fullscreen-button">
                              <i class="fa fa-arrows-alt"></i>
                              </a>
                           </li>
                           <!-- Full Screen Btn End -->
                            
                           <!-- Message Toggle Start -->
                           <li class="dropdown">
                              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                              <i class="fa fa-envelope-o"></i>
                              <span>5</span>
                              </a>
                              <div class="message-box dropdown-menu animated bounceIn">
                                 <div class="message-header">
                                    <h4>5 new Message</h4>
                                    <a href="#">mark as read</a>
                                 </div>
                                 <div class="message-body">
                                    <ul>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-4.png" alt="message" />
                                                <span class="online-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>David Johnson</h4>
                                                <p>I like your portfolio, let's start.</p>
                                                <span>56 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-1.png" alt="message" />
                                                <span class="busy-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>Margaret Govan</h4>
                                                <p>Can we have call in this week ?</p>
                                                <span>14 hourse ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-3.png" alt="message" />
                                                <span class="online-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>Emanual Doe</h4>
                                                <p>A National Book Award Finalist An...</p>
                                                <span>a day ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-2.png" alt="message" />
                                                <span class="away-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>Eric Alsobrook</h4>
                                                <p>A National Book Award Finalist An...</p>
                                                <span>2 days ago</span>
                                             </div>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="message-footer">
                                    <a href="#"><i class="fa fa-angle-down"></i>see all messages</a>
                                 </div>
                              </div>
                           </li>
                           <!-- Message Toggle Start -->
                            
                           <!-- Notification Toggle Start -->
                           <li class="dropdown">
                              <a class="dropdown-toggle cart-icon" href="#" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span>3</span>
                              </a>
                              <div class="notification-box dropdown-menu animated bounceIn">
                                 <div class="notification-header">
                                    <h4>3 new notification</h4>
                                    <a href="#">clear all</a>
                                 </div>
                                 <div class="notification-body">
                                    <ul>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_yellow">
                                                <i class="fa fa-envelope-o"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>you have received an email</h4>
                                                <span>56 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_green">
                                                <i class="fa fa-check"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>Successful transaction of $210</h4>
                                                <span>1 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_red">
                                                <i class="fa fa-thumbs-up"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>33 pending post for approval</h4>
                                                <span>3 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_blue">
                                                <i class="fa fa-comments-o"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>2 new comments found</h4>
                                                <span>5 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_green">
                                                <i class="fa fa-truck "></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>order details confirmation</h4>
                                                <span>43 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_yellow">
                                                <i class="fa fa-envelope-o"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>you have received an email</h4>
                                                <span>56 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_green">
                                                <i class="fa fa-check"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>Successful transaction of $210</h4>
                                                <span>1 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="notification-footer">
                                    <a href="#"><i class="fa fa-angle-down"></i>see all notification</a>
                                 </div>
                              </div>
                           </li>
                           <!-- Notification Toggle End -->
                            
                           <!-- Profile Toggle Start -->
                           <li class="dropdown">
                              <a class="dropdown-toggle profile-toggle" href="#" data-toggle="dropdown">
                                 <img src="assets/img/avatar.jpg" class="profile-avator" alt="admin profile" />
                                 <div class="profile-avatar-txt">
                                    <p>Jhon Doe</p>
                                    <i class="fa fa-angle-down"></i>
                                 </div>
                              </a>
                              <div class="profile-box dropdown-menu animated bounceIn">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> view profile</a></li>
                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Edit profile</a></li>
                                    <li><a href="#"><i class="fa fa-flash"></i> Activity Log</a></li>
                                    <li><a href="#"><i class="fa fa-wrench"></i> Setting</a></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> sign out</a></li>
                                 </ul>
                              </div>
                           </li>
                           <!-- Profile Toggle End -->
                            
                        </ul>
                     </div>
                  </div>
               </div>
            </nav>
            <!-- Header Top End -->
             
         </header>
         <!-- Main Header End -->
          
         <!-- Sidebar Start -->
         <aside class="seipkon-main-sidebar">
            <nav id="sidebar">
                
               <!-- Sidebar Profile Start -->
               <div class="sidebar-profile clearfix">
                  <div class="profile-avatar">
                     <img src="assets/img/avatar.jpg" alt="profile" />
                  </div>
                  <div class="profile-info">
                     <h3>Jhon Doe</h3>
                     <p>Welcome Admin !</p>
                  </div>
               </div>
               <!-- Sidebar Profile End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>General</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="index-2.html">
                        <i class="fa fa-dashboard"></i>
                        Dashboard
                        </a>
                     </li>
                     <li>
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        e-Commerce
                        </a>
                        <ul class="collapse list-unstyled" id="ecommerce">
                           <li><a href="product.html">all products</a></li>
                           <li><a href="add-product.html">add new product</a></li>
                           <li><a href="edit-product.html">Edit product</a></li>
                           <li><a href="order-list-product.html">product order list</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#createpage" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-file-text-o"></i>
                        pages
                        </a>
                        <ul class="collapse list-unstyled" id="createpage">
                           <li><a href="pages.html">all pages</a></li>
                           <li><a href="create-page.html">create a page</a></li>
                           <li><a href="edit-page.html">Edit Page</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-th"></i>
                        Advance apps
                        </a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="chatting.html">Chatting</a></li>
                           <li><a href="notes.html">notes</a></li>
                           <li><a href="apps-contact-list.html">Contact/Employee</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#mail" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        mailbox
                        </a>
                        <ul class="collapse list-unstyled" id="mail">
                           <li><a href="compose.html">compose</a></li>
                           <li><a href="inbox.html">inbox</a></li>
                           <li><a href="mail-read.html">read</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ui_elements" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-laptop"></i>
                        UI Elements
                        </a>
                        <ul class="collapse list-unstyled" id="ui_elements">
                           <li><a href="ui_button.html">Button</a></li>
                           <li><a href="ui_panels.html">Panels</a></li>
                           <li>
                              <a href="#icon" data-toggle="collapse" aria-expanded="false">
                              Icons
                              </a>
                              <ul class="collapse list-unstyled" id="icon">
                                 <li><a href="icon-fontawesome.html">Font awesome</a></li>
                                 <li><a href="icon-glyphicons.html">Glyphicons</a></li>
                                 <li><a href="icon-themify.html">Themify Icons</a></li>
                              </ul>
                           </li>
                           <li><a href="ui_tab_accordion.html">Tabs & Accordions</a></li>
                           <li><a href="ui_sweet_alerts.html">sweet Alerts</a></li>
                           <li><a href="ui_progressbars.html">Progress bars</a></li>
                           <li><a href="ui_carousel.html">Carousel</a></li>
                           <li><a href="ui_breadcrumbs.html">breadcrumbs</a></li>
                           <li><a href="ui_pagination.html">pagination</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- Menu Section End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>Forms,Table & widget</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="seipcon_widget.html">
                        <i class="fa fa-th"></i>
                        Widgets
                        </a>
                     </li>
                     <li>
                        <a href="#charts" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-pie-chart"></i>
                        Charts
                        </a>
                        <ul class="collapse list-unstyled" id="charts">
                           <li><a href="chartsjs.html">chart js</a></li>
                           <li><a href="morrris.html">morris</a></li>
                           <li><a href="sparkline.html">sparkline</a></li>
                        </ul>
                     </li>
                     <li class="active">
                        <a href="#forms" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-edit"></i>
                        Forms
                        </a>
                        <ul class="collapse list-unstyled" id="forms">
                           <li><a href="general-form.html">General Form</a></li>
                           <li class="active"><a href="advance-components.html">Advance Components</a></li>
                           <li><a href="form-layouts.html">Form layouts</a></li>
                           <li><a href="form-validation.html">form validation</a></li>
                           <li><a href="form-wizards.html">form wizards</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#table" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-table"></i>
                        Tables
                        </a>
                        <ul class="collapse list-unstyled" id="table">
                           <li><a href="basic-table.html">basic table</a></li>
                           <li><a href="advance-table.html">table Advance</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- Menu Section End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>Extra components</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="#ex_components" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-book"></i>
                        Additional Pages
                        </a>
                        <ul class="collapse list-unstyled" id="ex_components">
                           <li><a href="profile.html">profile page</a></li>
                           <li><a href="invoice.html">Invoice</a></li>
                           <li><a href="gallery.html">gallery</a></li>
                           <li><a href="blank.html">Blank</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ex_authentication" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-unlock-alt"></i>
                        Authentication 
                        </a>
                        <ul class="collapse list-unstyled" id="ex_authentication">
                           <li><a href="login.html">Login</a></li>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="lockscreen.html">Lockscreen</a></li>
                           <li><a href="recover-pass.html">Recover password</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ex_error" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-exclamation-circle"></i>
                        Error Pages 
                        </a>
                        <ul class="collapse list-unstyled" id="ex_error">
                           <li><a href="error-404.html">404 Not Found</a></li>
                           <li><a href="error-505.html">505 Forbidden</a></li>
                           <li><a href="error-500.html">500 Internal Server</a></li>
                           <li><a href="error-503.html">503 Service Unavailable</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ex_multlable" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-map-signs"></i>
                        Multilevel
                        </a>
                        <ul class="collapse list-unstyled" id="ex_multlable">
                           <li><a href="#">Level One</a></li>
                           <li>
                              <a href="#ex_multlable_2" data-toggle="collapse" aria-expanded="false">
                              Level One
                              </a>
                              <ul class="collapse list-unstyled" id="ex_multlable_2">
                                 <li><a href="#">Level Two</a></li>
                                 <li>
                                    <a href="#ex_multlable_3" data-toggle="collapse" aria-expanded="false">
                                    Level Two
                                    </a>
                                    <ul class="collapse list-unstyled" id="ex_multlable_3">
                                       <li><a href="#">Level Three</a></li>
                                       <li><a href="#">Level Three</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li><a href="#">Level One</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- Menu Section End -->
                
            </nav>
         </aside>
         <!-- End Sidebar -->
          
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
                                    <h3>form advance components</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>forms</li>
                                       <li>advance components</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Advance Form Row Start -->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>Input mask</h3>
                              <div class="form-wrap input-form-mask">
                                 <form>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 text-right">
                                             <label class="control-label" for="dateMask">Date Mask</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-calendar"></i>
                                                </div>
                                                <input id="dateMask" type="text" class="form-control" placeholder="MM/DD/YYYY">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 text-right">
                                             <label class="control-label" for="aliasdateMask">Date Mask</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-calendar"></i>
                                                </div>
                                                <input id="aliasdateMask" type="text" class="form-control" placeholder="DD/MM/YYYY">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 text-right">
                                             <label class="control-label" for="phoneMask">Phone mask</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-phone"></i>
                                                </div>
                                                <input id="phoneMask" type="text" class="form-control" placeholder="(999) 999-9999">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 text-right">
                                             <label class="control-label" for="intlMask">Intl US phone mask:</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-phone"></i>
                                                </div>
                                                <input id="intlMask" type="text" class="form-control" placeholder="999-999-9999x99999">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 text-right">
                                             <label class="control-label" for="ipMask">IP Address Mask</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-laptop"></i>
                                                </div>
                                                <input id="ipMask" type="text" class="form-control" placeholder="099.099.099.099">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 text-right">
                                             <label class="control-label" for="serialMask">Serial Number Mask</label>
                                          </div>
                                          <div class="col-md-8 col-sm-8">
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-terminal"></i>
                                                </div>
                                                <input id="serialMask" type="text" class="form-control" placeholder="9999-9999-9999-9999-9999">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>select 2 elements</h3>
                              <div class="form-wrap">
                                 <form>
                                    <div class="form-group">
                                       <label class="control-label">Basic Select</label>
                                       <select class="form-control select2">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Disabled Select</label>
                                       <select class="form-control select2" disabled="disabled">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Multiple Select</label>
                                       <select class="form-control select2" multiple="multiple" data-placeholder="Select a State">
                                          <option>Alabama</option>
                                          <option>Alaska</option>
                                          <option>California</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="control-label">Disabled Result</label>
                                       <select class="form-control select2">
                                          <option selected="selected">Alabama</option>
                                          <option>Alaska</option>
                                          <option disabled="disabled">California (disabled)</option>
                                          <option>Delaware</option>
                                          <option>Tennessee</option>
                                          <option>Texas</option>
                                          <option>Washington</option>
                                       </select>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Advance Form Row -->
                   
                  <!-- Advance Form Row Start -->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>Date Pickers</h3>
                              <div class="form-wrap date-picker">
                                 <form>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Date Picker</label>
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" id="datepicker" class="form-control" placeholder="Date" />
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Date range Picker</label>
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" id="reservation" class="form-control" placeholder="Date" />
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Date & time range Picker</label>
                                             <div class="input-group">
                                                <div class="input-group-addon">
                                                   <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" id="datetimerange" class="form-control" placeholder="Date" />
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Date range button</label>
                                             <div class="input-group daterange_btn">
                                                <button type="button" class="form-control" id="daterange_btn">
                                                <span>
                                                <i class="fa fa-calendar"></i> Date range picker
                                                </span>
                                                <i class="fa fa-caret-down"></i>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>color picker</h3>
                              <div class="form-wrap color-picker">
                                 <form>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Default</label>
                                             <input type="text" class=" form-control" id="cp1" />
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Inline</label>
                                             <div id="cp2" class="input-group control-label colorpicker-component" title="Using input value">
                                                <input type="text" class="form-control"/>
                                                <span class="input-group-addon"><i></i></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Horizontal bar</label>
                                             <div id="cp3" class="input-group colorpicker-component" title="Using horizontal option">
                                                <input type="text" class="form-control"/>
                                                <span class="input-group-addon"><i></i></span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <div class="form-group">
                                             <label class="control-label">Disable alpha channel</label>
                                             <div id="cp4" class="input-group colorpicker-component">
                                                <input type="text" class="form-control"/>
                                                <span class="input-group-addon"><i></i></span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Advance Form Row -->
                   
                  <!-- Advance Form Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="form-example">
                              <h3>Input knob</h3>
                              <div class="form-wrap">
                                 <form>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3 col-sm-3  text-center single-knob">
                                             <p class="control-label"> Disable display input</p>
                                             <input type="text" value="70" data-width="120" data-height="120" data-min="-100" data-displayPrevious=true data-displayInput=false class="knob">
                                          </div>
                                          <div class="col-md-3 col-sm-3  text-center single-knob">
                                             <p class="control-label"> 'cursor' mode</p>
                                             <input  data-width="120" data-height="120" data-cursor=true data-fgColor="#34495E" class="knob" value="29">
                                          </div>
                                          <div class="col-md-3 col-sm-3  text-center single-knob">
                                             <p class="control-label">Display previous value</p>
                                             <input type="text" value="40" data-width="120" data-height="120" data-min="-100" data-displayPrevious=true class="knob">
                                          </div>
                                          <div class="col-md-3 col-sm-3  text-center single-knob">
                                             <p class="control-label">Angle offset</p>
                                             <input type="text" value="53" data-width="120" data-height="120" data-min="-100" data-angleOffset=90 data-linecap=round class="knob">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <div class="row">
                                          <div class="col-md-3 col-sm-3  text-center single-knob">
                                             <p class="control-label">Angle offset and arc</p>
                                             <input type="text" class="knob" data-width="120" data-height="120" data-angleOffset=-125 data-angleArc=250 data-fgColor="#34495E" data-rotation="anticlockwise" value="35">
                                          </div>
                                          <div class="col-md-3 col-sm-3  text-center single-knob">
                                             <p class="control-label">Readonly</p>
                                             <input type="text" class="knob" data-width="120" data-height="120" data-readOnly=true value="35"  data-thickness=".4" >
                                          </div>
                                          <div class="col-md-3 col-sm-3 text-center single-knob">
                                             <p class="control-label">4-digit, step 0.1 </p>
                                             <input class="knob" data-step=".1" data-width="120" data-height="120" data-min="-10000" data-max="10000" value="0" data-displayPrevious=true >
                                          </div>
                                          <div class="col-md-3 col-sm-3 text-center single-knob last-knob">
                                             <p class="control-label">'draw' method </p>
                                             <input class="knob" value="40" data-width="125" data-height="120" data-skin="tron"  data-thickness=".2" data-displayPrevious=true >
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Advance Form Row -->
                   
               </div>
            </div>
             
            <!-- Footer Area Start -->
            <footer class="seipkon-footer-area">
               <p>Seipkon - Bootstrap Admin Template by <a href="#">Themescare</a></p>
            </footer>
            <!-- End Footer Area -->
             
         </section>
         <!-- End Right Side Content -->
          
      </div>
      <!-- End Wrapper -->
       
       
      <!-- jQuery -->
      <script src="{{ asset('public/assets/js/jquery-3.1.0.min.js') }}"></script>
      <!-- Bootstrap JS -->
      <script src="{{ asset('public/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
      <!-- Daterange JS -->
      <script src="{{ asset('public/assets/plugins/daterangepicker/js/moment.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/daterangepicker/js/daterangepicker.js') }}"></script>
      <!-- Perfect Scrollbar JS -->
      <script src="{{ asset('public/assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js') }}"></script>
      <!-- Masked Input JS -->
      <script src="{{ asset('public/assets/plugins/masked-input/js/jquery.maskedinput.min.js') }}"></script>
      <!-- Select2 JS -->
      <script src="{{ asset('public/assets/plugins/select2/js/select2.full.js') }}"></script>
      <!-- Color Picker JS -->
      <script src="{{ asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
      <!-- Jquery Knob JS -->
      <script src="{{ asset('public/assets/plugins/jquery-knob/js/jquery.knob.min.js') }}"></script>
      <!-- Advance Component Form JS For Only This Page -->
      <script src="{{ asset('public/assets/js/advance_component_form.js') }}"></script>
      <!-- Custom JS -->
      <script src="{{ asset('public/assets/js/seipkon.js') }}"></script>
   </body>

<!-- Mirrored from themescare.com/demos/seipkon-admin-template/advance-components.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Jun 2018 07:50:51 GMT -->
</html>

