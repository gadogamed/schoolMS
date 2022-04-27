<!DOCTYPE html>
<html lang="en">
<head>
  <h1> adduser</h1>
</head>
<form action="adduser.php" method="get">
 User Name: <input type="text" name ="name">
 <br>
 password: <input type="password" name ="password">
 <br>
 role:<input type="text" name ="role">
 <br>
 ID:<input type="text" name ="id">
 <br>
 <input type="submit" value="Add">
 </form>
</html>
<?php
$username=$_GET["name"];      
$pass=$_GET["password"];
$usertype=$_GET["role"];
$userid=$_GET["id"];
$datafile=fopen("userdata.txt",'a+');
$write=fwrite($datafile,"$username~$pass~$usertype~$userid~\n");
?>