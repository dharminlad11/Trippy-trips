<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<?php

require 'db.php';
    if(isset($_POST['cityadd']))
    {
        
        
        $state = $_POST['state'];
       $city = $_POST['city'];
        $date = date('m/d/Y h:i:s');
        $status=1;
       
        $q2 = "INSERT INTO t_city(t_s_id, t_c_name,t_c_status,t_c_cdate) values('$state', '$city',$status,'$date')";

          //  exit($q2);
        mysqli_query($con, $q2);


$query="SELECT * FROM t_city ";

            $rec = mysqli_query($con,$query);


                while ($data1 = mysqli_fetch_array($rec))
                 {
                    $id1 = $data1['t_c_id'];
                    $s = $data1['t_s_name'];
                    $_SESSION['t_c_id'] = $id1;
                    echo "<option value='" . $id1 . "'>" . $data1['t_s_name'] . "</option>";
                 }



       // echo "<script>Swal.fire('Done!','Your data inserted successfully!','success')</script>";

        header ("Location: admin_citystate.php");

    }

?>