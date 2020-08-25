<?php




$db="id7268322_quotes";
$user="id7268322_ivanjtm";
$server="localhost";
$pass="ivanjavier" ;      

$conecta=mysql_connect($server,$user,$pass);
                   mysql_select_db($db,$conecta);


 $quote =$_POST['quote'];
 $name = $_POST['name'];


  $insertar = "INSERT INTO write VALUES ('$quote', '$name')";


  $sql = mysql_query($insertar);

  if (!$sql) {
    echo "Algo salio mal";
  }else{
    echo "Datos guardados correctamente";
  }
  

  mysql_close($conectar);
  echo "Registro  Exitoso";

 ?>

