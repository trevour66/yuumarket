<?php 

		include 'header.php'
		
?>		




	 



<div class="jumbotron">
	<div class="alert alert-success" role="alert">
		<?php if (logged_in()){
         $id= get_id($_SESSION['email']);
		 echo "Welcome $id" ." update your profile " . get_name($_SESSION['email']); 
		 
		 
		 $sql = "SELECT * FROM member WHERE user_id = '$id'";

			$result = $conn->query($sql);

			$row = $result->fetch_assoc();

			 echo $row["user_id"] . "<br/>";
			 echo $row["first_name"] . "<br/>";
			 echo $row["last_name"] . "<br/>";
			 echo $row["display_name"] . "<br/>";

		 
		 
		 
		 
		 
		 
		 include 'update_form.php';
		 
		 
		 
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