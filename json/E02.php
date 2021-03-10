<?php 

$json = '[{"nome":"Joao","idade":20},{"nome":"Diego","idade":24},{"nome":"Luelen","idade":27}]';

$data = json_decode($json, true);

var_dump($data);

?>