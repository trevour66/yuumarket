<?php include 'header.php' ?>
<?php include 'slideshow.php' ?>
  			
<!--------------Content--------------->
<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php if(logged_in()) {
			include_once "user.php";
		}else{
			include_once "home_content.php";
		}
		?>

<!--------------Footer--------------->
<!--==============================footer=================================-->
	<?php include 'footer.php' ?>