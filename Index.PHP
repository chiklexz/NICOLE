<html lang="es">
<head>
<meta charset="utf-8">
<title>Facebook</title>
 
 <link rel="stylesheet" href="style.css">

</head>
<body>
	
	<header id="main-header">
		
		<a id="logo-header">
			<span class="site-name">facebook</span>
<form name="login" method="post" action="login.php">	
</a> 
 

<div id="box1">
E-mail 
<br><input type="text" name="usuario" id="usuario" />
</div>
   
<div id="box2">
Password 
<br><input type="password" name="clave" id="clave" />
</div>

<div id="box3">
<br><input type="submit" name="Submit" value="Iniciar Sesion" />
<div/>


 </form>
	</header>

 
	<form action="validar.php" method = "post">
	<section id="main-content">
	
	<h2>REGISTRO</h2> 
  
   E-mail<input name="nombre" type="text" id="nombre" />
<br>
   Nombre <input name="apellidos" type="text" id="apellidos" />
<br>

   Contraseña <input name="pass" type="password" id="pass" />
<br>
   Confirmar contraseña <input name="cpass" type="password" id="cpass" />
<br>

<br><input type="submit" name="Submit" value="REGISTRAR" />
	
	</section> 	
</form>
 
	
</body>
</html>