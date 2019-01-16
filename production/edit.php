 <?php
session_start();
include'include/db.php';
if(isset($_POST['btn_submit'])){
  $sql = "UPDATE users set user_firstn ='".$_POST['txt_firstname']."', user_lastn = '".$_POST['txt_lastname']."', user_name = '".$_POST['txt_username']."', user_email = '".$_POST['txt_email']."', user_mobile = '".$_POST['txt_mobile']."', status = '".$_POST['txt_status']."' WHERE user_id = '".$_POST['txt_id']."' ";
  if (mysqli_query($conn, $sql)) {
    
    header('Location: projects.php');
  } else {
    echo "Error",mysqli_error($conn);
  } 
}
$id = '';
$firstname = '';
$lastname = '';
$username = '';
$email = '';
$mobile = '';
$status = '';
if(isset($_GET['id'])){
  $sql = "SELECT * FROM users WHERE user_id =".$_GET['id'];
  $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) 
{
  $row = mysqli_fetch_assoc($result);
  $id = $row['user_id']; 
  $firstname = $row['user_firstn'];
  $lastname = $row['user_lastn'];
  $username = $row['user_name'];
  $email = $row['user_email'];
  $mobile = $row['user_mobile'];
  $status = $row['status'];
}
}
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
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
              
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                  
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                 
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

 <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit data <small></small></h2>
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
                    <br />

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="firstname" required="required" class="form-control col-md-7 col-xs-12" value = "<?=$firstname?>" name="txt_firstname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required" >*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="lastname"  required="required" class="form-control col-md-7 col-xs-12" value = "<?=$lastname?>" name="txt_lastname">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">User name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="username" class="form-control col-md-7 col-xs-12" type="text"  value = "<?=$username?>" name="txt_username">
                        </div>
                      </div>
                       <div class="form-group">
                      <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email Address<span class="required" >*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="memail" class="form-control col-md-7 col-xs-12" type="text"  value = "<?=$email?>" name="txt_email">
                        </div>
                      </div>
                       <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Mobile number<span class="required" name="txt_mobile">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="mobile" class="form-control col-md-7 col-xs-12" type="text"  value = "<?=$mobile?>" name="txt_mobile">
                   </div>
            </div>

                       
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span class="required">*</span>
                        </label>
                       
                           <div class="col-md-6 col-sm-6 col-xs-12">
                          <input placeholder="0 or 1 only" id="mobile" class="form-control col-md-7 col-xs-12" type="number"  v value = "<?=$status?>" name="txt_status">
                   </div>

                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <table><tr><td><input type="hidden" name="txt_id" value="<?=$id?>"></td></tr></table>
                          <button name=btn_submit type="submit" class="btn btn-submit btn-success" id="btn_submit">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
<footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <?php include('partial/footer.php') ?>
  </body>
</html>