<?php

    include("connect.php");
    include("functions.php");

    if(logged_in())
    {
        header("location:home.php");
    }
    else
    {
        header("location:login.php");
        exit();
    }

?>