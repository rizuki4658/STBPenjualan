<?php 
	
	require_once "core/init.php";
	session_destroy();
	header('Location: Index.php');