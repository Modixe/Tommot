<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>InTom</title>
	<script src="js/ajax.js"></script>
</head>
<body>
	<?php include 'blocks/header.php' ; ?>
	<?php include 'blocks/modal1.php'; ?>
	<?php include 'blocks/modal2.php'; ?>
	<?php include 'blocks/modal3.php'; ?>
	<?php include 'blocks/modal4.php'; ?>
	<?php include 'blocks/modal5.php'; ?>
	<?php include 'blocks/modal6.php'; ?>
	<?php include 'blocks/modal7.php'; ?>
	

	<main class="main">
		<div class="main-child advertising"></div>
		<div class="main-child container">
			<?php include 'blocks/connection-form.php'; ?>
			<?php include 'blocks/info.php'; ?>

		</div>
		<?php include 'blocks/page1.php'; ?>
		<?php include 'blocks/page2.php'; ?>
		<?php include 'blocks/page3.php'; ?>

	</main>
	<?php include 'blocks/footer.php'; ?>
	<div id="myoverlay"></div>
</body>
</html>
<script type="text/javascript" src="js/jquery-3.0.0.min.js">

</script>
<script type="text/javascript" src="js/scripts.js"></script>
