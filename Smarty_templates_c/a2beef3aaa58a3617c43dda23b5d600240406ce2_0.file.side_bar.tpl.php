<?php
/* Smarty version 3.1.39, created on 2021-03-15 10:37:29
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\side_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f0eb99bb435_97297979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2beef3aaa58a3617c43dda23b5d600240406ce2' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\side_bar.tpl',
      1 => 1615793848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604f0eb99bb435_97297979 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="content__right col-md-4">
            <div class="block">
              <h3>Мы_знаем</h3>
              <div class="block__content">
                <?php echo '<script'; ?>
 type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"><?php echo '</script'; ?>
>
              </div>
            </div>

            <div class="block">
              <h3>Топ читаемых статей</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

              
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles_for_smarty']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                   <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
)"></div>
                    <div class="article__info">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_name'];?>
</a>
                      <div class="article__info__meta">
                        <small>Категория: <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link_to_category'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['article']->value['category_name'];?>
 </a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: <?php echo $_smarty_tpl->tpl_vars['article']->value['number_of_views'];?>
</div>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['article']->value['text_of_article_shot'];?>
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
              <h3>Комментарии</h3>
              <div class="block__content">
                <div class="articles articles__vertical">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coments_for_smarty']->value, 'coment');
$_smarty_tpl->tpl_vars['coment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coment']->value) {
$_smarty_tpl->tpl_vars['coment']->do_else = false;
?>
                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['coment']->value['img_gravatar'];?>
)"></div>
                    <div class="article__info">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['coment']->value['link_to_article'];?>
"><?php echo $_smarty_tpl->tpl_vars['coment']->value['coment_author'];?>
</a>
                      <div class="article__info__meta"><?php echo $_smarty_tpl->tpl_vars['coment']->value['coment_date'];?>
</div>
                      <div class="article__info__preview"><?php echo $_smarty_tpl->tpl_vars['coment']->value['coment_text_shot'];?>
</div>
                    </div>
                  </article>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div>
            </div>
           
          </section><?php }
}
