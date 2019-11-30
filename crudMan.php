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

        h6{
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
<h1 class="text-center">Insert Manager</h1>
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
<form method="GET" action="crudMan.php">
                    <div class="container">

                    <div class="row">
                    <div class="col-md-9">
                    <label>Manager Name:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="man_name"/><br>
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
                    <label>Nationality:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="nationality"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Experience:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="expr"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Club Managing:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="text" name="club_manages"/><br>
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

    include("connectFDB.php");
    include("functions.php");

    if(isset($_GET['submit']))
    {
        $man_name = $_GET['man_name'];
        $age = $_GET['age'];
        $nationality = $_GET['nationality'];
        $expr = $_GET['expr'];
        $club_managing = $_GET['club_manages'];

        $ins_query1 = "INSERT INTO manager(man_name,age,nationality,expr,club_manages) VALUES('$man_name',$age,'$nationality',$expr,'$club_managing');";

        if($man_name && $age && $nationality && $expr && $club_managing)
        {

          #double insertion tackling

          $ins_check = "SELECT man_name FROM manager WHERE man_name='$man_name';";

          $check_res = mysqli_query($con,$ins_check);
          if(mysqli_num_rows($check_res) > 0)
          {
            echo "<h6 class='text-center'>Manager has already been inserted to database</h6><br><br>";
          }
          else{
          #DIT end

        if(mysqli_query($con,$ins_query1))
        {
            echo "<br><h6 class='text-center'>Manager added to database</h6>";
        }
        else
        {
            echo "<br><h6 class='text-center'>Try again</h6>";
        }
        }}
        else
            echo "<br><h6 class='text-center'>Enter all details of Manager</h6>";
    }

?>