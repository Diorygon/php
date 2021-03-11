<?php

class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($l, $n, $c){
        $this->logradouro = $l;
        $this->numero = $n;
        $this->cidade = $c;

    }

    public function __destruct(){

        //var_dump("DESTRUIR");

    }

    public function __toString(){

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
        
    }

    public function getLogradouro() { 
        return $this->logradouro; 
    } 

    public function setLogradouro($logradouro) {  
        $this->logradouro = $logradouro; 
    } 

    public function getNumero() { 
        return $this->numero; 
    } 

    public function setNumero($numero) {  
        $this->numero = $numero; 
    } 

    public function getCidade() { 
        return $this->cidade; 
    } 

    public function setCidade($cidade) {  
        $this->cidade = $cidade; 
    } 

    

}

$meuEndereco = new Endereco("Honorio","1583","RJ");
//echo $meuEndereco->getCidade();

echo $meuEndereco;

?>