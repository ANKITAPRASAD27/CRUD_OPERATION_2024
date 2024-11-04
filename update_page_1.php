<?php include('header.php');?>
<?php include('conn.php');?>

<?php
if(isset($_GET['updateid']))
{
    $id= $_GET['updateid'];
    echo $id;


$q = "SELECT * FROM BCA_III WHERE ID ='$id' ";
$r = mysqli_query($conn,$q);
if(!$r)
{
    die("query is failed".mysqli_connect_error());
}
else
{
    $row = mysqli_fetch_assoc($r);

    print_r($row);

}


}
?>
<?php

        if(isset($_POST['update_student']))
        {
            if(isset($_GET['id_new']))
            {
                $idnew = $_GET['id_new'];
                echo "idnew=".$idnew;
            }

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $sem = $_POST['sem'];
            $batch = $_POST['batch'];

            $q = "update BCA_III set FIRST_NAME = '$fname', LAST_NAME = '$lname',AGE = '$age', GENDER = '$gender', SEMESTER = '$sem',batch= '$batch' where id = '$idnew'";
            $r = mysqli_query($conn,$q);
            if(!$r)
            {
                die("query is failed".mysqli_connect_error());
            }
            else
            {
                header('location:home.php?update_msg=you have successfully updated the data');

            }

        }

?>

                <form action="update_page_1.php?id_new=<?php echo $id; ?>" method="POST">
                    <div class="form-group">
                        <label for="fname">FIRST_NAME</label>
                        <input type="text" name="fname" class="form-control" value="<?php echo $row['FIRST_NAME']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="lname">LAST_NAME</label>
                        <input type="text" name="lname" class="form-control" value="<?php echo $row['LAST_NAME']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="age">AGE</label>
                        <input type="text" name="age" class="form-control" value="<?php echo $row['AGE']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="gender">GENDER</label>
                        <input type="text" name="gender" class="form-control" value="<?php echo $row['GENDER']; ?>">

                       
                    </div>
                    <div class="form-group">
                        <label for="sem">SEMESTER</label>
                        <input type="text" name="sem" class="form-control" value="<?php echo $row['SEMESTER']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="batch">BATCH</label>
                        <input type="text" name="batch" class="form-control" value="<?php echo $row['BATCH']; ?>">
                    </div>
                    <br>
                    
                    <button type="submit" name="update_student" value="update_student" class="btn btn-success">UPDATE</button>

                </form>













<?php include('footer.php');?>