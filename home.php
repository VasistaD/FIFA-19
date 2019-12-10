<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial=scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css">

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
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="queries.php">Queries<span class="sr-only">(current)</span></a>
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

        <!--caraousel-->
        <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="bg3.jpg" class="d-block w-100" alt="bg3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Optimized Database</h5>
          <p>We have optimized the database as much as possible for faster transactions</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="bg2.jpg" class="d-block w-100" alt="bg2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Queries</h5>
          <p>It contains various queries to our existing database</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="bg1.jpg" class="d-block w-100" alt="bg1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Real World Data</h5>
          <p>Consists of real world data without dummy data</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        <!--end caraousel-->
<br>
<br>
<br>

<div class="container bg-dark" style="color:white">
<br>
  <h1 class="text-center">Abstract</h1>
  <p>Football is one of the world’s most popular sport. A lot of young bloods have a hell lot of interest in playing this game. But it is very difficult to manage the statistics of what they have achieved in their football career both national and international level.</p>
  <p>This database will store all the football stats such as goals, assists, clean sheets, etc of all the professional football players. This will also help us to select the best footballers based on certain criteria such as position, nationality, etc.</p>
  <br>
</div>
<br><br>

<div class="container" style='color:white'>

  <div class="row justify-content-center bg-dark">
    <div class="col-sm-6">
    <img src="optimize.png" height='350px' alt="optimization">
    </div>
    <div class="col-sm-6 align-self-center">
      <h4 class='text-center'>
        Optimized Database
      </h4>
      <p>
        We have optimized our database and added triggers and stored procedures to make it better. We have also normalized the database to 1NF form
      </p>
    </div>
  </div>
  <br><br>
  <div class="row justify-content-between">
    <div class="col-sm-6 align-self-center">
    <h4 class='text-center '>
        Queries
      </h4>
      <p>
        Contains queries which are written in simple and easily understandable way. These queries help the gamers who play FIFA 19 and play career mode. 
      </p>
    </div>
    <div class="col-sm-5 align-self-center">
      
      <img src="queries.png" height='350px' alt="optimization">
      
    </div>
  </div>
  <br><br>
  <div class="row justify-content-center bg-dark">
    <div class="col-sm-6">
    <img src="fifacard.png" height='350px' alt="optimization">
    </div>
    <div class="col-sm-6 align-self-center">
      <h4 class='text-center'>
        Real World Data
      </h4>
      <p>
        It contains real world game data of all players,managers and football clubs and contains the data of previous season as well. Hence it is easy to analyze their form using this website. 
      </p>
    </div>
  </div>

</div>

<br><br>

<div class="container">
  <div class="row justify-content-around">
    <div class="col-lg-4 align-self-center">
      <h4 class="text-center" style="color:white">ER-Diagram</h4>
      <br>
      <a href="erDia.jpeg">
        <img src="erDia.jpeg" width="400px" height="400px" style="border:5px solid yellow" alt="er">
      </a>
    </div>
    <div class="col-lg-4 align-self-center">
      <h4 class="text-center" style="color:white">Schema Diagram</h4>
      <br>
        <a href="schemaDiag.jpeg">
          <img src="schemaDiag.jpeg" width="400px" height="400px" style="border:5px solid yellow" alt="schema">
        </a>
    </div>
  </div>
</div>
<br>
<br>
<br>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>