<?php

namespace App\Controller;

class ControllerCarros
{
    public function valorCarro(string $tipo, string $motor): void
    {
        $valor = "";
        $msg = "O tipo de carro é $tipo e seu valor é R$ ";
        if ($tipo === 'passeio' && $motor == "1") {
            $valor = "1.000,00";
            echo $msg . $valor;
        } elseif ($tipo === 'passeio' && $motor == "2") {
            $valor = "2.000,00";
            echo $msg . $valor;
        } elseif ($tipo === 'carga' && $motor == "1") {
            $valor = "5.000,00";
            echo $msg . $valor;
        } elseif ($tipo === 'carga' && $motor == "2") {
            $valor = "10.000,00";
            echo $msg . $valor;
        } else {
            echo "Veículo não localizado";
        }
    }
}
