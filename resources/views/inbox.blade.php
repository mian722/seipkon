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
                                    <h3>inbox</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>mailbox</li>
                                       <li>inbox</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Mail Inbox Row Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-3 col-sm-4">
                                 <div class="mailbox-left">
                                    <a class="btn btn-success" href="compose.html">
                                    <i class="fa fa-inbox"></i>
                                    compose
                                    </a>
                                    <div class="mail-sidebar">
                                       <ul>
                                          <li class="active"><a href="inbox.html"><i class="fa fa-inbox"></i> inbox (12)</a></li>
                                          <li><a href="#"><i class="fa fa-send"></i> send</a></li>
                                          <li><a href="#"><i class="fa fa-edit"></i> drafts (3)</a></li>
                                          <li><a href="#"><i class="fa fa-exclamation-circle"></i> spam</a></li>
                                          <li><a href="#"><i class="fa fa-trash-o"></i> trash</a></li>
                                       </ul>
                                       <h4>labels</h4>
                                       <ul>
                                          <li><a href="#"><span class="circle-badge red"></span>work</a></li>
                                          <li><a href="#"><span class="circle-badge green"></span>Office</a></li>
                                          <li><a href="#"><span class="circle-badge blue"></span>Personal</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-8">
                                 <div class="mail-inbox-header">
                                    <div class="row">
                                       <div class="col-md-8 col-sm-8">
                                          <ul>
                                             <li class="btn btn-info">
                                                <div class="inbox-checkbox">
                                                    <input type="checkbox" class="parent"  id="chk_new"  data-group=".group1" />
                                                   <label for="chk_new"></label>
                                                </div>
                                             </li>
                                             <li class="btn-group">
                                                <button class="btn btn-info" type="button">
                                                <i class="fa fa-download "></i>
                                                </button>
                                                <button class="btn btn-info" type="button">
                                                <i class="fa fa-exclamation-circle"></i>
                                                </button>
                                                <button class="btn btn-info" type="button">
                                                <i class="fa fa-trash-o"></i>
                                                </button>
                                             </li>
                                             <li class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-folder"></i>
                                                <b class="caret"></b>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                   <li><a href="#">Social</a></li>
                                                   <li><a href="#">Forums</a></li>
                                                   <li><a href="#">Updates</a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#">Spam</a></li>
                                                   <li><a href="#">Trash</a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#">New</a></li>
                                                </ul>
                                             </li>
                                             <li class="btn-group">
                                                <button type="button" class="btn btn-info waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-tag"></i>
                                                <b class="caret"></b>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                   <li><a href="#">Work</a></li>
                                                   <li><a href="#">Family</a></li>
                                                   <li><a href="#">Social</a></li>
                                                   <li class="divider"></li>
                                                   <li><a href="#">Primary</a></li>
                                                   <li><a href="#">Promotions</a></li>
                                                   <li><a href="#">Forums</a></li>
                                                </ul>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col-md-4 col-sm-4">
                                          <div class="text-right responsive_center_in">
                                             <span class="text-muted hidden-sm hidden-xs">Showing 10 of 112 </span>
                                             <a title="Refresh" data-toggle="tooltip" class="btn btn-info"><i class="fa fa-refresh"></i></a>
                                             <div class="btn-group">
                                                <a class="btn btn-info"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-info"><i class="fa fa-angle-right"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mail-inbox-content">
                                    <div class="table-responsive">
                                       <table class="table table-hover">
                                          <tbody>
                                             <tr class="unread">
                                                <td>
                                                   <div class="inbox-checkbox">
                                                       <input type="checkbox" id="chk" class="group1" name="check[]">
                                                      <label for="chk"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star starred"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">John Doe</td>
                                                <td class="mail-inbox-subject">
                                                   Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                                </td>
                                                <td class="hidden-xs">
                                                   <i class="fa fa-paperclip"></i>
                                                </td>
                                                <td class="mail-date">11:12</td>
                                             </tr>
                                             <tr class="unread">
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk2" class="group1" name="check[]">
                                                      <label for="chk2"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star-o"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">Envato Account</td>
                                                <td class="mail-inbox-subject">Important account security update from Envato</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">2:13</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk3" class="group1" name="check[]">
                                                      <label for="chk3"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star-o"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">Twitter</td>
                                                <td class="mail-inbox-subject">Seipkon Bootstrap Admin Template</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">01 Dec</td>
                                             </tr>
                                             <tr class="unread">
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk4" class="group1" name="check[]">
                                                      <label for="chk4"></label>
                                                   </div>
                                                </td>
                                                <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                <td class="mail-inbox-name hidden-xs">Richard Parker</td>
                                                <td class="mail-inbox-subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">18 Sep</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk5" class="group1" name="check[]">
                                                      <label for="chk5"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star-o"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">John Smith</td>
                                                <td class="mail-inbox-subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">12 June</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk6" class="group1" name="check[]">
                                                      <label for="chk6"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star-o"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">me, Robert Smith (3)</td>
                                                <td class="mail-inbox-subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">5 Aug</td>
                                             </tr>
                                             <tr class="unread">
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk7" class="group1" name="check[]">
                                                      <label for="chk7"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star-o"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">John Smith</td>
                                                <td class="mail-inbox-subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">13 sept</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk8" class="group1" name="check[]">
                                                      <label for="chk8"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star starred"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">Mike Litorus</td>
                                                <td class="mail-inbox-subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">14 oct</td>
                                             </tr>
                                             <tr class="unread">
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk9" class="group1" name="check[]">
                                                      <label for="chk9"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important">
                                                   <i class="fa fa-star-o"></i>
                                                   </span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">Themeforest</td>
                                                <td class="mail-inbox-subject">Welcome To Themeforest</td>
                                                <td class="hidden-xs"></td>
                                                <td class="mail-date">11/11/15</td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div class="inbox-checkbox">
                                                      <input type="checkbox" id="chk11" class="group1" name="check[]">
                                                      <label for="chk11"></label>
                                                   </div>
                                                </td>
                                                <td>
                                                   <span class="mail-important"><i class="fa fa-star-o"></i></span>
                                                </td>
                                                <td class="mail-inbox-name hidden-xs">Richard Miles</td>
                                                <td class="mail-inbox-subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="mail-date">10/31/14</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Mail Inbox Row -->
                   
               </div>
            </div>
             
             @endsection