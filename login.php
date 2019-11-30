<?php

    include("connect.php");
    include("functions.php");

    if(logged_in())
    {
        header("location:profile.php");
        exit();
    }

    $error = "";

    if(isset($_POST['submit']))
    {
        $emailID = $_POST['email'];
        $password = $_POST['password'];
        $checkBox = isset($_POST['keep']);

        if(email_exists($emailID,$con))
        {
            //$error = "Email exists";
            $result = mysqli_query($con,"SELECT password FROM users WHERE email='$emailID'");
            $retPassword = mysqli_fetch_assoc($result);

            if(md5($password) !== $retPassword['password'])
            {
                $error = "Password is incorrect";
            }
            else
            {
                $_SESSION['email'] = $emailID;

                if($checkBox == "on")
                {
                    setcookie("email",$emailID,time()+3600);
                }

                header("location: profile.php");
            }
        }
        else
        {
            $error = "Email doesnot exists";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
            <title>
                Log In Page
            </title>
            <!-- <link rel="stylesheet" href="css/styles.css"/> -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <!-- <link rel="stylesheet" href="styles.css"> -->
            <style media="screen">
            body{
              margin-top: 150px;
              margin-left: 600px;
              margin-right:100px;
              background-image: url("loginbg.jpeg");
              background-size: cover;
            }
            #input1{
                height:35px;
  	            width:200px;
                border-color: grey;
                border-radius: 10px;

              }
            h2{

                  text-align: center;
                  margin: auto;

                  color:lightblue;

              }

              #er{
                color:red;

              }

              .f1{
                    text-align: center;
                    border-style: groove;
                    border-color: darkblue;
                    border-radius: 10px;
                    padding: 50px;
                    background-color: white;
                    margin-left: 350px;

              }
            </style>
    </head>

    <body>
        
        <!-- <div class="container ">
            <div class="row justify-content-between">
                <div class="offset-lg-6 col-lg-5 align-self-center">
                <img src="fifaLogo.jpg" width="340px" alt="logo">
                </div>
            </div>
        </div> -->
        <div id="wrapper">



            <div id="form">
                <form class="f1" method="POST" action="login.php" enctype="multipart/form-data">
                    <h2>Log In</h2><br><br>
                    <!-- <label>Email Id:</label><br> -->
                    <input placeholder=" Email Id"id="input1" type="text" name="email"/><br><br>

                    <!-- <label>Password:</label><br> -->
                    <input placeholder=" Password "id="input1" type="password" name="password"/><br><br>

                    <input  type="checkbox" name="keep">
                    <label>Keep me logged in</label><br><br>

                    <input class="btn btn-success" type="submit" name="submit" value="login"/><br><br>
                    
                   <p>Not a member?<a href="index.php">Sign Up</a>.</p>
                </form>

            </div>

        </div>
        <br><br>
        <div id="error">
                <div class="row justify-content-end" style="text-align: center">
                    <div class="col-md-7">
            <?php
                echo "<h5 id='er'>$error</h5>";
            ?>
            </div>
            </div>
        </div>

        <br>
        <br>


    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>
