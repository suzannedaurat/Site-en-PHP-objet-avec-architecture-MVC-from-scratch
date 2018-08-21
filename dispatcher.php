<?php
require_once('Controllers/Controller.php');
require_once('Webroot/index.php');

Class Dispatcher
{
    function execRouterInfo()
    {
        $values = Router::parseUrl();
        $controllerName = ucfirst($values['controller']) . 'Controller';
        $controllerFile = '../Controllers/' . $controllerName .'.php';

        if(file_exists($controllerFile) && ($values['controller'] != NULL))
            {
                $method = $values['method'];
                $defaultMethod = $values['controller'];

                if ($method == NULL)
                    {
                        $controller = new $controllerName();
                        $controller::$defaultMethod();
                    }
                else
                    {
                        //var_dump($method);
                        $controller = new $controllerName(); 
                        if(method_exists($controllerName, $method))
                        $controller::$method();
                        else 
                        $controller::$defaultMethod();
                    }
            }
        else if ($values['controller'] == NULL)
            { 
                ArticlesController::articles();                
            }
        else
        echo '404 page not found';
        //View::DisplayError();
    } 

    function sendLogin()
    {
        $loginDispatch = getLogin();
        //var_dump($loginDispatch);
        UsersController::userLogin($loginDispatch);
        
    }

}
$new = new Dispatcher;
$new->execRouterInfo();
$new->sendLogin();
?>