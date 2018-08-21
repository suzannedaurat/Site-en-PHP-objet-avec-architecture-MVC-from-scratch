<?php
require_once('../Controllers/ArticlesController.php');
require_once('../Config/db.php');

Abstract Class Model
{
    protected static $_db;

    function getAll($table)
    {
        self::$_db = connectPDO::getInstance();
        $my_query = "SELECT * FROM $table";
        $query = self::$_db->prepare($my_query);
        $query->execute();
        $allItems = $query->fetchAll(PDO::FETCH_ASSOC);
        return $allItems;
    }
}
?>