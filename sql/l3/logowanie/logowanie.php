<?php


mysqli_report(MYSQLI_REPORT_OFF);
$conn=mysqli_connect("localhost","root","", "srydz");
if(!$conn) die("brak połączenia");


if(isset($_POST['login'],$_POST['pass']))
{
	      
	$rs = mysqli_query($conn, "SELECT login,password FROM loginy WHERE id=1") or die("insert nie dziala");
	$row = mysqli_fetch_array($rs);
	
	echo(sha1($_POST['pass']));
	echo("<br>");
	echo($row["password"]);

	if($_POST['login']==$row["login"]&&sha1($_POST['pass'])==$row["password"])
	{
		session_start();
		$_SESSION['login']=$_POST['login'];
		header("Location: glowna.php");
		mysqli_close($conn);
		exit();
	}
	else
		$error = "<B>B��dny login lub has�o!</B><BR>";
}
else
	$error = false;
?>
<HTML>
<HEAD>
  <TITLE>Logowanie</TITLE>
</HEAD>
<BODY>
<?php
  echo $error ? $error : "";
?>
  <B>Podaj login i&nbsp;has�o</B>
  <FORM method="POST">
    Login: <INPUT type="text" name="login"><BR>
    Has�o: <INPUT type="password" name="pass"><BR>
    <INPUT type="submit" value="Zaloguj si�">
  </FORM>
</BODY>
</HTML> 