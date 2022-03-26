<?php
session_start();
require 'db.php';

if (isset($_POST['reset-request-submit'])) 
{
    $mail = $_POST['email'];
    $newpwd = $_POST['newpwd'];
    $conpwd = $_POST['conpwd'];

    $s = "select * from t_user_info where t_u_email='$mail'";
    $result =  mysqli_query($con, $s);

    $num = mysqli_fetch_array($result);
    

if ($num > 0)
{
    $u = "update t_user_info set t_u_pwd = '$newpwd' where t_u_email = '$mail'";
    $result1 =  mysqli_query($con, $u);
    header ('location:login.php');
}
else
{
    echo "Password not changed";
  
}
}


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>Reset Password</title>
        <style>
            body {
                padding: 0px;
                margin: 0px;
                background: url("./images/loginbg.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .logo {
                padding-top: 25px;
                padding-bottom: 25px;
                color: white;
                text-align: center;
            }

            form {
                background: #fff;
            }

            .form-container {
                border-radius: 20px;
                padding: 30px;
                box-shadow: 0px 0px 10px 0px;
            }

            .error {
                font-size: 15px;
                color: red;
            }

            .success {
                font-size: 15px;
                color: green;
            }
        </style>
    </head>

    <body>
        <div class="logo">
            <h1>Trippy trips</h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <form class="form-container" action="" method="POST" name="customer_reset_pwd" onsubmit=" return validafor()">
                        <h3 class="text-center font-weight-bold">Reset Password</h3>
                        
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Email Id</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter registered email " name="email">
                            <span class="error" id="emailerror"></span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter new password" name="newpwd">
                            <span class="error" id="passworderror"></span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="exampleInputEmail1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm password" name="conpwd">
                            <span class="error" id="repeatpasserror"></span>
                       
                        </div>
                        <!-- <button type="submit" class="btn btn-primary btn-block" name="reset-request-submit">Submit -->
                        <input type="submit" name="reset-request-submit" class="btn btn-primary btn-block" value="Submit" >
                        <br />

                        </button>
                        <a href="index.php" class="btn btn-danger btn-block">Back</a>
                    </form>
                    
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <script>
        
        function validafor()
        {
  
var email=document.customer_reset_pwd.email.value;  
var password = document.customer_reset_pwd.newpwd.value;
var repeatpass = document.customer_reset_pwd.conpwd.value;

var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;




if (email==null || email==""){  
          document.getElementById('emailerror').innerHTML = " Please Enter Email *";

}

if(!email.match(mailformat) && email.length > 0)
{

    document.getElementById('emailerror').innerHTML = " Please Enter Valid Email *";

}

if (password==null || password==""){  
          document.getElementById('passworderror').innerHTML = " Please Enter new Password *";

}
if (repeatpass==null || repeatpass==""){  
          document.getElementById('repeatpasserror').innerHTML = " Please Re-enter new Password *";

}

 if (password!= repeatpass && password.length > 0 && repeatpass.length > 0) {
    document.getElementById('repeatpasserror').innerHTML = " Password and Retype password didn't match *";

    }


if (email==null || email=="" || !email.match(mailformat) || password==null || password=="" || repeatpass==null || repeatpass=="" || password!= repeatpass )
{
    alert ("Please fill up all details properly.");
        return false;
}
// return true;




        }
    </script>

    </body>

    </html>
<?php

?>