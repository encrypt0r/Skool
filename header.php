<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?= isset($PageTitle) ? $PageTitle : "Erbil Polytechnic University"?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/site.css" rel="stylesheet">
</head>

<body>
  <?php require_once('config.php') ?>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Erbil Polytechnic University</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Students</a>
      <a class="p-2 text-dark" href="#">Employees</a>
      <a class="p-2 text-dark" href="#">Subjects</a>
      <a class="p-2 text-dark" href="#">Users</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
  </div>