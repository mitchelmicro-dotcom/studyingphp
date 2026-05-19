<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php

            $nome = 'Michel';
            $idade = 36;
            $cor_preferida = 'preta';
            $atividade_preferida = 'jogar video games';

            //concatenacao operador de concatenação é o ponto (.)
            echo 'Olá, ' . $nome . ', vi que sua cor preferida é ' . $cor_preferida . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida; //imprime na tela
            
            //aspas duplas permitem a interpolação de variáveis, ou seja, o PHP irá interpretar o conteúdo da string e substituir as variáveis pelos seus valores
            echo '<br/>';
            echo "Olá, $nome, vi que sua cor preferida é $cor_preferida, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida"; //imprime na tela

            
        ?>

"
        
    </body>

</hml>
