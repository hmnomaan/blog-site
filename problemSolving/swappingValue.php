<?php  

$a = 5;  
$b = 10; 

echo "before swapping numbers: "; 
echo "\n";
echo $a;  
echo "    ";  
echo $b;  
echo "\n";  
  
/*swapping*/  
$a = $a + $b;   
$b = $a - $b;   
$a = $a - $b;   
echo "After swapping: ";  
echo "\n";
echo $a;  
echo "    ";  
echo $b;
?>