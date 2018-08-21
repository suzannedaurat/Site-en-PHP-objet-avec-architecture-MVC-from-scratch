<?php
include ('configuration.php');
Final Class connectPDO
{
    protected static $instance;
    const ERROR_LOG_FILE = "errorsPDO.log";
    const dbhost = host;
    const dbname = namedb;
    const dbport = port;
    const dbuser = user;
    const dbpassword = password;

    function __construct()
    {
            try
            {
                self::$instance = new PDO('mysql:host='.self::dbhost.';port='.self::dbport.';dbname='.self::dbname, self::dbuser, self::dbpassword);
                //echo "OK";
            }
            catch(PDOException $error)
            {
                file_put_contents(self::ERROR_LOG_FILE,$error,FILE_APPEND);
                //echo "error";
            }
    }
    public static function getInstance()
    {
        if(null === self::$instance)
        {
            new connectPDO();
        }
        return self::$instance; 
    }
}

//$new = new connectPDO;
//$new->getinstance();
?>