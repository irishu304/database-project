<?php
/**
 * Created by PhpStorm.
 * User: lh1981
 * Date: 12/14/16
 * Time: 11:50 PM
 */
session_start();
error_reporting(0);
include("connection.php");
include("DataRetrieval.php");

$success='';
$error='';


//VisibleType Search
if(isset($_POST['submit'])&&$_POST['submit']=='Friends'){
	
    $tagselect = "SELECT * FROM `News` NATURAL JOIN `User` WHERE News.PosterID=User.UserID and NPrivacyID='1'";
	$result=mysqli_query($link,$tagselect);
/*	
	while($getresults1=mysqli_fetch_array($results1)) {
		echo "<div>
        <h3>".$getresults1['Title']."</h3>
		<h4>".$getresults1['Body']."</h4>
        <h5>".$getresults1['Username']."</h5>
        <h5>".$getresults1['Posttime']."</h5>		
        </div>";
	}
*/	
}

if(isset($_POST['submit'])&&$_POST['submit']=='Team'){
	
    $tagselect = "SELECT * FROM `News` NATURAL JOIN `User` WHERE News.PosterID=User.UserID and NPrivacyID='2'";
	$result=mysqli_query($link,$tagselect);
}

if(isset($_POST['submit'])&&$_POST['submit']=='Sports'){
	
    $tagselect = "SELECT * FROM `News` NATURAL JOIN `User` WHERE News.PosterID=User.UserID and NPrivacyID='3'";
	$result=mysqli_query($link,$tagselect);
}

if(isset($_POST['submit'])&&$_POST['submit']=='Everyone'){
	
    $tagselect = "SELECT * FROM `News` NATURAL JOIN `User` WHERE News.PosterID=User.UserID and NPrivacyID='4'";
	$result=mysqli_query($link,$tagselect);
}

//Activity Search
if(isset($_POST['submit'])&&$_POST['submit']=='Activity'){
	
    $activityselect = "SELECT Theme, Description, ALocation, ATime, Username, APosttime FROM `Activity` NATURAL JOIN `User` WHERE Activity.APosterID=User.UserID";
	$activityresult=mysqli_query($link,$activityselect);
}


//Keyword Search
if(isset($_POST['submit'])&&$_POST['submit']=="Search"){
    $search = "SELECT Title, Username, PostTime, Location FROM `News` NATURAL JOIN `User` WHERE User.UserID=News.PosterID and (Title LIKE 
	'%".$_POST['search']."%' OR Body LIKE '%".$_POST['search']."%' OR Username LIKE '%".$_POST['search']."%' OR Location LIKE '%".$_POST['search']."%')";
    $searchresult = mysqli_query($link, $search);
}

//New Post
if(isset($_POST['submit'])&& $_POST['submit']=="Post Diary"){
    date_default_timezone_set("America/New_York");
    $timenow = date("Y-m-d H:i:s");

	$addpost= "INSERT INTO `News` (`Title`, `Body`, `PosterID`, `PostTime`, `NPrivacyID`,`Location`) VALUES ('".$_POST['newtitle']."',
            	'".$_POST['newcontent']."','".$_SESSION['id']."','".$timenow."','".$_POST['sendto']."','".$_POST['newlocation']."')";

	if(mysqli_query($link,$addpost)){
        $success = "Post Diary Succeed";
    }else{
        $error = "Post Diary Failed";	
	}
}


//New Comment
if(isset($_POST['submit'])&& $_POST['submit']=="Comment"){
    date_default_timezone_set("America/New_York");
    $timenow = date("Y-m-d H:i:s");
	
    $comment="UPDATE `News` SET `Comment`='".$_POST['comment']."',`CommentUserID`='".$_SESSION['id']."',`Commenttime`='".$timenow."'";

    if(mysqli_query($link,$comment)){
        $success = " Comment Succeed";
    }else{
        $error = "Comment Failed";
    }

}

//New Activity
if(isset($_POST['submit'])&& $_POST['submit']=="Post Activity"){
    date_default_timezone_set("America/New_York");
    $timenow = date("Y-m-d H:i:s");

	$addactivity= "INSERT INTO `Activity` (`Theme`, `Description`, `ALocation`, `ATime`, `APosterID`, `APosttime`) VALUES ('".$_POST['activitytheme']."',
            	'".$_POST['activitydescription']."','".$_POST['activitylocation']."','".$_POST['activitytime']."','".$_SESSION['id']."','".$timenow."')";

	if(mysqli_query($link,$addactivity)){
        $success = "Post Activity Succeed";
    }else{
        $error = "Post Activity Failed";	
	}
}
?>