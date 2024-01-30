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

function deleteItens()
{
    $_SESSION['newQuote']['itens'] = [];

    recalculateQuote();

    return true;
}

function deleteItem($id)
{
    $itens = getItens();

    // Se não houver itens
    if (empty($itens)) {
        return false;
    }

    // Se houver itens, iremos iterar
    foreach ($itens as $i => $item) {
        // Valide se existe com o id passado
        if ($item['id'] === $id) {
            unset($_SESSION['newQuote']['itens'][$i]);
            return true;
        }
    }

    // Não tenho correspondência ou resultados
    return false;
}

function addItem($item)
{
    $itens = getItens();

    // O id já existe em nossos itens
    // Podemos atualizar as informações em vez de adicioná-las
    if (getItem($item['id']) !== false) {
        foreach ($itens as $i => $eItem) {
            if ($item['id'] === $eItem['id']) {
                $_SESSION['newQuote']['itens'][$i] = $item;
                return true;
            }
        }
    }

    // Não existe na lista, é simplesmente adicionado
    $_SESSION['newQuote']['itens'][] = $item;
    return true;
}

function jsonBuild($status = 200, $data = null, $msg = '')
{
    if (empty($msg) || $msg == '') {
        switch ($status) {
            case 200:
                $msg = 'OK';
                break;
            case 201:
                $msg = 'Created';
                break;
            case 400:
                $msg = 'Invalid request';
                break;
            case 403:
                $msg = 'Acess denied';
                break;
            case 404:
                $msg = 'Not found';
                break;
            case 500:
                $msg = 'Interal Server Error';
                break;
            case 550:
                $msg = 'Permission denied';
                break;
            default:
                break;
        }
    }

    $json =
        [
            'status' => $status,
            'data' => $data,
            'msg' => $msg
        ];

    return json_encode($json);
}

function jsonOutput($json)
{
    header('Access-Central-Allow-Origin: *');
    header('Content-type: application/json;charset=utf-8');

    if (is_array($json)) {
        $json = json_encode($json);
    }

    echo $json;

    return true;
}

function hook_minhaFuncao()
{
    echo "Estou sendo executado em ajax.php de forma automatica.";
}