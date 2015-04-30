<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'passer'); 
define('DB_USER','root'); 
define('DB_PASSWORD','12345'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 


if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM users WHERE email='" . $_POST["username"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>