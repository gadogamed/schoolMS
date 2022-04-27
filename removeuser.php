<!DOCTYPE html>
<html lang="en">
<head>
  <h1> Remove</h1>
</head>
<form action="removeuser.php" method="get">
 ID: <input type="text" name ="id">
 <br>
 <input type="submit" value="remove">
</form>
<?php
$userid=$_GET["id"];
$datafile=fopen("userdata.txt",'a+');
$i=0;
$flag=1;
while(!feof($datafile))
{
  $line=fgets($datafile);
  while($line[$i]!=null)
  {
    if($line[$i]=='~'){$i++;$flag++;}
    if($flag==4){$savedid.=$line[$i];}
    $i++;
  }
 if($savedid==$userid){
    $a = 'userdata.txt';
    $b = file_get_contents('userdata.txt');
    $c = preg_replace("/$line/", '', $b);
    file_put_contents($a, $c);
    break;
 } 
 $savedid=null;
 $line=null;
 $i=0;
 $flag=1;
}
?>