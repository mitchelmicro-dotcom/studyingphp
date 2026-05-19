<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

        <?php
            //sequenciais (numéricas)

            // $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');

            // $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];

            // $lista_frutas[] = 'Laranja'; //adiciona um novo elemento no final do array

            // echo '<pre>';
            //     var_dump($lista_frutas);
            // echo '<pre>';
            // echo '<hr />';
            // echo '<pre>';
            //     print_r($lista_frutas);
            // echo '<pre>';    


            // echo $lista_frutas[4]; //Banana
            // echo '<br />';

            

            //associativas (chave => valor)
            
            $lista_frutas = [
                                    'a' => 'Banana', 
                                    'b' => 'Maçã', 
                                    'c' => 'Morango', 
                                    'd' => 'Uva', 
                                    'e' => 'Abacaxi'];

            $lista_frutas['f'] = 'Laranja'; //adiciona um novo elemento no final do array                        

            echo '<pre>';
            var_dump($lista_frutas);
            echo '<pre>';

            $lista_frutas['f'] = 'Laranja'; //adiciona um novo elemento no final do array
            
            echo $lista_frutas['c']; //Morango


        ?>


        
		
    </body>

</hml>
