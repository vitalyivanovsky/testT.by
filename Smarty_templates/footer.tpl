{* Smarty *}


<footer id="footer">
      <div class="container">
        <div class="footer__logo">
          <h1>{$site_name}</h1>
        </div>
        <nav class="footer__menu">
          <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="{$about_me_url}">Обо мне</a></li>
            <li><a href="{$vk_url}" target="blank">Я Вконтакте</a></li>
            <li><a href="{$coopyright_url}">Правообладателям</a></li>
          </ul>
        </nav>
      </div>
      {include file = 'js_animate.tpl'}
    </footer>