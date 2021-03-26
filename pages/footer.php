<?php
      //require($_SERVER['DOCUMENT_ROOT']."/includes/config.php");
     /* require_once($_SERVER['DOCUMENT_ROOT'].'/libs/Smarty.class.php');
      $smarty = new Smarty();
      $smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates/';
      $smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates_c/';
      $smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_configs/';
      $smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_cache/';
      //** раскомментируйте следующую строку для отображения отладочной консоли
      //$smarty->debugging = true;
*/
      
      $smarty->assign('site_name', $config['title']);
      $smarty->assign('about_me_url', '/pages/about_me.php');
      $smarty->assign('vk_url', $config['vkLink']);
      $smarty->assign('coopyright_url', '/pages/coopyright.php');

     // $smarty->display('footer.tpl');
?>