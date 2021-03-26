<?php
session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . '/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = $_SERVER['DOCUMENT_ROOT'] . '/Smarty_templates/';
$smarty->compile_dir = $_SERVER['DOCUMENT_ROOT'] . '/Smarty_templates_c/';
$smarty->config_dir = $_SERVER['DOCUMENT_ROOT'] . '/Smarty_configs/';
$smarty->cache_dir = $_SERVER['DOCUMENT_ROOT'] . '/Smarty_cache/';


require "includes/config.php";
include_once "includes/my_functions.php";
include "pages/header.php";
include "pages/side_bar.php";
include "pages/footer.php";


//вывод 4-х последних статей без JOIN с реюзом массива категорий из хедера
$articles_all_category = mysqli_query($connection, "SELECT * FROM articles ORDER BY id DESC LIMIT 4");


while ($article = mysqli_fetch_assoc($articles_all_category)) {


    unset($article_formated);
    $article_formated = array(
        'img_article'       => $article['img'],
        'link_to_article'   => "/article.php?id=" . $article['id'],
        'article_name'      => $article['article_name'],
        'link_to_category'  => "/articles.php?category=" . $article['category'],
        'category_name'     => find_article_category_name($categories_for_smarty, $article['category']),
        'article_viewes'    => $article['viewes'],
        'text_article_shot' => mb_substr(strip_tags($article['text']), 0, 100, 'utf-8') . "..."
    );

    $articles_main_for_smarty[] = $article_formated;
}


$smarty->assign('main_link_to_all_articles', '/articles.php');
$smarty->assign('articles_main_for_smarty', $articles_main_for_smarty);


//вывод 4-х последних статей 1-й категории  с JOIN (красивее но медленнее)
//$articles_first_category = mysqli_query($connection, "SELECT * FROM articles WHERE category = 1 ORDER BY id DESC LIMIT 4");
$articles_first_category = mysqli_query($connection, "SELECT * FROM articles INNER JOIN categories on articles.category=categories.id WHERE articles.category = 1 ORDER BY articles.id DESC LIMIT 4");


while ($article = mysqli_fetch_assoc($articles_first_category)) {


    unset($article_formated);
    $article_formated = array(
        'img_article'       => $article['img'],
        'link_to_article'   => "/article.php?id=" . $article['id'],
        'article_name'      => $article['article_name'],
        'link_to_category'  => "/articles.php?category=" . $article['category'],
        'category_name'     => find_article_category_name($categories_for_smarty, $article['category']),
        'article_viewes'    => $article['viewes'],
        'text_article_shot' => mb_substr(strip_tags($article['text']), 0, 100, 'utf-8') . "..."
    );

    $articles_first_for_smarty[] = $article_formated;

}


$smarty->assign('first_category_name', $categories_for_smarty[0]['category_name']);
$smarty->assign('link_to_first_category', "articles.php?category=1");
$smarty->assign('articles_first_for_smarty', $articles_first_for_smarty);


//вывод 4-х последних статей 2-й категории                      
$articles_second_category = mysqli_query($connection, "SELECT * FROM articles WHERE category = 2 ORDER BY id DESC LIMIT 4");


while ($article = mysqli_fetch_assoc($articles_second_category)) {


    unset($article_formated);
    $article_formated = array(
        'img_article'       => $article['img'],
        'link_to_article'   => "/article.php?id=" . $article['id'],
        'article_name'      => $article['article_name'],
        'link_to_category'  => "/articles.php?category=" . $article['category'],
        'category_name'     => find_article_category_name($categories_for_smarty, $article['category']),
        'article_viewes'    => $article['viewes'],
        'text_article_shot' => mb_substr(strip_tags($article['text']), 0, 100, 'utf-8') . "..."
    );

    $articles_second_for_smarty[] = $article_formated;

}


$smarty->assign('second_category_name', $categories_for_smarty[1]['category_name']);
$smarty->assign('link_to_second_category', "articles.php?category=2");
$smarty->assign('articles_second_for_smarty', $articles_second_for_smarty);


$smarty->display('index.tpl');

?>