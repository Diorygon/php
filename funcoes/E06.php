<?php 

function soma(float ...$valores){

    return array($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33, 87);
echo "<br>";
echo soma(1.5, 3.2);
echo "<br>";

?>