<?php

declare(strict_types=1);

class Venda
{
    /**
     * @var string
     */
    private $data;
    /**
     * @var string
     */
    private $produto;
    /**
     * @var int
     */
    private $quantidade;
    /**
     * @var float
     */
    private $valorTotal;

    public function __construct(string $data,
                                string $produto,
                                int $quantidade,
                                float $valorTotal
    ){
        $this-> data = $data;
        $this-> produto = $produto;
        $this-> quantidade = $quantidade;
        $this-> valorTotal = $valorTotal;
    }

    public function exibeDadosVenda(): string
    {
        return 'Detalhes da venda: ' . PHP_EOL .
            date($this->data) . PHP_EOL .
            $this->produto. PHP_EOL .
            $this->quantidade . PHP_EOL .
            'R$' . $this->valorTotal;
    }

}

$venda = new Venda(
    '28/02/2022',
    'Iphone 11',
    2,
    12000.00
);

echo $venda->exibeDadosVenda();
