<?php
// Iniciar sessão
session_start();

// Para saber se estamos no servidor local
define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));
define('URL', (IS_LOCAL ? 'http://127.0.0.1/cotizador' : 'URL DE SERVIDOR EM PORDUÇÃO'));

// Rotas das pastas
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);
define('APP', ROOT . 'app' . DS);
define('ASSETS', ROOT . 'assets' . DS);
define('TEMPLATES', ROOT . 'templates' . DS);
define('INCLUDES', TEMPLATES . 'includes' . DS);
define('MODULES', TEMPLATES . 'modules' . DS);
define('VIEWS', TEMPLATES . 'views' . DS);
define('UPLOADS', ROOT . 'uploads' . DS);

// Para arquivos que vamos incluir no cabeçalho e rodapé (CSS e JS)
define('CSS', URL . 'assets/css/');
define('IMG', URL . 'assets/img/');
define('JS', URL . 'assets/js/');

// Personalização
define('APP_NAME', 'Cotação');
define('TAXES_RATE', 16);
define('SHIPPING', 99.50);

// Carregamento de todas as funções
require_once APP . 'functions.php';
