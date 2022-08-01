<?php

namespace App\Controller;

class ControllerCarros
{
    public function valorCarro(string $tipo, string $motor): void
    {
        if ($tipo === 'passeio' && $motor == "1") {
            $valor = "1.000,00";
        } elseif ($tipo === 'passeio' && $motor == "2") {
            $valor = "2.000,00";
        } elseif ($tipo === 'carga' && $motor == "1") {
            $valor = "5.000,00";
        } elseif ($tipo === 'carga' && $motor == "2") {
            $valor = "10.000,00";
        }

        echo "O tipo de carro é $tipo e seu valor é $valor";
    }
}
