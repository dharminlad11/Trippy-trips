 <?php


session_start();

if (!isset($_SESSION['id']))
{
     header ('location:login.php');
         exit();
}

require 'db.php';

if (isset($_POST['book-submit']))
{
  

$uid = $_SESSION['id'];  
$packageid = $_POST['packageid'];
$noOfPerson = $_POST['person'];
$price = $_POST['price'];
$total = $price * $noOfPerson;
$status = 1;
$date = date("d-m-Y", strtotime("now"));
$q2 = "insert into t_p_book (t_u_id, t_pa_id, t_p_person, t_b_date, t_t_amount, t_p_b_status) values ($uid, $packageid, $noOfPerson, '$date', $total, $status)";
mysqli_query($con, $q2);

    header('Location: mybooking.php');

}




    $id = $_GET['packageid'];
$q1 = "select * from t_package where t_p_status = 1 and t_pa_id = $id";
$result = mysqli_query($con, $q1);

?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trippy Trips</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="./css/bootstrap.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>


    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

    * {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
    
      
    }

    .floatingDiv {
        width: 80%;
        height: 85px;
        background-color: #dfe6e9;
        border-radius: 10px;
        box-shadow: 10px 10px 5px grey;
        margin: auto;
        margin-top: 2px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }



    .logo {
        padding-left: 50px;
        font-size: 30px;
        color: #2d3436;
    }

    .navbar {
        width: 60%;
    }

    .navbarul {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        margin: 20px;
    }

    li {
        text-transform: uppercase;
        text-decoration: none;
        list-style: none;
    }

    li a {
        text-transform: uppercase;
        text-decoration: none;
        list-style: none;
        color: #2d3436;
        font-weight: bold;
    }

    #grad1 {
        height: 2700px;
        background-color: #cccccc;
        background-image: linear-gradient(gray, lightblue);
    }

    .active {
        color: #0984e3;
    }

    li a:hover {
        color: #fd79a8;
    }

    .newCollection {
        height: 40%;
        width: 30%;
        position: absolute;
        top: 50%;
        left: 2%;
        transform: translate(2%, -50%);
    }

    .newCollection h1 {
        font-size: 50px;
        padding-bottom: 50px;
    }

    .moreInfo {
        height: 20vh;
        width: 80%;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translate(-50%, 0%);
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        border: 1px solid #2d3436;
        border-radius: 20px;
        box-shadow: 10px 10px 5px gray;
        margin-bottom: 100px;
    }

    .moreInfo1 {
        height: 20vh;
        width: 80%;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translate(-50%, 0%);
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        border: 1px solid #2d3436;
        border-radius: 20px;
        box-shadow: 10px 10px 5px gray;
        margin-bottom: 100px;
    }

    .iconsDiv {
        text-align: center;
    }

    .winterMain {
        height: 20vh;
        width: 90%;
        position: absolute;
        top: 130%;
        left: 50%;
        transform: translate(-50%, 0%);
    }

    .winterHead {
        font-size: 30px;
        text-align: center;
    }

    .winterSale {
       
        position: relative;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 100px;
    }

    .winterSale img{
            max-height: 50vh;
    width: auto;
    }

    .winterProduct {
        margin-bottom: 50px;
    }

    .winterProduct button {
        background: none;
        background: #0984e3;
        font-size: 20px;
        border: 1px solid black;
        padding: 10px;
        color: white;
        border-radius: 10px;
        margin: 10px;
    }

    .winterProduct button:hover {
        background: #74b9ff;
    }

    .winterProduct h2 {
        font-size: 30px;
        margin: 10px;
    }

    .winterProduct h3 {
        font-size: 20px;
        margin: 10px;
    }

    .winterProduct h5 {
        font-size: 15px;
        margin: 10px;
    }

    a {
        color: White;
        text-decoration: none;
    }

    footer {
        height: 32vh;
        width: 100%;
        position: absolute;
        top: 400%;
        left: 50%;
        transform: translate(-50%, 0%);
        background-color: #2d3436;
    }

    .contactText {
        color: rgb(225, 225, 225);
        text-align: center;
        margin-top: 70px;
    }

    .socialApp {
        width: 50%;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .contactText span {
        font-size: 10px;
        color: white;
    }

    img {
        border-radius: 8px;
    }
    .card-title
    {

    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
    transition: 0.3s;
    padding: 10px;
    color: grey;

    }

    .card-head
    {

background-color: slateblue;
    color: white;

    }

    .card-price
    {

background-color: green;
    color: white;

    }

    .font-bold
    {
        font-weight: bold;
    }
</style>

        <div >
         <header>
            <div class="floatingDiv">

                <div class="logo"><img src="./traveling.png" alt="" srcset="" width="50 " height="50" /><b>Trippy Trips</div>
                <div class="navbar">
                    <ul class="navbarul">

                        </br></br></br></br></br>
                        <?php

                        if (isset($_SESSION['uname']))
                        { ?>
<li style="margin-left: 20px;"><a href="customer_reset_password.php">Reset Password</a></li>
                        <li style="margin-left: 20px;"><a href="profile_update.php"> <?php echo $_SESSION['uname']; ?></a></li>
                        <li style="margin-left: 20px;"><a href="mybooking.php">Bookings</a></li>
                        <li style="margin-left: 20px;"><a href="includes/logout.inc.php">Logout </a></li>
                      <?php  }
                        else
                        {
                            ?>
                             <li><a href="login.php">Login </a></li>
                       <?php
                        }
                        ?>
                       
     
                    
                    </ul>
                    </ul>


                </div>
            </div>
        </header>
            <div class="winterSale">


                <?php

                    while ($data = mysqli_fetch_assoc($result))
                    {


                ?>

                <form action = "#" method = "post">
                <div class="card m-3">
                   <img src="<?php echo $projectpath.$data['t_p_pic']; ?>" class="card-img-top mx-auto" alt="..." style="max-width: 50%;">
                    <div class="card-body">
                              <input type="hidden" name="price" id="price" value=<?php echo $data['t_p_price']?>>
                         <input type="hidden" name="packageid" id="packageid" value=<?php echo $data['t_pa_id']?>>
                        <h5 class="card-title card-head" ><?php echo $data['t_p_name']; ?></h5>
                        <div class = "card-title">
                        <div class="row">
                            <div class="col-md-6">
                                 <p class="card-text"><?php echo "<b>Price: Rs. </b>".$data['t_p_price']; ?></p>
                        <p class="card-text"><?php echo "<b>Description: </b>".$data['t_p_desc']; ?></p>
                        <p class="card-text"><?php echo "<b>Start Date: </b>".$data['t_p_sdate']; ?></p>
                        <p class="card-text"><?php echo "<b>End Date: </b>".$data['t_p_edate']; ?></p>
                      

   <label for="person">Person</label>
                        <select name="person" id="person" onchange="getTotal(event)">
                            <option class="form-control" selected value="1">1</option>
                            <option class="form-control"  value="2">2</option>
                            <option class="form-control"  value="3">3</option>
                            <option class="form-control"  value="4">4</option>
                            <option class="form-control"  value="5">5</option>
                            <option class="form-control"  value="6">6</option>
                            <option class="form-control"  value="7">7</option>
                            <option class="form-control"  value="8">8</option>
                            <option class="form-control"  value="9">9</option>
                            <option class="form-control"  value="10">10</option>
                
                        </select>   

                            </div>
                              <div class="col-md-6">
                                  <p class="card-text"><?php echo "<b>Travelling Mode: </b>".$data['t_p_traveling_mode']; ?></p>
                                   <p class="card-text"><?php echo "<b>Theme: </b>".$data['t_p_theme']; ?></p>
                        <p class="card-text"><?php echo "<b>Duration: </b>".$data['t_p_duration']; ?></p>
                        <?php 
                                                     $place = $data['t_places'];

                                                     if ($place)
                                                     {

                                                             $tsql1 = "select * from t_place where t_p_id in ($place)";
                                                            
                                                    echo '<p class="card-text"><b>Location: </b>';       
                                                $tre1 = mysqli_query($con, $tsql1);
                                                while ($trow1 = mysqli_fetch_array($tre1)) {
                                                    echo $trow1['t_p_name'] .' ';
                                                }

                                                    }
                                                    echo '</p>';
                                                         ?>

   <?php 
                                                     $hotel = $data['hotel'];

                                                     if ($hotel)
                                                     {

                                                             $tsql1 = "select * from t_hotel where t_h_id = $hotel";
                                                            
                                                    echo '<p class="card-text"><b>Hotel: </b>';       
                                                $tre1 = mysqli_query($con, $tsql1);
                                                while ($trow1 = mysqli_fetch_array($tre1)) {
                                                    echo $trow1['t_h_name'] .' ';
                                                }

                                                    }
                                                    echo '</p>';
                                                         ?>

                                                         <p>
                              </div>
                        </div>

                  
                       
                       
                                                  
                        </p>  
                        <div class="row">
                            <div class="col-md-12">
  <p  class="card-title card-price mx-auto" >
                            Total = <span id="total"><?php $data['t_p_price']?></span>
                        </p>  
                        </div>
                         <input type="submit" name= "book-submit" value="Book" class="btn btn-primary mx-auto">
                        
</div>
                                                             
                    
                        </div>

                        <!-- <a href='book.php?packageid=<?php echo $data["t_pa_id"] ?>' class="btn btn-primary">Book Now</a> -->
                       
                    </div>
                </div>
                </form>

                <?php

            }

            ?>
                
               
            </div>
        </div>

        <script type="text/javascript">
             function getTotal(event){
                    var person = document.getElementById('person').value;
                    var price = document.getElementById('price').value;
                    var total = parseInt(person, 10) * parseInt(price, 10);
                    document.getElementById('total').textContent = total;
               }
    

getTotal();
        </script>
            </body>