<?php 
//declaramos como variables a los campos de texto del formulario.

$nombre=$_POST["nombre"];
$apellidos = $_POST["apellidos"];
$password = $_POST["pass"];
$cpassword = $_POST["cpass"];

$contra= md5 ($cpassword);

if($nombre && $apellidos && $password){

if ($password == $cpassword){

//Conexion con la base de datos.
$conexion=@mysql_connect("localhost","root","");

if (!($conexion)){
echo 'No se puede realizar la conexion con la base de datos.';
}

//Seleccion de la base de datos.
mysql_select_db("face");


//insertar datos

$query="INSERT INTO usuarios (nombre, apellidos, password) VALUES ('$nombre', '$apellidos', '$contra')";
$rs=mysql_query($query); 
//--------------------------------

if ($rs) {
			echo "Has sido registrado";
		}
		else {
			echo "error en el registro";
		}

//-------------------------------
}//ifpass

else { echo "LA CONTRASEÑA NO ES LA MISMA";}

}//ifcompletar

else {echo "DEBES ACOMPLETAR TODOS LOS DATOS";}

?>