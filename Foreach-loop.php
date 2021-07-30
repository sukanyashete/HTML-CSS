<?php 

echo ('Normal Array: <br>');
$fruits = array( "apple", "banana", "mango", "orange" );
foreach( $fruits as $f ){
	echo "$f  &nbsp; " ; 
}

echo ('<br><br>Associative Array: <br>');
$age = array("Peter" => "35" , "Ben" => "20", "Joe" => "17");
foreach($age as $x => $y){
	echo "$x : $y &nbsp;" ;
}

?>


