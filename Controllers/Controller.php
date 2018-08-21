<?php
require_once('ArticlesController.php');
require_once('UsersController.php');
require_once('../Views/View.php');
require_once('../Src/session.php');


Class Controller
{
    protected static $instance;

    function __construct()
    {}

    function getinstance()
    {
        if(null === self::$instance)
            {
                new Controller();
            }
            return self::$instance; 
    }

    function getViewUsers($data)
    {
        View::DisplayUsers($data);
    }

    function getDisplayArticles($data2)
    {
        /*if (Session::read('usergroup') == "1")
        {
            View::displayForWriter($data2);
        }
        else*/ //tentative de View for Writer
        View::DisplayArticles($data2);
        
    }

    function controlAuthUser($userData)
    {
        if($userData === FALSE)
            {
                echo "Authentication error";
                //renvoyer à une ViewError.php 
            }
        else
            {
                Session::write('username', $userData['username']);
                Session::read('username');
                if($userData['status'] === "1")
                    {
                        echo "Welcome " .Session::read('username'). ", kindly remember that you are banned for disrespectful behaviour.<br>";
                    }
                else
                    {
                        if($userData['usergroup'] === "1")
                            {
                                //user is writer
                                //echo "Welcome " .Session::read('username'). ", ready to write ? <br>";
                                View::displayForWriter($data2);
                            }
                        if($userData['usergroup'] === "2")
                            {
                                //user is admin
                                //echo "Welcome " .Session::read('username'). ", ready for a glory admin day !<br>";
                                View::displayForAdmin($data2);
                            }
                        if($userData['usergroup'] === "0")
                            //user is regular user
                            //echo "Welcome " .Session::read('username'). ", enjoy your visit ! <br>";
                            View::DisplayArticles($data2);
                    }
            }
    }
}
?>