<?php
error_reporting(~E_ALL);
session_start();
requireValidSession();
include(TEMPLATE_PATH . "/messages.php");
$user = $_SESSION['user'];

try{
    $dados = $_POST;
    $erros = [];
    $time = date('H:i:s');
    $date = date('Y-m-d');
    $priceForm = str_replace(",",".",$_POST['price']);
  
    $arr['user_id'] =  $user->id;
    $arr['buy_date'] = $date;
    $arr['buy_hour'] = $time;
    $arr['product_name'] = $_POST['product_name'];
    $arr['price'] = $priceForm;
    $arr['category'] = $_POST['category'];
    $arr['perishable'] = $_POST['perishable'];
    
    $sql = "INSERT INTO products (user_id, buy_date, buy_hour, product_name, price, category, perishable) VALUES(?, ?, ?, ?, ?, ?, ?)";
    
    $conexao = Database::getConnection();
    $stmt = $conexao->prepare($sql);
    
    $params = [
            $arr['user_id'], 
            $arr['buy_date'],
            $arr['buy_hour'],
            $arr['product_name'],
            $arr['price'],
            $arr['category'],
            $arr['perishable'],
        ];
        
        $stmt->bind_param("isssdss", ...$params);

         if($stmt->execute()){
            addSuccessMsg('Produto inserido com sucesso!');
             unset($arr); 
         }else{
             echo "Error: ". $conexao->error;
         }
}catch(AppException $e){
    echo $e->getMessage();
    
}

header('Location: http://localhost/product.php');