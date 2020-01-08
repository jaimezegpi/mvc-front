<form action="" method="POST">
	<div>
		<label for="to">To:</label><br>
		<input type="text" name="to_mail">
	</div>
	<div>
		<label for="to">Subject:</label><br>
		<input type="text" name="subject_mail">
	</div>
	<div>
		<label for="to">MSG:</label><br>
		<input type="text" name="msg_mail">
	</div>
	<div>
		
		<input type="submit" name="submit_mail" value="send">
	</div>
</form>
<?php

if ( isset($_POST["submit_mail"]) ){
	if ( 	isset($_POST["to_mail"]) &&
			isset($_POST["subject_mail"]) &&
			isset($_POST["msg_mail"])
	 ){
		if(!@mail($_POST["to_mail"], $_POST["subject_mail"], $_POST["msg_mail"]) ){
			echo "Error: Mail Failed - Use this in a real SERVER.<br>";
			echo "Hint: In Localhost not work send mail.<br>";

			echo "<code>";
			echo "Server side error txt:<br>";
			print_r(error_get_last());
			echo "</code>";
		}else{
			echo "Send Mail OK";
		}
	}else{
		echo "All Fields are mandatory.";
	}
	
}
?>