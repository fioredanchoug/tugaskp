<?php

$sname= "https://auth-db1367.hstgr.io/";
$unmae= "u644123111_ojie7248";
$password = "Ojie7248";

$db_name = "u644123111_kp";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
