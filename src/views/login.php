<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/Login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <title>Formulario de Login</title>
</head>
<body>
    
    <section>
        <div class="container">
            <div class="user signinBx">
                <div class="imgBx"><img src="https://picsum.photos/id/336/400/500" alt=""></div>
                <div class="formBx">
                    <form class="" action="#" method="post">
                        <h2>Login</h2>
                        <?php include(TEMPLATE_PATH . '/messages.php') ?>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            placeholder="Informe seu e-mail."
                            value="<?= $email ?>" 
                            autofocus
                        >
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control " 
                            placeholder="*******" 
                        >
                        <button>Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>