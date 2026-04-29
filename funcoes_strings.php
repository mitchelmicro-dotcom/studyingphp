<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php

            $texto = "Curso completo de PHP";            
            //string to lower 
            echo $texto . "<br>";
            echo strtolower($texto);

            echo'<hr />';

            //string to upper
            echo $texto . "<br>";
            echo strtoupper($texto);

            echo'<hr />';

            //upper case first
            echo $texto . "<br>";
            echo ucfirst($texto);

            echo'<hr />';

            //string length
            echo $texto . "<br>";
            echo strlen($texto);

            echo'<hr />';

            //string replace
            echo $texto . "<br>";
            echo str_replace('PHP', 'Python', $texto);

            echo'<hr />';

            //string replace exemplo muito utilizado para corrigir erros de digitação, como por exemplo de frações onde o dev pode digitar (.) que é o formato americano, e na impressão  utilizar virgula (,), que é o formato utilizado para o padrão brasileiro.
            // Exemplo a baixo, dentro do banco de dados você teve que utiliar o ponto (.) mas na impressão você usar a vírgula (,).
            echo $texto . "<br>";
            echo str_replace('.', ',', '22.20');

            echo'<hr />';

            //string replace
            echo $texto . "<br>";
            // "Curso completo de PHP"
            //0,1,2,3,4,5,6,7 ...20
            echo substr($texto, 0, 14) . '...';

            

        ?>

    </body>

</hml>
