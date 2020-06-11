<?php
include('inc/db.php');

$sql = " SELECT * FROM documents ";

$res = mysqli_query($sqli);

?>

<html>
<head>
	<title>Documents</title>
</head>
<body>
		<a href="upload.php"> Add new Document </a><br>
		<?php

		while ($row = mysql_fetch_array($res)) {
			$id 	= $row ['id'];
			$name 	= $row ['name'];
			$path 	= $row ['path'];

			echo $id. "" . $name . "<a href='download.php?dow=$path'>Download</a><br>";
			
		}
			


		?>
</body>
</html>