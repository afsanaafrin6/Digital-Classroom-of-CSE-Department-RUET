<?php
	// session_start();
	// $dbhost="sql312.ultimatefreehost.in";
	// $dbuser="ltm_21224655";
	// $dbpass="farzanacse";
	// $dbname="ltm_21224655_lecture";
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="php";
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()){
		die("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errno().")" );
	}
	
?>