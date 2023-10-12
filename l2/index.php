<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="im">
        <input type="text" name="nazw">
        <button type="submit">submit</button>
    </form>

    <?php


    // $text = $_POST["text"];

    // echo (strlen($text));
    // echo( str_replace("e","a",$text));
    // echo (strpos($text,"a"));
    // echo (strrev($text));
    if(isset( $_GET["im"])&&  $_GET["nazw"]){
    $imie = $_GET["im"];
    $nazwisko = $_GET["nazw"];

    echo "<br>";
    echo "inic : ", substr($imie,1,1),substr($nazwisko,1,1);
    if(substr($imie , strlen($imie)-1,1) == "a"){
        echo "<br>kobieta";
    }else{
        echo "<br>męszczyzna";
    }}

    $pesel = $_GET["pesel"];
    if(strlen($pesel) != 11){
        echo "bad pesel";
    }else{
        switch($pesel[2])
        {
            case "0":
            case "1":
                $rok="19"; break;
            case "2":
            case "3":
                $rok="20"; break;

            case "4":
            case "5":
                $rok="21"; break;

        }
        echo $rok;
    }
    $te = trim($_GET["te"]);
    // for($i=0;$i,strlen($te);i++){
    //     echo chr(ord($te[$i])+1);
    // }
$te = strtoupper($te);
    $t1 ="KONIECMATURY";
    $t2 ="OKINCEAMUTYR";
    for($i=0;$i<strlen($te);$i++){
        $p =  strpos($t1,$te[$i]);
        // if($p === false){
        //     echo $te[$i]
        // }
        // else{
            echo $t2[$p];
        // }
    }
    ?>
</body>
</html>


