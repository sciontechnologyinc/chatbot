<?php
session_start();
include'include/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include('partial/header.php') ?>

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

            <?php include('partial/sidebar.php') ?>

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
                <h3>Projects <small>Listing design</small></h3>
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
                    <h2>Doctor's Schedule</h2>
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

                    <p>Simple table with project listing with progress and editing options</p>
                    <!-- Start: Jetro -->
                    <div>
                        <div class="form-group">
                            <label for="pwd">Doctor:</label>
                            <select class="form-control" id="doctordropdown">
                                
                            </select>
                        </div>
                        <div class="weeklySchedule">
                        <div class="checkbox">
                                <label><input type="checkbox" value="Monday" id="mon">Monday</label><br>
                                <div style="display:inline-flex" id="Monday" >
                                <div>
                                        <label>Time-in:</label>
                                            <input class="input-12-hour Monday" id="monTimeIn" data-default="08:45" />
                                </div>
                                        <div>
                                        <label>Time-out:</label>
                                            <input class="input-12-hour Monday"  id="monTimeOut" data-default="09:45" />
                                        </div>
                                </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Tuesday"  id="tues">Tuesday</label><br>
                                <div style="display:inline-flex" id="Tuesday">
                                <div>
                                        <label>Time-in:</label>
                                            <input class="input-12-hour Tuesday" id="tuesTimeIn" data-default="08:45" />
                                </div>
                                        <div>
                                        <label>Time-out:</label>
                                            <input class="input-12-hour Tuesday" id="tuesTimeOut" data-default="09:45" />
                                        </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Wednesday" id="wed">Wednesday</label><br>
                                <div style="display:inline-flex" id="Wednesday">
                                <div>
                                        <label>Time-in:</label>
                                            <input class="input-12-hour Wednesday" id="wedTimeIn" data-default="08:45" />
                                </div>
                                        <div>
                                        <label>Time-out:</label>
                                            <input class="input-12-hour Wednesday" id="wedTimeOut" data-default="09:45" />
                                        </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Thursday" id="thurs">Thursday</label><br>
                                <div style="display:inline-flex" id="Thursday">
                                <div>
                                        <label>Time-in:</label>
                                            <input class="input-12-hour Thursday" id="thursTimeIn" data-default="08:45" />
                                </div>
                                        <div>
                                        <label>Time-out:</label>
                                            <input class="input-12-hour Thursday" id="thursTimeOut" data-default="09:45" />
                                        </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Friday" id="fri">Friday</label><br>
                                <div style="display:inline-flex" id="Friday">
                                <div>
                                        <label>Time-in:</label>
                                            <input class="input-12-hour Friday" id="friTimeIn" data-default="08:45" />
                                </div>
                                        <div>
                                        <label>Time-out:</label>
                                            <input class="input-12-hour Friday" id="friTimeOut" data-default="09:45" />
                                        </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Saturday" id="sat">Saturday</label><br>
                                <div style="display:inline-flex" id="Saturday">
                                <div>
                                        <label>Time-in:</label>
                                            <input class="input-12-hour Saturday" id="satTimeIn" data-default="08:45" />
                                </div>
                                        <div>
                                        <label>Time-out:</label>
                                            <input class="input-12-hour Saturday" id="satTimeOut" data-default="09:45" />
                                        </div>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Sunday" id="sun">Sunday</label><br>
                                <div style="display:inline-flex" id="Sunday">
                                <div>
                                        <label>Time-in:</label>
                                            <input class="input-12-hour Sunday" id="sunTimeIn" data-default="08:45" />
                                </div>
                                        <div>
                                        <label>Time-out:</label>
                                            <input class="input-12-hour Sunday" id="sunTimeOut" data-default="09:45" />
                                        </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" id="saveSchedule">Save</button>
                    </div>
                    <!-- End: Jetro -->
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

   <?php include('partial/footer.php') ?>
   <script src="js/clockpicker.js"></script>
   <script src="js/clockpicker12hour.js"></script>
    <script>
             
            var input = $('#input-a');
            input.clockpicker({
                autoclose: true
            });
            $('#mon_from').clockpicker({
            autoclose: true,
            twelvehour: false
            });
            // Manual operations
            $('#button-a').click(function(e){
                // Have to stop propagation here
                e.stopPropagation();
                input.clockpicker('show')
                        .clockpicker('toggleView', 'minutes');
            });
            $('#button-b').click(function(e){
                // Have to stop propagation here
                e.stopPropagation();
                input.clockpicker('show')
                        .clockpicker('toggleView', 'hours');
            });
            var input1 = $('.input-12-hour');
	input1.clockpicker({
	    twelvehour: true,
	    donetext: 'Done'
	});

    $(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if($(this).prop("checked") == true){
                console.log($(this).val())
                $('.'+$(this).val()).prop('disabled', false);
            }
            else if($(this).prop("checked") == false){
                console.log($(this).val())
                $('.'+$(this).val()).prop('disabled', true);
            }
        });

        $('#saveSchedule').click(function(){
            if(confirm("Are you sure you want to save this schedule?")){
                if($('#mon').prop('checked')){
                    $.ajax({
                        type: "POST",
                        url: "query/addDoctor.php?a=addSchedule",
                        data: {
                            iddoctor:$('#doctordropdown').val(),
                            day:$('#mon').val(),
                            timein:$('#monTimeIn').val(),
                            timeout:$('#monTimeOut').val(),
                            status:''
                            },
                            success:  function(data){
                        }
                    });
                }if($('#tues').prop('checked')){
                    $.ajax({
                        type: "POST",
                        url: "query/addDoctor.php?a=addSchedule",
                        data: {
                            iddoctor:$('#doctordropdown').val(),
                            day:$('#tues').val(),
                            timein:$('#tuesTimeIn').val(),
                            timeout:$('#tuesTimeOut').val(),
                            status:''
                            },
                            success:  function(data){
                        }
                    });
                }if($('#wed').prop('checked')){
                    $.ajax({
                        type: "POST",
                        url: "query/addDoctor.php?a=addSchedule",
                        data: {
                            iddoctor:$('#doctordropdown').val(),
                            day:$('#wed').val(),
                            timein:$('#wedTimeIn').val(),
                            timeout:$('#wedTimeOut').val(),
                            status:''
                            },
                            success:  function(data){
                        }
                    });
                }if($('#thurs').prop('checked')){
                    $.ajax({
                        type: "POST",
                        url: "query/addDoctor.php?a=addSchedule",
                        data: {
                            iddoctor:$('#doctordropdown').val(),
                            day:$('#thurs').val(),
                            timein:$('#thursTimeIn').val(),
                            timeout:$('#thursTimeOut').val(),
                            status:''
                            },
                            success:  function(data){
                        }
                    });
                }if($('#fri').prop('checked')){
                    $.ajax({
                        type: "POST",
                        url: "query/addDoctor.php?a=addSchedule",
                        data: {
                            iddoctor:$('#doctordropdown').val(),
                            day:$('#fri').val(),
                            timein:$('#friTimeIn').val(),
                            timeout:$('#friTimeOut').val(),
                            status:''
                            },
                            success:  function(data){
                        }
                    });
                }if($('#sat').prop('checked')){
                    $.ajax({
                        type: "POST",
                        url: "query/addDoctor.php?a=addSchedule",
                        data: {
                            iddoctor:$('#doctordropdown').val(),
                            day:$('#sat').val(),
                            timein:$('#satTimeIn').val(),
                            timeout:$('#satTimeOut').val(),
                            status:''
                            },
                            success:  function(data){
                        }
                    });
                }if($('#sun').prop('checked')){
                    $.ajax({
                        type: "POST",
                        url: "query/addDoctor.php?a=addSchedule",
                        data: {
                            iddoctor:$('#doctordropdown').val(),
                            day:$('#sun').val(),
                            timein:$('#sunTimeIn').val(),
                            timeout:$('#sunTimeOut').val(),
                            status:''
                            },
                            success:  function(data){
                        }
                    });
                }
            }else{
                return false;
            }
        })

        $.ajax({
                  type: "GET",
                  url: "query/addDoctor.php?a=select",
                  data: {},
                    success:  function(data){
                      console.log(data);
                      var contact = JSON.parse(data);
                      console.log(contact[0].d_fullname);
                      console.log(contact.length)
                      for(x=0; x<contact.length; x++){
                          $('#doctordropdown').append('<option value="'+contact[x].d_id+'">'+contact[x].d_fullname+'</option>')  
                      }
                  }
          });
    })
    </script>

  </body>
</html>