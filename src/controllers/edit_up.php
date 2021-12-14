<?php
error_reporting(~E_ALL);
session_start();
requireValidSession();

$user = $_SESSION['user'];
$conexao = Database::getConnection();

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
    $arr['category'] = $dados['category'];
    $arr['perishable'] = $dados['perishable'];
    $arr['id'] = $dados['id'];
    
    $sql = "UPDATE products SET product_name = ?, price = ?, category = ?, perishable = ? WHERE id = ?";
    
    $stmt = $conexao->prepare($sql);
    
    $params = [
            $arr['product_name'],
            $arr['price'],
            $arr['category'],
            $arr['perishable'],
            $arr['id'],
        ];
        
        $stmt->bind_param("sdssi", ...$params);

         if($stmt->execute()){
            addSuccessMsg('Produto Atualizado com sucesso!');
             unset($arr); 
         }else{
             echo "Error: ". $conexao->error;
         }

}catch(AppException $e){
    echo $e->getMessage();
    
}

header('Location: /list_buy.php');