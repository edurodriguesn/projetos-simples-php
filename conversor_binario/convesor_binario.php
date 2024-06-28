<?php
    
    function add_binary($a, $b) {
        $soma = $a + $b;
        $binario_inverso='';
        $binario = '';
        while($soma>=2) {
            $binario_inverso .= $soma%2;
            $soma = intdiv($soma, 2);
        }
        $binario_inverso .= $soma;
        for($i = mb_strlen($binario_inverso)-1; $i >= 0; $i--){
            $binario .= $binario_inverso[$i];
        }
        return $binario;
    }
    $a = 3;
    $b = 3;
    $binario = add_binary($a, $b);
    echo $binario;
?>