<?php

require_once './DefinirValorComportamento.php';

class DefinirValorComEdificacao implements DefinirValorComportamento {
    
    public function definirValor(string $localizacao, float $espaco, ?int $comodos = null) {
        if (empty($comodos)){
            echo "\nERRO! É necessário informar o número de cômodos para imóveis com edificação!\n";
            return;
        }        

        $valorTotal = 0;

        $localizacao = strtoupper($localizacao);

        switch($localizacao) {
            case 'A':
                $valorM2 = $espaco * 3000;
                break;
            case 'B':
                $valorM2 = $espaco * 1000;
                break;
            case 'C':
                $valorM2 = $espaco * 500;
                break;
            default:
                echo "\nERRO! Região inexistente. Por favor, informe se o seu imóvel se encontra"
                . " na região 'A', 'B' ou 'C'.\n";
                return;
        }

        $valorComodos = ((int) $comodos) * 1000;

        $valorTotal = $valorM2 + $valorComodos;

        echo "\nO valor de venda calculado para o imóvel informado é: R$ " . number_format($valorTotal, 2, ',', '.') . "\n";
    }
}