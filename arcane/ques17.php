<!DOCTYPE html>
<html>
<head>
<meta name ="author" content="">
<title>Innerve'17</title>
	<link rel="stylesheet" href="style.css">
	     <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
	document.onkeydown = function(){
  switch (event.keyCode){
        case 116 : //F5 button
            event.returnValue = false;
            event.keyCode = 0;
            return false;
        case 82 : //R button
            if (event.ctrlKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
		case 37 : //left arrow
            if (event.altKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
		case 39 : //Right arrow
            if (event.altKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
		case 85 : //U button
            if (event.ctrlKey){ 
                event.returnValue = false;
                event.keyCode = 0;
                return false;
            }
    }
}
window.oncontextmenu = function () {
return false;
}
	window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
</head>
<body>
	
	<div class="title">
		<!-- <h1> Level 17: </h1> -->
	</div>
	<div class="level">
		<div class="ques">
			<img src="arcane pics/a.jpg">
		</div>
		
		<div class="ans">
		<form method="post">
			<input type="text" placeholder="Your answer" name="ans17" id="ans17" autocomplete="off" ><br><br>
			<input type="submit" name="submit" class="button">
			<input type="reset" name="reset" class="button-reset">
			<input type="button" name="Leaderboard" value="Leaderboard" onClick="window.location.href ='score.php'" class="button-leader">
		</form>
		</div>
	</div>
	<?php
			include("DBConnection.php");

			session_start();
			$username = $_SESSION['email']; //retrieve the session variable
			?>
			<p id="player">Player: <?php echo $username ?> </p>
			<?php
			if(isset($_POST['ans17']))
			{
				$check=$_POST["ans17"];
				if ($_POST["ans17"] == 'bradley\'sarm'){
				$qry = "UPDATE signup SET ans17='$check', score='18' WHERE mail='$username'";
				$res = mysqli_query($db,$qry);
				header("location: ques18.php");
				}
			
			else
			{
				$er= 'Try Again';
				echo "<script>alert('$er')</script>";
				$q = stripslashes('$check');

			}
			}


		?>


</body>

</html>