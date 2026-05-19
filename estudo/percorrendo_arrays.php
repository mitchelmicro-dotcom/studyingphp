<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            $registros = array(
                array ('titulo' => 'Título noticia 1', 'conteudo' => 'Conteúdo notícia 1...'),
                array ('titulo' => 'Título noticia 2', 'conteudo' => 'Conteúdo notícia 2...'),
                array ('titulo' => 'Título noticia 3', 'conteudo' => 'Conteúdo notícia 3...'),
                array ('titulo' => 'Título noticia 4', 'conteudo' => 'Conteúdo notícia 4...')
                
            );


            echo '<pre>';
            print_r($registros);
            echo '</pre>';
            $idx = 0;

            //count() é uma função que retorna a quantidade de elementos de um array
            echo ' o array possui: ' . count($registros) . ' registros. <br />';
            echo '<br />';            
            
            // while($idx < count($registros)){

            //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            //     echo '<hr />';
            //     $idx++;

            // }

            // do {

            //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
            //     echo '<hr />';
            //     $idx++;

            // } while($idx < count($registros));

            for($idx = 0; $idx < count($registros); $idx++){

                echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
                echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
                echo '<hr />';

            }
            
            
            
        ?>


        
		
    </body>

</html>
