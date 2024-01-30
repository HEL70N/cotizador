<?php
require_once 'app/config.php';

$_POST['action'] = 'minhaFuncao';

try {
    if (!isset($_POST['action']) && !isset($_GET['action'])) {
        throw new Exception("Acesso não autorizado");
    }

    $action = isset($_POST['action']) ? $_POST['action'] : $_GET['action'];
    $action = str_replace('-', '-', $action);
    $function = sprintf('hook_%s', $action);

    if (!function_exists($function)) {
        throw new Exception("Acesso não autorizado");
    }

    $function();
} catch (Exception $e) {
    jsonOutput(jsonBuild(403, null, $e->getMessage()));
}
