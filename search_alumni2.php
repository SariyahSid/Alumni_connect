<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Alumni</title>


<?php
session_start();
include_once"connect_database.php";
if (!isset($_SESSION['id'])){
	header("location:login.html");
}
else
{
  $userid=$_SESSION['id'];
  if (strchr("$userid","AD")==true)
	{
    $username1=$_SESSION['adname'];
		include_once"setting/adminsearchlist_navigation.php";
	}
	else
	{	
    $alusername=$_SESSION['alname'];
		include_once"setting/alumnisearchlist_navigation.php";
	}
}
?>
<style>
body::before{
  content: " ";
  background: rgb(5,0,36);
background: linear-gradient(90deg, rgba(5,0,36,0.9587185215883228) 0%, #c21e38 82%, rgba(95,4,152,1) 100%);
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: -1;
  opacity: 0.95;
  top:0px;
  left: 0px;
  

}
th{
	color:white;
}
.dropbtn {
    background-color: white;
    color: #red;
    padding: 5px 116px;
    font-size: 15px;
	border: 2px #050119;
    cursor: pointer;
}

input.i1{
padding: 3px 119px;
    font-size: 20px;
}
.button {
  background-color: #008CBA; /* Green */
  border: none;
  color: white;
  padding: 12px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:4px 4px;
}
.center{
	display: flex;
  align-items: center;
  justify-content: center;
  height:80vh;
}
</style>
<body>
	<div class="center">
<form action="searchresult2.php" method="post">
<center><width="450" style="border:hidden;font-size:25px;color:white;"> Search Via Anyone of the following:</center>
<table width="710" align="center" style="border:2px hidden;" cellspacing="20">
</tr>




<tr>
<th align="left" width="450" style="border:hidden;font-size:18px">Branch </th>
<td width="450" style="border:hidden">
    <select class="dropbtn" name="pp" >
                 <option> </option>  
        <option>B.Sc CS</option>
        <option>B.Sc IT</option>
        <option>BCA</option>
        
        <option>M.Sc CS</option>
        <option>M.Sc IT</option>
        <option>MCA</option>
      </td>
</tr>
<tr>
<th align="left" width="450" style="border:hidden;font-size:18px"> </th>
<td width="450" style="border:hidden;font-size:15px">OR</td>
</tr>
<th align="left" width="450" style="border:hidden;font-size:18px">Session </th>
<td width="450" style="border:hidden">
    <select class="dropbtn" name="sp1" >
        <option> </option>         
        <option>2020</option>
        <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        <option>2024</option>
        <option>2025</option>
        <option>2026</option>
        <option>2027</option>
      </td>
</tr>

<td colspan=2 align="center" style="border:hidden;" ><button type="submit" class="button" name="addpayment" >Submit</button></td>
</tr>
</table>
</form>
</div>
</body>
</html>