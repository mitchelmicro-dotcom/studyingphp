<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php

            //$lista_coisas = array("abacaxi", "laranja", "manga", "joão", "maria", "josé");
            $lista_coisas = [];

            $lista_coisas['frutas'] = array(1 => 'abacaxi', 2 => 'laranja', 3 => 'manga');
            $lista_coisas['pessoas'] = array(1 => 'joão', 2 => 'maria', 3 => 'josé');

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            echo'<hr>';

            echo '<pre>';
           echo $lista_coisas['pessoas'][3];
            echo '</pre>';


        ?>
        
		
    </body>

</hml>
