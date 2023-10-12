<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:grid;
            grid-template-columns: auto auto auto auto auto auto auto auto;
            
        }
        div{
            height:"20px";
            width:"10px";
        }
    </style>
</head>
<body>
    <?php
        for ($i=1; $i <= 5; $i++) { 
            for ($y=1; $y <= 8; $y++) { 
              //  echo $i*$y;
              if($i == 1 || $y == 1 ){
                echo "<div>","<b>",$i*$y,"</b>","</div>" ;
              }else{
                echo "<div>",$i*$y,"</div>" ;
              }
               
            }
           
        }
    ?>
</body>
</html>