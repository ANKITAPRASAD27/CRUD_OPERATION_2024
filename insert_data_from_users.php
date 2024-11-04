<?php
include('conn.php');

if(isset($_POST['add_student']))
{
   $f_name = $_POST['fname'];
   $l_name = $_POST['lname'];
   $a_ge = $_POST['age'];
   $g_ender = $_POST['gender'];
   $s_em = $_POST['sem'];
   $b_atch = $_POST['batch'];


   if($f_name==" " || empty($f_name))
   {
      header('location:home.php?message=You need to fill in the first name!');
   }
   else
    {
    $sql = "INSERT INTO BCA_III(FIRST_NAME,LAST_NAME,AGE,GENDER,SEMESTER,
    BATCH)VALUES('$f_name','$l_name','$a_ge','$g_ender','$s_em','$b_atch')";

    $result = mysqli_query($conn,$sql);

    if(!$result)
    {
        die("query failed".mysqli_error());
    }
    else
    {
     header('location:home.php?insert_msg=Your data has been successfully insert!');
    }
    }

}


?>