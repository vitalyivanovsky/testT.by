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
              <h3>Все статьи</h3>
               <div class="block__content">
                <div class="articles articles__horizontal">
                {foreach from=$articles_bycategory_for_smarty item=$art}
                  <article class="article">
                    <div class="article__image" style="background-image: url({$art.article_image})"></div>
                    <div class="article__info">
                      <a href="{$art.link_to_article}">{$art.article_name}</a>
                      <div class="article__info__meta">                         
                        <small>Категория:  <a href="{$art.link_to_category}">{$art.category_name}</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: {$art.article_viewes}</div>
                      <div class="article__info__preview">{$art.article_text_shot}</div>
                    </div>
                  </article>                              
                {/foreach}           
                </div>

            Страница:
            <a href="{$link_previos_cat_page}">{$laquo}</a>
            {$page_number}
            <a href="{$link_next_cat_page}">{$raquo}</a>
              

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