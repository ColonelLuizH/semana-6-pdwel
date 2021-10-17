<?php
// função número perfeito
function ehNumeroPerfeito($N)
{
    // armazenar a soma
    $sum = 0;
       
    // percorrendo cada número
    // no intervalo [1,N)
    for ($i = 1; $i < $N; $i++)
    {
        if ($N % $i == 0)
        {
            $sum = $sum + $i;
        }      
    }
      
    // retorna True se a soma é igual ao número original
    return $sum == $N;
}
   
$N = 6;
  
if (ehNumeroPerfeito($N))
    echo "eh um numero perfeito";
else
    echo "nao eh um numero perfeito";
?>