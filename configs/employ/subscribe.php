<?php 
	require('mail.php');

	$email = isset($_GET['email']) ? $_GET['email'] : '';

	if (!empty($email)) {
		$Mail = new Send_mail();
		$Mail->to = $email;
		$mail = $Mail->new_subscribe();
		if ($mail) {
			$myfile = fopen("maillist.txt", "a") or die("Unable to open file!");
			fwrite($myfile, $email . "\n");
			fclose($myfile);
			$result = 'Your Email ' . $email . ' had subscribed successfully.';
		} else {
			$result = 'Sorry, something is wrong.';
		}
		
		echo json_encode($result);
	} 
	
	

?>