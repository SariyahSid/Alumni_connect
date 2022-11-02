<?php
session_start();
if (!isset($_SESSION['id'])){
	header("location:login.html");
}
else
{
	$userid=$_SESSION['id'];
	$username1=$_SESSION['adname'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Homepage</title>

<link rel="stylesheet" href="css/header_navigationbar.css" />
<link rel="stylesheet" href="css/add_forum_post.css"/>
</head>
<style>
body::before{
	content: " ";
	background: rgb(5,0,36);
  background: linear-gradient(90deg, rgba(5,0,36,0.9587185215883228) 0%, #c21e38 82%, rgba(95,4,152,1) 100%);
	position: absolute;
	height: 110%;
	width: 100%;
	z-index: -1;
	opacity: 0.95;
	top: 0px;
	left: 0px;
	bottom:0px;
  
  }	
table, th, td {
  
    border-collapse: collapse;
	font-size: 20px;
	width : 900px;
	text-align: center;
	color:white
}
.container{
	display: flex;
  align-items: center;
  justify-content: center;
  height:80vh;
}
</style>
<?php
include_once"connect_database.php";
include'setting/adminpage_navigation.php';
?>

<body>
<div class="container">	
<div>	
<center>
<h1 style="padding-left:100px; color:white;"> List Of Admins </h1></center>
<br>
<table align="center">
<tr>
	<th> Serial NO </th>
	<th> Admin ID </th>
	<th> Alumni Name</th>
</tr>
<?php
$sqlshowAWA= "SELECT adminmember.ad_id, adminmember.ad_fullname FROM adminmember";
$resultAWA = $conn->query($sqlshowAWA);
$no = 1;

while ($row = mysqli_fetch_assoc($resultAWA))
{
	echo "<tr>";
	echo "<td>" . $no. "</td>";
	echo "<td>" . $row['ad_id']. "</td>";
	echo "<td>" . $row['ad_fullname']. "</td>";
	$no++;
}
?>
</table>
</div>
</div>
</body>
</html>
