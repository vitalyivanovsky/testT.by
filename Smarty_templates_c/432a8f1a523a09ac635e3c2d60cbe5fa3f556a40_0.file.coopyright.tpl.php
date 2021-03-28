<?php
/* Smarty version 3.1.39, created on 2021-03-14 23:16:29
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\coopyright.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604e6f1deefc18_44323034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '432a8f1a523a09ac635e3c2d60cbe5fa3f556a40' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\coopyright.tpl',
      1 => 1615745666,
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
function content_604e6f1deefc18_44323034 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h3>Coopyright</h3>
              <div class="block__content">
                <div class="full-text">
<h1>I am</h1>

<p>Bla Bla Bla Bla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla BlaBla Bla Bla</p>


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
