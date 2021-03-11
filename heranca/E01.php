<?php

class Documento{

    private $numero;
    
    public function getNumero() { 
        return $this->numero; 
    } 

    public function setNumero($n) {  
        $this->numero = $n; 
    } 
    

}

class CPF extends Documento{

    public function validar():bool{

        $numeroCPF = $this->getNumero();

        return true;
        //valida o CPF

    }

}	

$doc = new CPF();

$doc->setNumero("15972073730");
var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>