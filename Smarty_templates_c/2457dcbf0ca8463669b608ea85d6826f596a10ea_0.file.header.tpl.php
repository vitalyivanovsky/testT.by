<?php
/* Smarty version 3.1.39, created on 2021-03-19 19:52:44
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6054d6dc0488b6_58130596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2457dcbf0ca8463669b608ea85d6826f596a10ea' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\header.tpl',
      1 => 1616172762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6054d6dc0488b6_58130596 (Smarty_Internal_Template $_smarty_tpl) {
?><header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</h1>            
          </div>
          
          <nav class="header__top__menu">
            <ul>
              <li><a href="/">Главная</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['about_me_url']->value;?>
">Обо мне</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['vk_url']->value;?>
" target="_blank">Я Вконтакте</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_register']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['registr_button']->value;?>
</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['link_login']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['login_or_name']->value;?>
</a></li>
              <li><a>Последний вход: <?php echo $_smarty_tpl->tpl_vars['last_logon']->value;?>
</a></li>
            </ul>
          </nav>
        </div>
      </div>


 <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                    
                    <li><a href="/articles.php?category=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>
</a></li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
            </ul>
          </nav>
        </div>
      </div>
    </header><?php }
}
