<?php

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
                    <li><a href="include/logout.inc.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                <h3></h3>
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
            

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Text in a modal</h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>

            <div class="clearfix"></div>

          
            <div class="d-flex flex-row justify-content-end ">
    <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#myModal">
     Add Doctor
    </button>
  </div>

  <div >
    <h2 style="color: #062f4f; font-family: 'Cormorant Unicase', serif;" class="font-weight-bold mb-4"> Doctor's Records </h2>
    <div id="records_content">  </div>
  </div>
  

</div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projects</h2>
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
                  <div id="datatable-responsive_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive"></label></div>
          
                  <table id="datatable-responsive table" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline collapsed" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
                     <tr role="row">
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Id</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">First Name</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Last Name</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Email</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Address</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Mobile Number</th> 
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Telephone</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">School Graduated</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Specialties</th>
              <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Action</th>
     
            </tr>

                    </table>
                             <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite"> </div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate"><ul class="pagination"><li class="paginate_button previous" id="datatable-responsive_previous"><a href="#" aria-controls="datatable-responsive" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable-responsive" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable-responsive_next"><a href="#" aria-controls="datatable-responsive" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div>

                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>


            <div class="clearfix"></div>


  

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Fe del Mundo</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
  //showdata
function showTable(){
  $.ajax({
    type: "POST",
    url:"include/doctorsinfo.php?a=showData1",
    data:{},
    success: function(data){
      var User = JSON.parse(data);
      console.log(User);
          $('.doc').empty();
      var num = 1;

      for(x=0; x<User.length; x++){
        $('.table').append('<tr class="doc">'+
          '<td>'+num+++'</td>'+ 
          '<td>'+User[x].firstname+'</td>'+ 
          '<td>'+User[x].lastname+'</td>'+ 
          '<td>'+User[x].email+'</td>'+ 
          '<td>'+User[x].address+'</td>'+ 
          '<td>'+User[x].mobile+'</td>'+ 
          '<td>'+User[x].telephone+'</td>'+ 
          '<td>'+User[x].school+'</td>'+ 
          '<td>'+User[x].specialties+'</td>'+ 
          '<td><button  class="btn btn-warning btn-xs archiveData" data-toggle="modal" data-target="#update_user_modal" id="'+User[x].id+'"><i class="fa fa-archive"></i>archive</button><button class="btn btn-danger btn-xs deleteUser1" id = "'+User[x].id+'"><i class="fa fa-trash-o"></i>Delete</button></td>'+
        '</tr>')
      }
    }
  });
}
$(document).ready(function(){
showTable();

//update table
$("body").delegate(".archiveData", "click", function(){
      if(confirm("Are you sure you want to restore this data?")){
  $.ajax({
    type:"POST",
    url:"include/doctorsinfo.php?a=archiveData",
    data:{
      id:this.id
       },
       success: function(data){
        location.reload();
       }
    });
}
  })

$("body").delegate(".deleteUser1", "click", function(){
    if(confirm("Are you sure you want to delete permanently this data?")){
  $.ajax({
    type:"POST",
    url:"include/doctorsinfo.php?a=deleteUser1",
    data:{
      id:this.id
    },
    success: function(data){
      showTable();

      }
   });
}
});
})

</script>    
  </body>
</html>