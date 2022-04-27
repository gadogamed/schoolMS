<!DOCTYPE html>
<html lang="en">

<head>
  <h1> login</h1>
</head>

<form action="login.php" method="get">
 User Name: <input type="text" name ="name">
 <br>
 password: <input type="password" name ="password">
 <br>
 <input type="submit" value="Log in">
 </form>
 </html>

 <?php
  $username=$_GET["name"];      
  $pass=$_GET["password"];
  $datafile=fopen("userdata.txt",'a+');
  $i=0;
  $flag=1;
  $savedpass;
  $savedun;
  while(!feof($datafile))
  {
    //line by line
    $line=fgets($datafile);
    //collect data from every line
    while($line[$i]!=null)
    {
      if($line[$i]=='~'){$i++;$flag++;}
      if($flag==1){$savedun.=$line[$i];}
      if($flag==2){$savedpass.=$line[$i];}
      $i++;
    }
     if($username==$savedun&&$pass==$savedpass){echo"VALID";}
     else{echo"username or password are incorrect ";}
     $flag=1;
     $i=0;
     $savedun="";
     $savedpass="";
  }
?>