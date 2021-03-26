<?php
session_start();
      //require($_SERVER['DOCUMENT_ROOT']."/includes/config.php");
     /* require_once($_SERVER['DOCUMENT_ROOT'].'/libs/Smarty.class.php');
      $smarty = new Smarty();
      $smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates/';
      $smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates_c/';
      $smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_configs/';
      $smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_cache/';*/
      //** раскомментируйте следующую строку для отображения отладочной консоли
      //$smarty->debugging = true;

      
     //$smarty_header->assign('site_name', $config['title']);
     //$smarty_header->assign('about_me_url', '/pages/about_me.php');
     //$smarty_header->assign('vk_url', $config['vkLink']);

      

  

      $categories_t = mysqli_query($connection, "SELECT * FROM categories");
      //$categories_for_smarty = array();
      while ($cat = mysqli_fetch_assoc($categories_t)){
          $categories_for_smarty[] = $cat;
        }
      

      if (!$_SESSION['login']) {
        $smarty->assign('login_or_name', 'Вход');
        $smarty->assign('link_login', '/pages/login.php');
        $smarty->assign('link_register', '/pages/registration.php');
        $smarty->assign('registr_button', 'Регистрация');
      } else {
         $smarty->assign('login_or_name', 'выйти ' . $_SESSION['login']);
         $smarty->assign('link_login', '/pages/unset_session.php');         
      }


      if (isset($_COOKIE['last_time']))
      {
        $time = date('H:i:s', $_COOKIE['last_time']);
      }
      $smarty->assign('last_logon', $time);
      $smarty->assign('categories', $categories_for_smarty);

      //$smarty->display('header.tpl');
?>