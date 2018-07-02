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
                                    <h3>Tabs & Accordions</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index-2.html">home</a></li>
                                       <li>UI Elements</li>
                                       <li>Tabs & Accordions</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Tabs Row Start -->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="tabs-example">
                              <h3>Horizontal tabs </h3>
                              <div class="tabs-box-example horizontal-tab-example">
                                 <ul class="nav nav-tabs" id="service_pro" role="tablist">
                                    <li class="active" role="presentation"><a href="#home" role="tab" data-toggle="tab">home</a>
                                    </li>
                                    <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">profile</a></li>
                                    <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">messages</a></li>
                                    <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">settings</a></li>
                                 </ul>
                                 <div id="seipkkon_tab_content" class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                       consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed,Lorem ipsum dolor sit amet,  volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque ex
                                    </div>
                                    <div id="profile" class="tab-pane fade in">
                                       In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit.  consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque ex
                                    </div>
                                    <div id="messages" class="tab-pane fade in">
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque ex
                                    </div>
                                    <div id="settings" class="tab-pane fade in">
                                       Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque exLorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. 
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="tabs-example">
                              <h3>Vertical tabs </h3>
                              <div class="tabs-box-example vertical-tab-example">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <ul class="nav nav-tabs" id="service_pro2" role="tablist">
                                          <li class="active" role="presentation"><a href="#v_home" aria-controls="v_home" role="tab" data-toggle="tab">home</a>
                                          </li>
                                          <li role="presentation"><a href="#v_profile"  aria-controls="v_profile" role="tab" data-toggle="tab">profile</a></li>
                                          <li role="presentation"><a href="#v_messages"  aria-controls="v_messages" role="tab" data-toggle="tab">messages</a></li>
                                          <li role="presentation"><a href="#v_settings"  aria-controls="v_settings" role="tab" data-toggle="tab">settings</a></li>
                                       </ul>
                                    </div>
                                    <div class="col-md-9">
                                       <div id="seipkkon_tab_content2" class="tab-content">
                                          <div id="v_home" class="tab-pane fade in active">
                                             consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed,Lorem ipsum dolor sit amet, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque ex 
                                          </div>
                                          <div id="v_profile" class="tab-pane fade in">
                                             In a metus pellentesque,consectetur adipiscing elit.  scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed,Lorem ipsum dolor sit amet, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque ex 
                                          </div>
                                          <div id="v_messages" class="tab-pane fade in">
                                             elit consectetur adipiscing . In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed,Lorem ipsum dolor sit amet, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque ex 
                                          </div>
                                          <div id="v_settings" class="tab-pane fade in">
                                             adipiscing consectetur elit. In a metus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis nulla. Cras mi ex, mattis vel molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed,Lorem ipsum dolor sit amet, volutpat nisi. Cras sit amet felis nulla. Cra tus pellentesque, scelerisque ex sed, volutpat nisi. Cras sit amet felis null entesque, scelerisque ex 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Tabs Row -->
                   
                  <!-- Accordian Row Start -->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="accordian-example">
                              <h3>accordian example</h3>
                              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                       <h4 class="panel-title">
                                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          Collapsible Group Item #1
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                       <div class="panel-body">
                                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim 
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Collapsible Group Item #2
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                       <div class="panel-body">
                                          reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim Anim pariatur cliche
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Collapsible Group Item #3
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                       <div class="panel-body">
                                          reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim Anim pariatur cliche
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="page-box">
                           <div class="accordian-example">
                              <h3>accordian List/Table Group</h3>
                              <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingOne">
                                       <h4 class="panel-title">
                                          <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseOne" aria-expanded="true" aria-controls="list_table_collapseOne">
                                          Collapsible List Item #1
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="list_table_headingOne">
                                       <div class="panel-body">
                                          <ul class="list-group">
                                             <li class="list-group-item">Bootply</li>
                                             <li class="list-group-item">One itmus ac facilin</li>
                                             <li class="list-group-item">Second eros</li>
                                          </ul>
                                          <div class="panel-footer">Footer</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingTwo">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseTwo" aria-expanded="false" aria-controls="list_table_collapseTwo">
                                          Collapsible Table Item #2
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="list_table_headingTwo">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered">
                                             <thead>
                                                <tr>
                                                   <th>#</th>
                                                   <th>First Name</th>
                                                   <th>Last Name</th>
                                                   <th>Username</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <th scope="row">1</th>
                                                   <td>Mark</td>
                                                   <td>Otto</td>
                                                   <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">2</th>
                                                   <td>Jacob</td>
                                                   <td>Thornton</td>
                                                   <td>@fat</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">3</th>
                                                   <td>Larry</td>
                                                   <td>the Bird</td>
                                                   <td>@twitter</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="list_table_headingThree">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#list_table_collapseThree" aria-expanded="false" aria-controls="list_table_collapseThree">
                                          Collapsible Table Item #3
                                          </a>
                                       </h4>
                                    </div>
                                    <div id="list_table_collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="list_table_headingThree">
                                       <div class="panel-body table-responsive">
                                          <table class="table table-bordered table-hover">
                                             <thead>
                                                <tr>
                                                   <th>#</th>
                                                   <th>First Name</th>
                                                   <th>Last Name</th>
                                                   <th>Username</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <th scope="row">1</th>
                                                   <td>Mark</td>
                                                   <td>Otto</td>
                                                   <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">2</th>
                                                   <td>Jacob</td>
                                                   <td>Thornton</td>
                                                   <td>@fat</td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">3</th>
                                                   <td>Larry</td>
                                                   <td>the Bird</td>
                                                   <td>@twitter</td>
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
                  </div>
                  <!-- End Accordian Row-->
                   
               </div>
            </div>
             
             @endsection

