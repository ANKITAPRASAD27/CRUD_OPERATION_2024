<?php

include('conn.php');
$sql ="INSERT INTO BCA_III(FIRST_NAME,LAST_NAME,AGE,GENDER,SEMESTER,
BATCH)VALUES('SIYA','SINGH','21','FEMALE','III','MORNING')";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo "<h3 style='color:green'>VALUE INSERT</h3>";
}
else
{
     die("<h3 style='color:red'>VALUE IS NOT INSERT</h3>.$conn->connect_error");
}


?>
