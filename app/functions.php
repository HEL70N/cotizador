<?php

function getView($viewName)
{
    $view = VIEWS . $viewName . 'View.php';
    if (!is_file($view)) {
        die('A View não existe');
    }

    // Existe a View
    require_once  $view;
}
