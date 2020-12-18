<?php

use includes\DbContext;

require $_SERVER['DOCUMENT_ROOT'] . '/includes/dbcontext.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/template/header.php';

$dbcontext = new DbContext();
//$orders contains array with 3 sections
$orders = $dbcontext->getOrders("localhost", "root", "root", "diit_crud");
?>


<style>

    .tb-orders {
        margin: 50px 350px;
    }

    td
    {
        width: 600px;
    }
    
</style>

<!-- Table -->
<div class="tb-orders">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ФИО</th>
                <th scope="col">email</th>
                <th scope="col">Сообщение</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($orders as $orders_col) {
                echo "<tr>";
                foreach ($orders_col as $sValue) {
                    echo "<td>{$sValue}</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
</div>


<!-- /Table -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/template/footer.php'; ?>