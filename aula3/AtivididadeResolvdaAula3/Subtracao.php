<?php
require_once 'InterfaceCalculadora.php';

class Subtracao implements InterfaceCalculadora {
    public function calcular($numeros) {
        $total = $numeros[0];
        for ($i = 1; $i < count($numeros); $i++) {
            $total = $total - $numeros[$i];
        }
        return $total;
    }
}
