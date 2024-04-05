<?php
// polimorfismo evidente em metodo "SACAR" podendo sacar de maneiras diferentes em diferentes tipos de conta
// classe abstrata
abstract class Conta {
    protected $numero;
    protected $saldo;
    protected $cliente;

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

public function __toString() {
    return "Numero $this->numero - Saldo: $this->saldo - Cliente: $this->cliente";
}


public function getDetalhes() {
    return "Número: $this->numero - Saldo: $this->saldo - Cliente: " . $this->cliente->getDetalhes();
}


}


class ContaCorrente extends Conta {
    private $limiteChequeEspecial;
    
public function __construct($cliente, $numero, $saldo, $limiteChequeEspecial) {
    parent::__construct($numero, $saldo, $cliente);
    $this->limiteChequeEspecial = $limiteChequeEspecial;

}


public function sacar($valorSaque) {
    $valorlimiteEspecial = $this->saldo + $this->limiteChequeEspecial;

    if ($valorSaque <= $valorlimiteEspecial) {
        return parent::sacar($valorSaque);
    }
    return false;
}

public function getDetalhes() {
    return parent::getDetalhes() . " - Limite Cheque Especial: $this->limiteChequeEspecial";
}
}


class ContaPoupanca extends Conta {
    private $taxaRendimento;

public function __construct($cliente, $numero, $saldo, $taxaRendimento){
        parent::__construct($cliente, $numero, $saldo);
        $this->taxaRendimento = $taxaRendimento;
    }

    public function aplicarRendimento() {
        $this->saldo += $this->saldo * $this->taxaRendimento;
    }

    public function getDetalhes() {
        return parent::getDetalhes() . " - Taxa de Rendimento: $this->taxaRendimento";
    }



}

class Cliente {
    protected $nome;
    protected $cpf;

    public function __construct($nome, $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;    
    }

    public function getDetalhes() {
        return "Nome: $this->nome - CPF: $this->cpf";
    }
}



// Criando instâncias de Cliente
$cliente1 = new Cliente("João", "123456789-00");
$cliente2 = new Cliente("Maria", "987654321-00");

// Cirando instâncias de Contas
$contaCorrente1 = new ContaCorrente($cliente1, 1001, 1500, 500);
$contaPouapanca1 = new ContaPoupanca($cliente1, 2001, 3000, 0.05);
$contaCorrente2 = new ContaCorrente($cliente2, 1002, 3000, 1000);

// Realizando operações nas contas
$contaCorrente1->sacar(100);
$contaCorrente2->transferir(200, $contaPouapanca1);
$contaPouapanca1->aplicarRendimento();

// Exibindo dados das contas:
// echo "Dados da Conta Corrente 1: $contaCorrente1 <br>";
// echo "Dados da Conta Poupança 1: $contaPouapanca1 <br>";
// echo "Dados da Conta Corrente 2: $contaCorrente2 <br>";

echo "Dados da Conta Corrente 1: " . $contaCorrente1->getDetalhes() . "<br>";
echo "Dados da Conta Poupança 1: " . $contaPouapanca1->getDetalhes() . "<br>";
echo "Dados da Conta Corrente 2: " . $contaCorrente2->getDetalhes() . "<br>";



















?>