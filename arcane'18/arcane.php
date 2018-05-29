<!DOCTYPE html>
<html>
<head>
	<meta name ="author" content="">
<title>Innerve'17</title>
	<link rel="stylesheet" type="text/css" href="home.css">
<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
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
	<img src= "logo.png" style="width:200px; height: auto;"/>
	<div class = "home">
		<!--<div class = "tophead">
			Innerve-IGDTUW presents
		</div>-->
	
		<div class = "container">
			<div class = "heading">
				Arcane 2k17
			</div>
			<div class = "subheading">
				- online cryptic hunt
			</div>
			<br><br>
			<p>Date: 4th-5th October 2017</p>
			<p>Time: 9pm-3am</p>
				<button class = "button">
				<a href="rules.php">Rules/Register </a>
			</button>
	
		</div>
		
	</div>
</body>
</html>
