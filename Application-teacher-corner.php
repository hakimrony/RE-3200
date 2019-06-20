<!DOCTYPE html>
<html>
<head>
	<title> Navigation</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			margin: 20px 40px;
		}
		#mainbox{
			font-size: 24px;
			cursor: pointer;
			transition: all .6s;
		}
		.sidemenu{
			position: fixed;
			top: 0px;
			left: 0px;
			height: 100%;
			width: 0px;
			background-color: #222;
			z-index: 1;
			padding-top: 100px;
			overflow-x: hidden;
			transition: all .5s;
		}
		.sidemenu a{
			padding: 8px 8px 8px 64px;
			text-decoration: none;
			font-size: 20px;
			color: #999;
			display: block;
		}
		.sidemenu a:hover{
			color: white;
		}
		.sidemenu .closebtn{
			position: absolute;
			top: 0px;
			right: 25px;
			font-size: 36px;
			margin-left: 32px;
		}
	</style>
</head>

<body>
	<div id="mainbox" onclick="openFunction()">&#9776; Open</div>
	<div id="menu" class="sidemenu">
		<a href="http://localhost/submit-project/Home.php">Home</a>
		<a href="http://localhost/submit-project/Create-information-student.php">Insert Data </a>
		<a href="http://localhost/submit-project/index.php">Edit Data</a>
		<a href="http://localhost/submit-project/view-ct-marks.php">View Data</a>
		<a href="http://localhost/submit-project/view-feedback.php">View Feedback</a>
		<a href="#" class="closebtn" onclick="closeFunction()">&times;</a>
	</div>
	<script type="text/javascript">
		function openFunction(){
			document.getElementById("menu").style.width="300px";
			document.getElementById("mainbox").style.marginLeft="300px";
			document.getElementById("mainbox").innerHTML="Click on Cross Element and Close Menu";
		}
		function closeFunction(){
			document.getElementById("menu").style.width="0px";
			document.getElementById("mainbox").style.marginLeft="0px";
			document.getElementById("mainbox").innerHTML="&#9776; Open";
		}
	</script>
</body>
</html>