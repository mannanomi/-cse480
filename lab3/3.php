
<!DOCTYPE html>
<html>
<body>

<?php


function arraychange($array, $case = CASE_LOWER){
        if ( !is_array($array)) return false;
        foreach ($array as $key => &$value){
            if (is_array($value))
            farray(nfunction, array (&$value, $case ) ) ;
            else
            $array[$key] = ($case == CASE_UPPER )
            ? strtoupper($array[$key])
            : strtolower($array[$key]);
        }
        return $array;
    }

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo 'Actual array ';
print_r($Color);
echo 'Values are in lower case.';
$myColor = arraychange($Color,CASE_LOWER);
print_r($myColor);
echo 'Values are in upper case.';
$myColor = arraychange($Color,CASE_UPPER);
print_r($myColor);
   
    ?>

</body>
</html>