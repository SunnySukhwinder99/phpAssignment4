<?php
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'message_board');


$dbc = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if ($dbc->connect_error) {
	echo $dbc->connect_error;
	unset($dbc);
} else { 
	$dbc->set_charset('utf8');
}