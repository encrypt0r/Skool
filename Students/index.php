<?php 
 $pathToRoot='../';
 include('../header.php');
 $query = "SELECT StudentId, StudentName, StudentStage FROM Students";
  $result = mysqli_query($mysqli, $query);
?>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span id="item-name"></span> will be deleted. Do you want to continue?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="confirm-delete">Delete</button>
      </div>
    </div>
  </div>
</div>

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
                  <button type="button" class="btn btn-danger delete-button" data-toggle="modal" data-target="#deleteModal" data-name="' . $row['StudentName'] .'" data-id="' . $row['StudentId'] . '">Delete</button>
                  <a class="btn btn-primary delete-button" href="edit.php?id=' . $row['StudentId'] . '">Edit</button>
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
     var table = $("#table").DataTable();
    
     $(".delete-button").click(function() {
        $(this).parent().parent().addClass('selected');
        $("#item-name").text($(this).data('name'));
     });
    
     $("#confirm-delete").click(function() {
       table.row('.selected').remove().draw( false );
     })
  });
</script>

<?php include('../footer.php') ?>