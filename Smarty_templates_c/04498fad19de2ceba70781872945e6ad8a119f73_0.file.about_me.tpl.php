<?php
/* Smarty version 3.1.39, created on 2021-03-16 22:37:46
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\about_me.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6051090a5ad0e9_20930935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04498fad19de2ceba70781872945e6ad8a119f73' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\about_me.tpl',
      1 => 1615923285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:side_bar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6051090a5ad0e9_20930935 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/css/main.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/css/main2.css">
</head>
<body>

  <div id="wrapper">

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>Обо мне</h3>
              <div class="block__content">
                <img src="../img/about_my.jpg">

                <div class="full-text">
<h1>Я собакен</h1>

<p>ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв ГАВ гав ГаВ гАв </p>


                </div>
              </div>
            </div>

          </section>
          
<?php $_smarty_tpl->_subTemplateRender('file:side_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>
    </div>

   <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>

</body>
</html><?php }
}
