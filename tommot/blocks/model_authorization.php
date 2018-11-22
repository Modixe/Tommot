<?php 


	$dbc = mysqli_connect('localhost', 'root', '', 'intom');
	$dbc->set_charset('utf8');

/////////////////////////////////////////////////////////////////////
        if (!empty($_POST['submit'])) {
	
	
$dbc = mysqli_connect('localhost', 'root', '', 'intom');

  if(!isset($_SESSION['login'])) {
  if(isset($_POST['submit'])) {
  	$dbc = mysqli_connect('localhost', 'root', '', 'intom');
    $login = mysqli_real_escape_string($dbc, trim($_POST['login']));
    $password = mysqli_real_escape_string($dbc, trim($_POST['password']));

    if(!empty($login) && !empty($password)) {
    	$dbc = mysqli_connect('localhost', 'root', '', 'intom');
      $query = "SELECT * FROM `users` WHERE login = '$login' ";
      $data = mysqli_query($dbc,$query);
      if(mysqli_num_rows($data) == 1) {

        $row = mysqli_fetch_assoc($data);
        $_SESSION['login']=$row['login'];
        $_SESSION['id']=$row['id'];
        $_SESSION['admin']=$row['admin'];
        
var_dump($row);


     
      }
      else {
        echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
      }
    }
    else {
      echo 'Извините вы должны заполнить поля правильно';
    }
  }
} 


	    } /////////////////////////////////////////////////////////////////////
        if (!empty($_POST['delet'])) {
	
	$dbc = mysqli_connect('localhost', 'root', '','intom');
    $id = mysqli_real_escape_string($dbc, trim($_POST['id']));
    $delet = "DELETE FROM `applications` WHERE `applications`.`id` = '$id'";
    $result = mysqli_query($dbc, $delet);
     echo  "<script>document.location.href = '/InTom/authorization'</script>";





	    } /////////////////////////////////////////////////////////////////////
	    if (!empty($_POST['delet1'])) {
	
    $dbc = mysqli_connect('localhost', 'root', '','intom');
    $dbc->set_charset('utf8');
    $tagging= mysqli_real_escape_string($dbc, trim($_POST['tagging']));
    $id = mysqli_real_escape_string($dbc, trim($_POST['id']));
    $ttf = "UPDATE `applications` SET `done` = '$tagging' WHERE `applications`.`id` = $id";
    $adds= mysqli_query($dbc, $ttf);
      
      echo  "<script>document.location.href = '/InTom/authorization'</script>";


	
	    } /////////////////////////////////////////////////////////////////////
	    if (!empty($_POST['exit'])) {
	
  session_unset();
  header("Location: ".$_SERVER['HTTP_REFERER']);


	
	    } /////////////////////////////////////////////////////////////////////
	    if (!empty($_POST['submit2'])) {
	
	echo "Hi";



	    }/////////////////////////////////////////////////////////////////////
	    if (!empty($_POST['submit6'])) {
	
	




	    }/////////////////////////////////////////////////////////////////////
	    if (!empty($_POST['submit7'])) {
	
	


	    } 
