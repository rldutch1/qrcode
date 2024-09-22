<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Template HTML Document">
<meta name="keywords" content="comma,separated,keywords">
<meta name="author" content="Robert Holland" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>QR Code Fun!</title>
<script type="text/javascript" src="http://example.com/js/filename.js"></script>
<link rel="stylesheet" href="http://example.com/css/filname.css" />
</head>

<style>
/*common css*/
table, th, td {border-collapse:collapse; border: 1px solid black;}
th {background-color:#ffff00;}
tr:nth-child(even) {background: #CCC;}
tr:nth-child(odd) {background: #FFF;}
a:link {text-decoration: none;}
a:visited {text-decoration: none;}
a:hover {text-decoration: underline;}
a:active {text-decoration: underline;}
th, td {padding: 5px;}
</style>

<body>
<p>
<?php 
echo "https://" . $_SERVER['HTTP_HOST'] . "/repos/qrcode/qrcode.php blah blah blah<br />";
?>
</p>
<div>
<p>Here is a sample QR code! Use the example above to create your own.</p>
	<img src="qrcode.php?text=http://www.robholland.com&size=200&padding=10" alt="QR Code"><br /><br />
<!-- <img src="qrcode.php?text=37.726072026416659,-107.576793031767011&size=50&padding=10" alt="QR Code"><br /><br /> -->
<!-- <img src="qrcode.php?text=This is my rifle. There are many like it but this one is mine." alt="QR Code"><br /><br /> -->
	<?php

	?>
</div>
</body>
</html>
