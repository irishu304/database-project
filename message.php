<?php
/**
 * Created by PhpStorm.
 * User: lh1981
 * Date: 12/13/16
 * Time: 4:41 PM
 */
 
include("getmessage.php");
include("getuseraddress.php");
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
            background-image: url("images/wallpaper.jpg");
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
            <a class="navbar-brand" href="#"><img src="images/Neighbor.png" id="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarlink">
            <ul class="nav navbar-nav ">
                <li><a href="info.php">Info</a></li>
                <li class="active"><a href="message.php">News</a></li>
                <li><a href="friend.php">Friends</a></li>
                <li><a href="neighbor.php">FoF</a></li>
                <li><a href="approve.php">Approve</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?logout=1">Sign Out</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container" id="topContainer">

</div>

<div class="container" >
    <div class="row" id="topRow">

        <h3>Location: <?php
            $getaddressresults = mysqli_fetch_array($getaddressresult);
            echo $getaddressresults['Address'];?></h3>

        <form method="post">
            <div class="form-group">
                <!--<label for="updatename">Name:</label>-->
                <input type="text" class="form-control input-sm" placeholder="Search..." name="search""/>
                <input type="submit" name="submit" class="btn btn-default btn-sm" value="Search"/>
            </div>
        </form>
        <div class="col-md-2">
            <div class="btn-group-vertical text-center" role="group" aria-label="...">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#newActivity">Post Activity</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#newModal">Post Diary</button>
                <form method="post">
				    <input name='submit' type="submit" class="btn btn-default form-control" value="Activity">
				    <input name='submit' type="submit" class="btn btn-default form-control" value="Friends">
                    <input name='submit' type="submit" class="btn btn-default form-control" value="Team">
                    <input name='submit' type="submit" class="btn btn-default form-control" value="Sports">
                    <input name='submit' type="submit" class="btn btn-default form-control" value="Everyone">
                </form>

            </div>
        </div>

        <div class="col-md-8 whiteBackground">
            <?php
            if($success){
                echo "<div class='alert alert-success'>".$success."</div>";
            }

            if($error){
                echo "<div class='alert alert-danger'>".$error."</div>";
            }
            ?>



            <?php //VisibleType Search
                while($results = mysqli_fetch_array($result)){
                    //$_SESSION['replyid']=$results['PostId'];
                    echo "<div>
                    <h3>".$results['Title']."</h3>
		            <h4>".$results['Body']."</h4>
                    <h5>Writer:".$results['Username']."</h5>
                    <h5>Post Time: ".$results['PostTime']."</h5>
					<h5>Rating: ".$results['Rating']."</h5>
					
					<button name=\"reply\" type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\">Like</button>
				    <button name=\"reply\" type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\">Dislike</button>

                    <button name=\"reply\" type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#replyModal\"
					data-whatever='".$results['Username']."' data-sendto='".$results['MessageId']."'>Comment</button>
					<br />
					
                    </div>";
					$commentcheck=$results['Comment'];
					if($commentcheck) {
						echo "<div>
						<h4>Comment</h4>
						<h5>".$results['Comment']."</h5>
						<h5>Comment Time: ".$results['Commenttime']."</h5>
						<br />
						</div>";
					}
                }
            ?>
			
            <?php //Activity Search
                while($activityresults = mysqli_fetch_array($activityresult)){
                    //$_SESSION['replyid']=$results['PostId'];
                    echo "<div>
                    <h3>".$activityresults['Theme']."</h3><br />
		            <h4>".$activityresults['Description']."</h4><br />
		            <h4>Location: ".$activityresults['ALocation']."</h4>
		            <h4>Start Time: ".$activityresults['ATime']."</h4>
                    <h5>Writer:".$activityresults['Username']."</h5>
                    <h5>Post Time:".$activityresults['APosttime']."</h5>

                    <button name=\"reply\" type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"modal\">Join</button>
					<br />
					<br />


                    </div>";

                }
            ?>
			
			<?php //Keyword Search
			    
                while($searchresults = mysqli_fetch_array($searchresult)){
                    //$_SESSION['replyid']=$results['PostId'];
					echo "<div><h3>Search Results:</h3></div>";
                    echo "<div>
                    <h4>Title: ".$searchresults['Title']."</h4>
                    <h5>Writer:".$searchresults['Username']."</h5>
                    <h5>Post Time:".$searchresults['PostTime']."</h5>
					<h5>Location: ".$searchresults['Location']."</h4>
					<br />
					<br />


                    </div>";

                }
            ?>
        </div>
    </div>
</div>

<!--Post Comment -->
<div class="modal fade" tabindex="-1" role="dialog" id="replyModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Comment</h4>
            </div>
            <form method="post">
                <div class="modal-body">

<!--                    <div class="form-group">
                        <label>News Title</label>
                        <input class="form-control" type="text" name="sendto" id="sendto" value="<?php echo $results['Title'];?>" disabled/>
                    </div>
-->
<!--                 <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" type="text" name="replysubject" placeholder="subject">
                    </div>
-->
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control" name="comment" rows="10" cols="80" class="center-block" placeholder="Comment on..."></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Comment">
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--New Activity -->
<div class="modal fade" tabindex="-1" role="dialog" id="newActivity">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Activity</h4>
            </div>
            <form method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Theme</label>
                        <input class="form-control" type="text" name="activitytheme" placeholder="Theme">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="activitydescription" rows="10" cols="80" class="center-block" placeholder="Descripe it"></textarea>
                    </div>
					
                    <div class="form-group">
                        <label>Location</label>
                        <input class="form-control" type="text" name="activitylocaton" value="<?php echo $getaddressresults['Address'];?>">
						</div>
					
                    <div class="form-group">
                        <label>Time</label>
                        <input class="form-control" type="text" name="activitytime" value="<?php 
						    date_default_timezone_set("America/New_York");
                            $timenow = date("Y-m-d H:00:00");
							echo $timenow;?>">
                    </div>					
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Post Activity">
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- New Post -->
<div class="modal fade" tabindex="-1" role="dialog" id="newModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Diary</h4>
            </div>
            <form method="post">
                <div class="modal-body">


<!--                    <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" type="text" name="newsubject" placeholder="subject" value="">
                    </div>
-->
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="newtitle" placeholder="title">
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="newcontent" rows="10" cols="80" class="center-block" placeholder="Write something here"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Location</label>
                        <input class="form-control" type="text" name="newlocation" value="<?php echo $getaddressresults['Address'];?>">
                    </div>
				
                    <div class="form-control">
                        <label>Visible To:</label>
					    <label class="radio-inline"><input type="radio" name="sendto" value="1">Friends</label>
                        <label class="radio-inline"><input type="radio" name="sendto" value="2">Team</label>
                        <label class="radio-inline"><input type="radio" name="sendto" value="3">Sports</label>
						<label class="radio-inline"><input type="radio" name="sendto" value="4">Everyone</label>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Post Diary">
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
    $('#replyModal').on('show.bs.modal',function(event){
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var id= button.data('sendto')

        var modal = $(this)

        modal.find('.modal-title').text('Comment on ' + recipient)
        modal.find('#sendto').val(id)
    })
</script>

</body>
</html>


