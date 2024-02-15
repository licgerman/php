<HTML>
<body>
    <H2>ESTRUCTURA DE CONTROL (IF)</H2> 
    <HR>
    <?php
        $a=35;
        $b=30;
        # IF SIMPLE ****************************
        
        if($a>$b)
        {
            echo "El mayor es ", $a, "<br>";
        }
        # IF ELSE ****************************
        echo "<HR>RESULTADO DEL IF ELSE<br>";
        if($a>=$b)
        {
            echo "El mayor es A: ", $a, "<br>";
        }
        else
        {
            echo "El mayor es B: ", $b, "<br>";
        }
        # IF ELSE IF *************************
        $estacion="verano";
        if($estacion=="invierno")
        {
            echo "Invierno, del 21 de diciembre al 20 de marzo<br>";
        }
        elseif($estacion=="primavera")
        {
            echo "Primavera, del 21 de marzo al 20 de junio<br>";
        }
        elseif($estacion=="verano")
        {
            echo "Verano, del 21 de junio al 20 de septiembre<br>";
        }
        elseif($estacion=="otoño")
        {
            echo "Otoño, del 21 de septiembre al 20 de diciembre<br>";
        }


    ?>
</body>
</HTML>
