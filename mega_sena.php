<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            
			$numero_aleatorio = rand(1, 60);
            echo "Número aleatório: $numero_aleatorio <br>";
            $numeros_sorteados = array();

            while (count($numeros_sorteados) < 6) {
                $numero_aleatorio = rand(1, 60);
                if (!in_array($numero_aleatorio, $numeros_sorteados)) {
                    $numeros_sorteados[] = $numero_aleatorio;

                    echo "<pre>";
                    print_r($numeros_sorteados);
                    echo "</pre>";
                }
            }
            
        ?>


        
		
    </body>

</html>
