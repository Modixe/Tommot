<?php 
       $dbc = mysqli_connect('localhost', 'root', '', 'intom');
       $dbc->set_charset('utf8');
       $user_name= mysqli_real_escape_string($dbc, trim($_POST['name']));  
       $user_phone= mysqli_real_escape_string($dbc, trim($_POST['phone'])); 
       
       $result = mysqli_query($dbc, $user_name);
       $call= "INSERT INTO `call back` (`id`, `name`, `phone`) VALUES (NULL, '$user_name', '$user_phone')";
       $adds= mysqli_query($dbc, $call);
       var_dump ($user_name);
       var_dump ($user_phone);
       header("Location: ".$_SERVER['HTTP_REFERER']);
 ?>