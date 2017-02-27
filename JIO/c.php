<?php
$host="localhost";
$user="root";
$password="";
$dbname="reliancejio";
 //The Blank string is the password
if(mysqli_connect($host,$user,$password,$dbname)) {
  echo '<h1>Connected to MySQL</h1>';
} else {
   echo '<h1>MySQL Server is not connected</h1>';
}
?>
