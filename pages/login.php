<?php
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/libs/Smarty.class.php');
      $smarty = new Smarty();
      $smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates/';
      $smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates_c/';
      $smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_configs/';
      $smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_cache/';


require "../includes/config.php";
include_once "../includes/my_functions.php";
include "../pages/header.php";
include "../pages/side_bar.php";
include "../pages/footer.php";

$smarty->assign('action_link', '/pages/login.php');


if(isset($_POST['submit_login'])){
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

   if (empty($login) or empty($password)) {
     $smarty->assign('registration_result', 'Вы ввели не всю информацию, вернитесь назад и заполните все поля!');
   } else {
            $login     = stripslashes($login);
            $login     = htmlspecialchars($login);
            $login     = trim($login);
            $password  = stripslashes($password);
            $password  = htmlspecialchars($password);            
            $password  = trim($password);
            //$password  = password_verify($password, hash)


            $result = mysqli_query($connection, "SELECT * FROM users WHERE login='$login'");
            $myrow = mysqli_fetch_array($result);
            //print_r($myrow);
            //exit();
            if (empty($myrow['id'])) {
            $smarty->assign('registration_result', 'такого логина нет!');
            } else {
         
            if (!password_verify($password,  $myrow['password'])) {
            	$smarty->assign('registration_result', 'пароль не верен!');
            } else {
            	$_SESSION['login'] = $login;
              $_SESSION['email'] = $myrow['email'];
              setcookie("last_time", time(), time()+60*60*24*365, "/", "testt.by");
            	//$smarty->assign('registration_result', 'Вход успешен!');
              header('Location: /');
            }
           
    }
          
  }      
}



$smarty->display('login.tpl');
?>