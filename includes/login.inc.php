<?php

if(isset($_POST["submit"]))
{
    //grabbin the data
    $uid = $_POST["uid"];
    $uid = $_POST["pwd"];
    
include"../classes/dbh.classes.php";
include"../classes/login.classes.php";
include"../classes/login-contr.classes.php";
$login=new LoginContr($uid, $pwd);

$login->loginUser();
header("location: ../index.php?error=none");
}