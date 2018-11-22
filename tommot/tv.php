
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>InTom</title>
	<style media="screen">
	.packet__speed{
		background:none !important;
		margin-bottom: 70px;
	}
	</style>
</head>
<body>
	<?php include 'blocks/header.php'; ?>
	<?php include 'blocks/modal9.php'; ?>

	<main class="main">

<div class="center">



<h2>ТВ тарифы</h2>
  <br>
  <div class="packet">
    <h3 class="packet__h3">ТВ стартовый</h3>
    <div class="packet__container">
      <div class="packet__speed">
        40 каналов
      </div>
      <div class="packet__cost">
        <span>Абонентская плата</span>
        <p><span>200 &#8381; </span>/мес</p><!-- Цена тарифа  -->
      </div>


      <form class="packet__form" action="form_application.php" method="post" >
      	<input type="hidden" name="speed" value="40"> <!-- Количество каналов  -->
       <input type="hidden" name="rate" value="Включайся "> <!-- Название тарифа  -->
       <input type="hidden" name="price" value="1009"> <!-- Цена тарифа  -->
       <input type="submit" name="submit" class="include" value="Подключить">

      </form>
			<button class="packet__more" id="goPage9">Показать больше</button>

    </div>
  </div>

  <div class="packet">
    <h3 class="packet__h3">То что надо</h3>
    <div class="packet__container">
      <div class="packet__speed">
        20 мбит/c
      </div>
      <div class="packet__cost">
        <span>Абонентская плата</span>
        <p><span>500 &#8381; </span>/мес</p>
      </div>
      <form class="packet__form" action="form_application.php" method="post" >
        <input type="hidden" name="speed" value="19"> <!-- скорость тарифа  -->
       <input type="hidden" name="rate" value="Включайся "> <!-- Название тарифа  -->
       <input type="hidden" name="price" value="1009"> <!-- Цена тарифа  -->
       <input type="submit" name="submit" class="include" value="Подключить">

      </form>
    </div>
  </div>

  <div class="packet">
    <h3 class="packet__h3">То что надо</h3>
    <div class="packet__container">
      <div class="packet__speed">
        30 мбит/c
      </div>
      <div class="packet__cost">
        <span>Абонентская плата</span>
        <p><span>700 &#8381; </span>/мес</p>
      </div>
      <form class="packet__form" action="form_application.php" method="post" >
        <input type="hidden" name="speed" value="19"> <!-- скорость тарифа  -->
       <input type="hidden" name="rate" value="Включайся "> <!-- Название тарифа  -->
       <input type="hidden" name="price" value="1009"> <!-- Цена тарифа  -->
       <input type="submit" name="submit" class="include" value="Подключить">

      </form>
    </div>
  </div>

  <div class="packet">
    <h3 class="packet__h3">То что надо</h3>
    <div class="packet__container">
      <div class="packet__speed">
        100 мбит/c
      </div>
      <div class="packet__cost">
        <span>Абонентская плата</span>
        <p><span>1190 &#8381; </span>/мес</p>
      </div>
      <form class="packet__form" action="form_application.php" method="post" >
        <input type="hidden" name="speed" value="19"> <!-- скорость тарифа  -->
       <input type="hidden" name="rate" value="Включайся "> <!-- Название тарифа  -->
       <input type="hidden" name="price" value="1009"> <!-- Цена тарифа  -->
       <input type="submit" name="submit" class="include" value="Подключить">

      </form>
    </div>
  </div>
<div class="packet">
    <h3 class="packet__h3">Полный + ТВ максимальный</h3>
    <div class="packet__container">
      <div class="packet__speed">
        20 мбит/c
      </div>
      <div class="packet__cost">
        <span>Абонентская плата</span>
        <p><span>2500 &#8381; </span>/мес</p>
      </div>
      <form class="packet__form" action="form_application.php" method="post" >
        <input type="hidden" name="speed" value="19"> <!-- скорость тарифа  -->
       <input type="hidden" name="rate" value="Включайся "> <!-- Название тарифа  -->
       <input type="hidden" name="price" value="1009"> <!-- Цена тарифа  -->
       <input type="submit" name="submit" class="include" value="Подключить">

      </form>
    </div>
  </div>

</div>

	</main>
	<?php include 'blocks/footer.php' ?>
</body>
</html>
<script type="text/javascript" src="js/jquery-3.0.0.min.js">
</script>
<!-- <script type="text/javascript" src="js/scripts.js"></script> -->
<script type="text/javascript" src="js/scriptsTv.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
