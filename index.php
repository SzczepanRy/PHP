<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
    text 
    <!-- <form method="GET" >
        <input type="text" name="liczba">
        <br>
        <button type="submit">submit</button>
    </form> -->
    <?php
        print("<i>italicaks</i><br>");
        echo("el1"."el2"."<br>");//konkatenacja
        echo("<img style='height:300px' src='obrazek.jpg'>");
        //coment
        //phpinfo();
        echo("<br>");

        echo(true);
        echo (false);
        //l 8 poprzedzmy 0 
        //l 16 poprzedzmy 0x 
        define("x",54678);
        echo("<br>");

        echo(x);
        echo("<br>");

        $r=10;
        echo($r);
        echo("<br>");

        echo($r==10);
        echo("<br>");
        echo($r==="10");

        $y="10";
        echo($y+10);
        echo("<br>");


        //if elseif else 
        for($i=1;$i<=10;$i++){
            if($i%2===0){
                echo "$i is div by 2 <br>";
            };
            $v = 11-$i;
            echo("$i , $v <br>");
        };

        $i =0;
        if(isset($_GET["liczba"])){
            while($i<$_GET["liczba"]){
                echo "$i ". (11-$i)."<br>";
                $i++;
            }
    
    
        }



    for($i=1;$i<=10;$i++){
        $tab[$i]= rand(1,100);
        echo $tab[$i] ," ";
    };
    sort($tab);
    echo"sorted";
    for($i=0;$i<=9;$i++){
        if($tab[$i]>50){
      //  $tab[$i]= rand(1,100);
        echo $tab[$i] ," ";
        }
    };
    // $tab[0]="pierwszy";
     $tabb = array(
         "perwszy"=>"jedent",
         "perwszy="=>"jeent",
         "perwsy"=>"jedet",
     );
     echo ($tabb["pirewszy"]);



     function fun($a){
         echo "<br>";
         for($i=0;$i<$a;$i++){
             echo "*";
         }
     }
     fun(10)

     function pp($a,$b){
         echo $a*$b

        };
        $a = $_GET["a"];
        $b = $_GET["b"];

        //gdy strlen(tekst) nie stosujemu polskich
        //strpos(text,ciąg) jesli jest = index  / jesli nie to false
        
        




    ?>
</body>
</html>