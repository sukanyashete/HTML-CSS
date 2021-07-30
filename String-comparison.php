<?php

$str1 = "Hello World";
$str2 = "Hello";
echo "String-1=". $str1."&nbsp;&nbsp;"."String-2=".$str2 ;
echo "<br>".strcmp($str1 , $str2 )."<br>";

$str1 = "Hello";
$str2 = "Hello World";
echo "String-1=". $str1."&nbsp;&nbsp;"."String-2=".$str2 ;
echo "<br>".strcmp($str1 , $str2 )."<br>";

$str1 = "Hello";
$str2 = "Hello";
echo "String-1=". $str1."&nbsp;&nbsp;"."String-2=".$str2 ;
echo "<br>".strcmp($str1 , $str2 );

?>