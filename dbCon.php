<?php
define('DB_USER','adel');
define('DB_PASSWORD','cpit123');
define('DB_HOST','localhost');
define('DB_NAME','hospital');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to database : '.
mysqli_connect_error());

?>