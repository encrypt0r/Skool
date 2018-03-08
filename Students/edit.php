<?php 
 $pathToRoot='../';
 $fatalError = false;
 $displayForm = true;
 include('../header.php');
 if (isset($_POST['submit']))
 {
   $displayForm = false;
   if (empty($_POST['StudentName']) || empty($_POST['StudentStage']))
   {
     $message = "Fields that are marked with <strong>*</strong> are required.";
     $messageClass = 'danger';
   }
   else
   {
     $query = "UPDATE Students SET StudentName='$_POST[StudentName]', StudentStage='$_POST[StudentStage]' WHERE StudentId='$_POST[StudentId]'";

     if (mysqli_query($mysqli, $query))
     {
        $message = $_POST['StudentName'] . "'s information was updated successfuly.";
        $messageClass = 'success';
     }
     else
     {
       $message = "Sorry, an error occured while trying to update the student's information.";
       $messageClass = 'danger';
     }
   }
 }
else
{
  $studentId = isset($_GET['id']) ? $_GET['id'] : -1;
  $query = "SELECT StudentName, StudentStage FROM Students WHERE StudentId='$studentId'";
  $result = mysqli_query($mysqli, $query);
  
  if ($row = mysqli_fetch_array($result))
  {
    $studentName = $row["StudentName"];
    $studentStage = $row["StudentStage"];
  }
  else
  {
    $fatalError = true;
    $message = "Student not found";
    $messageClass = "danger";
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
  
  if ($fatalError == false && $displayForm == true)
  {
  ?>
  <form action="edit.php" method="POST">
    <div class="form-group required">
      <label for="exampleFormControlInput1" class="control-label">Name</label>
      <input type="text" class="form-control" name="StudentName" placeholder="Write the student's name here" value="<?= $studentName ?>">
    </div>
    <div class="form-group required">
      <label for="exampleFormControlInput1">Stage</label>
      <input type="number" class="form-control" name="StudentStage" placeholder="From 1 to 4" min="1" max="4" value="<?= $studentStage ?>">
    </div>
    
    <input type="hidden" name="StudentId"  value="<?= $studentId ?>">

    <button type="submit" name="submit" class="btn btn-primary">Save</button>
  </form>
</table>
<?php
 }
 else
 {
   echo "<script>
     window.location.replace('index.php');
   </script>";
 }
  
  include('../footer.php') ?>