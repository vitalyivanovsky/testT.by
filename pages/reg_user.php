<?php
require "../includes/config.php";
require "../includes/my_functions.php";

$errors = array();

  if (isset($_POST['login'])) {
    $login = $_POST['login'];    
    if ($login == '') { 
      $errors[] = "логин не указан";
      unset($login);
    }
  }
  
  if (isset($_POST['password'])) {
  $password = $_POST['password'];  
  if ($password =='') {
    $errors[] = "пароль не указан";
    unset($password);
    }
  }

  if (isset($_POST['email'])) {
  $email  = $_POST['email'];  
  $email = verifyEmailApi($email);
  
 
  if ($email == false) {
  	$errors[] =  "email не указан/корректен";
    unset($email);
    }
  }
  
   if (empty($login) or empty($password)  or empty($email)) {
     echo json_encode($errors);
   } else {
            $login     = stripslashes($login);
            $login     = htmlspecialchars($login);
            $login     = trim($login);
            $password  = stripslashes($password);
            $password  = htmlspecialchars($password);
            $password  = trim($password);
            $password  = password_hash($password, PASSWORD_DEFAULT);
            $email     = stripslashes($email);
            $email     = htmlspecialchars($email);
            $email     = trim($email);

            $result = mysqli_query($connection, "SELECT id FROM users WHERE login='$login'");
            $myrow = mysqli_fetch_array($result);
            //print_r($myrow);
            //exit();
            if (!empty($myrow['id'])) {
                 echo json_encode("Извините, введённый вами логин уже зарегистрирован");
            } else {
         // если такого нет, то сохраняем данные
            $result2 = mysqli_query ($connection, "INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");
            // Проверяем, есть ли ошибки
            if ($result2=='TRUE')
            {
            echo json_encode("Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.");             
            }
         else {
          echo json_encode('Ошибка! Вы не зарегистрированы.');   
           
            }
    }
}
?>