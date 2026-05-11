<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            // false (true/false) - tipo de dado booleano, representa um valor lógico
            // null - representa a ausência de valor, ou seja, uma variável sem valor
            // empty - função que verifica se uma variável é vazia, ou seja, se ela

            $funcionario1 = null;
            $funcionario2 = '';
            $funcionario3 = false;

            //valores null
            if(is_null($funcionario1)){
                echo 'O funcionário 1 é null';
            } else {
                echo 'O funcionário 1 não é null';
            }

            echo '<br />';

            if(is_null($funcionario2)){
                echo 'O funcionário 2 é null';
            } else {
                echo 'O funcionário 2 não é null';
            }

            echo '<br />';

            if(is_null($funcionario3)){
                echo 'O funcionário 3 é null';
            } else {
                echo 'O funcionário 3 não é null';
            }

            echo '<hr />';

            if(empty($funcionario1)){
                echo 'Sim , a variável esta vazia';
            } else {
                echo 'Não , a variável não esta vazia';
            }

            echo '<br />';

            if(empty($funcionario2)){
                echo 'Sim , a variável esta vazia';
            } else {
                echo 'Não , a variável não esta vazia';
            }

            echo '<br />';

            if(empty($funcionario3)){
                echo 'Sim , a variável esta vazia';
            } else {
                echo 'Não , a variável não esta vazia';
            }



        ?>


        
		
    </body>

</hml>