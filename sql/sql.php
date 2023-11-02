<?php
mysqli_report(MYSQLI_REPORT_OFF);
$conn=mysqli_connect("localhost","root","", "srydz");
if(!$conn) die("brak połączenia");
if(isset($_GET['akcja']))
{
    switch($_GET['akcja'])
    {
        case "usun":
            if(isset($_GET["id"])){
                $id=$_GET["id"];
                mysqli_query($conn,"DELETE FROM tablica WHERE id='$id'")  or die("błąd usuwania");
            }
    }
}
if(isset($_GET["imie"], $_GET["nazwisko"]))
{
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    mysqli_query($conn, "INSERT INTO tablica(imie, nazwisko) VALUES('$imie','$nazwisko')") or die("insert nie dziala");
}
$result=mysqli_query($conn,"SELECT id,imie,nazwisko FROM tablica") or die("błąd w select");
if(mysqli_num_rows($result)>0)
{
    echo "<table border=1> <tr> <th> imie </th> <th> nazwisko </th> <th> usuwanie </th> <th> edycja </th> </tr>";
    while($row=mysqli_fetch_array($result))
    {
        echo "<form> <tr> <td> <input type='hidden' name='id' value='",$row['id'],"'>",
        $row['imie'], '</td> <td>', $row["nazwisko"],"</td> 
        <td> <input type='submit' name='akcja' value='usun'> </td> 
        <td> <input type='submit' name='akcja' value='edytuj'> </td>
        </tr> </form>";
    }
    echo "</table>";
}
else
    echo "brak wyników";
mysqli_close($conn);
?>

<br>
<form>
    imie: <input type="text" name="imie"> <br>
    nazwisko: <input type="text" name="nazwisko"> <br>
    <input type="submit" value="dodaj" name='akcja'>
</form>