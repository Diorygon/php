<?php

class Pessoa{

    public $nome = "Rasmus Lerdorf"; //todos veem
    protected $idade = 48; //a classe e os filhos veems
    private $senha = "123456"; //apenas a classe vê

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";       

    }

}

class Programador extends Pessoa {

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";       

    }

}

$objeto = new Programador();

//echo $objeto-> nome . "<br>";

$objeto->verDados();

?>