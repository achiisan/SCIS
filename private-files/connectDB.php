<?php
//MYSQL DATABASE
$db = mysql_connect('localhost', 'root') or
	die('Unable to Connect to mySQL');

$query = 'CREATE DATABASE IF NOT EXISTS sr_citizen_infodb';
	mysql_query($query, $db) or die(mysql_error($db));
	mysql_select_db('sr_citizen_infodb', $db) or die(mysql_error($db));
?>