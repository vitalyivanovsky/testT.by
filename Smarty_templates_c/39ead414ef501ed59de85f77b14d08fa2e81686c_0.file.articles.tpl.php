<?php
/* Smarty version 3.1.39, created on 2021-03-16 22:27:52
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605106b8d37330_91850394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39ead414ef501ed59de85f77b14d08fa2e81686c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\articles.tpl',
      1 => 1615922871,
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
function content_605106b8d37330_91850394 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h3>Все статьи</h3>
               <div class="block__content">
                <div class="articles articles__horizontal">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles_bycategory_for_smarty']->value, 'art');
$_smarty_tpl->tpl_vars['art']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->do_else = false;
?>
                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['art']->value['article_image'];?>
)"></div>
                    <div class="article__info">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['link_to_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['article_name'];?>
</a>
                      <div class="article__info__meta">                         
                        <small>Категория:  <a href="<?php echo $_smarty_tpl->tpl_vars['art']->value['link_to_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['category_name'];?>
</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: <?php echo $_smarty_tpl->tpl_vars['art']->value['article_viewes'];?>
</div>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['art']->value['article_text_shot'];?>
</div>
                    </div>
                  </article>                              
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>           
                </div>

            Страница:
            <a href="<?php echo $_smarty_tpl->tpl_vars['link_previos_cat_page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['laquo']->value;?>
</a>
            <?php echo $_smarty_tpl->tpl_vars['page_number']->value;?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['link_next_cat_page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['raquo']->value;?>
</a>
              

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
