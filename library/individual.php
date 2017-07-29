<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Retriev</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Faculty Register
				</h1>
				<grammarly>
					<div class="_9b5ef6-textarea_btn _9b5ef6-show _9b5ef6-field_hovered">
						<div class="_9b5ef6-transform_wrap">
							<div class="_9b5ef6-status">
							</div>
						</div>
					</div>
				</grammarly>
			</div>
			<form>
			<?php
$id=$_POST["id"];
include 'db.php';

$sql="SELECT * FROM faculty WHERE id='$id'";


$row=mysqli_fetch_array(mysqli_query($db,$sql));
$name=$row["name"];
$dept=$row["dept"];
$des=$row["designation"];
$college=$row["college"];
$photo=$row["photo"];

echo "<br><br>Name : ".$name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID : ".$id;
echo "<br><br>Deptartment : ".$dept."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Designation : ".$des;
echo "<br><br>College : ".$college."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Photo : ".$photo;
echo"<br><br><br><br>";
$sql="SELECT * FROM register WHERE id='$id'";
	$result2=mysqli_query($db,$sql);
	$i=0;
	echo "<div class='container-fluid'><div class='row'><div class='col-md-12'><table class='table'><thead>
					<tr>
						<th>SL.NO</th><th>date</th><th>IN Time</th><th>OUT Time</th><th>Hours</th><th>Remarks</th></tr></thead></tbody>";
	while($r=mysqli_fetch_row($result2))
	{
		$i++;
		
		$date=isset($r[1])?$r[1]:'';
		$intime=isset($r[2])?$r[2]:'';
		$outtime=isset($r[3])?$r[3]:'';
		$hours=isset($r[4])?$r[4]:'';
		$remarks=isset($r[5])?$r[5]:'hi';
		echo '<tr><td>'.$i.'</td><td>'.$date.'</td><td>'.$intime.'</td><td>'.$outtime.'</td><td>'.$hours.'</td><td>'.$remarks.'</td></tr>';
	}
	echo '</tbody>
			</table>
			<grammarly>
				<div class="_9b5ef6-textarea_btn _9b5ef6-not_focused">
					<div class="_9b5ef6-transform_wrap">
						<div class="_9b5ef6-status">
						</div>
					</div>
				</div>
			</grammarly>
		</div>
	</div>
</div>';



?>
		</div>
	</div>
	</div>

	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>