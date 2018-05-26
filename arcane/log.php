<html>
<link href="log.css" rel="stylesheet">
<head>
	<meta charset="UTF-8">
	<<meta name ="author" content="">
	<title>Innerve'17</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
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
	<main>
		<div class="buttons login-button-active" data-action="animated">
			<button class="login-button">
				<span class="log-link login-button-active" data-action="animated">Login</span>
				<span class="login-underline login-button-active" data-action="animated"></span>
			</button>
			<button class="signup-button">
				<span class="sign-link" data-action="animated">Sign Up</span>
				<span class="signup-underline login-button-active" data-action="animated"></span>
			</button>
		</div>
		<div class="forms">
			<form class="login-form login-button-active" action="#" method="POST" data-action="animated">
				<fieldset>
					<legend>Please, enter your email and password for login.</legend>
					<label for="login-email">E-mail</label>
					<input id="login-email" type="email" name="email" required autocomplete="off">
					<label for="login-password">Password</label>
					<input id="login-password" type="password" name="password" required autocomplete="off">
				</fieldset>
				<input type="submit" value="Login" name="login">
				
				<?php
 
				include("DBConnection.php");
				session_start(); 
  
				if(isset($_POST['login']))
				{ 
					if (empty($_POST['email']) || empty($_POST['password'])) 
						{
							print "Please enter the correct Username and Password";
						} 
  
					$usernameLogn = $_POST['email']; 
					$passwordLogin = $_POST['password'];
  
					$myusername = stripslashes($usernameLogn); // stripslashes() is used to clean up data retrieved from an HTML form
					$mypassword = stripslashes($passwordLogin);
  
					$myusername = mysqli_real_escape_string($db,$_POST['email']); // Escapes special characters in a string for use in an SQL statement
					$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
 
					$query = "SELECT * FROM signup WHERE mail = '$myusername' and password = '$mypassword'"; //Fetching all the records with input credentials
					$result = mysqli_query($db,$query);
					$count = mysqli_num_rows($result);
					$q = "SELECT score FROM signup WHERE mail = '$myusername' and password = '$mypassword'"; //Fetching all the records with input credentials
					$n = mysqli_query($db,$q);
					$r = mysqli_fetch_array($n);
					if($count == 1)
					{
						$_SESSION['email']=$myusername; //Storing the username value in session variable so that it can be retrieved on other pages 
 
						if($r['score']==1)
						header("location: register.php");
						else if($r['score']==2)
						header("location: ques2.php");
						else if($r['score']==3)
						header("location: ques3.php");
						else if($r['score']==4)
						header("location: ques4.php");
						else if($r['score']==5)
						header("location: ques5.php");
						else if($r['score']==6)
						header("location: ques6.php");
						else if($r['score']==7)
						header("location: ques7.php");
						else if($r['score']==8)
						header("location: ques8.php");
						else if($r['score']==9)
						header("location: ques9.php");
						else if($r['score']==10)
						header("location: ques10.php");
						else if($r['score']==11)
						header("location: ques11.php");
						else if($r['score']==12)
						header("location: ques12.php");
						else if($r['score']==13)
						header("location: ques13.php");
						else if($r['score']==14)
						header("location: ques14.php");
						else if($r['score']==15)
						header("location: ques15.php");
						else if($r['score']==16)
						header("location: ques16.php");
						else if($r['score']==17)
						header("location: ques17.php");
						else if($r['score']==18)
						header("location: ques18.php");
						else if($r['score']==19)
						header("location: ques19.php");
						else if($r['score']==20)
						header("location: ques20.php");
						else
						header("location: end.php");
					}
					else
					{
						$er= 'Incorrect username or password'; 
						echo "<script>alert('$er')</script>";
						?>
						<br><a href="log.php"></a>
						<?php 
					} 
				}
 
	?>
			</form>
			<form class="signup-form" action="#" method="post" data-action="animated">
				<fieldset>
					<legend>Please, enter your email, password and password confirmation for sign up.</legend>
					<label for="signup-name">Name</label>
					<input id="signup-name" type="text" name="name"   required autocomplete="off">
					<label for="signup-college">College</label>
					<input id="signup-college" type="text" name="college"  required autocomplete="off">
					<label for="signup-email">E-mail</label>
					<input id="signup-email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email"  required autocomplete="off">
					<label for="signup-confirm-password">Contact</label>
					<input id="signup-contact" type="tel" maxlength="10"  pattern="[0-9]{10}$" name="contact"  required  autocomplete="off">
					<label for="signup-year">Year</label>
					<input id="signup-year" type="text" name="year" maxlength="1" pattern="[1-4]{1}$"  placeholder="single digit (1-4) " required autocomplete="off">
					<label for="signup-password">Password</label>
					<input id="signup-password" type="password" name="password"  required autocomplete="off" >
				</fieldset>
				<input name="submit" type="submit" value="Continue" id="submit">
				<?php
						
						error_reporting('E_ALL ^ E_NOTICE');
						if(isset($_POST['submit']))
						{
								$con=mysqli_connect('localhost','root','') ;
								if ( !$con ) 
								{
									die("Connection failed : " . mysqli_error());
								}
								$dbcon=mysqli_select_db($con,'arcane');
								if ( !$dbcon )
								{
									die("Database Connection failed : " . mysqli_error());
								}
								$name=$_POST['name'];
								$password=$_POST['password'];
								$mail=$_POST['email'];
								$collge=$_POST['college'];
								$contact=$_POST['contact'];
								$year=$_POST['year'];
								$q=mysqli_query($con,"select * from signup where name='".$name."' or mail='".$mail."' ") or die(mysqli_error());
								$n=mysqli_fetch_row($q);
								if($n>0)
								{
									$er='The username name '.$name.' or mail '.$mail.' is already present in our database';
									echo "<script>alert('$er')</script>";
									?>
									<br><a href="log.php"></a>
									<?php 
								}
								else
								{
									$insert=mysqli_query($con,"insert into signup(name,password,mail,college,contact,year) values('".$name."','".$password."','".$mail."','".$collge."','".$contact."','".$year."')") or die(mysqli_error());
									if($insert)
									{
										$er='Values are registered successfully';
										echo "<script>alert('$er')</script>";
										$qry = "UPDATE signup SET score='1' WHERE mail='$mail'";
										$res = mysqli_query($db,$qry);
									}
									else
									{
										$er='Values are not registered';
										echo "<script>alert('$er')</script>";
									}
								}
						}
				?>
</form>
</div>
</main>
<script src="log.js"></script>
</body>
</html>
