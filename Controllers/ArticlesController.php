<?php
require_once('../Models/ArticleModel.php');

Class ArticlesController extends Controller
{
    function __construct()
    {}

    function __destruct()
    {}
        
    static function articles()
    {
        $allArticles = ArticleModel::getArticles();
    }
}
?>