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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" conten="text/html; charset=utf-8" />
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Update Profile</title>
<link rel="stylesheet" href="css/updateprofile.css" />
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
<?php 
include_once"connect_database.php";

?>
<div>
<br /><br />
<h2>Update Profile</h2>
<br />
<form method="post" name="profile" enctype="multipart/form-data">
<table class="updatetable1" cellspacing="20px" align="center">
  <tr>
    <th>Address:</th>
    <td class="updatetd1 my-1"><textarea name="address" cols="40" rows="6"></textarea></td>
  </tr>
  <tr>
    <th>Mobile Number:</th>
    <td class="updatetd1 my-1"><input type="text" name="contact" size="38" maxlength="10" pattern="[0-9]{10}"required></td>
  </tr>
  <tr>
    <th>Company:</th>
    <td class="updatetd1 my-1"><input type="text" name="comp" size="38" /></td>
  </tr>
  <tr>
    <th>Email:</th>
	<td class="updatetd1 my-1"><input type="email" name="email" size="38" /></td>
  </tr>
  <tr>
    <th>LinkedIn URL:</th>
	<td class="updatetd1 my-1"><input type="url" name="linkedin" size="38" /></td>
  </tr>
  <tr>
    <th>Profile Picture:</th>
    <td class="updatetd1 my-2"><input type="file" name="pp" size="38" /></td>
  </tr>
  <tr>
    <td class="updatetd1" colspan="2" align="right">
	<button class="btn btn-primary" type="submit" name="update" onclick="check()">Update</button></td>
  </tr>
</table>
</form>
</div>
<br /><br /><br /><br /><br /><br />
<?php
if(isset($_POST['update']))
{
	
	
	$address=$_REQUEST['address'];
	$contact=$_REQUEST['contact'];
	$email=$_REQUEST['email'];
	$linkdin=$_REQUEST['linkedin'];
	
	$comp=$_REQUEST['comp'];
	$pp=addslashes(file_get_contents($_FILES['pp']['tmp_name']));
	
	
	if( $address=="" && $contact==""&& $comp=="" && $email==""  && $linkdin=="" && $pp==false)
	{
		echo "<script>alert('Empty field. No update made.')</script>";		
	}
	else
	{
		
		
		if($address!="")
		{
			$sql2 = "UPDATE alumniinfo SET pi_address='".$address."' WHERE pi_register='$userid'";
			$result2 = $conn->query($sql2); 
		}
		if($contact!="")
		{
			$sql3 = "UPDATE alumniinfo SET pi_mobile='".$contact."' WHERE pi_register='$userid'";
			$result3 = $conn->query($sql3); 
		}
		if($email!="")
		{
			$sql4 = "UPDATE alumniinfo SET pi_email='".$email."' WHERE pi_register='$userid'";
			$result4 = $conn->query($sql4); 
		}
		if($linkdin!="")
		{
			$sql1 = "UPDATE alumniinfo SET pi_linkedin='".$linkdin."' WHERE pi_register='$userid'";
			$result1 = $conn->query($sql1); 
		}
		

		if($pp==true)
		{
			$sql7 = "UPDATE alumniinfo SET pi_picture='".$pp."' WHERE pi_register='$userid'";
			$result7 = $conn->query($sql7); 
		}	
		if($comp==true)
		{
			$sql8 = "UPDATE alumniinfo SET pi_company='".$comp."' WHERE pi_register='$userid'";
			$result8 = $conn->query($sql8); 
		}	
		if( $result2==true || $result3==true || $result4==true || 
	 $result7==true || $result8==true )
		{
			echo "<script>alert('Update Success.')</script>";
		}
		else
		{
			echo "Fail";	
		}
	}
}
?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<script>
	function check(){
	var phoneno=/^\d{10}$/;
	var my=document.getElementById('mobile')
	if(my.value.match(phoneno))
	{
		return true;
	}
	else
	{
		alert ("ENTER VALID MOBILE NUMBER");
		return false;
	}
	}
</script>
</body>
</html>