<?php

$db_host = 'localhost'; //Should contain the "Database Host" value
$db_name = 'angofreela'; //Should contain the "Database Name" value
$db_user = 'root'; //Should contain the "Database User" value
$db_pass = ''; //Should contain the "Database Password" value

$mysqli_connection = new MySQLi($db_host, $db_user, $db_pass, $db_name);
