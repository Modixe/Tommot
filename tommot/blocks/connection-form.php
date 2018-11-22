<?php



  if (empty($_SESSION['int'])) {
    $_SESSION['int']['rate']="Включайся";
    $_SESSION['int']['speed']=1;
    $_SESSION['int']['price']=1100;
      if (empty($_SESSION['tv'])) {
    $_SESSION['tv']['rate']="ТВ Стартовый";
    $_SESSION['tv']['price']=350;
  }
  }
                 // начальные параметры





$dbc = mysqli_connect('localhost', 'root', '', 'intom');
       $dbc->set_charset('utf8');

           // Домашний интернет
        if(!empty($_POST['submit'])) {
          $price= mysqli_real_escape_string($dbc, trim($_POST['price']));
          $name_rate= mysqli_real_escape_string($dbc, trim($_POST['rate']));
          $speed= mysqli_real_escape_string($dbc, trim($_POST['speed']));
             if(!empty($_POST['type']))  {
             if ($_POST['type']=='int') {
               $_SESSION['int']['rate']= mysqli_real_escape_string($dbc, trim($_POST['rate']));
               $_SESSION['int']['speed']=mysqli_real_escape_string($dbc, trim($_POST['speed']));
               $_SESSION['int']['price']=  mysqli_real_escape_string($dbc, trim($_POST['price']));
                 unset($_SESSION['tv']['price'])  ;
                 unset($_SESSION['tv']['rate'])  ;

              }}}
           // Интерактивное ТВ
           if(!empty($_POST['submit1'])) {
          $price1= mysqli_real_escape_string($dbc, trim($_POST['price']));
          $name_rate1= mysqli_real_escape_string($dbc, trim($_POST['rate']));
            if(!empty($_POST['type']))  {
            if ($_POST['type']=='tv') {
               $_SESSION['tv']['rate']= mysqli_real_escape_string($dbc, trim($_POST['rate']));
               $_SESSION['tv']['price']=mysqli_real_escape_string($dbc, trim($_POST['price']));
                }}}



        if (!empty($_POST['submit4'])) {
          $dbc = mysqli_connect('localhost', 'root', '', 'intom');
          $dbc->set_charset('utf8');
            if (!empty($_POST['submit4'])) {
  $rate = $_SESSION['tv']['rate'].="+".$_SESSION['int']['rate'] ;
              $user_name= mysqli_real_escape_string($dbc, trim($_POST['fio']));
              $user_number= mysqli_real_escape_string($dbc, trim($_POST['phone']));
              $user_email= mysqli_real_escape_string($dbc, trim($_POST['email']));
              $user_address= mysqli_real_escape_string($dbc, trim($_POST['street']));
              $user_apartment= mysqli_real_escape_string($dbc, trim($_POST['flat']));
              $user_house= mysqli_real_escape_string($dbc, trim($_POST['house']));
              //$rate= mysqli_real_escape_string($dbc, trim($_POST['rate']));
              $result = mysqli_query($dbc, $user_name);
    var_dump($rate);


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



        }
 ?>


<form class="connection-form" action="" method="post">
  <h1 class="connection-form__h1">Отправьте заявку на подключение</h1>

     <!-- <input class="connection-form__input-checkbox" type="checkbox" name="home-internet" value="1" checked> -->
      <label class="connection-form__label" id="goPage6">Выбрать Интернет</label>


     <!-- <input class="connection-form__input-checkbox" onclick="form.submit()" type="checkbox" name="tv" value="2" checked> -->
      <label class="connection-form__label" id="goPage7" >Выбрать ТВ</label>

  <p class="connection-form__rate">Тариф "<?php echo $_SESSION['int']['rate'] ; ?>
    <?php if (!empty($_SESSION['tv']['rate'])) {
      echo "+".$_SESSION['tv']['rate'] ;
    }  ?>

  "</p>

  <p class="connection-form__package">Домашний интернет - <?php echo $_SESSION['int']['speed']; ?>  Мбит/c   <?php if (!empty($_SESSION['tv']['rate'])) {
      echo "+ пакет ".$_SESSION['tv']['rate'] ;
    }  ?></p>
  <p class="connection-form__cost">от <span>  <?php
if (!empty($_SESSION['tv']['price'])) {
      echo $_SESSION['int']['price']+$_SESSION['tv']['price']  ;
    }else{
      echo $_SESSION['int']['price'];
    }  ?>
   </span> руб./мес.</p>
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

     <input class="connection-form__input-phone" type="text" name="phone" placeholder="Телефон">
     <input class="connection-form__input-email" type="email" name="email" placeholder="Почта">
     <input class="connection-form__input-order" type="submit" name="submit4" value="Заказать">

</form>
