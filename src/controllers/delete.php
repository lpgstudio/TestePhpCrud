<?php
session_start();
requireValidSession();
$user = $_SESSION['user'];
$id = $_REQUEST['excluir'];

try{
    $result = Product::deleteFromID($id);
    addSuccessMsg('Produto deletado com Sucesso');
}catch(AppException $e){
    echo $e->getMessage();
    addErrorMsg('Algo deu errado');
}

header('Location: /list_buy.php');