<?php
$id="";
$imie ="";
$nazwisko ="";
$przycisk = "dodaj";

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
            break;
        case "dodaj":
            if(isset($_GET["imie"], $_GET["nazwisko"]))
            {
                $imie = $_GET['imie'];
                $nazwisko = $_GET['nazwisko'];
            
                mysqli_query($conn, "INSERT INTO tablica(imie, nazwisko) VALUES('$imie','$nazwisko')") or die("insert nie dziala");
                $imie ="";
                $nazwisko ="";
                $przycisk = "dodaj";
            }
            break;

        case "edytuj":
            if(isset($_GET["id"]))
            {
               
                $id=$_GET["id"];
              
                $rs = mysqli_query($conn, "SELECT imie,nazwisko FROM tablica WHERE id=$id") or die("insert nie dziala");
                $row = mysqli_fetch_array($rs);
                $imie = $row['imie'];
                $nazwisko = $row['nazwisko'];
                $przycisk = "zapisz";
            }
            break;

        case "zapisz":
            if(isset($_GET["imie"], $_GET["nazwisko"],$_GET["id"]))
            {
                $id=$_GET["id"];
                $imie = $_GET['imie'];
                $nazwisko = $_GET['nazwisko'];
            
                mysqli_query($conn, "UPDATE tablica SET imie='$imie',nazwisko='$nazwisko' WHERE id=$id") or die(" nie dziala");
              
                $imie ="";
                $nazwisko ="";
                $przycisk = "dodaj";
            }
            break;

            
    }
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

echo"
<br>
<form>
    imie: <input type='text' name='imie' value='$imie'> <br>
    nazwisko: <input type='text' name='nazwisko' value='$nazwisko'> <br>
    
    <input type='hidden' value='$id' name='id'>
    <input type='submit' value='$przycisk' name='akcja'>
</form>"
?>