<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');

define('DB_NAME', 'student');

// Create connection
$db_con = mysqli_connect(DB_HOST, DB_USER, DB_NAME);

// Check connection
if (!$db_con) {
    die("Connection failed: " . mysqli_connect_error());
}
