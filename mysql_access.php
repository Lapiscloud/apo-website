<?php

define('DB_HOST', 'apo.cxav86kuligx.us-west-2.rds.amazonaws.com');
define('DB_NAME', 'apo');
define('DB_USER','apo');
define('DB_PASSWORD','alphaphiomega');

$db=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$er=mysql_select_db(DB_NAME,$db) or die("Failed to connect to MySQL: " . mysql_error());

?>