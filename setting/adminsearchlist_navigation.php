<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Admin Nav</title>
</head>

<link rel="stylesheet" href="css/header_navigationbar.css" />

<body>
<nav class="navbar navbar-expand-md navbar-primary bg-primary ">
<a class="navbar-brand" href="#">
    <img src="/image/logo.png" width="50" height="50" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample04">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link text-light" href="admin_homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="search_alumni2.php">Search Alumni</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="manage_alumni.php">Verify Alumni</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-light" href="forum_list.php" data-toggle="dropdown" aria-expanded="false">E-Forum</a>
        <div class="dropdown-menu">
          <a class="dropdown-item " href="add_forum_post.php">Add Forum Post</a>
          <a class="dropdown-item " href="delete_forum_post.php">Delete Forum Post</a>
         
        </div>
      </li>
    </ul>
    
	<ul class="navbar-nav "><li class="text-light"><?php
	echo "Welcome"." Admin  ".$username1;
	?></ul>
	<a class="btn btn-primary" href="logout.php" role="button">Logout</a>
</div>
</nav>	

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>