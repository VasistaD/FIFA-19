<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial=scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css">
    <style>
        body{
          color:white;
        }
       
        #qtable, td, th {  
          border: 1px solid white;
          text-align: center;
          color:white;
        }

        #qtable {
          border-collapse: collapse;
          width: 100%;
        }

        th, td {
          padding: 15px;
        }

        #insForm{
          padding:20px;
        }
    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="fifaLogo.jpg" width="150" height="40" class="d-inline-block align-top" alt="FIFA 19">
        </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="queries.php">Queries <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Insert
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="crud.php">Player</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="crudMan.php">Manager</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="crudSkill.php">Skills</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About Us<span class="sr-only">(current)</span></a>
      </li>
      
          
    </ul>
    <a href="logout.php" class="btn btn-success active" style="margin-right:10px" role="button" aria-pressed="true">log Out</a>
  </div>
</nav>
<br>
<br>
<h1 class="text-center">Insert Player</h1>
<br>
<br>
<!--
<div class="container">
    <div class="row justify-content-center" style="border:1px solid white; padding:10px">
        <div class="col-sm-9 align-self-center">
            <label style="color:white">
                Display Player Names
            </label>
        </div>
        <div class="col-sm-3 align-self-center">
            <button class="btn btn-primary btn-lg" name="q1">Display</button>
        </div>
    </div>
</div>
-->
<!--Form-->
<div id="insForm" class="container border border-light">
<form method="GET" action="crud.php">
                    <div class="container">

                    <div class="row">
                    <div class="col-md-9">
                    <label>Player Name:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="player_name"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Club:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="club"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Age:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="age"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Overall Rating:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="rating"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Nationality:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="nationality"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Position:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="position"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Wage:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="wage"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Transfer Value:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="trans_val"/><br>
                    </div>
                    </div><br>

                    <div class="row justify-content-center">
                    <input type="submit" name="submit"/><br>
                    </div>
                    </div>
                </form>
</div>
<!--Form ends-->
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>

<?php

    echo "<br><br>";

    include("connectFDB.php");
    include("functions.php");

    if(isset($_GET['submit']))
    {
        $player_name = $_GET['player_name'];
        $club = $_GET['club'];
        $age = $_GET['age'];
        $rating = $_GET['rating'];
        $nationality = $_GET['nationality'];
        $position = $_GET['position'];
        $wage = $_GET['wage'];
        $trans_val = $_GET['trans_val'];

        if($player_name && $club && $age && $rating && $nationality && $position && $wage && $trans_val)
        {
            $ins_query1 = "INSERT INTO footballer(player_name,club,age,rating,nationality,position) VALUES('$player_name','$club',$age,$rating,'$nationality','$position');";

            if(mysqli_query($con,$ins_query1))
            {
                $res = mysqli_query($con,"SELECT player_id FROM footballer WHERE player_name = '$player_name';");

                $res_id = mysqli_fetch_assoc($res);
                $ins_id = $res_id['player_id'];

                $ins_query2 = "INSERT INTO valued(id,trans_val,wage) VALUES($ins_id,$trans_val,$wage);";

                if(mysqli_query($con,$ins_query2))
                {
                echo "<h6 class='text-center'>Player has been inserted</h6><br><br>";
                echo "<h6 class='text-center'>Player Id of ". $player_name . " is " .$res_id['player_id'] . "</h6><br><br>";
                }
            }
            else
            {
                echo "<h6 class='text-center'>Try again</h6><br><br>";
            }
        }
        else
            echo "<h6 class='text-center'>Enter all details of Player</h6><br><br>";
    }

?>