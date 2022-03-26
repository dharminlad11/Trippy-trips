
<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> ADMIN</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                       
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   <li>
                            <a class="active-menu" href="admin_d.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="customer_details_display.php"><i class="fa fa-dashboard"></i> Customer Details</a>
                        </li>

                         <li>
                            <a href="touroperator_details_display.php"><i class="fa fa-dashboard"></i> Tour Operator Details</a>
                        </li>

                        <li>
                            <a href="tour_manager_add.php"><i class="fa fa-dashboard"></i> Tour Manager</a>
                        </li>

                        <li>
                            <a href="tour_operator_signup.php"><i class="fa fa-plus-circle"></i>Tour Operator</a>
                        </li>

                        <li>
                            <a href="admin_citystate.php"><i class="fa fa-plus-circle"></i>State & City</a>
                        </li>

                         <li>
                            <a href="display_tour_package.php"><i class="fa fa-plus-circle"></i>Approve / Reject Tour Packages</a>
                        </li>

                       

                        <li>
                            <a href="includes/logout.inc.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>



                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
         <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            STATE AND CITY
                        </h1>

                    </div>

                </div>
                 <!-- /. ROW  -->

                 
                <!-- /. ROW  -->

            <div class="row">
               
               <div class="col-md-6 col-sm-6">
                   <div class="panel panel-primary">

                       <div class="panel-heading">
                           ADD STATE 
                       </div>

                       <div class="row panel-body">
                           <form action="#" name="form" method="post">
                                <div class="col-md-6 form-group">
                                    <label>State</label>
                                    <input class="form-control" type="text" name="state" required>
                                        
                                </div>

                                    <center><input type="submit" name="submit" value="Add" class="btn btn-primary"></center><br>
                                    <center><input type="reset" class="btn btn-danger"></center>
                            </form>
                    
                        </div>
                    
                    </div>
                </div>
            </div>

            <div class="column">
               
               <div class="col-md-6 col-sm-6">
                   <div class="panel panel-primary">
                        <div class="panel-heading">
                           ADD CITY 
                        </div>

                       <div class="row panel-body">
                           <form action="addcity.php" name="form" method="post">
                                <div class="col-md-6 form-group">
                                    <div class="form-group" class="form-control">
                                        </br>
                                        <label>State</label><br>
                                        <select name="state" id="stateName">
                                            <option class="form-control" selected>-- Select State --</option>
                                                <?php
                                                    require "db.php";
                                                    $records = mysqli_query($con, "SELECT * From t_state");

                                                    while ($data = mysqli_fetch_array($records)) {
                                                        $id = $data['t_s_id'];
                                                       echo "<option value='" . $id . "'>" . $data['t_s_name'] . "</option>";
                                                     
                                                      
                                                    }

                                                ?>
                                        </select>
                                    </div>

                                            <label>City</label>
                                            <input class="form-control" type="text" name="city" required>  
                             </div>

                               <center><input type="submit" name="cityadd" value="Add" class="btn btn-primary"></center><br>
                               <center><input type="reset" class="btn btn-danger"></center>
                    </form>
                       



                      
                   </div>
               </div>
               
           </div>




                             
                              
                               
                                
        </form>
                        </div>
                       
                    </div>
                </div>
            </div>







           
                </div>
               
            </div>
       
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
   
   
</body>
</html>

<?php

require "db.php";

if(isset($_POST['submit']))
{
   

    $date = date('m/d/Y h:i:s');
    $state = $_POST['state'];
    $status=1;
    $q = "INSERT INTO t_state(t_s_name,t_s_status,t_s_cdate) values('$state','$status','$date')";

        if (mysqli_query($con, $q))
         {
            echo "<script>Swal.fire('Done!','States inserted successfully!','success')</script>";

            $query="SELECT * FROM t_state ";

            $rec = mysqli_query($con,$query);


                while ($data1 = mysqli_fetch_array($rec))
                 {
                    $id1 = $data1['t_s_id'];
                    $s = $data1['t_s_name'];
                    $_SESSION['t_s_id'] = $id1;
                    echo "<option value='" . $id1 . "'>" . $data1['t_s_name'] . "</option>";
                 }
        } 
        else
        {
            echo "<script>Swal.fire('Oops! Something Went Wrong','Please Try Aagin Later!','error')</script>";

            echo "Err/or: <br>" . mysqli_error($con);
        }

}

?>

