
<?php 
session_start();
?>
<!DOCTYPE html>
	<html>
	<head>
		<title> </title>
		<link rel="stylesheet" href="../css/st.css">
	</head>
	<body>
		<?php  
		/////////////////////////////////////////////////////////////////////////////
if(!isset($_SESSION['login'])) {
  if(isset($_POST['submit'])) {
  	$dbc = mysqli_connect('localhost', 'root', '', 'intom');
    $login = mysqli_real_escape_string($dbc, trim($_POST['login']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));

    if(!empty($login) && !empty($password)) {
    	$dbc = mysqli_connect('localhost', 'root', '', 'intom');
        $query = "SELECT * FROM `users` WHERE `login` LIKE '$login' AND `password` LIKE '$password' ";
        $data = mysqli_query($dbc,$query);

          if(mysqli_num_rows($data) == 1) {
            $row = mysqli_fetch_assoc($data);
            $_SESSION['login']=$row['login'];
            $_SESSION['id']=$row['id'];
            $_SESSION['admin']=$row['admin'];
      }
      else { echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
      }} else {
      echo 'Извините вы должны заполнить поля правильно';
    }}} 
////////////////////////////////////////////////////////////////////////////
if (!empty($_POST['exit'])) {
	session_unset();
	    } 		 ?>
		<?php if (!isset($_SESSION['login'])) { ?>
	    <form class="login" method="post" action=""> 
        <input type="text" name="login"><br>
        <input type="password" name="password"><br>
        <input class="submit" type="submit" name="submit" value="вход"></form>
        <?php } ?>
		<?php if (isset($_SESSION['login'])) { ?>
        <form method="POST" name="news_edit" action="">
        <input class="dl" type="submit" name="exit" value="Выйти(<?php echo $_SESSION['login']; ?>) ">
        </form>


<!-- /////////////////////////////////////////////////////////////////////// -->
<?php 
   $buz = mysqli_connect('localhost', 'root', '','intom');
   $buz->set_charset('utf8');
   $sql  = 'SELECT * FROM `applications` ORDER BY `address` ASC';
  // выбрать все наши строки из таблици ava
  $result = mysqli_query($buz, $sql);
  $ava = mysqli_fetch_all($result, MYSQLI_ASSOC);
  
  if (!empty($_POST['delet'])) {
  	$dbc = mysqli_connect('localhost', 'root', '','intom');
  	$dbc->set_charset('utf8');
    $id = mysqli_real_escape_string($dbc, trim($_POST['id']));
    $delet = "DELETE FROM `applications` WHERE `applications`.`id` = $id";
    $result = mysqli_query($dbc, $delet);
    header("Location: ".$_SERVER['HTTP_REFERER']);
    
  }
  if (!empty($_POST['done'])) {
  	$dbc = mysqli_connect('localhost', 'root', '','intom');
    $dbc->set_charset('utf8');
    $tagging= mysqli_real_escape_string($dbc, trim($_POST['tagging']));
    $id = mysqli_real_escape_string($dbc, trim($_POST['id']));
    $ttf = "UPDATE `applications` SET `done` = '$tagging' WHERE `applications`.`id` = $id";
    $adds= mysqli_query($dbc, $ttf);
    header("Location: ".$_SERVER['HTTP_REFERER']);
  }

 ?>

  <table >
  	<thead>
  <tr class="x">
  <th >№</th>
  <th>Ф.И.О</th>
  <th>Номер</th>
  <th>email</th>
  <th>Адрес</th>
  <th>Тариф</th>
  <th class="del">Действие</th>
  </tr>
 </thead>

<?php foreach($ava as $buz): 
?>

	<tbody>
 <tr <?php 
if ($buz["done"]==1) {
  ?>
  class="green"
  <?php 
}else {
  ?>
  class="" 
  <?php 
}
 ?>>
  <td " >
  <form method="POST" name="edit" action="">
   <input type="hidden" name="id" value=<?= $buz['id'] ?> >
   <input type="hidden" name="tagging" value="1" >
    <input class="№" type="submit" name="done" value="<?=$buz["id"]?>"=">
</form >
  </td>
  
  <td><?=$buz["name"]?></td>
  <td><?=$buz["number"]?></td>
  <td><?=$buz["email"]?></td>
  <td>ул.<?=$buz["address"]?> дом. <?=$buz["house"]?> кв. <?=$buz["apartment"]?></td>
  <td><?=$buz["rate"]?></td>
  <td >  
  	<form method="POST" name="news_edit" action="">
    <input  type="hidden" name="id" value=<?= $buz['id'] ?> >
    <input class="№"  type="submit" name="delet" value="удалить <?= $buz['id'] ?>"> 
  </td>
  </tbody>


<?php endforeach; ?>

       
    <?php }    ?>
</table>

<!-- /////////////////////////////////////////////////////////////////////////////////// -->





	</body>
	</html>	