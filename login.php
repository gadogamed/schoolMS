<?php
include_once "login_view.html";
include_once "users.php";
$newuser = new user;
$newuser->username=$_GET["uname"];
$newuser->pass=$_GET["psw"];
$newuser->login($newuser->username,$newuser->pass);
?>