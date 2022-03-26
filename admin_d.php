<?php  
session_start();  
$con = mysqli_connect("localhost","root","","tour_travels") ;
if (!isset($_SESSION['aname'])) {
    header('Location:login.php');
}
else
{

//$con = mysqli_connect("localhost","root","","tour_travels") ;
// if(!isset($_SESSION["uname"]))
// {
//  header("location: index.php");
// }

    $s="SELECT count(*) as count FROM t_user_info WHERE t_u_status=1";
    $sr= mysqli_query($con,$s);
    $c=  mysqli_fetch_array($sr);
    $noCustomer= $c['count'];

    $s="SELECT count(*) as count FROM t_operator WHERE t_o_status=1";
    $sr= mysqli_query($con,$s);
    $c=  mysqli_fetch_array($sr);
    $noOperator= $c['count'];

    $s="SELECT count(*) as count FROM tour_admin WHERE t_a_status=1";
    $sr= mysqli_query($con,$s);
    $c=  mysqli_fetch_array($sr);
    $noManager= $c['count'];






?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
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
                       
                       
                        <li class="divider"></li>
                        <li><a href="includes/logout.inc.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                           DASHBOARD
                        </h1>
                         <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">

      <!-- Icon Cards-->
        
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
                <div class="fontsty">
                    <h4>Total Customer</h4>
                    <h2><?php echo $noCustomer ?></h2>
                    
                </div>
              </div>
            
        </div>


        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
                <div class="fontsty">
                    <h4>Total Tour Operator</h4>
                    <h2><?php echo $noOperator ?></h2>
                    
                    <h2></h2>
                </div>
              </div>
            
        </div>


      <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
                <div class="fontsty">
                    <h4>Total Manager</h4>
                    <h2><?php echo $noManager ?></h2>
                    <h2></h2>
                </div>
              </div>
            
        </div>

    </div>
  </div>
</div>

                    </div>

                </div> 
                 <!-- /. ROW  -->
     <br>
                 
           
               
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
    <style>

.inforide {
  box-shadow: 1px 2px 8px 0px #f1f1f1;
  background-color: white;
  border-radius: 8px;
  height: 125px;
}   

.fontsty h2{
  color: #6E6E6E;
  font-size: 35px;
  margin-top: 15px;
  text-align: center;
  margin-right: 30px;
}

.fontsty h4{
  color: #6E6E6E;
  font-size: 25px;
  margin-top: 20px;
  text-align: center;
  margin-right: 30px;
}
    </style>
    
   
</body>
</html>

<?php
}
?>