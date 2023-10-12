<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $tab = [];

    for($i=0;$i<30;$i++){
        $tab[$i]= rand(-20,20);
        echo $tab[$i] ,"<br>";
    };

     echo "<hr>";

    $count = array_count_values($tab);
    
    $repe = array_diff($count, [1]); /
    echo  implode(" " , array_keys($repe));
    ?>
    
</body>
</html>