<?php
	//session_start();
?>

<?php
	if(!isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="login.php" method="POST">
		<p><input type="text" name="username"></p>
		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
	}else{
		$_SESSION['username'] = $_POST['username'];
		header("location: index.php");
	}