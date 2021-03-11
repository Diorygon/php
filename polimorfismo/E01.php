<?php

abstract class Animal{

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }

}

class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }

}

class Peixe extends Animal{

    public function mover(){
        return "Nada";
    }

}

class Passaro extends Animal{

    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e ".parent::mover();
    }

}



$pluto = new Cachorro();
echo "O Cachorro ".$pluto->falar()."<br/>";
echo "O Cachorro ".$pluto->mover()."<br/><br/>";

$nemo = new Peixe();
echo "O Peixe ".$nemo->falar()."<br/>";
echo "O Peixe ".$nemo->mover()."<br/><br/>";

$pidgey = new Passaro();
echo "O Passaro ".$pidgey->falar()."<br/>";
echo "O Passaro ".$pidgey->mover()."<br/><br/>";


?>