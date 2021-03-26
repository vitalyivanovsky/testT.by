<?php

session_start();
/*
   

form
{$action_link}
action="article.php?id=<?php echo $art['id'];
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




    
         $article = mysqli_query($connection, "SELECT * FROM articles WHERE id = " . (int)$_GET['id']);

         if($art = mysqli_fetch_assoc($article)){
         mysqli_query($connection, "UPDATE articles SET viewes = (viewes + 1) WHERE id = " . (int)$art['id']);
    
    
          $article_for_smarty = array(
            'article_name'      =>  $art['article_name'],
            'img_article'       =>  $art['img'],
            'link_to_category'  =>  "/articles.php?category=" . $art['category'],
            'category_name'     =>  find_article_category_name($categories_for_smarty, $art['category']),
            'article_viewes'    =>  $art['viewes'],
            'text_article_full' =>  $art['text']
          );
             
                           
      $smarty->assign('article_for_smarty', $article_for_smarty);

      $smarty->assign('action_link', 'article.php?id=' . $art['id']);




                  
       if (isset($_POST['do_post']))  {
          if($_SESSION['login']) {
          mysqli_query($connection, "INSERT INTO coments (author, email, text, article_id) VALUES ('" . $_SESSION['login'] . "', '" . $_SESSION['email'] . "', '" . $_POST['text'] . "', " . $art['id'] . ")");
       } else {
         $smarty->assign('message_go_registr', 'Вы не зарегистрированы!');
       }
                  

}
             










        $coments = mysqli_query($connection, "SELECT * FROM coments WHERE article_id = " . $art['id'] . " ORDER BY date DESC"); 
             
             if (mysqli_num_rows($coments) <= 0) {
              $smarty -> assign('coments_exists', 'Комментариев нет!');
             }
             while ($coment = mysqli_fetch_assoc($coments)) {
                   

                    $coment_formated[0] = array(
                      'img_coment'      =>  'https://gravatar.com/avatar/' . md5($coment['email']) . 's=125',
                      'link_to_article' =>  'article.php?id=' . $coment['article_id'],
                      'coment_author'   =>  $coment['author'],
                      'coment_date'     =>  $coment['date'],
                      'coment_text'     =>  strip_tags($coment['text'])
                    ); 
                  $article_coments[] = $coment_formated[0];
                  }
                 
                  $smarty->assign('article_coments', $article_coments);

                 




        

    $smarty->display('article.tpl');        
} else {
  
  $smarty->display('article_not_exists.tpl');
}
?>