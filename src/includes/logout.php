<?php
    session_start();
	session_destroy();
	/*
	 * Change this pathing when the login client is pushed
	 */
	header("location: ../login_template.php");
?>