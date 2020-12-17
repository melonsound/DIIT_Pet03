<?php
    namespace includes;
    use \PDO;
    use \PDOException;

    class DbContext
    {
        //MySQL Database Connection
        function __construct($host, $dbName, $username, $password)
        {
            try
            {
                $connection = new PDO('mysql:host='.$host.';dbname='.$dbName,$username, $password);
            }
            catch(PDOException $e)
            {
                echo $e;
            }
        }
    }