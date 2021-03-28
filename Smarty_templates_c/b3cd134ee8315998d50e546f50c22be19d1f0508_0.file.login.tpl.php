<?php
/* Smarty version 3.1.39, created on 2021-03-17 13:41:34
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6051dcdeb01f69_33497625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cd134ee8315998d50e546f50c22be19d1f0508' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\login.tpl',
      1 => 1615977531,
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
function content_6051dcdeb01f69_33497625 (Smarty_Internal_Template $_smarty_tpl) {
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
              <h3>Вход</h3>
              <div class="block__content">
                

                <div class="full-text">
                  <?php echo $_smarty_tpl->tpl_vars['registration_result']->value;?>


    <form action="<?php echo $_smarty_tpl->tpl_vars['action_link']->value;?>
" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit_login" value="Войти">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>


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
