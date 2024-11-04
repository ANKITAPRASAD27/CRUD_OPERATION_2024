<?php
include('conn.php');
$sql ="CREATE TABLE BCA_III(ID INT(10) NOT NULL AUTO_INCREMENT,
FIRST_NAME VARCHAR(20) NOT NULL,
LAST_NAME VARCHAR(20) NOT NULL,
AGE  INT(10) NOT NULL,
GENDER VARCHAR(20) NOT NULL,
SEMESTER VARCHAR(20) NOT NULL,
BATCH VARCHAR(20) NOT NULL,
PRIMARY KEY(ID))";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo "<h3 style='color:green'>TABLE IS CREATED</h3>";
}
else
{
     die("<h3 style='color:red'>TABLE IS NOT CREATED</h3>.$conn->connect_error");
}


?>