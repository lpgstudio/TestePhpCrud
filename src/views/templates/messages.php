<?php
error_reporting(~E_ALL);
$errors = [];

if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}elseif($exception){
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidationException'){
        $errors = $exception->getErros();
    }
}
 
$alertType = '';

if($message['type'] === 'error'){
    $alertType = 'danger';
}else{
    $alertType = 'success';
}
?>

<?php if($message): ?>
    <div role="alert" class=" my-3 alert alert-<?= $alertType ?>" >
        <?= $message['message'] ?>
    </div>
<?php endif ?>
