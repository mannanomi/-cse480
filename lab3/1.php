<!DOCTYPE html>
<html>
<body>

<?php

function checkPrime($numberToCheck)  
{  
    if($numberToCheck == 1)  
    {  
        return false;  
    }  
    for ($i = 2; $i * $i <= $numberToCheck; $i++) 
    {  
        if ($numberToCheck % $i == 0)  
        {  
            return false;  
        }  
    }  
    return true;  
}  
  
 
function primeSum($l, $r)  
{  
    $sum = 0;  
    for ($i = $r; $i >= $l; $i--)  
    {  
  
         
        $isPrime = checkPrime($i);  
        if ($isPrime)  
        {  
  
            
            $sum = $sum + $i;  
        }  
    }  
    return $sum;  
}  
  
 
  

$l = 1000; $r = 3000;  
  
echo "Sum of prime : ";
echo primeSum($l, $r);  
  
 
?> 

</body>
</html>
