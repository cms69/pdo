<?php

$dsn = 'mysql:dbname=cms69;host=sql1.njit.edu';
$user = 'cms69';
$password = 'oJ3OAtfkI';
try
{
$db = new PDO($dsn, $user, $password);
echo "Connected successfully";
echo "<br>";
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
echo 'Connection failed: ' . $e->getMessage();
}

?>
