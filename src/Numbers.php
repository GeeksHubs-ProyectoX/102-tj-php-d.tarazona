<?php
namespace Numbers;

class Numbers
{
    public function apply($input)
    {
        if($input === 1) {
            return -1;
        }

        if($input === 2) {
            return [2];
        }

        if($input === 3) {
            return [2,3];
        }

        $contador = 0;
        // $k = 0;
        $numerosPrimos = [];
        for ($i=1; $i<$input ; $i++) { 
            for ($j=$i; $j > 0 ; $j--) { 
                if($i%$j == 0) {
                    $contador++;
                }
            }

            if($contador<=2){
                // $k++;
                if ($i != 1) {
                    $numerosPrimos[] += $i;
                }                
            }

            $contador = 0;
        }

        return $numerosPrimos;
    }
}
