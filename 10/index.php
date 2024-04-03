<?php

class Carro {
    // Propriedades
    public $marca;
    public $modelo;
    public $ano;

    // Método Construtor
    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }


// Função / comportamento / metodo

public function ligar() {
    echo "O carro está ligado. <br>";
}














}
 // instancia um novo objeto do tipo Carro
$meuCarro = new Carro("Toyota", "Corolla", 2014) . "<br>"; 

echo "$meuCarro->marca, $meuCarro->modelo, $meuCarro->ano";

$meuCarro->ligar();// Chama a função ligar do objeto meuCarro




























?>