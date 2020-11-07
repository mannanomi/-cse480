<!DOCTYPE html>
<html>
<body>

<?php

$str = "Hello, This@is+#cse480$*remove?<the>Special'Character;";
$str1 = remove($str);

function remove($str) {


    $result = str_replace( array( '\'', '!','@','#','$','&','*','+','?', '"',
    ',' , ';', '<', '>' ), ' ', $str);

    return $result;
    }
   
echo $str1;
?>

</body>
</html>
