<?php 
 $pathToRoot='../';
 include('../header.php');
 $query = "SELECT StudentId, StudentName, StudentStage FROM Students";
  $result = mysqli_query($mysqli, $query);
?>

<div class="container">
  <a href="add.php">Add Student</a>
  <hr>
  <div class="row">
    <table id="table" class="table table-striped">
      <thead>
          <tr>
              <th scope="col">Name</th>
              <th scope="col">Stage</th>
              <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
          <?php
          while($row = mysqli_fetch_array($result))
          {
              echo '
              <tr>
                  <td>'. $row['StudentName'] .'</th>
                  <td>'. $row['StudentStage'] .'</td>
                  <td class="mx-auto text-center">
                  <button type="button" class="btn btn-danger delete-button">Delete</button>
                  </td> 
              </tr>
              ';
          }
      ?>
      </tbody>
    </table>
  </div>
<script>
  $(document).ready(function() {
     $("#table").DataTable();             
  });
</script>

<?php include('../footer.php') ?>