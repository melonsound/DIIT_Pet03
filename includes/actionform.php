<?php

use includes\Order;
use includes\DbContext;

include 'Order.php';
include 'dbcontext.php';

$queryOrder = "INSERT INTO orders VALUES(NULL, :fullname, :email, :message)"; 

$conn = new DbContext();
$conn->postOrders("localhost", "diit_crud", "root", "root", $queryOrder);


?>