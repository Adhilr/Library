<?php
	include 'db.php';
	
	$id=$_POST['id'];
	$remark=$_POST['remark'];
	
    $sql="SELECT * FROM temp WHERE id='$id'";
	
	
	if(($in=mysqli_query($db,$sql))==false)
	{
		echo "ERROR1 "."<br>".$db->error;
	}	
	else
	{
		
		$intime=mysqli_fetch_row($in)[1];
		$sql="INSERT INTO register VALUES ('$id',CURRENT_DATE(),'$intime',CURRENT_TIME(),timediff(CURRENT_TIME(),'$intime'),'$remark');";
		
		if($db->query($sql)==false)
		{
			echo "ERROR2 "."<br>".$db->error;
		}
		else
		{
			$sql="DELETE FROM temp WHERE id='$id';";
			if($db->query($sql)==false)
			{
				echo "ERROR3 "."<br>".$db->error;
			}
			else
			{
				$db->close();
				header('Location: http://localhost/library/index.php');
				exit;
			}
		}
	}

?>