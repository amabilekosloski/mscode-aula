<?php
require_once 'InterfaceCalculadora.php';

class Soma implements InterfaceCalculadora {
    public function calcular($numeros) {
        $total = 0;
        foreach ($numeros as $n) {
            $total = $total + $n;
        }
        return $total;
    }
}
