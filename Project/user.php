<?php

include_once "header.php";
?>
<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php if (logged_in() or registered()){
         echo "Welcome " . get_name($_SESSION['email']);
		 include_once 'home_content.php';
		 }
		 else{
		
		redirect("login.php");	
		 exit;
			}
		?>
	
	</div>
</div>

<?php
include_once "footer.php";
?>