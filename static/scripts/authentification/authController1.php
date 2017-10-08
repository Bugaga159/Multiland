<?php
	//var_dump($_SERVER['DOCUMENT_ROOT'] . "/scripts/connect_mysql.php");
	//require_once $_SERVER['DOCUMENT_ROOT'] . '/scripts/connect_mysql.php';
	include(__DIR__.'\scripts\connect_mysql.php');
	$login = $_POST['login'];
	$password = password_hash($_POST['password']);


	//mysqli_query("SELECT `user_id` FROM `users` WHERE `login` = '{$login}' AND `password` = '{$password}'");