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
                  <table class="table table-bordered table-striped" id="table">
            <tr class="bg-dark text-white">
              <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Mobile Number</th> 
              <th>Telephone</th>
              <th>School Graduated</th>
              <th>Specialties</th>
              <th>Edit Action</th>
              <th>Delete Action</th>
            </tr>

                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
     
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       
        <div class="form-group">
          <label> Firstname:</label>
          <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
        </div>
        <div class="form-group">
          <label> Lastname:</label>
          <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
        </div>

        <div class="form-group">
          <label> Email:</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>
           <div class="form-group">
          <label> Address:</label>
          <input type="text" name="address" id="address" class="form-control" placeholder="Address">
        </div>

        <div class="form-group">
          <label> Mobile:</label>
          <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number">
        </div>
           <div class="form-group">
          <label> Telephone:</label>
          <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Telephone Number">
        </div>
           <div class="form-group">
          <label> School Graduated:</label>
          <input type="text" name="school" id="school" class="form-control" placeholder="School">
        </div>
           <div class="form-group">
          <label> Specialties:</label>
             <select required="required" name="specialties" id="specialties" class="form-control col-md-7 col-xs-12">
      <option></option>
      <option>ALLERGY & IMMUNOLOGY</option>
      <option>ANESTHESIOLOGY</option>
      <option> DERMATOLOGY</option>
      <option>DIAGNOSTIC RADIOLOGY</option>
      <option>EMERGENCY MEDICINE</option>
      <option> FAMILY MEDICINE</option>
      <option> INTERNAL MEDICINE</option>
      <option>OPHTHALMOLOGY</option>
      <option>PATHOLOGY</option>
      <option>PEDIATRICS</option>
      <option>PHYSICAL MEDICINE & REHABILITATION</option>
      <option>PSYCHIATRY</option>
      <option>SURGERY</option>
      <option>UROLOGY</option>
    </select>

</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"  id="addUser">Save</button>

         <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>



    </div>
  </div>
</div>
</div>


<!-- //////////////// after update ////////////////// -->
<div class="modal fade" id="update_user_modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Doctors Information</h4>
      
      </div>

      <!-- Modal body -->
<div class="modal-body">
       
        <div class="form-group">
          <label for="update_firstname"> Update Firstname:</label>
          <input type="text" name="" id="update_firstname" class="form-control"  placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="update_lastname">Update Lastname:</label>
          <input type="text" name="" id="update_lastname" class="form-control" placeholder="Last Name" >
        </div>

        <div class="form-group">
          <label for="update_email" >Update Email:</label>
          <input type="email" name="" id="update_email" class="form-control" placeholder="Email">
        </div>
           <div class="form-group">
          <label for="update_address">Update Address:</label>
          <input type="text" name="" id="update_address" class="form-control" placeholder="Address">
        </div>

        <div class="form-group">
          <label for="update_mobile">Update Mobile:</label>
          <input type="text" name="" id="update_mobile" class="form-control" placeholder="Mobile Number">
        </div>
           <div class="form-group">
          <label for="update_telephone">Update Telephone:</label>
          <input type="text" name="" id="update_telephone" class="form-control" placeholder="Telephone Number">
        </div>
           <div class="form-group">
          <label for="update_school">Update School Graduated:</label>
          <input type="text" name="school" id="update_school" class="form-control" placeholder="School">
        </div>
           <div class="form-group">
          <label for="update_specialties">Update Specialties:</label>
             <select required="required" name="specialties" id="update_specialties" class="form-control col-md-7 col-xs-12">
      <option></option>
      <option>ALLERGY & IMMUNOLOGY</option>
      <option>ANESTHESIOLOGY</option>
      <option> DERMATOLOGY</option>
      <option>DIAGNOSTIC RADIOLOGY</option>
      <option>EMERGENCY MEDICINE</option>
      <option> FAMILY MEDICINE</option>
      <option> INTERNAL MEDICINE</option>
      <option>OPHTHALMOLOGY</option>
      <option>PATHOLOGY</option>
      <option>PEDIATRICS</option>
      <option>PHYSICAL MEDICINE & REHABILITATION</option>
      <option>PSYCHIATRY</option>
      <option>SURGERY</option>
      <option>UROLOGY</option>
    </select>

</div>
      </div>

      <!-- Modal footer -->
     <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-success" id="updateUser">Update</button>
              <input type="text" id="userId" hidden>
   

      </div>
    </div>
  </div>
</div>

            <div class="clearfix"></div>


            <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

        <!-- /page content -->

        <!-- footer content -->
        <?php include('partial/footer.php') ?>
    <script>
  //showdata
function showTable(){
  $.ajax({
    type: "POST",
    url:"include/doctorsinfo.php?a=showData",
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
          '<td><button  class="btn btn-info btn-xs editUser" data-toggle="modal" data-target="#update_user_modal" id="'+User[x].id+'"><i class="fa fa-pencil"></i>Edit</button></td>'+
        '<td> <button class="btn btn-danger btn-xs deleteUser" id = "'+User[x].id+'"><i class="fa fa-trash-o"></i>Delete</button></td>'+
        '</tr>')
      }
    }
  });
}
$(document).ready(function(){
showTable();
$("body").delegate(".editUser", "click", function(){
  $.ajax({
    type:"POST",
    url:"include/doctorsinfo.php?a=editData",
    data:{
      id:this.id
    },
    success: function(data){
      var editUser = JSON.parse(data);
      var x = editUser[0];
      $('#userId').val(x.id);
      $('#update_firstname').val(x.firstname);
      $('#update_lastname').val(x.lastname);
      $('#update_email').val(x.email);
      $('#update_address').val(x.address);
      $('#update_mobile').val(x.mobile);
      $('#update_telephone').val(x.telephone);
      $('#update_school').val(x.school);
      $('#update_specialties').val(x.specialties);

      }
   });
});
//add doctor
$('#addUser').click(function(){
  $.ajax({
    type:"POST",
    url:"include/doctorsinfo.php?a=add",
    data: {
      firstname:$('#firstname').val(),
      lastname:$('#lastname').val(),
      email:$('#email').val(),
      address:$('#address').val(),
      mobile:$('#mobile').val(),
      telephone:$('#telephone').val(),
      school:$('#school').val(),
      specialties:$('#specialties').val(),
       },
       success: function(data){
    
        showTable();
       }
  });
})
//update table
$('#updateUser').click(function(){
  $.ajax({
    type:"POST",
    url:"include/doctorsinfo.php?a=updateUser",
    data:{
      id:$('#userId').val(),
        firstname:$('#update_firstname').val(),
      lastname:$('#update_lastname').val(),
      email:$('#update_email').val(),
      address:$('#update_address').val(),
      mobile:$('#update_mobile').val(),
      telephone:$('#update_telephone').val(),
      school:$('#update_school').val(),
      specialties:$('#update_specialties').val(),
       },
       success: function(data){
        location.reload();
       }
    });
  })

$("body").delegate(".deleteUser", "click", function(){
  $.ajax({
    type:"POST",
    url:"include/doctorsinfo.php?a=deleteUser",
    data:{
      id:this.id
    },
    success: function(data){
      showTable();

      }
   });
});
})

</script>
    
  </body>
</html>