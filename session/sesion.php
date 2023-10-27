<?php
	if($_POST['user']=="jonathan" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nombre"] = "Jonathan Eduardo Ibarra Martinez";
		$_SESSION["grupo"] = "712";

		header("Location: ..//index.php");

	} else {
		header("Location: error.php");
	}
?>

