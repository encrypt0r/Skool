<?php 
 $pathToRoot='../';
 include('../header.php');
 $query = "SELECT StudentId, StudentName, StudentStage FROM Students";
  $result = mysqli_query($mysqli, $query);
?>

<div class="container">
  <a href="add.php">Add</a>
  <table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Stage</th>
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
            </tr>
            ';
        }
    ?>
    </tbody>
</table>

<?php include('../footer.php') ?>