<?php
$a = array(array(1,2,3),array(4,5,6),array(7,8,9)); 
$b = array(array(7,8,9),array(4,5,6),array(1,2,3)); 
$m=count($a); 
$n=count($a[2]); 
$p=count($b); 
$q=count($b[2]); 
echo "The first matrix :"."<br/>"; 
for ($row = 0; $row < $m; $row++) 
{ 
for ($col = 0; $col < $n; $col++) 
echo " ".$a[$row][$col]; 
echo "<br/>"; 
} 
echo "The second matrix :"."<br/>"; 
for ($row = 0; $row < $p; $row++) 
{ 
for ($col = 0; $col < $q; $col++) 
echo " ".$b[$row][$col]; 
echo "<br/>"; 
} 
echo "The transpose for the first matrix is:"."<br/>";
for ($row = 0; $row < $m; $row++) 
{ 
for ($col = 0; $col < $n; $col++) 
echo " ".$a[$col][$row]; 
echo "<br/>"; 
} 
echo "The addition of matrices is:"."<br/>"; 
for ($row = 0; $row < 3; $row++)  
{ 
for ($col = 0; $col < 3; $col++) 
echo " ".$a[$row][$col]+$b[$row][$col]." "; 
echo "<br/>"; 
} 
?>
