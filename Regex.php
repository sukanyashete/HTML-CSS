<?php 
$str = readline('Enter a string: ');
echo "\nInput String is: ".$str. "\nOutput as 1 for PRESENT , 0 for NOT PRESENT\n";
echo "Consist of at ? ".preg_match( "/at/i" , $str ). "\n";
echo "Begins with at ? ".preg_match( "/^at/i" , $str ). "\n";
echo "Ends with at ? ".preg_match( "/at$/i" , $str ). "\n";
echo "Any words beginning with a ? ".preg_match( "/\ba/i" , $str ). "\n";
?>