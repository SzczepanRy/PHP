
<?php
 
 
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operation = $_GET["operation"];
 
if($operation == "pl"){
echo( $num1 + $num2) ;
}else
if($operation == "-"){
echo( $num1 - $num2) ;
}else

if($operation == "/"){
echo( $num1 / $num2) ;
}else

if($operation == "*"){
echo( $num1 * $num2) ;
}
 
 ?>
