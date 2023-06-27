<?php

session_start();

if(isset($_SESSION['user_id'])) {
	unset($_SESSION['user_id']);
	unset($_SESSION['customer_name']);
	session_destroy();
}

header('Location: home.php');