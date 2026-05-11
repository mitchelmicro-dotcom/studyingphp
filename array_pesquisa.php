<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            //in_array() - true ou false para a existência de um valor em um array
            //array_search() - retorna a chave do valor encontrado ou false caso não exista

            $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];

            // echo '<pre>';
            // print_r($lista_frutas);
            // echo '</pre>';

            //$existe = in_array('Morango', $lista_frutas);
            //true - > texto '1'
            //false -> texto vazio ''

            // $existe = array_search('Abacate', $lista_frutas); //retorna a chave do valor encontrado ou false caso não exista
            //null 

            // if($existe != null){ //true / false
            //     echo 'A fruta existe no array';
            // } else {
            //     echo 'A fruta não existe no array';
            // }

            $lista_coisas = [
                'frutas' => $lista_frutas,
                'pessoas' => ['João','Maria']
            ];

            echo '<pre>';
            print_r($lista_coisas);
            echo '</pre>';

            echo in_array('João', $lista_coisas['pessoas']); //true

        ?>


        
		
    </body>

</hml>
