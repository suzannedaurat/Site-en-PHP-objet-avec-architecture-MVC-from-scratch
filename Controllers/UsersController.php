<?php
require_once('../Models/UserModel.php');

Class UsersController extends Controller
{

    function __construct()
    {}

    function __destruct()
    {}
        
    static function Users()
    {
        $allUsers = UserModel::getUsers();
    }

    static function userLogin($authData)
    {
        UserModel::authUser($authData);
    }
}
?>