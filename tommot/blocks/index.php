<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>InTom</title>
</head>
<body>
	<?php include 'blocks/header.php' ?>
	<main class="main">
		<div class="main-child advertising"></div>
		<div class="main-child container">
			<?php include 'blocks/connection-form.php' ?>
			<?php include 'blocks/info.php' ?>

		</div><?php include 'blocks/page1.php' ?>

	</main>
	<?php include 'blocks/footer.php' ?>
</body>
</html>
<script type="text/javascript" src="js/scripts.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
