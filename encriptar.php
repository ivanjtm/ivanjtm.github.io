    <?php

    function encriptar ()
    {

        $palabrac = 'hola';

    	$palabrac = str_replace("a", "110", $palabrac);
    	$palabrac = str_replace("b", "120", $palabrac);
    	$palabrac = str_replace("c", "130", $palabrac);
    	$palabrac = str_replace("d","140", $palabrac);
    	$palabrac = str_replace("e","150", $palabrac);
    	$palabrac = str_replace("f","160", $palabrac);
    	$palabrac = str_replace("g","170", $palabrac);
    	$palabrac = str_replace("h","180", $palabrac);
    	$palabrac = str_replace("i","190", $palabrac);
        $palabrac = str_replace("j","210", $palabrac);
    	$palabrac = str_replace("k","220", $palabrac);
        $palabrac = str_replace("l","230", $palabrac);
        $palabrac = str_replace("m","240", $palabrac);
        $palabrac = str_replace("n","250", $palabrac);
    	$palabrac = str_replace("ñ","260", $palabrac);
        $palabrac = str_replace("o","270", $palabrac);
        $palabrac = str_replace("p","280", $palabrac);
        $palabrac = str_replace("q","310", $palabrac);
        $palabrac = str_replace("s","320", $palabrac);
        $palabrac = str_replace("r","330", $palabrac);
        $palabrac = str_replace("t","340", $palabrac);
        $palabrac = str_replace("u","350", $palabrac);
        $palabrac = str_replace("v","360", $palabrac);
    	$palabrac = str_replace("w","370", $palabrac);
        $palabrac = str_replace("x","380", $palabrac);
        $palabrac = str_replace("y","410", $palabrac);
        $palabrac = str_replace("z","420", $palabrac);
        $palabrac = str_replace(" ","430", $palabrac);

    	echo $palabrac;

    }

encriptar();

    ?>

