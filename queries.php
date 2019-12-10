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

        h4{
          color:red;
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
        <a class="nav-link active" href="queries.php">Queries <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Update
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="updateP.php">Player</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="updateMan.php">Manager</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="updateSkill.php">Skills</a>
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
<h1 class="text-center">Queries</h1>
<br>
<br>

<!--Form-->
<div class="container">
<form style="border:1px solid grey; padding:10px" method="GET" action="queries.php">
  <div class="form-row">
    <div class="form-group col-md-11">
      <label style='color:white'>Footballer Names</label>
    </div>
    <div class="form-group col-md-1">
   <button name="q1" type="submit" class="btn btn-primary">Display</button>
   </div>
   </div>
   <hr style='border:1px solid white' >
   <div class="form-row">
    <div class="form-group col-md-11">
      <label style='color:white'>Players rated above 90</label>
    </div>
    <div class="form-group col-md-1">
   <button name="q2" type="submit" class="btn btn-primary">Display</button>
   </div>
   </div>
    <hr style='border:1px solid white' >
   <div class="form-row">
    <div class="form-group col-md-11">
      <label style='color:white'>Young Players (Under Age 20)</label>
    </div>
    <div class="form-group col-md-1">
   <button name="q3" type="submit" class="btn btn-primary">Display</button>
   </div>
   </div>
      <hr style='border:1px solid white' >
   <div class="form-row">
    <div class="form-group col-md-11">
      <label style='color:white'>Top 5 players with highest wage</label>
    </div>
    <div class="form-group col-md-1">
   <button name="q4" type="submit" class="btn btn-primary">Display</button>
   </div>
   </div>
        <hr style='border:1px solid white' >
   <div class="form-row">
    <div class="form-group col-md-11">
      <label style='color:white'>All Managers from Spain and their clubs</label>
    </div>
    <div class="form-group col-md-1">
   <button name="q5" type="submit" class="btn btn-primary">Display</button>
   </div>
   </div>  
        <!--Stored Procedure-->
    <hr style='border:1px solid white' >
   <div class="form-row">
    <div class="form-group col-md-11">
      <label style='color:white'>Top 10 Players (STORED PROCEDURE)</label>
    </div>
    <div class="form-group col-md-1">
   <button name="q9" type="submit" class="btn btn-primary">Display</button>
   </div>
   </div>  

</form>
</div>
<br><br>
<hr style='border:1px solid white' >
<br><br>
<h1 class="text-center">Delete</h1>
<br><br>
<div class="container">
<form style="border:1px solid grey; padding:10px" method="GET" action="queries.php">
  <div class="form-row">
    <div class="form-group col-md-5">
      <label style='color:white'>Footballer</label>
    </div>
    <div class="form-group col-md-6">
    <input type="text" name="player_name" placeholder='Player Name'/><br>
    </div>
    <div class="form-group col-md-1 align-self-end">
   <button name="q6" type="submit" class="btn btn-danger">Delete</button>
   </div>
   </div>

   <hr style='border:1px solid white' >
   <div class="form-row">
    <div class="form-group col-md-5">
      <label style='color:white'>Manager</label>
    </div>
    <div class="form-group col-md-6">
    <input type="text" name="man_name" placeholder='Manager Name'/><br>
    </div>
    <div class="form-group col-md-1">
   <button name="q7" type="submit" class="btn btn-danger">Delete</button>
   </div>
   </div>

</div>
<br><br>
<hr style='border:1px solid white' >
<br><br>
<!--Form ends-->

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>

<?php

echo "<br><br><div class='container'>";

include("connectFDB.php");
if(isset($_GET['q1']))
{

  echo "<h2 class='text-center'>Footballer names:</h2>";

  echo "<br><br>";

$sql = "SELECT player_name FROM footballer;";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count = 1;
    echo "<table id='qtable'><tr><th>SI No.</th><th>Name</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $count."</td><td>" . $row["player_name"]."</td></tr>";
        $count = $count + 1;
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

if(isset($_GET['q2']))
{

  echo "<h2 class='text-center'>Players rated above 90:</h2>";

  echo "<br><br>";

$sql = "SELECT player_name,rating FROM footballer where rating > 90 order by rating;";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count = 1;
    echo "<table id='qtable'><tr><th>SI No.</th><th>Name</th><th>Ovr-Rating</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $count."</td><td>" . $row["player_name"] . "</td><td>" . $row["rating"] ."</td></tr>";
        $count = $count + 1;
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

if(isset($_GET['q3']))
{

  echo "<h2 class='text-center'>Young players under age 20:</h2>";

  echo "<br><br>";

$sql = "SELECT player_name,age FROM footballer where age<20;";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count = 1;
    echo "<table id='qtable'><tr><th>SI No.</th><th>Name</th><th>Age</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $count."</td><td>" . $row["player_name"]."</td><td>". $row["age"] . "</td></tr>";
        $count = $count + 1;
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

if(isset($_GET['q4']))
{

  echo "<h2 class='text-center'>Top 5 players with highest wage:</h2>";

  echo "<br><br>";

$sql = "SELECT player_name,wage FROM footballer as f,valued as v where f.player_id=v.id order by v.wage desc;";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count = 1;
    echo "<table id='qtable'><tr><th>SI No.</th><th>Name</th><th>Wages</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $count."</td><td>" . $row["player_name"]."</td><td>" . $row['wage'] . "</td></tr>";
        $count = $count + 1;
        if($count > 5)
          break;
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

if(isset($_GET['q5']))
{

  echo "<h2 class='text-center'>Managers from Spain and their clubs:</h2>";

  echo "<br><br>";

$sql = "SELECT man_name,nationality,club_manages FROM manager where nationality = 'Spain';";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count = 1;
    echo "<table id='qtable'><tr><th>SI No.</th><th>Manager Name</th><th>Nationality</th><th>Club</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $count."</td><td>" . $row["man_name"]."</td><td>" . $row["nationality"] . "</td><td>" . $row["club_manages"] . "</td></tr>";
        $count = $count + 1;
        if($count > 5)
          break;
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

if(isset($_GET['q6']))
{
  $player_name = $_GET['player_name'];

  $del_player = "DELETE FROM footballer WHERE player_name='$player_name';";

  if(mysqli_query($con,$del_player))
  {
    echo "<h4 class='text-center'>Player Deleted</h4><br><br>";
  }
  else
  {
    echo "<h4 class='text-center'>Try again</h4><br><br>";
  }
}

if(isset($_GET['q7']))
{
  $man_name = $_GET['man_name'];

  $del_manager = "DELETE FROM manager WHERE man_name='$man_name';";

  if(mysqli_query($con,$del_manager))
  {
    echo "<h4 class='text-center'>Manager Deleted</h4><br><br>";
  }
  else
  {
    echo "<h4 class='text-center'>Try again</h4><br><br>";
  }
}

if(isset($_GET['q8']))
{
  $player_id = $_GET['player_id'];

  $del_skills = "DELETE FROM skills WHERE player_id='$player_id';";

  if(mysqli_query($con,$del_skills))
  {
    echo "<h4 class='text-center'>Skills of player deleted</h4><br><br>";
  }
  else
  {
    echo "<h4 class='text-center'>Try again</h4><br><br>";
  }
}

if(isset($_GET['q9']))
{
  echo "<h2 class='text-center'>Top 10 - Stored Procedure:</h2>";

  echo "<br><br>";

$sql = "call setTOP10();";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count = 1;
    echo "<table id='qtable'><tr><th>SI No.</th><th>Name</th><th>Rating</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>". $count."</td><td>" . $row["player_name"]."</td><td>" . $row['rating'] . "</td></tr>";
        $count = $count + 1;
        if($count > 10)
          break;
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

echo "<br><br>"
?>