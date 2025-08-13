<?php
require_once 'InterfaceCalculadora.php';

class Divisao implements InterfaceCalculadora {
    public function calcular($numeros) {
        $total = $numeros[0];
        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] == 0) {
                return "Erro: divisão por zero";
            }
            $total = $total / $numeros[$i];
        }
        return $total;
    }
}
