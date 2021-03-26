<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/libs/Smarty.class.php');
      $smarty = new Smarty();
      $smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates/';
      $smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates_c/';
      $smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_configs/';
      $smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_cache/';


$jQurySorce = '<script src="../js/jquery-3.6.0.js" type="text/javascript"></script>';
$jsSorce    = '<script src="../js/script.js" type="text/javascript"></script>';
$smarty->assign('jQurySorce', $jQurySorce);
$smarty->assign('jsSorce', $jsSorce);

require "../includes/config.php";
include_once "../includes/my_functions.php";
include "../pages/header.php";
include "../pages/side_bar.php";
include "../pages/footer.php";
$smarty->assign('action_link', '#');
//$smarty->assign('action_link', '/pages/registration.php');

/*
if(isset($_POST['submit_reg'])){
  if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') { 
      unset($login);
    }
  }
  
  if (isset($_POST['password'])) {
  $password=$_POST['password'];
  if ($password =='') {
    unset($password);
    }
  }

  if (isset($_POST['email'])) {
  $email  = $_POST['email'];
  $email  = filter_var($email, FILTER_VALIDATE_EMAIL);
 
  if ($email == false) {
    unset($email);
    }
  }
  
   if (empty($login) or empty($password)  or empty($email)) {
     $smarty->assign('registration_result', 'Вы ввели не всю информацию, вернитесь назад и заполните все поля!');
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
            $smarty->assign('registration_result', 'Извините, введённый вами логин уже зарегистрирован. Введите другой логин.');     echo("Извините, введённый вами логин уже зарегистрирован");
            } else {
         // если такого нет, то сохраняем данные
            $result2 = mysqli_query ($connection, "INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");
            // Проверяем, есть ли ошибки
            if ($result2=='TRUE')
            {
            $smarty->assign('registration_result', "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт.");             
            }
         else {
          $smarty->assign('registration_result', 'Ошибка! Вы не зарегистрированы.');   
           
            }
    }
          
  }      
}*/
$smarty->display('registration.tpl');

/*

<html>
    <head>
    <title>Регистрация</title>
    </head>
    <body>
    <h2>Регистрация</h2>
    <form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
    </body>
    </html>

    */
    ?>