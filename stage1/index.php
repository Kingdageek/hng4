<?php 
	$date = new DateTime();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width;initial-scale=1; shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>HNG4 Stage One</title>
</head>
<body style="padding: 0; background: url(asset.jpg); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100% ; overflow: hidden">
	
		<h1 style="text-align: center;margin-top: 180px; margin-bottom: 0;color: #fff;font-size: 48px; font-weight: normal; font-family: 'Open Sans', sans-serif;
">HELLO WORLD!</h1>
		<h3 style="text-align: center; margin-top: 18px;color: #fff; font-family: 'Roboto', sans-serif; font-size: 48px; font-style: italic; font-weight: normal;">it's <?=$date->format("g:i A");?> today,<br> <?= $date->format("l, jS F"). "<br>". $date->format("Y");?></h3>
	
</body>
</html>