<!DOCTYPE html>
<html>
<body>
<?php

$arr = array(480,18,7,2,405,51,35,1,-3);
function bubbleSort(array $arr)
{
    $n = sizeof($arr);
    for ($i = 1; $i < $n; $i++) {
        $flag = false;
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }

    return $arr;
}

$result = bubbleSort($arr);
print_r($result);
?>

</body>
</html>
