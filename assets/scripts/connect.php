<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'passer'); 
define('DB_USER','root'); 
define('DB_PASSWORD','12345'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


$email = $_POST['email']; 
$password = $_POST['pass1']; 
$hint = $_POST['hint']; 

$query = "INSERT INTO  users (email, password, registration_date, password_hint, email_confirmation) 
			VALUES ('$email', MD5('$password'), CURRENT_TIME(), '$hint', '0');"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; }


?>

