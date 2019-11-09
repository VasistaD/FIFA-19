<?php

    include("connect.php");
    include("functions.php");

    $error = "";

    if(logged_in())
    {
        header("location:profile.php");
        exit();
    }

    if(isset($_POST['submit']))
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $emailID = $_POST['email'];
        $password = $_POST['password'];
        $confPassword = $_POST['confPassword'];
        $conditions = isset($_POST['conditions']);

        //echo $firstname."<br>".$lastname."<br>".$emailID."<br >".$password."<br>".$confPassword."<br>".$image."<br>".$imageSize;

        if(strlen($firstname) < 3)
        {
            $error = "First name is too short";
        }
        else if(strlen($lastname) < 1)
        {
            $error = "Last name is too short";
        }
        else if(!filter_var($emailID,FILTER_SANITIZE_EMAIL))
        {
            $error = "Please enter valid email address";
        }
        else if(email_exists($emailID,$con))
        {
            $error = "Email already exists";
        }
        else if(strlen($password) < 8)
        {
            $error = "Password is too short and should be greater than 8 characters";
        }
        else if($password !== $confPassword)
        {
            $error = "Password not matching";
        }
        else if(!$conditions)
        {
            $error = "You must agree with terms and condtions";
        }
        else
        {
            $password = md5($password);

            $insert_query="INSERT INTO users(firstName,lastName,email,password) VALUES('$firstname','$lastname','$emailID','$password')";

            if(mysqli_query($con,$insert_query))
            {
                $error =  "You are successfully registered";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
            <title>
                Registration Page
            </title>
            <!-- <link rel="stylesheet" href="css/styles.css"/> -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
            <style media="screen">
            body{
              margin-top: 35px;
              margin-left: 95px;
              margin-right:800px;
              background-image: url("signupbg.jpeg");
              background-size: cover;
            }
            #input1{
              height:35px;
	            width:200px;
              border-color: grey;
              border-radius: 10px;
            }
            #er{
                color:red;
                text-align: center;
            }
            form{
              text-align: center;
              border-style: groove;
              border-color: darkblue;
              border-radius: 10px;
              padding:15px;
              background-color: white;
            }
            h2{
              color: lightblue;

            }
            #menu{
              text-align:center;

            }

            </style>

    </head>

    <body>

        <br><br>
        <div class="container ">
            <div class="row justify-content-between">
                <div class="offset-lg-4 col-lg-4 align-self-center">
                <!-- <img src="fifaLogo.jpg" width="340px" alt="logo"> -->
                </div>
            </div>
        </div>
        <div id="wrapper">



            <div id="form">
                <form method="POST" action="index.php" enctype="multipart/form-data">
                  <h2>Sign Me Up</h2><br><br>
                    <!-- <label>First Name:</label><br> -->
                    <input id="input1" placeholder=" First Name "type="text" name="fname"/><br><br>

                    <!-- <label>Last Name:</label><br> -->
                    <input id="input1" placeholder=" Last Name "type="text" name="lname"/><br><br>

                    <!-- <label>Email Id:</label><br> -->
                    <input id="input1" placeholder=" Email " type="text" name="email"/><br><br>

                    <!-- <label>Password:</label><br> -->
                    <input id="input1" placeholder=" Password "type="password" name="password"/><br><br>

                    <!-- <label>Confirm Password:</label><br> -->
                    <input id="input1" placeholder=" Confirm Password "type="password" name="confPassword"/><br><br>
                    <input  style="width:12px;height:12px;" type="checkbox" name="conditions"/>
                    <label >I agree for all terms and conditions</label><br><br>

                    <input class="btn btn-success" type="submit" name="submit" value="SignUp"/><br><br>

                    <p>Already a member?.<a href="login.php">Log In</a>.</p>

                  </form>
                  <br>

            </div>
            
            <div id="error">
                <div class="row justify-content-center">
                    <div class="col-md-6">
            <?php
                echo "<h5 id='er'>$error</h5>";
            ?>
            </div>
            </div>
        </div>

        </div>
        <br><br>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
