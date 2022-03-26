<?php
session_start();
require 'db.php';
$con = mysqli_connect("localhost", "root", "", "tour_travels");


if(isset($_POST['approve']) && !empty($_POST['packid']))
{
    $packid = $_POST['packid'];

    $q1 = "update t_package set t_p_status = 1 where t_pa_id = $packid";
    mysqli_query($con, $q1);
}

if(isset($_POST['reject']) && !empty($_POST['packid']))
{
    $packid = $_POST['packid'];

    $q1 = "update t_package set t_p_status = 0 where t_pa_id = $packid";
    mysqli_query($con, $q1);
}
if (!isset($_SESSION['aname'])) {
    header("Location:./login.php");
} else {

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
                    <a class="navbar-brand" href="home.php"> ADMIN </a>
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
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Tour<small> Package</small>
                            </h1>

                        </div>

                    </div>
                    <!-- /. ROW  -->


                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>TOUR PACKAGE NAME</th>
                                                    <th>IMAGE</th>
                                                    <th>DESCRIPTION</th>
                                                    <th>START DATE</th>
                                                    <th>END DATE</th>
                                                    <th>PRICE</th> 
                                                    <th>DURATION</th>
                                                    <th>TRAVELLING MODE</th>
                                                    <th>THEME</th>
                                                    <th>PLACES</th>
                                                     <th>ACTION</th>

                                                    
                                                  

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $tsql = "select * from t_package";
                                                $tre = mysqli_query($con, $tsql);
                                                while ($trow = mysqli_fetch_assoc($tre)) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $trow['t_p_name']; ?></td>
                                                        <td><img src="<?php echo $projectpath.$trow['t_p_pic']; ?>" height= "50px" ></td>
                                                        <td><?php echo $trow['t_p_desc']; ?></td>
                                                        <td><?php echo $trow['t_p_sdate']; ?></td>
                                                        <td><?php echo $trow['t_p_edate']; ?></td>
                                                        <td><?php echo $trow['t_p_price']; ?></td>
                                                        <td><?php echo $trow['t_p_duration']; ?></td>
                                                        <td><?php echo $trow['t_p_traveling_mode']; ?></td>
                                                        <td><?php echo $trow['t_p_theme']; ?></td>

                                                        <td><?php 
                                                     $place = $trow['t_places'];

                                                     if ($place)
                                                     {

                                                             $tsql1 = "select * from t_place where t_p_id in ($place)";
                                                            
                                                            
                                                $tre1 = mysqli_query($con, $tsql1);
                                                while ($trow1 = mysqli_fetch_array($tre1)) {
                                                    echo $trow1['t_p_name'] .' ';
                                                }

                                                    }
                                                         ?></td>

                                                          <td><?php

                                                            if($trow['t_p_status'] == 0){

                                                                ?>


                                                               <form name = "approve_t" action = "#" method="post">
                                                                <input type ="hidden" value = <?php echo $trow['t_pa_id']; ?> name ="packid">
                                                                <input type="submit" name= "approve" value="Approve" class="btn btn-success mx-auto">  
                                                                </form>
                                                                <?php  
                                                            }
                                                            else
                                                            {
                                                                ?>


                                                               <form name = "approve_t" action = "#" method="post">
                                                                <input type ="hidden" value = <?php echo $trow['t_pa_id']; ?> name ="packid">
                                                                <input type="submit" name= "reject" value="Reject" class="btn btn-primary mx-auto">  
                                                                </form>
                                                                <?php  

                                                            }

                                                           ?></td>

                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                    <!-- /. ROW  -->

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
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>


    </body>

    </html>

<?php
}
?>