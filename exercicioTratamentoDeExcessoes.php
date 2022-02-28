<?php

function divisao(int $n1, int $n2)
    {
        if ($n1 == 0 || $n2 == 0)
        {
            throw new Exception('Um dos numeros não é 0!');
        }

    return true;
    }



$status = false;

try {
    $status = divisao(0, 22);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo PHP_EOL . 'Status da Operação: ' . (int)$status;
    die();
}
