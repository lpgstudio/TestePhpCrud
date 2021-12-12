<?php 
//precisa transformar esse arquivo no produto // aqui vai a logica do produto tbm
class Product extends Model {
    protected static $tableName = 'products';
    protected static $columns = [
        "id",
        "user_id",
        "buy_date",
        "buy_hour",
        "product_name",
        "price",
        "category",
        "perishable",
    ];

    public static function loadFromUser($userID, $arr){
        $registry = self::getOne([
            'user_id' => $userID, 
            'buy_date' => $arr->date, 
            'buy_hour' => $arr->hour,
            'product_name' => $arr->product_name,
            'price' => $arr->price,
            'category' => $arr->category,
            'perishable' => $arr->perishable
        ]);
        return $registry;
    }

    public function innout($dados){
        try {
            $dadosR = '';

        $this->$dadosR = $dados;
            
        $this->insert();
        } catch (AppException $e) {
            echo $e->getMessage();
        }

    }
}
