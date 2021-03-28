<?php
/* Smarty version 3.1.39, created on 2021-03-17 15:39:10
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6051f86e834156_46477214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bad4fe7476376760dd6adeb6af3e6592cc3eece' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\article.tpl',
      1 => 1615984672,
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
function content_6051f86e834156_46477214 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h3><?php echo $_smarty_tpl->tpl_vars['article_for_smarty']->value['article_name'];?>
</h3>
              <div class="block__content">
                <img src="<?php echo $_smarty_tpl->tpl_vars['article_for_smarty']->value['img_article'];?>
">

                <div class="full-text">

                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['article_for_smarty']->value['img_article'];?>
);"></div>
                    <div class="article__info">
                     
                      <div class="article__info__meta">
                          
                        <small>Категория:  <a href="<?php echo $_smarty_tpl->tpl_vars['article_for_smarty']->value['link_to_category'];?>
"><?php echo $_smarty_tpl->tpl_vars['article_for_smarty']->value['category_name'];?>
</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: <?php echo $_smarty_tpl->tpl_vars['article_for_smarty']->value['article_viewes'];?>
</div>
                      <hr>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['article_for_smarty']->value['text_article_full'];?>
</div>
                    </div>
                  </article>
         
             <div class="block">
              <hr>
              <h3>Комментарии</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

             


                    <h3><?php echo $_smarty_tpl->tpl_vars['coments_exists']->value;?>
</h3>





                 
                  
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_coments']->value, 'coment');
$_smarty_tpl->tpl_vars['coment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coment']->value) {
$_smarty_tpl->tpl_vars['coment']->do_else = false;
?>
                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['coment']->value['img_coment'];?>
"></div>
                    <div class="article__info">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['coment']->value['link_to_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['coment']->value['coment_author'];?>
</a>
                      <div class="article__info__meta">

                          <?php echo $_smarty_tpl->tpl_vars['coment']->value['coment_date'];?>
 
                           
                          
                      </div>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['coment']->value['coment_text'];?>
</div>
                    </div>
                  </article>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div>
            </div>

         



          <div class="block" id="comment-add-form">
              <h3>Добавить комментарий</h3>
              <div class="block__content">
                <form class="form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['action_link']->value;?>
#comment-add-form">            
                  <div class="form__group">
                    <div class="row">
                      <div class="col-md-4">
                        
                      </div>
                       <div class="col-md-4">
                        <?php echo $_smarty_tpl->tpl_vars['message_go_registr']->value;?>

                      </div>
                    </div>
                  </div>
                  <div class="form__group">
                    <textarea name="text" required="" class="form__control" placeholder="Текст комментария ..."></textarea>
                  </div>
                  <div class="form__group">
                    <input type="submit" class="form__control" name="do_post" value="Добавить комментарий">
                  </div>
                </form>
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
