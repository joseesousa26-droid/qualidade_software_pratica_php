<?php
class Media {
    public function calcularMedia($notas) {
        $soma = 0;
        foreach ($notas as $nota) {
            $soma += $nota;
        }
        // O round() remove as dízimas que estão quebrando o teste
        return ($soma / count($notas)); 
    }
}