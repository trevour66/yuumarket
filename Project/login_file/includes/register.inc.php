<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$first_name				= $_POST['first_name'];
	$last_name				= $_POST['last_name'];
	$display_name			= $_POST['display_name'];
	$mobile_number			= $_POST['mobile_number'];
	$Address				= $_POST['Address'];
	$second_Address			= $_POST['second_Address'];
	$email					= $_POST['email'];
	$password				= md5($_POST['password']);
	$confirm_password		= $_POST['confirm_password'];

	$errors = [];

	if (email_exists($email))
	{
		$errors[] = "email is already registered.";
	
	}
	
	if ($Address === $second_Address )
	{
		$errors[] = "Please use a different address as second address.";
	}

	if (!empty($errors)) {
		foreach ($errors as $error) {
			validation_errors($error);
		}
	}else{
		$sql = "INSERT INTO member (first_name, last_name, display_name, mobile_number, Address, second_Address, email, password, date_added)
		VALUES ('$first_name', '$last_name', '$display_name', '$mobile_number', '$Address', '$second_Address', '$email', '$password', now())";

		if ($conn->query($sql) === TRUE) {
			redirect("user.php");
			exit;

		} else {
			set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
		}

		$conn->close();
	}
}
?>