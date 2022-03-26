<?php
session_start();

$con = mysqli_connect("localhost","root","","tour_travels") ;
if (!isset($_SESSION['tname'])) {
    header('Location:login.php');
}

else if(isset($_POST['submit']))
 {    
    header('Location:includes/add_t_package_inc.php');
 }


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
                <a class="navbar-brand" href="home.php"> OPERATOR</a>
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
                            <a href="tourplaces.php"><i class="fa fa-plus-circle"></i> Tour Places</a>
                        </li>

                         <li>
                            <a href="add_hotel.php"><i class="fa fa-plus-circle"></i>Add Hotel</a>
                        </li>

                        <li>
                            <a href="add_t_package.php"><i class="fa fa-dashboard"></i> Add Tour Packages</a>
                        </li>

                        <li>
                            <a href="display_tour_package_top.php"><i class="fa fa-dashboard"></i> Update Tour Package </a>
                        </li>
                         <li>
                            <a href="display_tour_operator_proposal.php"><i class="fa fa-dashboard"></i> Tour Package Status</a>
                        </li>


                        

                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        
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
                         HOTELS
                        </h1>

                    </div>

                </div>
                 <!-- /. ROW  -->
    
                 
                <!-- /. ROW  -->



<div class="row col-12">
               
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        ADD HOTEL
                        </div>
                        <div class="row panel-body">
                            <form action="includes/add_hotel.inc.php" name="form" method="post" enctype="multipart/form-data">
                            <div class="col-md-6 form-group">
                                <label>Hotel Name</label><input class="form-control" type="text" name="hotelname" required>
                                    <br><label>Hotel description</label><textarea class="form-control" name="desc" row="4" required></textarea>
                                     <br><label>Hotel image</label><input type="file" class="form-control" name="image" accept="image/*"><br>
                                    
                                    
                                    
                              </div>
                             
                                
                              
                        </div>
                          <center><input type="submit" name="submit" value="Add Hotel" class="btn btn-primary ">
                                <input type="reset" class="btn btn-danger " value="Reset form"></center></br>
                                                                            </form>
                       
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