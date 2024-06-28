<?php
    function sum(array $a): float {
        $soma = 0.0;
        if(!$a)
            return 0;
        foreach($a as $vetor) {
            $soma += $vetor;
        }
        return $soma;
      }
      $a = [];
      $soma = sum($a);
      echo $soma;
?>