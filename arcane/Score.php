<html>
<head>

<style>
	body {
		background-image: url("bcklead.jpg");
		background-position:center;
		background-size: cover;
		background-repeat:repeat;
		background-attatchment:fixed;
		color: white;
		}
		
	#header{
		display: inline-block;
		webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		white-space: nowrap;
		font: italic normal bold 90px/normal "Trebuchet MS", Helvetica, sans-serif;
		-o-text-overflow: clip;
		text-overflow: clip;
		white-space: nowrap;
		letter-spacing: 2px;
		text-shadow: 1px 1px 2px black, 0 0 25px yellow, 0 0 5px red;
		letter-spacing: -3px;
		width: 90%;
		margin-left: 5%;
		margin-right: 5%;
		margin-bottom: 10px;
		text-align: center;
		
	}
	
	.border
	{
		font: normal 22px/normal "Trebuchet MS", Helvetica, sans-serif;
		width: 75%;
		text-align: center;
		border-collapse: collapse;
		overflow: hidden;
		border-radius: 20px;		
		margin-left:auto;
		margin-right:auto;
	}

	.enjoy-css2 {
	  white-space:nowrap;
	  display: inline-block;
	  -webkit-box-sizing: content-box;
	  -moz-box-sizing: content-box;
	  box-sizing: content-box;
	  cursor: pointer;
	  padding: 0 22px;
	  border: 4px solid rgb(255,255,255);
	  font: normal normal bold 20px/50px "Trebuchet MS", Helvetica, sans-serif;
	  color: rgb(255, 255, 255);
	  text-align: center;
	  text-transform: uppercase;
	  -o-text-overflow: clip;
	  text-overflow: clip;
	  background: black;
	  margin: auto;
	}

	.button-align{
	  text-align: center;
	}

	.enjoy-css2:hover {
	  color: black;
	  background: #ffffff;
	}

	.th
	{
		font: normal bold 32px/normal "Trebuchet MS", Helvetica, sans-serif;
		font-size: -webkit-xxx-large;
		text-align: center;
		-o-text-overflow: clip;
		text-overflow: clip;
		letter-spacing: 2px;
		text-shadow: 1px 1px 2px blue, 0 0 25px yellow, 0 0 5px blue;
		padding: 10px 12px;
	}

	.ys {
	  
	  padding: 10px 12px;
	  text-align: center;
	   letter-spacing: 2px;
	  font: normal bold 32px/normal "Trebuchet MS", Helvetica, sans-serif;
	  -o-text-overflow: clip;
	  text-overflow: clip;
	  white-space: nowrap;
	  text-shadow: 1px 1px 2px black, 0 0 25px yellow, 0 0 5px red;
	}

	.board
	{
		font: normal 22px/normal "Trebuchet MS", Helvetica, sans-serif;
		width: 75%;
		text-align: center;
		border-collapse: collapse;
		margin-left:auto;
		margin-right:auto;
		
	}

	td
	{
		padding: 5px 12px;
		<!--background-color: blue;-->
	}

</style>
<meta name ="author" content="">
<title>Innerve'17</title>
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
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


<div id="header">LEADERBOARD</div>

<div class="board">
    <table class="border" border="0" cellspacing="0" cellpadding="5" width="420">
		<tbody>
			<thead>
					<td class="th" >NAME</td>
					<td class="th">LEVEL</td>
			</thead>
        <?php
            $connect = mysqli_connect("localhost","root", "");
            if (!$connect) {
                die(mysqli_error());
            }
            mysqli_select_db($connect,"arcane");
            $results = mysqli_query($connect,"SELECT name, score FROM signup ORDER BY score DESC LIMIT 10");
            while($row = mysqli_fetch_array($results)) {
				$name = $row['name'];
				$score = $row['score']; 
			
		?>
        <tr>
            <td class="ys"><?php echo $name;?></td>
            <td class="ys"><?php echo $score;?></td>
        </tr>
		<script>
			function goBack() {
			  if(document.referrer!='http://localhost:8888/Game%20Of%20Code%20Tag-3.php')
			  { //alert(document.referrer);
					  window.history.back();
					}
			}
		</script>
        <?php
			}
            mysqli_close($connect);
        ?>
        </tbody>
    </table>
</div>
	
<div class="button-align">
	<br><br>
    <button class="enjoy-css2" onclick="goBack()">Go Back</button>
</div>
</html>
