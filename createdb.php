<?php
$server_name ="localhost";
$user_name="root";
$password=null;

//create a connection object oriented
$conn = new mysqli($server_name,$user_name,$password);

//create database
$sql = "CREATE DATABASE SVU";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo "<h3 style='color:green'>DATABASE IS CREATED</h3>";
}
else
{
     die("<h3 style='color:red'>DATABASE IS NOT CREATED</h3>.$conn->connect_error");
}
?>