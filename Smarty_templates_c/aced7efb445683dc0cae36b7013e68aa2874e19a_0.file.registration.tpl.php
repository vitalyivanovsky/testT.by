<?php
/* Smarty version 3.1.39, created on 2021-03-27 19:36:32
  from 'C:\OpenServer\domains\testT.by\Smarty_templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_605f5f103f6636_10632766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aced7efb445683dc0cae36b7013e68aa2874e19a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\testT.by\\Smarty_templates\\registration.tpl',
      1 => 1616862988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:js_form.tpl' => 1,
    'file:header.tpl' => 1,
    'file:side_bar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_605f5f103f6636_10632766 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php $_smarty_tpl->_subTemplateRender('file:js_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
              <h3>Регистрация</h3>
              <div class="block__content">
                

                <div class="full-text">
                  

    <form id="regForm" action="<?php echo $_smarty_tpl->tpl_vars['action_link']->value;?>
" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку <?php echo $_smarty_tpl->tpl_vars['action_link']->value;?>
 методом "post" ***** -->
<p>
    <label id="nameTitle">Ваш логин:<br></label>
    <input name="login" id="login" type="text" size="15" maxlength="15">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label id="passTitle">Ваш пароль:<br></label>
    <input name="password" id="password" type="password" size="15" maxlength="15">
    </p>
<p>
    <label id="emailTitle">Ваш email:<br></label>
    <input name="email" id="email" type="text" size="55" maxlength="55">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit_reg" value="Зарегистрироваться">
    <br>
    <label id="reg_res"></label>
<!--**** Кнопочка (type="submit") отправляет данные на страничку <?php echo $_smarty_tpl->tpl_vars['action_link']->value;?>
 ***** --> 
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
