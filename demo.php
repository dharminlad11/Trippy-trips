<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Trippy Trips</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="./css/bootstrap.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

    * {
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        width: 100%;
        height: 100vh;
        background: url("back.jpg") no-repeat 50% 50%;
        background-position: center;
        background-size: cover;
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
        height: 50vh;
        width: 90%;
        position: absolute;
        top: 130%;
        left: 50%;
        transform: translate(-50%, 0%);
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 100px;
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
</style>

<body>
    <div id="grad1">
        <header>
            <div class="floatingDiv">

                <div class="logo"><img src="./traveling.png" alt="" srcset="" width="50 " height="50" /><b>Trippy Trips</div>
                <div class="navbar">
                    <ul class="navbarul">

                        </br></br></br></br></br>
                        <li><a href="login.php">Login </a></li>

                    </ul>


                </div>
            </div>
        </header>
        <div class="newCollection">
            <h1>Welcome to Trippy Trips !</h1>
            <p>Trippy Trips, India's leading online travel company, has a profound understanding of Indian consumers travel needs and preferences. It offers a wide range of holiday packages in India and across the world, catering to various segments of travellers. While the dynamic or customized tour and travel packages give consumers an option to create and design their own holiday, the fixed departure holiday packages have a pre-designed itinerary; thus ensuring there is something to meet the holiday needs of every kind of traveller.
            </p>
        </div>

        <div class="moreInfo">

            <div class="iconsDiv">
                <img src="./1.png" alt="" srcset="" width="50   " height="50" />
                <h3>Easy Tour Booking</h3>
            </div>
            <div class="iconsDiv">
                <img src="./2.png" alt="" srcset="" width="50" height="50" />
                <h3>24/7 Support</h3>
            </div>
            <div class="iconsDiv">
                <img src="./3.png" alt="" srcset="" width="50" height="50" />
                <h3>Secure Payment</h3>
            </div>
        </div>
        <div class="winterMain">
            <div class="winterHead">
                <h1><b>Tour Packages</b></h1>
            </div>
            <div class="winterSale">

                <div class="card m-3" style="width: 25rem;">
                    <img src="kutch.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kutch </h5>
                        <p class="card-text">Tour Price: ₹ 13000 per person</p>
                        <p class="card-text"> Duration: 3N/4D</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="card m-3" style="width: 25rem;">
                    <img src="manali.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manali </h5>
                        <p class="card-text">Tour Price: ₹ 17000 per person</p>
                        <p class="card-text"> Duration: 5N/6D</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 25rem;">
                    <img src="goa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Goa </h5>
                        <p class="card-text">Tour Price: ₹ 20000 per person</p>
                        <p class="card-text"> Duration: 4N/5D</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="card m-3" style="width: 25rem;">
                    <img src="sikkim.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sikkim </h5>
                        <p class="card-text">Tour Price: ₹ 10000 per person</p>
                        <p class="card-text"> Duration: 3N/4D</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="card m-3" style="width: 25rem;">
                    <img src="mumbai.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mumbai </h5>
                        <p class="card-text">Tour Price: ₹ 10000 per person</p>
                        <p class="card-text"> Duration: 2N/3D</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                <div class="card m-3" style="width: 25rem;">
                    <img src="gujarat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gujarat </h5>
                        <p class="card-text">Tour Price: ₹ 55000 per person</p>
                        <p class="card-text"> Duration: 5N/6D</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
               
            </div>
        </div>

        <footer>
            <div class="socialApp">
                <div class="links">
                    <img src="./instagram.png" height="60px" alt="" srcset="">
                </div>
                <div class="links">
                    <img src="./facebook.png" height="60px" alt="" srcset="">
                </div>
                <div class="links">
                    <img src="./twitter.png" height="60px" alt="" srcset="">
                </div>
                <div class="links">
                    <img src="./gmail.png" height="60px" alt="" srcset="">
                </div>
            </div>
            <div class="contactText">
                <h7>Copyrights by Trippy Trips</h7>

            </div>
        </footer>
        <script src="app.js"></script>
    </div>
</body>


</html>