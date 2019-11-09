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
<h1 class="text-center">Add skills to existing player</h1>
<br>
<br>

<div id="insForm" class="container border border-light">
<form method="GET" action="crudSkill.php">
                    <div class="container">

                    <div class="row">
                    <div class="col-md-9">
                    <label>Player ID:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="player_id"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Pace:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="pace"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Shooting:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="shoot"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Passing:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="pass"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Dribbling:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="drib"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Defending:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="def"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Physicality:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="phy"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Jumping:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="jump"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>Tackling:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="tackling"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>GK Handling:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="handling"/><br>
                    </div>
                    </div><br>

                    <div class="row">
                    <div class="col-md-9">
                    <label>GK Kicking:</label><br>
                    </div>
                    <div class="col-md-3">
                    <input type="number" name="kick"/><br>
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
        $player_id = $_GET['player_id'];
        $pace = $_GET['pace'];
        $shoot = $_GET['shoot'];
        $pass = $_GET['pass'];
        $drib = $_GET['drib'];
        $def = $_GET['def'];
        $phy = $_GET['phy'];
        $jump = $_GET['jump'];
        $tackling = $_GET['tackling'];
        $handling = $_GET['handling'];
        $kick = $_GET['kick'];

        if($pace && $shoot && $pass && $drib && $def && $phy && $jump && $tackling && $handling && $kick)
        {
            $ins_query = "INSERT INTO skills(player_id,pace,shoot,pass,drib,def,phy,jump,tackling,handling,kick) VALUES($player_id,$pace,$shoot,$pass,$drib,$def,$phy,$jump,$tackling,$handling,$kick);";
            
            if(mysqli_query($con,$ins_query))
            {
                echo "<br><h6 class='text-center'>Skills added to Player</h6><br><br>";
            }
            else
            {
                echo "<br><h6 class='text-center'>Try again</h6>";
            }
        }
        else
            echo "<br><h6 class='text-center'>Enter all details of Player</h6>";
    }

?>