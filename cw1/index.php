<?php

$num1 = $_POST["first"];
$num2 = $_POST["second"];

for($i =0 ; $i<=$num1;$i++){
    for($y=0 ; $y<=$i; $y++){
        echo"*";
    }
    echo "<br>";

}
$tab;
for($x=0;$x<=$num2;$x++){
    $tab[$x]="_";
}
for($t=0;$t<=$num2;$t++){
    for($z=$num2;$z>= $num2-$t;$z--){
       
        $tab[$z]="*";
    }
    for($s=0;$s<=$num2;$s++){
        echo $tab[$s];
    }
    echo "<br>";
}


?>