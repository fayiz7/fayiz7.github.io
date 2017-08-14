<?php
define('DB_USER','root');
define('DB_PASSWORD','123');
define('DB_HOST','localhost');
define('DB_NAME','patient');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to database : '.
mysqli_connect_error());

?>