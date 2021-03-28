<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{$site_name}</title>

  <!-- Bootstrap Grid -->
  <link rel="stylesheet" type="text/css" href="/css/main.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Custom -->
  <link rel="stylesheet" type="text/css" href="/css/main2.css">
  {include file = 'js_form.tpl'}
</head>
<body>

  <div id="wrapper">

    {include file = 'header.tpl'}

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>Регистрация</h3>
              <div class="block__content">
                

                <div class="full-text">
                  

    <form id="regForm" action="{$action_link}" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку {$action_link} методом "post" ***** -->
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
<!--**** Кнопочка (type="submit") отправляет данные на страничку {$action_link} ***** --> 
</p></form>


                </div>
              </div>
            </div>

          </section>
          
{include file = 'side_bar.tpl'}

        </div>
      </div>
    </div>

   {include file = 'footer.tpl'}

  </div>

</body>
</html>