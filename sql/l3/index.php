<?php

mysqli_report(MYSQLI_REPORT_OFF);
$conn=mysqli_connect("localhost","root","", "srydz");
if(!$conn) die("brak połączenia");
$qu = mysqli_query($conn,"SELECT liczba FROM cwiczonko") or die("błąd w select");

$row = mysqli_fetch_array($qu);
$liczba = $row["liczba"];
$liczba = $liczba+1;
echo($liczba);
mysqli_query($conn,"UPDATE cwiczonko SET liczba='$liczba'");

mysqli_close($conn);


?>