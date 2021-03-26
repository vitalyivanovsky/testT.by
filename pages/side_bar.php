<?php 

    $articles_for_smarty =  array();
    $categores = mysqli_query($connection, "SELECT * FROM categories");
    while($category = mysqli_fetch_assoc($categores)){
      $categores_arr[] = $category;
    }
    $articles = mysqli_query($connection, "SELECT * FROM articles ORDER BY viewes DESC LIMIT 2");
          while($article = mysqli_fetch_assoc($articles)){

              

              $image                = "../" . $article['img'];
              $link_to_article      = "/article.php?id=" . $article['id'];
              $article_name         = $article['article_name'];  
              $link_to_category     = "articles.php?category=" . $article['category'];
              $number_of_views      = $article['viewes'];
              $text_of_article_shot = mb_substr(strip_tags($article['text']), 0, 70, 'utf-8') . "...";


                $article_formated = array(
                'image'                => $image,
                'link_to_article'      => $link_to_article,
                'article_name'         => $article_name,
                'link_to_category'     => $link_to_category,
                'category_name'        => find_article_category_name($categories_for_smarty, $article['category']),
                'number_of_views'      => $number_of_views,
                'text_of_article_shot' => $text_of_article_shot
              );
              
        $articles_for_smarty[] = $article_formated;

      }

  $smarty->assign('articles_for_smarty', $articles_for_smarty);

   

                 
//коментарии сайдбара
           
 $coments = mysqli_query($connection, "SELECT * FROM coments ORDER BY id DESC LIMIT 2"); 
                 

                 
         while ($coment = mysqli_fetch_assoc($coments)) 
            {                   
              
              $img_gravatar     = ('https://gravatar.com/avatar/' . md5($coment['email']) . 's=125');
              $link_to_article  = ('/article.php?id=' . $coment['article_id']);
              $coment_text_shot = mb_substr(strip_tags($coment['text']), 0, 70, 'utf-8');


              $coments_formated = array(
              'img_gravatar'      =>   $img_gravatar,
              'link_to_article'   =>   $link_to_article,
              'coment_author'     =>   $coment['author'],
              'coment_date'       =>   $coment['date'],
              'coment_text_shot'  =>   $coment_text_shot
              );

              $coments_for_smarty[] = $coments_formated;
            }
                  

  $smarty->assign('coments_for_smarty', $coments_for_smarty);              
  ?>