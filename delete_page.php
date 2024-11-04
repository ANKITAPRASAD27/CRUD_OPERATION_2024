
<?php include('conn.php'); ?>


<?php
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    echo $id;
    $query = "delete from BCA_III where id = '$id'";
    $r = mysqli_query($conn,$query);
    if(!$r)
    {
        die("query is failed".mysqli_connect_error());
    }
    else
    {
        header('location:home.php?delete_msg=deleted the data');
    }
    
    
}


?>



