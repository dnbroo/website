<?php 
	if(isset($_POST['submit'])) {


		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];


		$mailTo = "dnoelbrewer@yahoo.com";
		$headers = "From: dnbroo@yahoo.com";
		$txt = "You have recieved an e-mail from ".$mailFrom."\n".$name.".\n \n".$message;


		if(mail($mailTo, $subject, $txt, $headers)){
			header("Location: ../html/mailsent.html");
		}
		else{
			echo "Error: Message not accepted";
		}

		header("Location: ../html/mailsent.html");
	}

	else {
		header("Location: ../index.html?signup=error");
	}
 ?>