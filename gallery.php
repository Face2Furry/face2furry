<html>
	<head>
		<title>PHP Gallery</title>
	</head>
	<body>
<?php
$images = glob("gallery/*.(jpg,jpeg,png,gif,webp)", GLOB_BRACE);
foreach ($images as $i) { echo "<img src='gallery/". basename($i) ."'>"; }
?>
	</body>
</html>