<?php
	
	$content = "none";

	if(isset($_GET['choice'])) {
		$content = strip_tags(htmlspecialchars($_GET['choice']));
	}

	switch ($content) {
		case "app":
			$loadpage = "appointments.php";
			break;
		case "con":
			$loadpage = "contact.php";
			break;
		default:
			$loadpage = "home.php";
	}

	include('header.php');
	include($loadpage);
	include('footer.php');

?>