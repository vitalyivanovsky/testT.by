<header id="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top__logo">
            <h1>{$site_name}</h1>            
          </div>
          
          <nav class="header__top__menu">
            <ul>
              <li><a href="/">Главная</a></li>
              <li><a href="{$about_me_url}">Обо мне</a></li>
              <li><a href="{$vk_url}" target="_blank">Я Вконтакте</a></li>
              <li><a href="{$link_register}">{$registr_button}</a></li>
              <li><a href="{$link_login}">{$login_or_name}</a></li>
              <li><a>Последний вход: {$last_logon}</a></li>
            </ul>
          </nav>
        </div>
      </div>


 <div class="header__bottom">
        <div class="container">
          <nav>
            <ul>
              {foreach $categories as $cat}
                    
                    <li><a href="/articles.php?category={$cat['id']}">{$cat['category_name']}</a></li>
              {/foreach}
              
            </ul>
          </nav>
        </div>
      </div>
    </header>