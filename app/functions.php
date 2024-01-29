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

// Contação
function getQuote()
{
    if (!isset($_SESSION['newQuote'])) {
        return $_SESSION['newQuote'] =
            [
                'number' => rand(111111, 999999),
                'name' => '',
                'company' => '',
                'email' => '',
                'itens' => [],
                'subtotal' => 0,
                'taxes' => 0,
                'shipping' => 0,
                'total' => 0
            ];
    }

    // Recalcular todos os totais
    recalculateQuote();

    return $_SESSION('newQuote');
}

function recalculateQuote()
{
    $itens = [];
    $subtotal = 0;
    $taxes = 0;
    $shipping = 0;
    $total = 0;

    if (!isset($_SESSION['newQuote'])) {
        return false;
    }

    // Validação de itens
    $itens = $_SESSION['newQuote']['itens'];

    // Se a lista de itens está vázia não é necessário calcular nada.
    if (!empty($itens)) {
        foreach ($itens as $item) {
            $subtotal += $item['total'];
            $taxes += $item['taxes'];
        }
    }

    $shipping = $_SESSION['newQuote']['shipping'];
    $total = $subtotal + $taxes + $shipping;

    $_SESSION['newQuote']['subtotal'] = $subtotal;
    $_SESSION['newQuote']['taxes'] = $taxes;
    $_SESSION['newQuote']['shipping'] = $shipping;
    $_SESSION['newQuote']['total'] = $total;

    return true;
}

function restartQuote()
{
    $_SESSION['newQuote'] =
        [
            'number' => rand(111111, 999999),
            'name' => '',
            'company' => '',
            'email' => '',
            'itens' => [],
            'subtotal' => 0,
            'taxes' => 0,
            'shipping' => 0,
            'total' => 0
        ];

    return true;
}

function getItens()
{
    $itens = [];

    // Se não existe a cotação, obviamente está vázia o array
    if (!isset($_SESSION['newQuote']['itens'])) {
        return $itens;
    }

    // A cotação existe, se assina o valor
    $itens = $_SESSION['newQuote']['itens'];
    return $itens;
}

function getItem($id)
{
    $itens = getItens();

    // Se não houver itens
    if (empty($itens)) {
        return false;
    }

    // Se houver itens, iremos iterar
    foreach ($itens as $item) {
        // Valide se existe com o id passado
        if ($item['id'] === $id) {
            return $item;
        }
    }

    // Não tenho correspondência ou resultados
    return false;
}
