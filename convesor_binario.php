<?php
    
    function add_binary($a, $b) {
        $soma = $a + $b;
        $binario_inverso='';
        $binario = '';
        while($soma>=2) {
            $binario_inverso .= $soma%2; //concatena como string o resto da divisão de soma por 2
            $soma = intdiv($soma, 2); //realiza a divisão inteira e atualiza o valor
        }
        $binario_inverso .= $soma; //adiciona o último valor que resulta da divisão mais simples
        for($i = mb_strlen($binario_inverso)-1; $i >= 0; $i--){ //percorre o $binario_inverso a partir do ultimo numero até o primeiro
            $binario .= $binario_inverso[$i];
        }
        return $binario;
    }
    $a = 3;
    $b = 3;
    $binario = add_binary($a, $b);
    echo $binario;
?>