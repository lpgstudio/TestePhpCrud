<?php

session_start();
requireValidSession();
$user = $_SESSION['user'];

//parametros
$filter = ['user_id' => $user->id];
$userID = $user->id;
$produto = 0;

//numero da pagina
if(!$_REQUEST['page']){
    $page = 1;
}else{
    $page = $_REQUEST['page'];
}

//quantidade de resultado por pagina
$results_per_page  = 5;  
$page_first_result  = ( $page -1) *  $results_per_page ;  

//quantidade de resultado
$allQuery = Product::getResultSetFromSelect($filter);

for($i = 0; $i <= $allQuery->num_rows; $i++){
    $produto = $i;
}

//determina o número total de páginas disponíveis  
$number_of_page  =  ceil( $produto  /  $results_per_page );  

$result = Product::getResultSetFromPage($userID, $page_first_result, $results_per_page);


loadTemplateView('list_buy', [
    'result' => $result,
    'price' => $price,
    'produto' => $produto,
    'number_of_page' => $number_of_page,
]);

