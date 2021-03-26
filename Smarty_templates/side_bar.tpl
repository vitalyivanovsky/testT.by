<section class="content__right col-md-4">
            <div class="block">
              <h3>Мы_знаем</h3>
              <div class="block__content">
                <script type="text/javascript" src="//ra.revolvermaps.com/0/0/6.js?i=02op3nb0crr&amp;m=7&amp;s=320&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
              </div>
            </div>

            <div class="block">
              <h3>Топ читаемых статей</h3>
              <div class="block__content">
                <div class="articles articles__vertical">

              
              {foreach from=$articles_for_smarty item=article}
                   <article class="article">
                    <div class="article__image" style="background-image: url({$article.image})"></div>
                    <div class="article__info">
                      <a href="{$article.link_to_article}">{$article.article_name}</a>
                      <div class="article__info__meta">
                        <small>Категория: <a href="{$article.link_to_category}">
                            {$article.category_name} </a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: {$article.number_of_views}</div>
                      <div class="article__info__preview">{$article.text_of_article_shot}</div>
                    </div>
                  </article>
              {/foreach}
                </div>
              </div>
            </div>


          
            <div class="block">
              <h3>Комментарии</h3>
              <div class="block__content">
                <div class="articles articles__vertical">
                {foreach from=$coments_for_smarty item=$coment}
                  <article class="article">
                    <div class="article__image" style="background-image: url({$coment.img_gravatar})"></div>
                    <div class="article__info">
                      <a href="{$coment.link_to_article}">{$coment.coment_author}</a>
                      <div class="article__info__meta">{$coment.coment_date}</div>
                      <div class="article__info__preview">{$coment.coment_text_shot}</div>
                    </div>
                  </article>
                 {/foreach}
                </div>
              </div>
            </div>
           
          </section>