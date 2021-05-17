<?php

session_start();

if(!isset($_SESSION['user']))
{
    header("location: login.php");
}
else
{
    echo "Welcome " . $_SESSION['user'] . " to AdServe.com";
    echo "<br><br>";

    echo "<a href= 'logout.php'>Logout</a>";
}
?>