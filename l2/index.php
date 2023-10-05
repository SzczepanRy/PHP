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


    ?>
</body>
</html>


