<?php 
 $pathToRoot='../';
 include('../header.php');
 if (isset($_POST['submit']))
 {
   if (empty($_POST['StudentName']) || empty($_POST['StudentStage']))
   {
     $message = "Fields that are marked with <strong>*</strong> are required.";
     $messageClass = 'danger';
   }
   else
   {
     $query = "INSERT INTO Students (StudentName, StudentStage) VALUES ('$_POST[StudentName]', '$_POST[StudentStage]')";
     if (mysqli_query($mysqli, $query))
     {
        $message = $_POST['StudentName'] . ' was added successfuly.';
        $messageClass = 'success';
     }
     else
     {
       $message = "Sorry, an error occured while trying to add the student.";
       $messageClass = 'danger';
     }
   }
 }
?>

<div class="container">
  <?php
  if (isset($message))
  {
    echo '<div class="alert alert-' . $messageClass .' alert-dismissible fade show">' . $message . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></div>';
  }
  ?>
  <form action="add.php" method="POST">
    <div class="form-group required">
      <label for="exampleFormControlInput1" class="control-label">Name</label>
      <input type="text" class="form-control" name="StudentName" placeholder="Write the student's name here">
    </div>
    <div class="form-group required">
      <label for="exampleFormControlInput1">Stage</label>
      <input type="number" class="form-control" name="StudentStage" placeholder="From 1 to 4" min="1" max="4">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Add</button>
  </form>
</table>

<?php include('../footer.php') ?>