<?php
if(isset($_POST['login'],$_POST['pass']))
{
	if($_POST['login']=='admin'&&$_POST['pass']=='admin')
	{
		session_start();
		$_SESSION['login']=$_POST['login'];
		header("Location: glowna.php");
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