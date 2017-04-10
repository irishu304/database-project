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

if(isset($_POST['submit']) && $_POST['submit']=='Join'){
        date_default_timezone_set("America/New_York");
        $requesttime = date("Y-m-d H:i:s");
		
	if($_POST['joinbasketball']) {
		$updatewaitinglist1= "INSERT INTO `Waitinglist` (`WUserID`,`WTeamID`,`RequestTime`) 
		VALUES ('".$_SESSION['id']."','".$_POST['joinbasketball']."','".$requesttime."')";
        if(mysqli_query($link,$updatewaitinglist1)){
        $success = "Basketball Team Information Updated Successfully";
        }
		else{
        $error = "Update Failed.";
        }
	}

	if($_POST['joinbaseball']) {
		$updatewaitinglist2= "INSERT INTO `Waitinglist` (`WUserID`,`WTeamID`,`RequestTime`) 
		VALUES ('".$_SESSION['id']."','".$_POST['joinbaseball']."','".$requesttime."')";
	    if(mysqli_query($link,$updatewaitinglist2)){
        $success = "Baseball Team Information Updated Successfully!";
        }
		else{
        $error = "Update Failed.";
        }
	}
	
	if($_POST['joinfootball']) {
		$updatewaitinglist3= "INSERT INTO `Waitinglist` (`WUserID`,`WTeamID`,`RequestTime`) 
		VALUES ('".$_SESSION['id']."','".$_POST['joinfootball']."','".$requesttime."')";
	    if(mysqli_query($link,$updatewaitinglist3)){
        $success = "Football Team Information Updated Successfully!";
        }
		else{
        $error = "Update Failed.";
        }
	}

	if($_POST['joinhockey']) {
		$updatewaitinglist4= "INSERT INTO `Waitinglist` (`WUserID`,`WTeamID`,`RequestTime`) 
		VALUES ('".$_SESSION['id']."','".$_POST['joinhockey']."','".$requesttime."')";
	    if(mysqli_query($link,$updatewaitinglist4)){
        $success = "Hockey Team Information Updated Successfully!";
        }
		else{
        $error = "Update Failed.";
        }
	}
	
/*	if(mysqli_query($link,$updatewaitinglist1) && mysqli_query($link,$updatewaitinglist2) && mysqli_query($link,$updatewaitinglist3) && mysqli_query($link,$updatewaitinglist4))
	{
        $success = "Team Information Updated Successfully";
    }else{
        $error = "Update Failed";
    }
*/
}
?>