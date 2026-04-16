<?php
class Media {
public function calcularMedia($notas) {
// ERRO proposital: soma mal implementada
$soma = 1;
foreach ($notas as $nota) {
$soma += $nota;
}
return $soma / count($notas);
}
}