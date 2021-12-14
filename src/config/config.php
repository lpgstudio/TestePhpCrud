<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'ptb', 'ptb.utf-8', 'portuguese');

// Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/templates'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

//Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/date_utils.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once (realpath(MODEL_PATH . '/Model.php'));
require_once (realpath(MODEL_PATH . '/User.php'));
require_once (realpath(MODEL_PATH . '/Product.php'));
require_once (realpath(CONTROLLER_PATH . '/favicon.ico'));
require_once (realpath(EXCEPTION_PATH . '/AppException.php'));
require_once (realpath(EXCEPTION_PATH . '/ValidationException.php'));

