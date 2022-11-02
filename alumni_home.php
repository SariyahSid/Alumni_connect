<?php
session_start();
if (!isset($_SESSION['id'])){
	header("location:login.html");
}
else
{
	$userid=$_SESSION['id'];
	$alusername=$_SESSION['alname'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alumni HomePage</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="css/alumni_home2.css">
<?php
include_once"connect_database.php";

?>
</head>

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
        <a class="nav-link text-light" href="alumni_home.php">My Profile <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="search_alumni2.php">Search Alumni</a>
      </li>
      
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle text-light" href="forum_list.php" data-toggle="dropdown" aria-expanded="false">E-Forum</a>
        <div class="dropdown-menu">
          <a class="dropdown-item " href="forum_list.php#replyhere">Reply Forum Post</a>
          <a class="dropdown-item " href="add_forum_post.php">Add Forum Post</a>
          <a class="dropdown-item " href="alumni_mypostreply.php">My Forum Pst and Replies</a>
        </div>
      </li>
    </ul>
    
	<ul class="navbar-nav "><li class="text-light"><?php
	echo "Welcome "." ".$alusername;
	?></ul>
	<a class="btn btn-primary" href="logout.php" role="button">Logout</a>
</div>
</nav>	

<div class="container-fluid bg" >
<h2 class="py-2">My Profile</h2>
<br />
<table class="alumnihometable1" align="center" cellspacing="15px">
<?php
$sql="SELECT pi_register, pi_name, pi_gender, pi_address, pi_email, pi_session, pi_branch, pi_mobile, pi_picture 
FROM alumniinfo WHERE pi_register='$userid'";
$result=$conn->query($sql);
while($row = $result->fetch_assoc()) 
	{
		echo "<tr>";
		echo "<td colspan=2 align=center><img class=profile src=data:image/jpeg;base64,".base64_encode($row["pi_picture"])." align=center /></td>";
		echo "</tr>";
        echo "<tr>";
		echo "<th>Name:</th>";
		echo "<td class=alumnihometd1>".$row["pi_name"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Registration Number:</th>";
		echo "<td class=alumnihometd1>".$row["pi_register"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Gender:</th>";
		echo "<td class=alumnihometd1>".$row["pi_gender"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Address:</th>";
		echo "<td class=alumnihometd1>".$row["pi_address"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Mobile Number:</th>";
		echo "<td class=alumnihometd1>".$row["pi_mobile"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Email:</th>";
		echo "<td class=alumnihometd1>".$row["pi_email"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Session:</th>";
		echo "<td class=alumnihometd1>".$row["pi_session"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Branch:</th>";
		echo "<td class=alumnihometd1>".$row["pi_branch"]."</td>";
		echo "</tr>";
		echo "<tr>";
    }

?>
</table>

<div class="d-flex justify-content-center py-3">
<a class="btn btn-primary" href="update_profile.php" role="button">Update Profile</a>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>