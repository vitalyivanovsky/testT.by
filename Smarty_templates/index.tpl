<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$site_name}</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	
</head>
<body>

  <div id="wrapper">
    {include file = 'header.tpl'}
     <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <a href="{$main_link_to_all_articles}">Все записи</a>
              <h3>Новейшее в блоге</h3>
               <div class="block__content">
                <div class="articles articles__horizontal">


                {foreach from=$articles_main_for_smarty item=$article}
                  <article class="article">
                    <div class="article__image" style="background-image: url({$article.img_article})"></div>
                    <div class="article__info">
                      <a href="{$article.link_to_article}">{$article.article_name}</a>
                      <div class="article__info__meta">                          
                        <small>Категория:  <a href="{$article.link_to_category}">{$article.category_name}</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: {$article.article_viewes}</div>
                      <div class="article__info__preview">{$article.text_article_shot}</div>
                    </div>
                  </article>
                  {/foreach}
                </div>
              </div>
            </div>

            <div class="block">
              <a href="{$link_to_first_category}">Все записи</a>
              <h3>{$first_category_name} [Новейшее]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">

                  {foreach from=$articles_first_for_smarty item=$article}
                  <article class="article">
                    <div class="article__image" style="background-image: url({$article.img_article})"></div>
                    <div class="article__info">
                      <a href="{$article.link_to_article}">{$article.article_name}</a>
                      <div class="article__info__meta">
                        <small>Категория:  <a href="{$article.link_to_category}">{$article.category_name}</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: {$article.article_viewes}</div>
                      <div class="article__info__preview">{$article.text_article_shot}</div>
                    </div>
                  </article>
                 {/foreach}

                </div>
              </div>
            </div>

         




            <div class="block">
              <a href="{$link_to_second_category}">Все записи</a>
              <h3>{$second_category_name} [Новейшее]</h3>
              <div class="block__content">
                <div class="articles articles__horizontal">
                  {foreach from=$articles_second_for_smarty item=$article}
                  <article class="article">
                    <div class="article__image" style="background-image: url({$article.img_article});"></div>
                    <div class="article__info">
                      <a href="{$article.link_to_article}">{$article.article_name}</a>
                      <div class="article__info__meta">
                          <small>Категория:  <a href="{$article.link_to_category}">{$article.category_name}</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: {$article.article_viewes}</div>
                      <div class="article__info__preview">{$article.text_article_shot}</div>
                    </div>
                  </article>
                 {/foreach}

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