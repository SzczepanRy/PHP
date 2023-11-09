<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="get">
        <input type="text" name='text'>
        <button type="submt">submit</button>
    </form>
    <?php
        $text = trim($_GET["text"]);
       $text = $text . "  ";
       $indexes=[];
        $arr =[];
        for ($i=0; $i <strlen($text)-1; $i++) { 
       
            array_push($arr, substr($text,$i,1));
        

        }
        $temp =0;
        $lol =[];
        $u = 0;
        for ($y=0; $y<strlen($text)-1 ; $y++) { 
            
           
            if($arr[$y] == " "){
                $u++;
             
                array_push($lol, trim(substr($text,$temp,$y -$temp)));
                $temp = $y+1;
            }
            
        }
   

        for ($t=0; $t < $u ; $t++){ 
            if(strlen($lol[$t])%2 == 0 ){
                 echo strrev($lol[$t]),"<br>" ;
            }else{
                  echo $lol[$t],"<br>";
            }
         
        }
    ?>
    
</body>
</html>