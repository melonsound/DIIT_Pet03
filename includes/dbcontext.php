<?php
    namespace includes;

    use mysqli;
    use \PDO;
    use \PDOException;

    class DbContext
    {

        //MySQL Database Connection
        function __construct()
        {
            
        }

        //Post orders to Database
        function postOrders($host, $dbName, $username, $password, $queryOrder)
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


        //Get all orders from Database to array
        function getOrders($host, $username, $password, $dbName, $queryGetOrder = 'SELECT * FROM orders')
        {
            $arrayOfOrders = [];

            try
            {
                $connection = mysqli_connect($host, $username, $password, $dbName);
                $queryOrder = mysqli_query($connection, $queryGetOrder);
                while ($result = mysqli_fetch_array($queryOrder)) 
                {
                    array_push($arrayOfOrders, [$result['fullname'], $result['email'], $result['message']]);
                    //echo "{$result['fullname']} --- {$result['email']} --- {$result['message']} <br>";
                }
                return $arrayOfOrders;
                
            }
            catch(PDOException $e)
            {
                echo $e;
            }
        }
    }