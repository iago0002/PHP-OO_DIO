<?php

declare(strict_types=1);//declara ao interpretador para fazer a checagem de tipos
//declaração de tipagem
class ContaBancaria
{
    //public - private - protected
    /**
     * @var string
     */
    private $banco;

    /**
     * @var string
     */
    private $nomeTitular;

    /**
     * @var string
     */
    private $numeroAgencia;

    /**
     * @var string
     */
    private $numeroConta;

    /**
     * @var float
     */
    private $saldo;

    public function __construct(string $banco,
                                string $nomeTitular,
                                string $numeroAgencia,
                                string $numeroConta,
                                float $saldo
    ){
        $this->banco = $banco;//atribuição para a propriedade da classe
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getSaldo(): string//apenas com o metodo eu modifico meu metodo
    {
        return 'Seu saldo atual é de: R$'. $this->saldo;
    }

    public function depositar(float $valor): string
    {
        $this->saldo += $valor;
        return 'O depósito no valor de R$'. $valor . ' foi realizado';
    }

    public function sacar(float $valor): string
    {
        $this->saldo -= $valor;
        return 'O saque no valor de R$'. $valor . ' foi realizado';
    }
}

$conta = new ContaBancaria(
    'Banco Itaú',
    'Iago Bovolato',
    '6700',
    '1230988-5',
    300.00
);//criei uma  instancia da classe ContaBancaria, ou seja meu objeto da classe

echo $conta->getSaldo();//vou ver o saldo atual
echo PHP_EOL;//quebra de linha
echo $conta->depositar(150.00); //executo a funçao do valor a ser depositado
echo PHP_EOL;//quebra de linha
echo $conta->getSaldo();//vou exibir o saldo apos o metodo depositar para exibir o saldo atual
echo PHP_EOL;//quebra de linha
echo $conta->sacar(350.00);
echo PHP_EOL;//quebra de linha
echo $conta->getSaldo();