<?php
/* Smarty version 3.1.39, created on 2021-03-25 00:12:05
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605bab25c80011_11161243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b1b8666bd8c176e94673e49511528bd8ede41a1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\footer.tpl',
      1 => 1616620324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:js_animate.tpl' => 1,
  ),
),false)) {
function content_605bab25c80011_11161243 (Smarty_Internal_Template $_smarty_tpl) {
?>

<footer id="footer">
      <div class="container">
        <div class="footer__logo">
          <h1><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</h1>
        </div>
        <nav class="footer__menu">
          <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['about_me_url']->value;?>
">Обо мне</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['vk_url']->value;?>
" target="blank">Я Вконтакте</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['coopyright_url']->value;?>
">Правообладателям</a></li>
          </ul>
        </nav>
      </div>
      <?php $_smarty_tpl->_subTemplateRender('file:js_animate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer><?php }
}
