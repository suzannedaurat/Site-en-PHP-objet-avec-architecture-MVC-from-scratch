<?php

Class View
{
    static function DisplayArticles($data)
    {
        require_once('../Views/Articles/ArticlesViews.php');
        return $data;
    }

    static function DisplayUsers($data)
    {
        require_once('../Views/Users/UsersViews.php');
        return $data;
    }

    static function DisplayError()
    {
        require_once('../Views/errorView.php');
    }

    static function displayForWriter($data)
    {
        require_once('../Views/Articles/ArticlesWriterViews.php');
        return $data;
    }

    static function displayForAdmin($data)
    {
        require_once('../Views/Articles/ArticlesAdminViews.php');
        return $data;
    }
}
?>