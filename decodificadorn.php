<!DOCTYPE html>
<html>
<head>
        <title>i v a n j t m | 𝚍𝚎𝚌𝚘𝚍𝚒𝚏𝚒𝚌𝚊𝚍𝚘𝚛</title>
        <link rel="stylesheet" type="text/css" href="ivan.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="decodificador.css">
        <link rel="icon" href="icono.png" type="image/x-icon">
</head>
<body class="decodificador">
   <div class="barra">
        <img class="iconob" src="icono.png">
        <a class="a" href="/indexn.html">Inicio</a>
        <a class="b" href="/fotosn.html">Fotos</a>
        <a class="c" href="/gifsn.html">Gifs</a>
        <a class="d" href="/videosn.html">Videos</a>
        <a class="e" href="/redesn.html">Redes</a>
        <a class="f" href="/decodificadorn.php" class="active">Decodificador</a>
        <a class="g" href="/negativosn.html">Negativos</a>
        <a class="z" href="/decodificador.html">+++</a>
    
   </div>


    <br>
    <br>
  
    <p>Introduzca el texto que desea encriptar o desencriptar y de click en la opcion deseada.</p>
    <form method="post" action="decodificadorpro.php">
  	<input type="text" size="25" name="texto" id="texto" >
    <button type="submit" onclick="encriptar()">Encriptar</button>
    <button type="submit" onclick="desencriptar()">Desencriptar</button>
</form>

    <br><br>
    
    <?php

    $en = 0;
    $de = 0;
    $palabrac = 0;
    $palabrad = 0;

    function encriptar ()
    {

        $palabrac = $_POST['texto'];
        $en = 1;


    	$palabrac = str_replace("a", "110", $palabrac);
    	$palabrac = str_replace("b", "120", $palabrac);
    	$palabrac = str_replace("c", "130", $palabrac);
    	$palabrac = str_replace("d","140", $palabrac);
    	$palabrac = str_replace("e","150", $palabrac);
    	$palabrac = str_replace("f","160", $palabrac);
    	$palabrac = str_replace("g","170", $palabrac);
    	$palabrac = str_replace("h","180", $palabrac);
    	$palabrac = str_replace("i","210", $palabrac);
        $palabrac = str_replace("j","220", $palabrac);
    	$palabrac = str_replace("k","230", $palabrac);
        $palabrac = str_replace("l","240", $palabrac);
        $palabrac = str_replace("m","250", $palabrac);
        $palabrac = str_replace("n","260", $palabrac);
    	$palabrac = str_replace("ñ","270", $palabrac);
        $palabrac = str_replace("o","280", $palabrac);
        $palabrac = str_replace("p","310", $palabrac);
        $palabrac = str_replace("q","320", $palabrac);
        $palabrac = str_replace("s","330", $palabrac);
        $palabrac = str_replace("r","340", $palabrac);
        $palabrac = str_replace("t","350", $palabrac);
        $palabrac = str_replace("u","360", $palabrac);
        $palabrac = str_replace("v","370", $palabrac);
    	$palabrac = str_replace("w","380", $palabrac);
        $palabrac = str_replace("x","410", $palabrac);
        $palabrac = str_replace("y","420", $palabrac);
        $palabrac = str_replace("z","430", $palabrac);
        $palabrac = str_replace(" ","9", $palabrac);

    	return $palabrac;
    	nose();

    }


        function desencriptar ()
    {

        $palabrad = $_POST['texto'];
        $de = 2;


    	$palabrad = str_replace("9"," ", $palabrad);
    	$palabrad = str_replace("430","z", $palabrad);
    	$palabrad = str_replace("420","y", $palabrad);
    	$palabrad = str_replace("410","x", $palabrad);
    	$palabrad = str_replace("380","w", $palabrad);
    	$palabrad = str_replace("370","v", $palabrad);
    	$palabrad = str_replace("360","u", $palabrad);
    	$palabrad = str_replace("350","t", $palabrad);
    	$palabrad = str_replace("340","s", $palabrad);
        $palabrad = str_replace("330","r", $palabrad);
    	$palabrad = str_replace("320","q", $palabrad);
        $palabrad = str_replace("310","p", $palabrad);
        $palabrad = str_replace("280","o", $palabrad);
        $palabrad = str_replace("270","ñ", $palabrad);
    	$palabrad = str_replace("260","n", $palabrad);
        $palabrad = str_replace("250","m", $palabrad);
        $palabrad = str_replace("240","l", $palabrad);
        $palabrad = str_replace("230","k", $palabrad);
        $palabrad = str_replace("220","j", $palabrad);
        $palabrad = str_replace("210","i", $palabrad);
        $palabrad = str_replace("180","h", $palabrad);
        $palabrad = str_replace("170","g", $palabrad);
        $palabrad = str_replace("160","f", $palabrad);
    	$palabrad = str_replace("150","e", $palabrad);
        $palabrad = str_replace("140","d", $palabrad);
        $palabrad = str_replace("130","c", $palabrad);
        $palabrad = str_replace("120","b", $palabrad);
        $palabrad = str_replace("110","a", $palabrad);

    	return $palabrad;
    	nose();

    }



    function nose()
    {

    	if ($en > $de)
    	{
    		 $nose = $palabrad;
    	}
    	else
    	{
    		 $nose = $palabrac;
    	}

    	echo $nose;

    }

    ?>


   <div class="resulta">
		<p>Resultado:</p>
	    <input type="text" id="caja" name="resultado" value = "<?php echo nose(); ?>" >
   </div>




</body>
</html>