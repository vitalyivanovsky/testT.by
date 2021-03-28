<?php
/* Smarty version 3.1.39, created on 2021-03-15 21:59:43
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\article_not_exists.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604fae9f0641d3_98924776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e8c0468ed4a03b0ef618501301d789b3dc4a66a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\article_not_exists.tpl',
      1 => 1615834780,
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
function content_604fae9f0641d3_98924776 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h3>Запрошенной статьи не существует!</h3>
              <div class="block__content">
                <img src="../img/no_img.svg">

                <div class="full-text">

                  

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                     
                      <div class="article__info__meta">
                          
                        <small><a href="#"></a></small>
                      </div>
                      <div class="article__info__meta"></div>
                      <hr>
                      <div class="article__info__preview"></div>
                    </div>
                  </article>


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
