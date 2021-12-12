<?php

session_start();
requireValidSession();
$user = $_SESSION['user'];
$id = $_REQUEST['codigo'];


$result = Product::getResultSetFromSelect(['id' => $id, 'user_id' => $user->id]);

loadTemplateView('edit_product', [
    'result' => $result,
    'id' => $result->id,
    'product_name' => $result->product_name,
]);