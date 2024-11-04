<?php
$server_name ="localhost";
$user_name="root";
$password=null;
$dbname ="SVU";

//create a connection
// $conn = mysqli_connect($server_name,$user_name,$password);

//create a connection object oriented
$conn = new mysqli($server_name,$user_name,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("<h3 style='color:red'>DATABASE IS NO CONNECTED</h3>.$conn->connect_error");
}
else
{
    //echo "<h3 style='color:green'>DATABASE IS CONNECTED</h3>";
}

//check connection
// if($conn==true)
// {
//     echo "<h3 style='color:green'>DATABASE IS CONNECTED</h3>";
// }
// else
// {
//     echo "<h3 style='color:red'>DATABASE IS NO CONNECTED</h3>";
// }

?>