<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<body>
<?php 
	foreach ($nama_buah as $buah) {
		echo $buah."<br>";
	}
	echo $message." ".$buah;
?>

</body>
</html>
