<?php
/**
 * Created by PhpStorm.
 * User: lh1981
 * Date: 12/14/16
 * Time: 2:31 PM
 */
session_start();
error_reporting(0);
include("connection.php");
include("DataRetrieval.php");
//include("getuseraddress.php");

if($_GET["friendid"]){

    insertFriend($link,$_SESSION['id'],$_GET["friendid"]);
}

if($_GET["approveid"]){

     insertApproveList($link,$_SESSION['id'],$_GET["approveid"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Neighbor</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #logo{
            position: relative;
            top:-10px;
        }

        #topContainer{
            background-image: url("images/login.jpg");
            height:300px;
            width:100%;
            background-size:cover;

        }

        #googleMap{
            width:700px;
            height:400px;
            border: 5px solid gray;
        }

        #topRow{
            margin-top:60px;
        }
        #registerform{
            margin-top:20px;
        }

        .whiteBackground{
            margin-right:10px;
            padding:20px;
            background-color: hsla(240, 20%, 95%, 0.8);
            border-radius: 20px;
        }


    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" id="topBar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarlink" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/Neighbor.png" id="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarlink">
            <ul class="nav navbar-nav ">
                <li><a href="info.php">Info</a></li>
                <li><a href="message.php">News</a></li>
                <li><a href="friend.php">Friends</a></li>
                <li><a href="neighbor.php">FoF</a></li>
                <li class="active"><a href="approve.php">Approve</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?logout=1">Sign Out</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container" id="topContainer">

</div>

<div class="container">
    <div class="row" id="topRow">

<!--        <h3>Address: <?php
//            $getaddressresults = mysqli_fetch_array($getaddressresult);
//            echo $getaddressresults['Address'];?></h3>
-->
        <div class="col-md-5 whiteBackground">
            <h2>Waiting to be Friends</h2>
            <?php
            $result = showFriendWaitingList($link,$_SESSION['id']);

            while($results = mysqli_fetch_array($result)){
                $getname = "SELECT * FROM `User` WHERE UserID='".$results['FWUserID1']."'";
                $friresult = mysqli_query($link,$getname);
                $friresults = mysqli_fetch_array($friresult);

                echo "<div>
                <h4>Name: ".$friresults['Username']."</h4>
                <h4>Address: ".$friresults['Address']."</h4>
                <button name=\"new\" type=\"button\" class=\"btn btn-primary btn-sm\" 
				onclick=\"window.location.href = 'approve.php?friendid={$friresults['UserID']}'\">Agree</button>
                <button name=\"new\" type=\"button\" class=\"btn btn-primary btn-sm\" 
				onclick=\"window.location.href = 'approve.php?friendid={$friresults['UserID']}'\">Decline</button>
            </div>";
            }

            ?>
        </div>

        <div class="col-md-5 whiteBackground">
            <h2>Waiting to Join Team</h2>
            <?php
			$result = mysqli_query($link,"SELECT * FROM `waiting` where FUserID=".$_SESSION['id']);
			while($results=mysqli_fetch_array($result)) {
                echo "<div>
                <h4>Name: ".$results['Username']."</h4>
                <h4>Team: ".$results['Teamname']."</h4>
                <button name=\"new\" type=\"button\" class=\"btn btn-primary btn-sm\" 
				onclick=\"window.location.href = 'approve.php?approveid={$friresults['UserID']}'\">Agree</button>
                <button name=\"new\" type=\"button\" class=\"btn btn-primary btn-sm\" 
				onclick=\"window.location.href = 'approve.php?approveid={$friresults['UserID']}'\">Decline</button>
            </div>";
			}			
			
            ?>
        </div>
    </div>
</div>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
    $('#newModal').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')

        var modal = $(this)

        modal.find('.modal-title').text('Send Message to ' + recipient)
    })
</script>

</body>
</html>
