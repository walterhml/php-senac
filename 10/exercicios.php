<?php
//1 - Defina uma classe chamada Veiculo com as seguintes propriedades:
//- marca
//- modelo
//- ano
//- ligado (indicando se o veículo está ligado ou desligado)

class Veiculo {

public $marca;
public $modelo;
public $ano;
public $ligado;

//2 - Implemente um método construtor na classe Veiculo que inicialize as propriedades marca, modelo e ano. O método construtor também deve definir a propriedade "ligado" como false por padrão.
public function __construct($marca, $modelo, $ano) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->ano = $ano;
    $this->ligado = false;
}


//3 - Implementar métodos na classe Veículo:
//- ligar(): Este método deve alterar a propriedade "ligado" pra true, se o veículo estiver desligado.
public function ligar(){
    if ($this->ligado == false){
        $this->ligado = true;
    }
}

//- desligar(): Este método deve alterar a propriedade "ligado" para false, se o veículo estiver ligado.
public function desligar(){
    if ($this->ligado == true){
        $this->ligado = false;
    }
}

//- exibirDados(): Este método deve exibir as informações do veículo(marca, modelo, ano, e status de ligado ou desligado)
public function exibirDados(){
    echo "$this->marca, $this->modelo, $this->ano, $this->ligado <br>";
}
    
}

$meuCarro = new Veiculo("Fiat", "uno", 1999);

// Exibindo dados do veículo
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: false

// Ligando o veículo
$meuCarro->ligar();

// Exibindo dados atualizados
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: true

// Desliga o veículo
$meuCarro->desligar();

// Exibindo dados atualizados
$meuCarro->exibirDados(); // Marca: Toyota, Modelo: Corolla, Ano: 2022, Ligado: false







































?>