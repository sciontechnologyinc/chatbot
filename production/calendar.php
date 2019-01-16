<?php
session_start();
include'include/db.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon2.png" type="image/ico" />

    <title>Fe Del Mundo Medical Center | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="../vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="../vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <?php
 
    $musern = $_SESSION['musern'];
     $sql = "SELECT * FROM users where user_name = '".$musern."'";
                        $result = mysqli_query($conn, $sql);
                        if( $result && mysqli_num_rows( $result ) > 0 ){
                        
                               while( $rs = mysqli_fetch_array( $result ) ){
                            if ($rs['status'] == 0) {
                              
                            }
                                else if ($rs['status'] == 1){
                                  echo '
                       <a href="index.php" class="site_title"><i class=" fa fa-heartbeat"></i> <span>Fe Del Mundo Medical Center</span></a>';
                                }
                                else {
          echo ' Wait until the higer admin accept your, request thankyou.';
                                }
        }
        mysqli_free_result( $result );

    } else {
        echo 'No post yet';
    }
    ?>
             
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.png" alt="..." class="img-circle profile_img">
              </div>


 
      <div class="profile_info">
         <?php
 
    $musern = $_SESSION['musern'];
     $sql = "SELECT * FROM users where user_name = '".$musern."'";
                        $result = mysqli_query($conn, $sql);
                        if( $result && mysqli_num_rows( $result ) > 0 ){
                        
                               while( $rs = mysqli_fetch_array( $result ) ){
                                echo "<h2> Welcome,</h2>";
            echo  '<h2>'. $rs['user_firstn'],' ', $rs['user_lastn'].'</h2>';
        }
        mysqli_free_result( $result );

    } else {
        echo 'No post yet';
    }

          
         ?>
             </div>
                    </div>
    
  
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
               <div class="menu_section">
                        <?php
 
    $musern = $_SESSION['musern'];
     $sql = "SELECT * FROM users where user_name = '".$musern."'";
                        $result = mysqli_query($conn, $sql);
                        if( $result && mysqli_num_rows( $result ) > 0 ){
                        
                               while( $rs = mysqli_fetch_array( $result ) ){
                            if ($rs['status'] == 0) {
                              echo '';
                            }
                                else if ($rs['status'] == 1){
                                  echo '
                        
                <h3>General</h3>
                <ul class="nav side-menu">
                   <li><a><i class="fa fa-desktop"></i> Inbox <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inbox.php">Inbox</a></li>
                      <li><a href="calendar.php">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Check-up Schedules <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables_dynamic.php">Table Dynamic</a></li>
                    </ul>';
                                }
                                else {
                                  echo 'there is an error in database';
                                }
        }
        mysqli_free_result( $result );

    } else {
        echo 'No post yet';
    }
    ?>
             
      <!--             </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li> -->
                
                </ul>
              </div>
              <div class="menu_section">
                <h3>More Info</h3>
                <ul class="nav side-menu">
                 
                        <?php
 
    $musern = $_SESSION['musern'];
     $sql = "SELECT * FROM users where user_name = '".$musern."'";
                        $result = mysqli_query($conn, $sql);
                        if( $result && mysqli_num_rows( $result ) > 0 ){
                        
                               while( $rs = mysqli_fetch_array( $result ) ){
                            if ($rs['role'] == 0 && $rs['status'] == 1) {
                              echo '<li><a><i class="fa fa-user-md"></i> DRs Side <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu"> 
                               <li><a href="contacts.php">Contacts</a></li>
                      <li><a href="profile.php">Profile</a></li></ul>';
                            }
                                else if ($rs['role'] == 1 && $rs['status'] == 1){
                                  echo '
                                   <li><a><i class="fa fa-user-md"></i> DR\'s Side <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                     <li><a href="form_validation.php">Add doctors</a></li>
                      <li><a href="projects.php">List of admin</a></li>
                      <li><a href="contacts.php">Dr\'s Profile</a></li>';
                                }
                                else {
                                  echo 'there is an error in database';
                                }
        }
        mysqli_free_result( $result );

    } else {
        echo 'No post yet';
    }

          
         ?>
           
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
          
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="include/logout.inc.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.png" alt=""> 
                    <?php
 
    $musern = $_SESSION['musern'];
     $sql = "SELECT * FROM users where user_name = '".$musern."'";
                        $result = mysqli_query($conn, $sql);
                        if( $result && mysqli_num_rows( $result ) > 0 ){
                        
                               while( $rs = mysqli_fetch_array( $result ) ){
            echo   $rs['user_firstn'],' ', $rs['user_lastn'];
        }
        mysqli_free_result( $result );

    } else {
        echo 'No post yet';
    }

          
         ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Calendar <small>Click to add/edit events</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Calendar Events <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id='calendar'></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- calendar modal -->
    <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
          </div>
          <div class="modal-body">
            <div id="testmodal" style="padding: 5px 20px;">
              <form id="antoform" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title" name="title">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
          </div>
          <div class="modal-body">

            <div id="testmodal2" style="padding: 5px 20px;">
              <form id="antoform2" class="form-horizontal calender" role="form">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Title</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="title2" name="title2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                  </div>
                </div>

              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
    <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
    <!-- /calendar modal -->
        
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- FullCalendar -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/fullcalendar/dist/fullcalendar.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>