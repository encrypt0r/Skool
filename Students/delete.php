<?php
  include('../config.php');
  if (isset($_GET["id"]))
  {
    $query  = 'DELETE FROM Students WHERE StudentId = ' . $_GET["id"];
    if (mysqli_query($mysqli, $query))
     {
       http_response_code(200);
       die();
     }
  }

   http_response_code(400);
   die();

?>