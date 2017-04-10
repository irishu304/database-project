<?php
/**
 * Created by PhpStorm.
 * User: lh1981
 * Date: 12/13/16
 * Time: 8:38 PM
 */
session_start();
include("DataRetrieval.php");

include("connection.php");
error_reporting(0);

$success = '';
$error = '';

$getexsitinginfo = "SELECT * FROM `User` WHERE UserId = '".$_SESSION['id']."'";

$result = mysqli_query($link, $getexsitinginfo);

$results = mysqli_fetch_array($result);

if(isset($_POST['submit']) && $_POST['submit']=='Update'){
/*
//     if($_SESSION['blockid']){
//        echo "here";
//        //echo getBlockId($link,$array[1],$array[2]);
//        echo "here1";
        $array = getaddress($_POST['updateaddress']);
       if(isMoveout($link,$array[1],$array[2],$_SESSION['blockid'])){
//            echo "moveout";
            insertMoveIn($link,$_SESSION['id'],getBlockId($link,$array[1],$array[2]));
//            echo "here";
            insertWaitingList($link,$_SESSION['id'],getBlockId($link,$array[1],$array[2]));
       }
 //   }
*/

    $updateinfo = "UPDATE `User` SET Age='".$_POST['updateage']."',Gender='".$_POST['updategender']."',Phone='".$_POST['updatephone']."',
    Intro='".$_POST['updateintro']."',Notification='".$_POST['updatenotification']."',NotificationType='".$_POST['updatenotificationtype']."'
    WHERE UserId = '".$_SESSION['id']."'";

    if(mysqli_query($link,$updateinfo)){
        $success = "User Infomation Updated Successfully";
    }else{
        $error = "Update Failure";
    }
	
}
if(isset($_POST['submit']) && $_POST['submit']=='Join Teams!'){
	header('Location:jointeam.php');
}

?>