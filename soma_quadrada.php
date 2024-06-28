<?php
    function square_sum($numbers) : int {
        $soma_quadrada = 0;
        foreach($numbers as $n){
            $soma_quadrada += $n**2;
        }
        return $soma_quadrada;
    }
    $numbers = [3,2,5];
    $soma_quadrada = square_sum($numbers);
    echo $soma_quadrada;
?>