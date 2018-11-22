<?php
                       // начальные параметры 
     $speed="1";               
     $name_rate="Включайся + ТВ стартовый";
     $price= "1100";

$dbc = mysqli_connect('localhost', 'root', '', 'intom');
       $dbc->set_charset('utf8');
        
           // Домашний интернет
        if(!empty($_POST['submit'])) {  
          $price= mysqli_real_escape_string($dbc, trim($_POST['price']));  
          $name_rate= mysqli_real_escape_string($dbc, trim($_POST['rate'])); 
          $speed= mysqli_real_escape_string($dbc, trim($_POST['speed'])); 
           // Интерактивное ТВ

          
}
   
        
   
 ?>
<!--  <?php echo $price; ?>      -Цена
      <?php echo $name_rate; ?>  -Название
      <?php echo $speed; ?>      -Скорость -->
    


  <!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css">
	<title>InTom</title>
</head>
<body>
	<header class="header">
  <div class="header__container">
    <div class="header__logo"></div>
    <div class="header__phone">+7(924)468-60-00</div>
    
    <div class="header__home-internet"><a href="home.php">Домашний интернет</a></div>
   
    <button class="header__button">
      Перезвонить
      <form class="header__button-form" action="blocks/callback.php" method="post">
        <input type="text" name="name" placeholder="Ваше полное имя">
        <input type="text" name="phone" placeholder="Ваш номер телефона">
        <input type="submit" name="submit" value="Заказать звонок">
      </form>

    </button>
    
    <div class="header__tv"><a href="blocks/tv.php">ТВ тарифы</a></div>
    
    <div class="header__to-user">Абоненту</div>
    <div class="header__account"><button formaction="https://stat.tommot.net">Личный кабинет</button></div>
    <div class="header__menu">МЕНЮ
      <ul class="header__menu-list">
        <li class="header__menu-element" onclick="open_main()">Главная</li>
        <li class="header__menu-element" id="goPage1">Контакты</li>
        <li class="header__menu-element" id="goPage2">Предоставление услуг</li>
        <li class="header__menu-element" id="goPage3">Подключение/тарифы</li>
      </ul>
    </div>

  </div>
  <div class="strip"></div> <!-- Зеленая полоска -->
</header>
	<main class="main">
		
		<div class="main-child container">
			

		
<form class="connection-form" action="#" method="post">
  <h1 class="connection-form__h1">Отправьте заявку на подключение</h1>

    

  <p class="connection-form__rate">Тариф "<?php echo $name_rate; ?> <?php echo $speed; ?> Мбит/c"</p>

  <p class="connection-form__cost"> <span><?php echo $price; ?></span> руб./мес.</p>
      <div class="connection-form__separator"></div> <!-- Разделитель -->
  <p class="connection-form__connection-after-entry">После отправки с Вами свяжутся</p>
  <p class="connection-form__check-adress">Проверьте адрес подключения</p>
  <p class="connection-form__view-list-include-adresses" id="goPage5">Список подключенных адресов</p>

     <input class="connection-form__input-street" type="text" name="street" placeholder="Улица">
     <input class="connection-form__input-house" type="text" name="house" placeholder="Дом">
     <input class="connection-form__input-flat" type="text" name="flat" placeholder="Кв.">

  <p class="connection-form__how-to-contact">Как к вам обращаться</p>
     <input class="connection-form__input-fio" type="text" name="fio" placeholder="Фамилия Имя Отчество">
  <p class="connection-form__phone">Контактный телефон</p>
  <p class="connection-form__email">Электронная почта</p>
     <input type="hidden" name="rate" value=" <?php echo $name_rate; ?> ">
     <input class="connection-form__input-phone" type="text" name="phone" placeholder="Телефон">
     <input class="connection-form__input-email" type="email" name="email" placeholder="Почта">
     <input class="connection-form__input-order" type="submit" name="submit1" value="Заказать">

</form>
	</main>
	<?php include 'footer.php'; ?>
</body>
</html>
<script type="text/javascript" src="js/scripts.js"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>








  

<?php 
$dbc = mysqli_connect('localhost', 'root', '', 'intom');
$dbc->set_charset('utf8');
if (!empty($_POST['submit1'])) {
	
  	$user_name= mysqli_real_escape_string($dbc, trim($_POST['fio']));
  	$user_number= mysqli_real_escape_string($dbc, trim($_POST['phone']));
  	$user_email= mysqli_real_escape_string($dbc, trim($_POST['email']));
  	$user_address= mysqli_real_escape_string($dbc, trim($_POST['street']));
  	$user_apartment= mysqli_real_escape_string($dbc, trim($_POST['flat']));
  	$user_house= mysqli_real_escape_string($dbc, trim($_POST['house']));
  	$rate= mysqli_real_escape_string($dbc, trim($_POST['rate']));
  	$result = mysqli_query($dbc, $user_name);
    

    
     $address= "SELECT * FROM `applications` WHERE `address` LIKE '$user_address' AND `house` LIKE '$user_house' AND `apartment` LIKE '$user_apartment' ORDER BY `address` ASC";
     $adds= mysqli_query($dbc, $address);
     $row_cnt = $adds->num_rows;

      
      if ( $row_cnt > 0 ) {
        return 1;
        
      }else{ 
  $editor= "INSERT INTO `applications` (`id`, `name`, `number`, `email`, `address`, `house`, `apartment`, `rate`) VALUES (NULL, '$user_name', '$user_number', '$user_email', '$user_address','$user_house' ,'$user_apartment', '$rate')";
  $result = mysqli_query($dbc, $editor);



      }
}


 ?>
