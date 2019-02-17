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
                      <li><li><a href="doctor2.php">Doctors</a></li>
                      <li><a href="contacts.php">Doctors Profile</a></li></ul>';
                            }
                                else if ($rs['role'] == 1 && $rs['status'] == 1){
                                  echo '
                                  <li><a><i class="fa fa-user-md"></i> Doctor Side <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                     <li><a href="doctor2.php">Doctors</a></li>
                     <li><a href="schedule.php">Schedule</a></li>
                      <li><a href="adminlist.php">List of admin</a></li>
                      <li><a href="contacts.php">Doctors Profile</a></li>
                         </ul>
                  </li>
                </ul>
                <ul class="nav side-menu">
                        <li><a><i class="fa fa-archive"></i> Archive <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"> 
                      <li><a href="adminarchive.php">Admin List</a></li>
                     <li><a href="doctorarchive.php">Doctor List</a></li>
                ';
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