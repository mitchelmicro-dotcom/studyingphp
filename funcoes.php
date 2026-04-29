<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            
            //void
            function exibirBoasVindas() {
                echo "Bem-vindo ao curso de PHP!<br>";
            }
            exibirBoasVindas();
            
            //return
            function calcularAreaTerreno($largura, $comprimento) {
                $area = $largura * $comprimento;
                return $area;
            }
            $resultado = calcularAreaTerreno(5, 24);
            echo $resultado . " m²<br>";

            $resultado = calcularAreaTerreno(6, 25);
            echo $resultado . " m²<br>";

            
        ?>
		
    </body>

</hml>
