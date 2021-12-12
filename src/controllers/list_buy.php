<?php

session_start();
requireValidSession();
$user = $_SESSION['user'];

$produto = 0;

$result = Product::getResultSetFromSelect(['user_id' => $user->id]);

for($i = 0; $i <= $result->num_rows; $i++){
    $produto = $i;
}


loadTemplateView('list_buy', ['result' => $result, 'produto' => $produto]);

