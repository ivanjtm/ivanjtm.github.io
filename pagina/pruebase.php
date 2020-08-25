<?php
  //Cambiar el nombre de la base de datos, usuario y clave
  $pdo = new PDO('mysql:host=localhost;dbname=id7268322_quotes', 'id7268322_ivanjtm', 'ivanjavier');

  // (1) Definir SQL
  $comando = $pdo->prepare("insert into write (quote, name) values(:quote, :name)");

  // (2) Asignar valores a los parametros
  $quote = 'Activo';
  $name = 'demo@gmail.com';


  $comando->bindParam(':quote', $quote);
  $comando->bindParam(':name', $name);

  // (3) Ejecutar SQL
  $comando->execute();
?>
