<Html>
<HEAD><title>Pagina </title></HEAD>
<BODY>
<?php
$log =false;
if (isset($_POST["user"]) && isset($_POST["pass"])){
	if($_POST["user]== "root" && $_POST["pass"]="root"){
	$user= $_POST["user"];
	$log=true;
	}
}
if($log ==true){
	echo"bienvenido!!";
}
else{
	<FROM METHOD="POST" ACTION=127.0.0.1/pagina.php">
	<LABEL>usario:</LABEL><INPUT TYPE="TEXT" NAME="user"/><BR>
	<LABEL>Contraseña:</LABEL><INPUT TYPE="password" NAME="pass"/><BR>
	<BUTTON TYPE="submit">Enviar</BUTTON>
	</FORM>

<?php
}
?>
	<H1>HI</H1>
</BODY>
</HTML>
