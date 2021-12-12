<?php

session_start();
requireValidSession();

loadTemplateView('edit_product', [
    'dados' => $dados,
]);