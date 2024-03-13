<?php

require_once './DefinirValorComportamento.php';

class DefinirValorSemEdificacao implements DefinirValorComportamento {
    
    public function definirValor(char $localizacao, float $espaco, ?int $comodos = null) {
        if (!empty($comodos)){
            echo "\nERRO! O Imóvel informado possui cômodos. Portanto, verifique o cálculo do IPTU para imóveis com edificação, por favor.\n";
            return;
        }        
    
        switch($localizacao) {
            case 'A':
                echo "\nO valor de venda calculado para o imóvel informado é: R$" . $number_format(($espaco * 1500), 2, ',', '.') . "\n";
                break;
            case 'B':
                echo "\nO valor de venda calculado para o imóvel informado é: R$" . $number_format(($espaco * 750), 2, ',', '.') . "\n";
                break;
            case 'C':
                echo "\nO valor de venda calculado para o imóvel informado é: R$" . $number_format(($espaco * 200), 2, ',', '.') . "\n";
            default:
                echo "\nERRO! Região inexistente. Por favor, informe se o seu imóvel se encontra"
                . " na região 'A', 'B' ou 'C'.\n";
        }
    }
}


