<?php
    namespace includes;
    use \PDO;
    use \PDOException;

    class DbContext
    {
        //MySQL Database Connection
        function __construct($host, $dbName, $username, $password, $queryOrder)
        {
            try
            {
                $connection = new PDO('mysql:host='.$host.';dbname='.$dbName,$username, $password);
                $msg = $connection->prepare($queryOrder);
                $msg->execute(['fullname' => $_POST['fullname'], 'email' => $_POST['email'], 'message' => $_POST['message']]);
                $orderId = $connection->lastInsertId();
            }
            catch(PDOException $e)
            {
                echo $e;
            }
        }
    }