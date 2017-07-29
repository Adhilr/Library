<?php
$username="root";
$password="";
$hostname="localhost";


$db=new mysqli($hostname,$username,$password,"library");
if(!$db){
 die('Error connecting to MySQL server.');
}


?>