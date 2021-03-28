<?php
/* Smarty version 3.1.39, created on 2021-03-15 17:28:07
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f6ef7447000_37923399',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e6e571ba529b973731e2f034cb548810f59695' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\index.tpl',
      1 => 1615818485,
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
function content_604f6ef7447000_37923399 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	
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
              <a href="<?php echo $_smarty_tpl->tpl_vars['main_link_to_all_articles']->value;?>
">Все записи</a>
              <h3>Новейшее в блоге</h3>
               <div class="block__content">
                <div class="articles articles__horizontal">


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles_main_for_smarty']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['article']->value['img_article'];?>
)"></div>
                    <div class="article__info">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_name'];?>
</a>
                      <div class="article__info__meta">                          
                        <small>Категория:  <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['category_name'];?>
</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: <?php echo $_smarty_tpl->tpl_vars['article']->value['article_viewes'];?>
</div>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['article']->value['text_article_shot'];?>
</div>
                    </div>
                  </article>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div>
            </div>

            <div class="block">
              <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_first_category']->value;?>
">Все записи</a>
              <h3><?php echo $_smarty_tpl->tpl_vars['first_category_name']->value;?>
 [Новейшее]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles_first_for_smarty']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['article']->value['img_article'];?>
)"></div>
                    <div class="article__info">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_name'];?>
</a>
                      <div class="article__info__meta">
                        <small>Категория:  <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['category_name'];?>
</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: <?php echo $_smarty_tpl->tpl_vars['article']->value['article_viewes'];?>
</div>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['article']->value['text_article_shot'];?>
</div>
                    </div>
                  </article>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
              </div>
            </div>

         




            <div class="block">
              <a href="<?php echo $_smarty_tpl->tpl_vars['link_to_second_category']->value;?>
">Все записи</a>
              <h3><?php echo $_smarty_tpl->tpl_vars['second_category_name']->value;?>
 [Новейшее]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles_second_for_smarty']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['article']->value['img_article'];?>
);"></div>
                    <div class="article__info">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_name'];?>
</a>
                      <div class="article__info__meta">
                          <small>Категория:  <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['category_name'];?>
</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: <?php echo $_smarty_tpl->tpl_vars['article']->value['article_viewes'];?>
</div>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['article']->value['text_article_shot'];?>
</div>
                    </div>
                  </article>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
