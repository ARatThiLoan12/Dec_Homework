<?php
	$server = "localhost";
	$user = "root";
	$pwd = "";
	$dbName = "imagemanagement";
	$db = new mysqli($server, $user, $pwd, $dbName);

	$sql = "SELECT * from image";
	$result = $db->query($sql)->fetch_all();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		img{
			width: 250px;
			height: 300px;
		}
		.container{
			margin-left: 100px;
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php for ($i=0; $i<count($result) ; $i++) {
			echo "<p> <img src='uploads/".$result[$i][1]."'></p>";
		}
		?>
	</div>
</body>
</html>
