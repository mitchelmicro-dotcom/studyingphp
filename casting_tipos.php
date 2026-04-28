<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php

			//gettype() - Retorna o tipo da variável

            $valor = 'true';
			// $valor2 = (double) $valor; //float, double, real
			// $valor2 = (string) $valor;
			// $valor2 = (int) $valor; //integer
			// $valor2 = (string) $valor;

			//

			// $valor2 = (int) $valor; 
			$valor2 = (string) $valor;
			$valor3 = (int) $valor;
			
            echo $valor. ' ' . gettype($valor); 
			echo '<br>';
            echo $valor2. ' ' . gettype($valor2);
			echo '<br>';
			echo $valor3. ' ' . gettype($valor3);
        ?>
		
    </body>

</hml>
