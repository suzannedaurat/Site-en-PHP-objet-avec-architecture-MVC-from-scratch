<?php

session_start();

require_once('../Config/core.php');

    function getUrl()
    {
    $getUrl = $_SERVER['REQUEST_URI'];
    return $getUrl;
    }

    function getLogin()
    {
        $loginName = $_POST['Login'];
        $loginPassword = $_POST['Password'];
    
        $loginIndex = array($loginName, $loginPassword);
        return $loginIndex;
    }
    getLogin();

?>