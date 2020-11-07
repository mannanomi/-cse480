<!DOCTYPE html>
<html>
<body>
<?php  
		  
$str = "The quick brown [bog]"; 
preg_match_all("/\\[(.*?)\\]/", $str, $matches); 
echo $matches[1][0];
?>  


</body>
</html>
