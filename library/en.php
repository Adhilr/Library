<?php
include 'db.php';
	
$id=$_POST['id'];
$sql="INSERT INTO temp VALUES ('$id',CURRENT_TIME());";


if($db->query($sql)==False)
{
	echo "ERROR "."<br>".$db->error;
}
else
{
	$db->close();
	header('Location: http://localhost/library/index.php');
	exit;
}

?>