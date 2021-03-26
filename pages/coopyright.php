<?php
session_start();
require "../includes/config.php";
include_once "../includes/my_functions.php";
require_once($_SERVER['DOCUMENT_ROOT'].'/libs/Smarty.class.php');
      $smarty = new Smarty();
      $smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates/';
      $smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates_c/';
      $smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_configs/';
      $smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_cache/';
      //** раскомментируйте следующую строку для отображения отладочной консоли
      //$smarty->debugging = true;

      
     //$smarty->assign('site_name', $config['title']);
     //$smarty_coopyright->assign('header', include ("header.php"));
     //$smarty_coopyright->assign('side_bar', include ("side_bar.php"));
     //$smarty_coopyright->assign('footer', include ("footer.php"));




  include "../pages/header.php";       
  include "../pages/side_bar.php";
 
  include "../pages/footer.php";
  

    $smarty->display('coopyright.tpl');
  



/*

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{$site_name}</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/css/main.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/css/main2.css">
</head>
<body>

  <div id="wrapper">

    <?php 
 //   $tmp = include ("header.php");
    $tm;
     ?>
cdfdsfsd
    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>Coopyright</h3>
              <div class="block__content">
                <div class="full-text">
<h1>I am</h1>

<p>Bla Bla Bla Bla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla Bla</p>


                </div>
              </div>
            </div>

          </section>
          
       <?php include ("side_bar.php"); ?>

        </div>
      </div>
    </div>

   <?php include ("footer.php"); ?>

  </div>

</body>
</html>
*/
?>