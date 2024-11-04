 <?php
 include('header.php');

 ?>
 <?php
include('conn.php');
 ?>

  <div class="box1">

        <h2 >ALL BCA STUDENTS</h2>
        <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#addStudent">ADD STUDENTS</button>
    </div>

    <center>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th >ID</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>SEMESTER</th>
                <th>BATCH</th>
                <th>UPDATE</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <TBody>
            <?php
                $q = "SELECT * FROM BCA_III";
                $r = mysqli_query($conn,$q);
                if(!$r)
                {
                    die("query is failed".mysqli_connect_error());
                }
                else
                {
                       //print_r($r);


                       while($row = mysqli_fetch_assoc($r))
                       {
                        ?>
                            
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['FIRST_NAME']; ?></td>
                            <td><?php echo $row['LAST_NAME']; ?></td>
                            <td><?php echo $row['AGE']; ?></td>
                            <td><?php echo $row['GENDER']; ?></td>
                            <td><?php echo $row['SEMESTER']; ?></td>
                            <td><?php echo $row['BATCH']; ?></td>
                            <td><a href="update_page_1.php?updateid=<?php echo $row['ID']; ?>" class="btn btn-success">UPDATE</a></td>
                            <td><a href="delete_page.php?deleteid=<?php echo $row['ID']; ?>" class="btn btn-danger">DELETE</a></td>
                            </tr>
                        <?php
                       }
                }
            ?>
           

          
            

        </TBody>
    </table>
    
    </center>


<?php
if(isset($_GET['message']))
{
    echo "<h6>". $_GET['message']."</h6>";
}
?>



<?php
if(isset($_GET['insert_msg']))
{
    echo "<h6>". $_GET['insert_msg']."</h6>";
}
?>




<?php
if(isset($_GET['update_msg']))
{
    echo "<h6>". $_GET['update_msg']."</h6>";
}
?>



<?php
if(isset($_GET['delete_msg']))
{
    echo "<h6>". $_GET['delete_msg']."</h6>";
}
?>





<form action="insert_data_from_users.php" method="post">    
 <!-- Modal -->
<div class="modal fade" id="addStudent" tabindex="-1" aria-labelledby="addStudentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addStudentLabel">ADD STUDENT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                
                    <div class="form-group">
                        <label for="fname">FIRST_NAME</label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lname">LAST_NAME</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age">AGE</label>
                        <input type="text" name="age" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender">GENDER</label>
                        <input type="radio" name="gender" value=" MALE"> MALE
                        <input type="radio" name="gender" value=" FEMALE"> FEMALE
                    </div>
                    <div class="form-group">
                        <label for="sem">SEMESTER</label>
                        <input type="text" name="sem" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="batch">BATCH</label>
                        <input type="text" name="batch" class="form-control">
                    </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="add_student" value="add_student" class="btn btn-success">ADD</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php
 include('footer.php');
 ?>