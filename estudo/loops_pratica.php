<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            
			$funcionarios = array(
                array('nome'  => 'João', 'salario' => 2000, 'data_nascimento' => '1990-05-15'), 
                array('nome'  => 'Maria', 'salario' => 2500), 
                array('nome'  => 'Pedro', 'salario' => 3000), 
                array('nome'  => 'Ana', 'salario' => 2800, 'data_nascimento' => '1985-10-20'), 
                array('nome'  => 'Carlos', 'salario' => 3200)
                );

            echo '<pre>';
            print_r($funcionarios);
            echo '</pre>';

            foreach ($funcionarios as $idx => $funcionario) {
                foreach ($funcionario as $chave => $valor) {
                    echo "Funcionário: $idx - $chave - $valor <br>";
                }
                echo '<hr>';
            }
            
        ?>


        
		
    </body>

</html>
