<?php
session_start();
/*
{$article_image}
{$link_to_article}
{$article.name}
{$link_to_category}
{$category_name}
{$article_viewes}
{$article_text_shot}
{$link_previos_cat_page}
{$laquo}
{$page_number}
{$link_next_cat_page}
{$raquo}
*/

require_once($_SERVER['DOCUMENT_ROOT'].'/libs/Smarty.class.php');
      $smarty = new Smarty();
      $smarty->template_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates/';
      $smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_templates_c/';
      $smarty->config_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_configs/';
      $smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'].'/Smarty_cache/';



require "includes/config.php";
include_once "includes/my_functions.php";
include "pages/header.php";
include "pages/side_bar.php";
include "pages/footer.php";

$perpage = 4;

$offset = 0;

$page = (int) $_GET['page'];
$category_from_get = (int) $_GET['category'];

$avaible_categories = mysqli_query($connection, "SELECT id FROM categories");
while ($avaible_categ = mysqli_fetch_assoc($avaible_categories)){
  $avaible_cat[] = $avaible_categ['id'];
}

if (in_array($category_from_get, $avaible_cat)){
  $articles_count = mysqli_query($connection, "SELECT COUNT('id') as count FROM articles WHERE category = " . $category_from_get);
  
} else {
  $articles_count = mysqli_query($connection, "SELECT COUNT('id') as count FROM articles");
}


$artic_count = mysqli_fetch_assoc($articles_count);
$total_articles = $artic_count['count'];
$pages = ceil($total_articles / $perpage);

if ($page <=1 || $page > $pages){
  $page = 1;
}

$offset = ($perpage * $page) - $perpage;






if (in_array($category_from_get, $avaible_cat)){
  $articles = mysqli_query($connection, "SELECT * FROM articles WHERE category = " .$category_from_get . " ORDER BY id DESC LIMIT $offset, $perpage");
  
} else {
  $articles = mysqli_query($connection, "SELECT * FROM articles  ORDER BY id DESC LIMIT $offset, $perpage");
  
}



                  while ($art = mysqli_fetch_assoc($articles)){ 

              

                      $articles_bycategory_for_smarty[] = array(
                        'article_image'     =>    $art['img'],
                        'link_to_article'   =>    'article.php?id=' . $art['id'],
                        'article_name'      =>    $art['article_name'],
                        'link_to_category'  =>    'articles.php?category=' . $art['category'],
                        'category_name'     =>    find_article_category_name($categories_for_smarty, $art['category']),
                                         
                        'article_viewes'    =>    $art['viewes'],
                        'article_text_shot' =>    mb_substr(strip_tags($art['text']), 0, 100, 'utf-8')
                      );                
                    }


$smarty->assign('articles_bycategory_for_smarty', $articles_bycategory_for_smarty);

                    //print_r($articles_bycategory_for_smarty);
                    

/*

                  <article class="article">
                    <div class="article__image" style="background-image: url(<?php echo $art['img']; ?>);"></div>
                    <div class="article__info">
                      <a href="article.php?id=<?php echo $art['id']; ?>"><?php echo $art['article_name']; ?> </a>
                      <div class="article__info__meta">
                          <?php
                            foreach ($categories as $cat){

                               $categ = false;  

                              if ($cat['id'] == $art['category'])
                                {
                                    $categ = $cat;
                                    break;
                                } else {
                                  $categ['category_name'] = "No category!";
                                }

                            }
                          ?>
                        <small>Категория:  <a href="articles.php?category= <?php echo ($categ['id']) ?>"><?php echo ($categ['category_name']); ?></a></small>
                      </div>
                      <div class="article__info__meta">Просмотров: <?php echo ($art['viewes']); ?></div>
                      <div class="article__info__preview"><?php echo mb_substr(strip_tags($art['text']), 0, 70, 'utf-8').' ...'; ?></div>
                    </div>
                  </article>
                  <?php 
                  }
                  ?>
                  
                           
                </div>

            <?php
            */
                   $smarty->assign('page_number', $page);


              if ($category_from_get){
                  if ($page > 1 ) {
                    $smarty->assign('laquo', '&laquo');
                    $smarty->assign('link_previos_cat_page', ('articles.php?page=' . ($page - 1) . '&category=' . $category_from_get));
                    
                  }
                    
                  if ($page < $pages) {
                     $smarty->assign('raquo', '&raquo');
                    $smarty->assign('link_next_cat_page', ('articles.php?page=' . ($page + 1) . '&category=' . $category_from_get));
                  }
              } else {
                 if ($page > 1 ) {
                    $smarty->assign('laquo', '&laquo');
                    $smarty->assign('link_previos_cat_page', ('articles.php?page=' . ($page - 1)));
                    
                  }
                    
                  if ($page < $pages) {
                     $smarty->assign('raquo', '&raquo');
                    $smarty->assign('link_next_cat_page', ('articles.php?page=' . ($page + 1)));
                  }

              }
           /*


              </div>            
            </div>
          </section>


  <?php include "pages/side_bar.php"; ?>
        </div>
      </div>
    </div>

    <?php include "pages/footer.php"; ?>

  </div>

</body>
</html>
*/
$smarty->display('articles.tpl');
?>