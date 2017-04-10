<?php
/**
 * Created by PhpStorm.
 * User: lh1981
 * Date: 12/14/16
 * Time: 8:38 PM
 */
session_start();

include("C:\wamp\www\waitinglist.php");
error_reporting(0);
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
            background-attachment: fixed;
            height:900px;
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
            margin-top:100px;
            padding:50px;
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
                <li class="active"><a href="NotMemberYet.php">Info</a></li>
                <li><a href="NoAuthority.php">News</a></li>
                <li><a href="NoAuthority.php">Friends</a></li>
                <li><a href="NoAuthority.php">Approve</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?logout=1">Sign Out</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div class="container" id="topContainer">
    <div class="row" id="topRow">
        <div class="col-md-8 col-md-offset-2 whiteBackground">
            <form method="post">
			<h1>Choose Teams You Like!</h1>
			<br />
			
                <div class="form-group">
                    <label>Basketball:</label>
                    <label class="radio-inline"><input type="radio" name="joinbasketball" value="1" <?php if($results['WTeamID'] == '1'): ?> checked="checked" <?php endif; ?>>Los Angeles Lakers</label>
                    <label class="radio-inline"><input type="radio" name="joinbasketball" value="2" <?php if($results['WTeamID'] == '2'): ?> checked="checked" <?php endif; ?>>Huston Rockets</label>
                    <label class="radio-inline"><input type="radio" name="joinbasketball" value="3" <?php if($results['WTeamID'] == '3'): ?> checked="checked" <?php endif; ?>>New York Knicks</label>
                    <label class="radio-inline"><input type="radio" name="joinbasketball" value="4" <?php if($results['WTeamID'] == '4'): ?> checked="checked" <?php endif; ?>>Chicago Bulls</label>
                    <br />
					<br />
					
                    <label>Baseball:</label>
                    <label class="radio-inline"><input type="radio" name="joinbaseball" value="5" <?php if($results['WTeamID'] == '5'): ?> checked="checked" <?php endif; ?>>Toronto BlueJays</label>
			        <label class="radio-inline"><input type="radio" name="joinbaseball" value="6" <?php if($results['WTeamID'] == '6'): ?> checked="checked" <?php endif; ?>>New York Yankees</label>
                    <label class="radio-inline"><input type="radio" name="joinbaseball" value="7" <?php if($results['WTeamID'] == '7'): ?> checked="checked" <?php endif; ?>>Boston RedSox</label>
                    <label class="radio-inline"><input type="radio" name="joinbaseball" value="8" <?php if($results['WTeamID'] == '8'): ?> checked="checked" <?php endif; ?>>Chicago WhiteSox</label>
           		    <br />
					<br />
					
                    <label>Football:</label>
                    <label class="radio-inline"><input type="radio" name="joinfootball" value="9" <?php if($results['WTeamID'] == '9'): ?> checked="checked" <?php endif; ?>>Buffalo Bills</label>
			        <label class="radio-inline"><input type="radio" name="joinfootball" value="10" <?php if($results['WTeamID'] == '10'): ?> checked="checked" <?php endif; ?>>Miami Dolphins</label>
                    <label class="radio-inline"><input type="radio" name="joinfootball" value="11" <?php if($results['WTeamID'] == '11'): ?> checked="checked" <?php endif; ?>>New England Patriots</label>
                    <label class="radio-inline"><input type="radio" name="joinfootball" value="12" <?php if($results['WTeamID'] == '12'): ?> checked="checked" <?php endif; ?>>New York Jets</label>
           		    <br />
					<br />
					
					<label>Hockey:</label>
                    <label class="radio-inline"><input type="radio" name="joinhockey" value="13" <?php if($results['WTeamID'] == '13'): ?> checked="checked" <?php endif; ?>>Boston Bruins</label>
			        <label class="radio-inline"><input type="radio" name="joinhockey" value="14" <?php if($results['WTeamID'] == '14'): ?> checked="checked" <?php endif; ?>>Buffalo Sabres</label>
                    <label class="radio-inline"><input type="radio" name="joinhockey" value="15" <?php if($results['WTeamID'] == '15'): ?> checked="checked" <?php endif; ?>>Detroit Red Wings</label>
                    <label class="radio-inline"><input type="radio" name="joinhockey" value="16" <?php if($results['WTeamID'] == '16'): ?> checked="checked" <?php endif; ?>>Montreal Canadiens</label>
           		    <br />
					<br />
					
                </div>
	            
				<input type="submit" class="btn btn-success" name="submit" value="Join"/>
				<?php
                if($success){
                    echo "<div class='alert alert-success'>".$success."</div>";
                }

                if($error){
                    echo "<div class='alert alert-danger'>".$error."</div>";
                }
                ?>
            </form>


        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>