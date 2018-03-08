<!doctype html>
<html lang="en">

<head>
  <?php require('config.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?= isset($PageTitle) ? $PageTitle : "Erbil Polytechnic University"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo isset($pathToRoot) ? $pathToRoot : "" ?>css/site.css?v=<?=time();?>" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
  
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
     <h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?php echo $siteHome ?>">Erbil Polytechnic University</a></h5> 
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="<?php echo $siteHome ?>/Students">Students</a>
      <a class="p-2 text-dark" href="#">Employees</a>
      <a class="p-2 text-dark" href="#">Subjects</a>
      <a class="p-2 text-dark" href="#">Users</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
  </div>
  
 