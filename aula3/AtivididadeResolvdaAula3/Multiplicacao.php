<?php
require_once 'InterfaceCalculadora.php';

class Multiplicacao implements InterfaceCalculadora {
    public function calcular($numeros) {
        $total = 1;
        foreach ($numeros as $n) {
            $total = $total * $n;
        }
        return $total;
    }
}
