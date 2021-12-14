<?php
error_reporting(~E_ALL);
session_start();
requireValidSession();
$conexao = Database::getConnection();
$user = $_SESSION['user'];

try{
    $dados = $_POST;
    $erros = [];
    $time = date('H:i:s');
    $date = date('Y-m-d');
    $priceForm1 = str_replace(",",".",$dados['price']);
    $priceForm = filter_var( $priceForm1, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
    $productNameSanitize = filter_var($_POST['product_name'], FILTER_SANITIZE_SPECIAL_CHARS);
  
    $arr['user_id'] =  $user->id;
    $arr['buy_date'] = $date;
    $arr['buy_hour'] = $time;
    $arr['product_name'] = $productNameSanitize;
    $arr['price'] = $priceForm;
    $arr['category'] = $_POST['category'];
    $arr['perishable'] = $_POST['perishable'];
    
    $sql = "INSERT INTO products (user_id, buy_date, buy_hour, product_name, price, category, perishable) VALUES(?, ?, ?, ?, ?, ?, ?)";
    
    
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

header('Location: /list_buy.php');

