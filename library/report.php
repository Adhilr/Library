<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Report</title>

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
					Report
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


include 'db.php';
$from=$_POST['from'];
$till=$_POST['till'];
$sql="SELECT * FROM faculty ";
$r=mysqli_query($db,$sql);
$i=0;
echo "<div class='container-fluid'><div class='row'><div class='col-md-12'><table class='table'><thead>
					<tr>
						<th>SL.NO</th><th>ID</th><th>Name</th><th>Designation</th><th>Department</th><th>Hours</th></tr></thead></tbody>";
	
while($row=mysqli_fetch_row($r))
{
	$i++;
	$id=$row[0];
$name=$row[1];
$dept=$row[2];
$des=$row[3];
$college=$row[4];
$photo=$row[5];



	
	
	$sql="SELECT SUM(hours) AS 'h' FROM register WHERE id='$id' AND DATEDIFF(date,'$from')>=0 AND DATEDIFF(date,'$till')<=0";
	$result=mysqli_query($db,$sql);
	
	$r1=mysqli_fetch_row($result);
	$sum=$r1[0];
	if($sum==null){
		$sum=0;
	}
	
	$sec=$sum%100;
	$sum=$sum/100;
	$min=$sum%100;
	$sum=$sum/100;
	$hrs=$sum%100;
	$sum=$sum/100;
	
	echo '<tr><td>'.$i.'</td><td>'.$id.'</td><td>'.$name.'</td><td>'.$des.'</td><td>'.$dept.'</td><td>'.$hrs.':'.$min.':'.$sec.'</td></tr>';
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