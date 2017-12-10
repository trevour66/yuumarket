<?php
session_start();
if(!isset($_SESSION['username'])){
	require 'login.php';
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat with me</title>
	<style type="text/css">
	*{margin: 0; padding: 0}
		#chat-arena{
			width:500px;
			height: 500px;
			background-color: #0f0f0f;
			color: #fefefe;
			text-align: left;
			}
			ul{

			}
		#chat-arena li{
			list-style-type: none;
			border-bottom: 1px dotted white;
			padding: 5px;
		}
		
	</style>
</head>
<body>
	<div id ="chat-arena">
		<ul>
			<li><span id="time">20:00 -</span>
				<span id = "user">James: </span><span id="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt 
			</span></li>

			<li><span id="time">21:50 -</span> <span id="user">Jude: </span>
				<span id="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt est laborum.</span></li>
		</ul>
	</div>
</body>
</html>

<?php
}
?>



