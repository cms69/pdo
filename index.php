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
try
{
$query = $db->prepare("SELECT * FROM accounts where id<6");
$query->execute();
$result = $query->setFetchMode(PDO::FETCH_ASSOC);
$result = $query->fetchAll();
}
catch (PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
echo '<b>Number of Records returned from the Accounts table are :</b> ' ;
Print_r(count($result));
echo '<br><hr>';
echo '<br>';
echo '<table border=1>';
echo '<tr><th>id</th><th>email</th><th>fname</th><th>lname</th><th>phone</th><th>birthday</th><th>gender</th><th>password</th></tr>';
foreach ($result as $label)
{
echo '<tr>';
echo '<td>'.$label['id'].'</td>';
echo '<td>'.$label['email'].'</td>';
echo '<td>'.$label['fname'].'</td>';
echo '<td>'.$label['lname'].'</td>';
echo '<td>'.$label['phone'].'</td>';
echo '<td>'.$label['birthday'].'</td>';
echo '<td>'.$label['gender'].'</td>';
echo '<td>'.$label['password'].'</td>';
echo '</tr>';
}
echo '</table>';

?>

