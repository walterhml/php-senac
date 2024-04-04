<?php

abstract class Conta {
    private $numero;
    private $saldo;
    private $cliente;

public function __construct($numero, $saldo, $cliente) {
    $this->numero = $numero;
    $this->saldo = $saldo;
    $this->cliente = $cliente;
}

public function sacar($valorSaque) {
    if ($this->saldo >= $valorSaque && $valorSaque > 0) {
        $this->saldo -= $valorSaque;
        return true;
    }
    return false;
}

public function depositar($valorDeposito) {
    if ($valorDeposito > 0) {
        $this->saldo += $valorDeposito;
        return true;
    }
    return false;
}

public function transferir($valorTrasferencia, $contaDestino) {
    if ($this->sacar($valorTrasferencia)) {
        $contaDestino->depositar($valorTrasferencia);
        return true;
    }
    return false;
}

public function toString() {
    return `Numero $this->numero - Saldo: $this->saldo - Cliente: $this->cliente`;
}
}


class ContaCorrente extends Conta {

public function __construct($cliente, $numero, $saldo, $limiteChequeEspecial) {
    parent::__construct($cliente, $numero, $saldo);
    $this->limiteChequeEspecial = $limiteChequeEspecial;

}

public function sacar($valorSaque) {
    const $valorlimiteEspecial = $this->saldo + $this->limiteChequeEspecial;

    if ($valorSaque <= $valorlimiteEspecial) {
        return parent::sacar($valorSaque);
    }
    return false;
}
}


class ContaPoupanca extends Conta {

public function __construct($cliente, $numero, $saldo, $taxaRendimento){
        parent::__construct($cliente, $numero, $saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    public fucntion aplicarRendimento() {
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }
}

class Cliente {
    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;    
    }
}



























?>