<?php
require_once('../Controllers/Controller.php');
require_once('../Views/View.php');
require_once('Model.php');

Class UserModel extends Model
{
    static function getUsers()
    {
        $allUsers = Model::getAll('user');
        Controller::getViewUsers($allUsers);
    }

    static function authUser($authData)
    {
        $authUsername = $authData[0];
        $authPassword = $authData[1];

        $db = connectPDO::getInstance();
        $query = $db->prepare("SELECT id, username, status, usergroup FROM user WHERE username = ? AND password = ? ");
        $query->execute(array($authUsername, $authPassword));
        $authDB = $query->fetch(PDO::FETCH_ASSOC);
        
        Controller::controlAuthUser($authDB);
    }
}
?>