
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Excel Import</title>

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
					Excel Import
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
			<form name="import" method="post" enctype="multipart/form-data">
				
				<div class="form-group">
					 
					<label for="exampleInputFile" >
						File input
					</label>
					<input type="file" id="exampleInputFile" name="file"/>
					
				</div>
				
				<input type="submit" name="submit" class="btn btn-default">  <input type="reset" name="reset" class="btn btn-default">
					<div class="form-group">
					<br><br>
				<button type="button"	name="Home" class="btn btn-default" onclick="window.location.href='index.php'">
					Home</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
<?php
include 'db.php';
if(isset($_POST["submit"]) and isset($_POST["file"]))
{
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{
$id = $filesop[0];
$name = $filesop[1];
$dept = $filesop[2];
$designation = $filesop[3];
$college = $filesop[4];
$photo = null;

$q= "INSERT INTO faculty VALUES ('$id', '$name', '$dept', '$designation', '$college', '$photo')";
$sql = $db->query($q);



}
if($sql){
header("Location: http://localhost/library/index.php");
	exit;
}

}

?>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>