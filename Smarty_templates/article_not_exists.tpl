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
              <h3>Запрошенной статьи не существует!</h3>
              <div class="block__content">
                <img src="../img/no_img.svg">

                <div class="full-text">

                  

                  <article class="article">
                    <div class="article__image"></div>
                    <div class="article__info">
                     
                      <div class="article__info__meta">
                          
                        <small><a href="#"></a></small>
                      </div>
                      <div class="article__info__meta"></div>
                      <hr>
                      <div class="article__info__preview"></div>
                    </div>
                  </article>


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