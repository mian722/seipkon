<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
      <meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
      <meta name="author" content="Themescare">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Title -->
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/assets/img/favicon/favicon-32x32.png') }}">
      <!-- Animate CSS -->
      <link href="{{ asset('public/assets/css/imageuploadify.min.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('public/assets/css/animate.min.css') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap/bootstrap.min.css') }}">
      <!-- Font awesome CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/font-awesome/font-awesome.min.css') }}">
      <!-- Themify Icon CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/themify-icons/themify-icons.css') }}">
      <!-- Perfect Scrollbar CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
      <!-- Jvector CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/jvector/css/jquery-jvectormap.css') }}">
      <link href="{{ asset('public/assets/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet"/>

      <!-- Daterange CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/daterangepicker/css/daterangepicker.css') }}">
      <!-- Toggles CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/jquery-toggle/css/toggles-full.css') }}">
      <!-- Select2 CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}">
      <!-- Bootstrap-select CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}">
      <!-- Summernote CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/summernote/css/summernote.css') }}">
      <!-- DataTables CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables/css/dataTables.bootstrap.min.css') }}" >
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables/css/buttons.bootstrap.min.css') }}" >
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/datatables/css/responsive.bootstrap.min.css') }}" >
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <!-- Color Picker CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
      <!-- Main CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/seipkon.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
      <!-- jQuery -->
      <script src="{{ asset('public/assets/js/jquery-3.1.0.min.js') }}"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

      
      <style type="text/css">
         .profile-widget-img {
            text-align: center;
            padding-top: 20px;
         }
         .create-page-right form {
            display: inline-block;
         }
         .table { width: 100% !important; }
         .dis-none .editable-buttons {  display: none !important; }
         .hidden-style {
            border: 0;
            display: inline-block;
            width: 100px !important;
         }
      </style>

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
               <img src="{{ asset('public/assets/img/logo.png') }}" alt="logo">
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
                                                <img src="{{ asset('public/assets/img/msg-4.png') }}" alt="message" />
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
                                                <img src="{{ asset('public/assets/img/msg-1.png') }}" alt="message" />
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
                                                <img src="{{ asset('public/assets/img/msg-3.png') }}" alt="message" />
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
                                                <img src="{{ asset('public/assets/img/msg-2.png') }}" alt="message" />
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
                                 <img src="{{ asset('public/assets/img/avatar.jpg') }}" class="profile-avator" alt="admin profile" />
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
                                    @if (!Auth::guest())
                                       <li>
                                           <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                              <i class="fa fa-power-off"></i> Logout
                                           </a>

                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               {{ csrf_field() }}
                                           </form>
                                       </li>
                                    @endif
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
                     <img src="{{ asset('public/assets/img/avatar.jpg') }}" alt="profile" />
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
                     @if(Auth::user()->roles_id == 5)
                        <li class="active">
                           <a href="{{ asset('') }}">
                           <i class="fa fa-dashboard"></i>
                           Dashboard
                           </a>
                        </li>

                        <li>
                           <a href="#ecommerce" data-toggle="collapse" aria-expanded="false"><i class="fa fa-files-o"></i>Offers</a>
                           <ul class="collapse list-unstyled" id="ecommerce">
                              <li><a href="{{ route('affiliate.offers', Auth::user()->fname) }}">all offers</a></li>
                              <li><a href="{{ route('affiliate.approveoffers', Auth::user()->fname) }}">My Offers</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#reports" data-toggle="collapse" aria-expanded="false">
                           <i class="fa fa-bar-chart-o"></i>
                           Reports
                           </a>
                           <ul class="collapse list-unstyled" id="reports">
                              <li><a href="{{ asset('general-report') }}">General Report</a></li>
                              <li><a href="{{ asset('conversion-report') }}">Conversion Report</a></li>
                              <li><a href="{{ asset('conversion-status-report') }}">Conversion Status Report</a></li>
                           </ul>
                        </li>
                        <li><a href="{{ route('affiliate.postback', Auth::user()->fname) }}"><i class="fa fa-file-o"></i> Invoice</a></li>
                        <li><a href="{{ route('affiliate.postback', Auth::user()->fname) }}"><i class="fa fa-link"></i> Postback</a></li>
                     @else
                        <li class="active">
                           <a href="{{ route('advertiser.home', Auth::user()->fname) }}">
                           <i class="fa fa-dashboard"></i>
                           Dashboard
                           </a>
                        </li>

                        <li>
                           <a href="{{ route('advertiser.offers', Auth::user()->fname) }}"><i class="fa fa-files-o"></i>Offers</a>
                        </li>
                        <li>
                           <a href="#reports" data-toggle="collapse" aria-expanded="false">
                           <i class="fa fa-bar-chart-o"></i>
                           Reports
                           </a>
                           <ul class="collapse list-unstyled" id="reports">
                              <li><a href="{{ asset('general-report') }}">General Report</a></li>
                              <li><a href="{{ asset('conversion-report') }}">Conversion Report</a></li>
                           </ul>
                        </li>
                        <li><a href="{{ route('affiliate.postback', Auth::user()->fname) }}"><i class="fa fa-file-o"></i> Invoice</a></li>
                     @endif
                     
                  </ul>
               </div>
               <!-- Menu Section End -->
                
            </nav>
         </aside>
         <!-- End Sidebar -->


        @yield('content')

         <!-- Footer Area Start -->
            <footer class="seipkon-footer-area">
               <p>Seipkon - Bootstrap Admin Template by <a href="#">Themescare</a></p>
            </footer>
            <!-- End Footer Area -->
             
         </section>
         <!-- End Right Side Content -->
          
      </div>
      <!-- End Wrapper -->
       
       
      <script type="text/javascript" src="{{ asset('public/assets/js/imageuploadify.min.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#multiple_image').imageuploadify();
            })
        </script>
      <!-- Bootstrap JS -->
      <script src="{{ asset('public/assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
      
      <!-- Bootstrap-select JS -->
      <script src="{{ asset('public/assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
      <!-- Daterange JS -->
      <script src="{{ asset('public/assets/plugins/daterangepicker/js/moment.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/daterangepicker/js/daterangepicker.js') }}"></script>
      <!-- Perfect Scrollbar JS -->
      <script src="{{ asset('public/assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js') }}"></script>
      <!-- Toggles JS -->
      <script src="{{ asset('public/assets/plugins/jquery-toggle/js/toggles.min.js') }}"></script>
      <!-- General Form Custom JS For Only This Page -->
      <script src="{{ asset('public/assets/js/general_form_custom.js') }}"></script>
      <!-- Masked Input JS -->
      <script src="{{ asset('public/assets/plugins/masked-input/js/jquery.maskedinput.min.js') }}"></script>
      <script src="{{ asset('public/assets/bootstrap3-editable/js/bootstrap-editable.min.js') }}"></script>
      <!-- Select2 JS -->
      <script src="{{ asset('public/assets/plugins/select2/js/select2.full.js') }}"></script>
      <!-- Color Picker JS -->
      <script src="{{ asset('public/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
      <!-- Jquery Knob JS -->
      <script src="{{ asset('public/assets/plugins/jquery-knob/js/jquery.knob.min.js') }}"></script>
      <!-- Advance Component Form JS For Only This Page -->
      <script src="{{ asset('public/assets/js/advance_component_form.js') }}"></script>
      <!-- Jvector JS -->
      <script src="{{ asset('public/assets/plugins/jvector/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/jvector/js/jquery-jvectormap-world-mill-en.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/jvector/js/jvector-init.js') }}"></script>
      <!-- Raphael JS -->
      <script src="{{ asset('public/assets/plugins/raphael/js/raphael.min.js') }}"></script>
      <!-- Morris JS -->
      <script src="{{ asset('public/assets/plugins/morris/js/morris.min.js') }}"></script>
      <!-- Sparkline JS -->
      <script src="{{ asset('public/assets/plugins/sparkline/js/jquery.sparkline.js') }}"></script>
      <!-- Chart JS -->
      <script src="{{ asset('public/assets/plugins/charts/js/Chart.js') }}"></script>
      
      <!-- Datatables -->
      <script src="{{ asset('public/assets/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/dataTables.bootstrap.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/buttons.bootstrap.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/buttons.flash.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/buttons.html5.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/buttons.print.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/responsive.bootstrap.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/jszip.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/pdfmake.min.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/datatables/js/vfs_fonts.js') }}"></script>
      <!-- Vue JS -->
      <script src="{{ asset('public/assets/plugins/vue/vue.min.js') }}"></script>
      <!-- Summernote JS -->
      <script src="{{ asset('public/assets/plugins/summernote/js/summernote.js') }}"></script>
      <script src="{{ asset('public/assets/plugins/summernote/js/custom-summernote.js') }}"></script>
      <!-- Color Picker JS -->
      <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
      <!-- Dashboard JS -->
      <script src="{{ asset('public/assets/js/dashboard.js') }}"></script>
       <!-- Form Wizard Custom JS For Only This Page -->
      <script src="{{ asset('public/assets/js/advance_table_custom.js') }}"></script>
      <!-- Jquery Steps JS -->
      <script src="{{ asset('public/assets/plugins/jquery-steps/js/jquery.steps.min.js') }}"></script>
      <!-- Jquery parsley JS -->
      <script src="{{ asset('public/assets/plugins/parsley/js/parsley.min.js') }}"></script>
      <!-- Form Wizard Custom JS For Only This Page -->
      <script src="{{ asset('public/assets/js/form_wizard_custom.js') }}"></script>
      <!-- Custom JS -->
      <script src="{{ asset('public/assets/js/seipkon.js') }}"></script>
      <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
      


      <script type="text/javascript">
         $(document).ready(function() {
            $.fn.editable.defaults.mode = 'popup';
                $('.username').editable();
            });
      $('.username').editable();
      $('#page-editor1').summernote();
      $('#page-editor2').summernote();
      $('#page-editor3').summernote();
      $('#page-editor4').summernote();
      $('#page-editor5').summernote();
      $('#page-editor6').summernote();
      $('#page-editor7').summernote();
      $('#page-editor8').summernote();
      $('#page-editor9').summernote();
      $('#page-editor10').summernote();

      $(document).ready( function () {
             $('#postback_table').DataTable();
             $('#sub_affiliate_block_list').DataTable();
             $('#c1').DataTable();
             $('#c2').DataTable();
             $('#c3').DataTable();
         } );

      $("ul.nav-tabs a").click(function (e) {
        e.preventDefault();
        $(this).tab('show');
      });

      $('.changetabbutton').click(function(e){
         e.preventDefault();
         var next_tab = $('.nav-tabs > .active').next('li').find('a');
         if(next_tab.length>0){
            next_tab.trigger('click');
         }else{
            $('.nav-tabs li:eq(0) a').trigger('click');
         }
      });

      $(function() {
         $('.ssl_toggle').bootstrapToggle();
      })

      // $('.changetabbutton').click(function(){
      //     $('input').each(function() {
      //         if(!$(this).val()){
      //             alert('Some fields are empty');
      //            return false;
      //         }
      //     });
      // });



      $("#theSelect").change(function(){          
        var value = $("#theSelect option:selected").val();
        var theDiv = $(".is" + value);

        theDiv.slideDown().removeClass("hidden");
      });
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_display')
                        .attr('src', e.target.result)
                        .width(114)
                        .height(113);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>


      <script type="text/javascript">
         $(document).ready(function(){
            $('#tracking_link').on('change', function(){
               $('#aff_tracking').html($(this).val());
            });
         });
      </script>
   </body>
</html>