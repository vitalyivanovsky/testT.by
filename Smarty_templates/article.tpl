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
</head>
<body>

  <div id="wrapper">

    {include file = 'header.tpl'}
    
    


        
    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>{$article_for_smarty.article_name}</h3>
              <div class="block__content">
                <img src="{$article_for_smarty.img_article}">

                <div class="full-text">

                  <article class="article">
                    <div class="article__image" style="background-image: url({$article_for_smarty.img_article});"></div>
                    <div class="article__info">
                     
                      <div class="article__info__meta">
                          
                        <small>Категория:  <a href="{$article_for_smarty.link_to_category}">{$article_for_smarty.category_name}</a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: {$article_for_smarty.article_viewes}</div>
                      <hr>
                      <div class="article__info__preview">{$article_for_smarty.text_article_full}</div>
                    </div>
                  </article>
         
             <div class="block">
              <hr>
              <h3>Комментарии</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

             


                    <h3>{$coments_exists}</h3>





                 
                  
                {foreach from=$article_coments item=$coment}
                  <article class="article">
                    <div class="article__image" style="background-image: url({$coment.img_coment}"></div>
                    <div class="article__info">
                      <a href="{$coment.link_to_article}">{$coment.coment_author}</a>
                      <div class="article__info__meta">

                          {$coment.coment_date} 
                           
                          
                      </div>
                      <div class="article__info__preview">{$coment.coment_text}</div>
                    </div>
                  </article>
                {/foreach}
                </div>
              </div>
            </div>

         



          <div class="block" id="comment-add-form">
              <h3>Добавить комментарий</h3>
              <div class="block__content">
                <form class="form" method="POST" action="{$action_link}#comment-add-form">            
                  <div class="form__group">
                    <div class="row">
                      <div class="col-md-4">
                        
                      </div>
                       <div class="col-md-4">
                        {$message_go_registr}
                      </div>
                    </div>
                  </div>
                  <div class="form__group">
                    <textarea name="text" required="" class="form__control" placeholder="Текст комментария ..."></textarea>
                  </div>
                  <div class="form__group">
                    <input type="submit" class="form__control" name="do_post" value="Добавить комментарий">
                  </div>
                </form>
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