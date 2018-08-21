<?php
require_once('../Views/View.php');
require_once('Model.php');

Class ArticleModel extends Model
{
    static function getArticles()
    {
        $allArticles = Model::getAll('article');
        Controller::getDisplayArticles($allArticles);
    }
}
?>