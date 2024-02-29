<?php

// The host name, probably "localhost"
$db_host = "localhost";
// The user name for the database
$db_name = "beauuaj6";
// The password for that username
$db_pass = "1Q2W3e4r!";
// The name of your custom database
$db_base = "beauuaj6_wnm608";

// start a connection to the database
$conn = new mysqli(
	$db_host,
	$db_name,
	$db_pass,
	$db_base
	);

if($conn->connect_errno) die($conn->connect_error);

header('Content-Type: text/html; charset=UTF-8');
$conn->set_charset("utf8");
?>
