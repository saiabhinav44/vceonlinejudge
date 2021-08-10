<?php

$servername="localhost";
$username="root";
$password="";
$dbname="onlinejudge";
$con = mysqli_connect('localhost','root','','onlinejudge');
if(!$con)
{
    die('Error in Connection');
}
session_start();
?>